<?php
class BaseController {

    private $command;
    private $db;

    public function __construct($command) {
        $this->command = $command;
        $this->db = new Database();
    }

    public function run() {
        switch($this->command) {
            case "signup":
                $this->signup();
                break;
            case "login":
                $this->login();
                break;
            case "logout":
                $this->destroySession();
                $this->home();
                break;
            case "allCourses":
                $this->allCourses();
                break;
            case "addCourseFromAllCourses":
                $this->addCourseFromAllCourses();
                //$this->allCourses();
                break;
            case "removeCourseFromProfile":
                $this->removeCourseFromProfile();
                break;
            case "profile":
                $this->profile();
                break;
            case "addFriend":
                $this->addFriend();
                break;
            case "addNewFriend":
                $this->addNewFriend();
                break;
            case "pendingRequests":
                $this->pendingRequests();
                break;
            case "removePendingRequest":
                $this->removePendingRequest();
                break;
            case "incomingRequests":
                $this->incomingRequests();
                break;
            case "acceptRequest":
                $this->acceptRequest();
                break;
            case "denyRequest":
                $this->denyRequest();
                break;
            case "friendList":
                $this->friendList();
                break;
            case "removeFriend":
                $this->removeFriend();
                break;
            case "pageNotFound":
                $this->pageNotFound();
                break;
            case "home":
            default:
                $this->home();
                break;
        }
    }

    private function home(){
        include "templates/home.php";
    }

