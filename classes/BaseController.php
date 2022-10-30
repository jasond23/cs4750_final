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

    private function login(){
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
        unset($_SESSION['email']);
        unset($_SESSION['name']);       
        session_destroy();
        session_start();
        if(isset($_SERVER['HTTP_REFERER'])) {
            header('Location: '.$_SERVER['HTTP_REFERER']);  
        } else {
            header('Location: index.php');  
        }
    }

    private function allCourses(){
        # query all the courses
        $courses = $this->db->query("SELECT * FROM course");
        include "templates/allCourses.php";
    }


    
}
    