    private function signup(){

        // check nonempty set inputs
        if (isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["year"]) && !empty($_POST["year"])
        && isset($_POST["password"]) && !empty($_POST["password"]) && isset($_POST["major"]) && !empty($_POST["major"])
        && isset($_POST["minor"]) && !empty($_POST["minor"]) && isset($_POST["studentId"]) && !empty($_POST["studentId"])){
            // check if studentID (our PK) already exists in database
            $data = $this->db->query("SELECT * FROM student WHERE studentId = ? ", "s", $_POST["studentId"]);
            if ($data === false) {
                $error_msg = "Error checking for user";
            } else if (!empty($data)) { // if something got returned and is not empty
                $error_msg = "Account with inputted studentId already exists";
                goto end;
            }

            // name validation: only letters
            $name = $_POST["name"];
            $name_regex = "/^[a-zA-Z\s]+$/";
            if (!preg_match($name_regex,$name) || strlen($name) < 3) {
                $error_msg = "Username: Only letters and white space allowed. Length at least 3 characters.";
                goto end;
            }
            
            // password length at least 8, contains letters and numbers
            $password_regex = "/^[A-Za-z0-9 ]{8,100}$/";

            if (strlen($_POST["password"]) < 8){
                $error_msg = "Password should be at least 8 characters.";
                goto end;
            } 
            else if (!preg_match($password_regex,$_POST["password"])) {
                $error_msg = "Password: Only letters,numbers, white space allowed.";
                goto end;
            }

            // is there a regex for studentID? I'm just going to assume it has to be length of 6
            if (strlen($_POST["studentId"]) != 6){
                $error_msg = "Invalid StudentID";
                goto end;
            }
            // Every input should be good, so now add this student into the database start their session
            $insert = $this->db->query("insert into student (name, schoolYear, major, minor, studentId, password) values (?, ?, ?, ?, ?, ?);", 
            "sissss", $_POST["name"],$_POST["year"],$_POST["major"],$_POST["minor"],$_POST["studentId"], password_hash($_POST["password"], PASSWORD_DEFAULT));

            if ($insert === false) {
                $error_msg = "Error inserting student";
            }

            # session_start();
            $_SESSION['studentId'] = $_POST['studentId'];   
            if (isset($_SESSION["url"])){
                $url = $_SESSION['url'];
            }
            else{
                $url = "index.php";
            }
            header("Location:".$url);
        }
        end:
        include "templates/signup.php";
    }

    private function login($e = ""){
        $error_msg = $e;
        // making sure fields are filled out
        if (isset($_POST["studentId"]) && !empty($_POST["studentId"])) {
            $data = $this->db->query("SELECT * FROM student WHERE studentId = ?", "s", $_POST["studentId"]);
            if ($data === false) {
                $error_msg = "Error checking for student";
            }
    
        // Check inputted password and email. If it's correct, start session and log in
            else if (!empty($data)) {
                if (empty($_POST["password"]) or !isset($_POST["password"])){
                    $error_msg = "Enter in all credentials";
                }
                else{
                    if ($_POST["studentId"] == $data[0]["studentId"] && password_verify($_POST["password"], $data[0]["password"])){
                        #session_start();
                        $_SESSION['studentId'] = $_POST['studentId'];
                        if (isset($_SESSION["url"])){
                            $url = $_SESSION['url'];
                        }
                        else{
                            $url = "index.php";
                        }
                        header("Location:".$url);
                    } else {
                        $error_msg = "Wrong credentials";
                    }
                }
            }

            else{
                $error_msg = "Wrong credentials";
            }
        }
        include "templates/login.php";
    }

    private function destroySession() {   
        unset($_SESSION['studentId']);   
        session_destroy();
        session_start();
        if(isset($_SERVER['HTTP_REFERER'])) {
            header('Location: '.$_SERVER['HTTP_REFERER']);  
        } else {
            header('Location: index.php');  
        }
    }

    private function allCourses($error = "", $subj = "all", $success = ""){
        # query all the courses
        $error_msg = $error;
        $success_msg = $success;
        // echo $_GET["subject"];
        if (isset(($_GET["subject"])) && $_GET["subject"] != "all"){
            $sub = $_GET["subject"];
            $courses = $this->db->query("SELECT * FROM course WHERE subject = ? ORDER BY courseNumber","s",($_GET["subject"]));
        } else {
            if ($subj == "all"){
                $courses = $this->db->query("SELECT * FROM course ORDER BY subject, courseNumber");
            } else {
                $courses = $this->db->query("SELECT * FROM course WHERE subject = ? ORDER BY courseNumber","s",($subj));
            }
            $sub = $subj;
        }
        include "templates/allCourses.php";
        // include "templates/test.php";
    }

    private function addCourseFromAllCourses(){
        $semesterId = "12345"; # going to change
        $error_msg ="";
        # check if user is logged in. If they aren't send them to login page
        if (!isset($_SESSION["studentId"]) || empty($_SESSION["studentId"])) {
            header("Location: ?command=login");
            return;
        }

        # echo rtrim($_POST["courseId"],"/");

        # check if the courseId is set
        if (isset($_POST["courseId"]) && !empty($_POST["courseId"])) {
        $error_msg = "";
        $success_msg = "";
            # check if student has already added this course
            $data = $this->db->query("SELECT * FROM enrolled WHERE courseId = ? AND studentId = ?","ss",rtrim($_POST["courseId"],"/"), $_SESSION["studentId"]);
            
            # get the course name, number, subject, and semesterID
            $courseName = $this->db->query("SELECT courseNumber, subject, courseName, semesterId from course WHERE courseId = ?","s",rtrim($_POST["courseId"],"/"));
            # check if we have not added the course yet
            if (empty($data)){
                $insert = $this->db->query("INSERT INTO enrolled (studentId, semesterId, courseId) values (?, ?, ?);", 
                "sss", $_SESSION["studentId"], $courseName[0]["semesterId"], rtrim($_POST["courseId"],"/"));
                $success_msg =  "SUCCESS! Added: <b> " . $courseName[0]["subject"] . " " . $courseName[0]["courseNumber"] . " - " . $courseName[0]["courseName"] ." </b>to your schedule.";
            } else {
                $error_msg = "ERROR! Already added: <b>" . $courseName[0]["subject"] . " " . $courseName[0]["courseNumber"] . " - " . $courseName[0]["courseName"] ."</b>.";
            }
        } else {
            $error_msg = "Error retrieving course ID";
        }
        $this->allCourses($error_msg, rtrim($_POST["courseDept"],"/"), $success_msg);
    }

    private function profile($error = ""){
        $error_msg = $error;
        if (isset($_SESSION["studentId"]) && !empty($_SESSION["studentId"])) {
            $studentInfo = $this->db->query("SELECT * FROM student WHERE studentId = ?", "s", $_SESSION["studentId"]);
            if ($studentInfo === false) {
                $error_msg = "Error checking for student";
            }

            $studentCourses = $this->db->query("SELECT * FROM enrolled WHERE studentId= ?","s",$_SESSION["studentId"]);
            if ($studentCourses === false){
                $error_msg = "Error checking for enrolled courses";
            }

        } else {
            $this->login("Please login to view profile");
            return;
        }

        $name = $studentInfo[0]["name"];
        $schoolYear = $studentInfo[0]["schoolYear"];
        $major =  $studentInfo[0]["major"];
        $minor = $studentInfo[0]["minor"];
        $studentId = $studentInfo[0]["studentId"];

        include "templates/profile.php";
    }

    private function removeCourseFromProfile(){
        $error_msg = "";
        if (isset($_POST["studentId"]) && !empty($_POST["studentId"])){
            $delete = $this->db->query("DELETE FROM enrolled WHERE studentId = ? AND courseId = ? AND semesterId = ?","sss",
            rtrim($_POST["studentId"],"/"),rtrim($_POST["courseId"],"/"), rtrim($_POST["semesterId"],"/"));
            if ($delete === false) {
                $error_msg = "Error deleting from enrolled";
            }
            $this->profile($error_msg);
            return;
        } else {
            $this->pageNotFound();
            return;
        }
        
    }

    private function addFriend($error = "", $success = ""){
        if (!isset($_SESSION["studentId"]) || empty($_SESSION["studentId"])) {
            $this->login("Please log in to add friends");
            return;
        }   
        $error_msg = $error;
        $success_msg = $success;
        $madeASearch = false;
        $noResults = false;
        $yourself = false;
        if (isset($_POST["friendId"])){
            $idSearch = $this->db->query("SELECT name, schoolYear, studentId, major, minor FROM student WHERE studentId= ?","s",$_POST["friendId"]);
            if (empty($idSearch)){
                $noResults = true;
            } else {
                $noResults = false;
            }
            // print_r($idSearch);
            if ($_POST["friendId"] == $_SESSION["studentId"]){
                $yourself = true;
            } else {
                $yourself = false;
            }
        }

        if (isset($_POST["madeASubmit"]) && $_POST["madeASubmit"] == "true"){
            $madeASearch = true;
        } else {
            $madeASearch = false;
        }
        include "templates/addFriend.php";
    }

    private function addNewFriend(){
        $error_msg = "";
        $success_msg = "";
        
        if (isset($_POST["addFriendID"]) && !empty($_POST["addFriendID"])){
            $name = $this->db->query("SELECT name FROM student WHERE studentId= ?","s",rtrim($_POST["addFriendID"],"/"));
            $friend = $this->db->query("SELECT * FROM friends_with WHERE studentId = ? AND friendId= ?","ss",$_SESSION["studentId"],rtrim($_POST["addFriendID"],"/"));
            // check if already added
            if (!empty($friend)){
                $error_msg = "Already friends with ".rtrim($_POST["addFriendName"],"/");
            } else {
                // if not empty, check if already sent request
                $request = $this->db->query("SELECT * FROM pending_requests WHERE senderId = ? AND studentId = ?","ss",$_SESSION["studentId"],rtrim($_POST["addFriendID"],"/"));
                if (!empty($request)){
                    $error_msg = "ERROR: Already sent the request to ".$name[0]["name"];
                // finally, if eventhing valid, add it to pending requests
                } else {
                    $insert = $this->db->query("INSERT INTO pending_requests (studentId, senderId) values (?, ?);", 
                                    "ss", rtrim($_POST["addFriendID"],"/"), $_SESSION["studentId"]); // senderID will be you, studentID will be the friends ID
                    if ($insert === false) {
                        $error_msg = "Error inserting";
                    }
                    $success_msg = "Successfully send request to ". $name[0]["name"];
                }
                
            }
        } else {
            $this->pageNotFound();
            return;
        }
        $this->addFriend($error_msg, $success_msg);
        return;
    }

    private function pendingRequests($e = "", $s = ""){
        $error_msg = $e;
        $success_msg = $s;
        if (!isset($_SESSION["studentId"]) || empty($_SESSION["studentId"])) {
            $this->login("Please log in to see pending requests");
            return;
        }   
        // query pending with your ID as the senderId
        $request = $this->db->query("SELECT * FROM pending_requests WHERE senderId = ?","s",$_SESSION["studentId"]);
        include "templates/pendingRequests.php";
    }

    private function removePendingRequest(){
        $error_msg = "";
        $success_msg = "";
        if (isset($_POST["studentId"]) && isset($_POST["senderId"]) && !empty($_POST["studentId"]) && !empty($_POST["senderId"])){
            $delete = $this->db->query("DELETE FROM pending_requests WHERE studentId = ? AND senderId = ?","ss", rtrim($_POST["studentId"],"/"),rtrim($_POST["senderId"],"/"));
            if ($delete === false) {
                $error_msg = "Error deleting from enrolled";
            }
            $name = $this->db->query("SELECT * FROM student WHERE studentId = ?","s",  rtrim($_POST["studentId"],"/"));
            $success_msg = "Retracted the friend request you sent to: ".$name[0]["name"];
            $this->pendingRequests($error_msg, $success_msg);
            return;
        } else {
            $this->pageNotFound();
            return;
        }
    }

    private function incomingRequests($e = "", $s = ""){
        $error_msg = $e;
        $success_msg = $s;
        if (!isset($_SESSION["studentId"]) || empty($_SESSION["studentId"])) {
            $this->login("Please log in to see incoming requests");
            return;
        }   
        // query pending with your ID as the studentId
        $request = $this->db->query("SELECT * FROM pending_requests WHERE studentId = ?","s",$_SESSION["studentId"]);
        include "templates/incomingRequests.php";
    }


    // accept request is tricky. if a user clicks accept on a request that was retracted by the sender (the user hasn't refreshed yet)
    // then we risk having the bug where we insert a "successful" friend request despite the sender retracting it. thus, before we insert into
    // friends, we need to check if the current sender-sendee relationship exists in the pending requests table. accepting requests should also
    // remove any pending / incoming requests between the two parties both ways as well.
    private function acceptRequest(){
        $error_msg = "";
        $success_msg = "";
        // check if the current relationship exists
        $exists = $this->db->query("SELECT * FROM pending_requests WHERE studentId = ? AND senderId = ?",
                    "ss",  rtrim($_POST["studentId"],"/"), rtrim($_POST["senderId"],"/"));
        
        // if it doesn't, return with appropriate error
        if (empty($exists)){
            $error_msg = "Cannot accept request, the sender has already retracted it";
            $this->incomingRequests($error_msg);
            return;
        // otherwise, proceed add the new friendship! the issue is that this table is reflexive... studentId and friendId are both friends
        // so either ID's can be on each column, which makes it hard to do friendsList. I'm just going to add it both ways to make things easier, at the expense at 2x more rows. 
        } else {
            $insert1 = $this->db->query("INSERT INTO friends_with (studentId, friendId) VALUES (?,?)", "ss",rtrim($_POST["studentId"],"/"),rtrim($_POST["senderId"],"/"));
            $insert2 = $this->db->query("INSERT INTO friends_with (studentId, friendId) VALUES (?,?)", "ss",rtrim($_POST["senderId"],"/"),rtrim($_POST["studentId"],"/"));
            if ($insert1 === false || $insert2 === false){
                $error_msg = "Error deleting from enrolled";
            }
            $name = $this->db->query("SELECT * FROM student WHERE studentId = ?", "s", rtrim($_POST["senderId"],"/"));
            $success_msg = 'Succesfully added '. $name[0]["name"] . " as a friend!";
        }
        // now, delete from pending regardless (if the sender didn't retract and we have a valid submit to friends_with table, then we 
        // would want to delete anyway. if the sender retracted, the pending table wouldn't have the row anyway, so go ahead and delete why not
        if (isset($_POST["studentId"]) && isset($_POST["senderId"]) && !empty($_POST["studentId"]) && !empty($_POST["senderId"])){
            $delete1 = $this->db->query("DELETE FROM pending_requests WHERE studentId = ? AND senderId = ?","ss", rtrim($_POST["studentId"],"/"),rtrim($_POST["senderId"],"/"));

            // remove the other way around well: if person 1 sent a request to person 2, and person 2 accepted, person 2 should have the incoming request
            // removed, but also person 1 should have the pending request removed. BUT ALSO, if person 2 sent a request to person 1 as well, and accepted
            // the request sent by person 1 to person 2, the request person 2 sent to person 1 should be removed. msg me if this doesn't make sense
            $delete2 = $this->db->query("DELETE FROM pending_requests WHERE studentId = ? AND senderId = ?","ss", rtrim($_POST["senderId"],"/"),rtrim($_POST["studentId"],"/"));
            if ($delete1 === false || $delete2 === false) {
                $error_msg = "Error deleting from enrolled";
            }
            $this->incomingRequests($error_msg, $success_msg);
            return;
        } else {
            $this->pageNotFound();
            return;
        }
    }

    // delete request is easy. just delete it, regardless of whether or not the other person has retracted the request. end result is the same
    private function denyRequest(){
        $error_msg = "";
        if (isset($_POST["studentId"]) && isset($_POST["senderId"]) && !empty($_POST["studentId"]) && !empty($_POST["senderId"])){
            $delete = $this->db->query("DELETE FROM pending_requests WHERE studentId = ? AND senderId = ?","ss", rtrim($_POST["studentId"],"/"),rtrim($_POST["senderId"],"/"));
            if ($delete === false) {
                $error_msg = "Error deleting from enrolled";
            }
            $name = $this->db->query("SELECT * FROM student WHERE studentId = ?","s",  rtrim($_POST["senderId"],"/"));
            $success_msg = "Denied friend request sent from: " . $name[0]["name"];
            $this->incomingRequests($error_msg, $success_msg);
            return;
        } else {
            $this->pageNotFound();
            return;
        }
    }

    private function friendList($e = "", $s = ""){
        $error_msg = $e;
        $success_msg = $s;
        if (!isset($_SESSION["studentId"]) || empty($_SESSION["studentId"])) {
            $this->login("Please log in to see friend list");
            return;
        }   
        $name = $this->db->query("SELECT name FROM student WHERE studentId= ?","s",$_SESSION["studentId"]);
        $name = $name[0]["name"];

        // get all the friends
        $friends = $this->db->query("SELECT friendId FROM friends_with WHERE studentId = ?","s",$_SESSION["studentId"]);
        // print_r($friends);
        include "templates/friendList.php";
    }

    private function removeFriend(){
        $error_msg = "";
        if (isset($_POST["friendId"]) && !empty($_POST["friendId"])){
            $delete1 = $this->db->query("DELETE FROM friends_with WHERE studentId = ? AND friendId = ?","ss", $_SESSION["studentId"],rtrim($_POST["friendId"],"/"));
            $delete2 = $this->db->query("DELETE FROM friends_with WHERE studentId = ? AND friendId = ?","ss", rtrim($_POST["friendId"],"/"), $_SESSION["studentId"]);
            if ($delete1 === false || $delete2 === false) {
                $error_msg = "Error deleting from enrolled";
            }
            $name = $this->db->query("SELECT * FROM student WHERE studentId = ?","s",  rtrim($_POST["friendId"],"/"));
            $success_msg = "Removed friend: " . $name[0]["name"];
            $this->friendList($error_msg, $success_msg);
            return;
        } else {
            $this->pageNotFound();
            return;
        }
    }

    private function pageNotFound(){
        include "templates/pageNotFound.php";
    }
    
}
    