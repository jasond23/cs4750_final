<?php

spl_autoload_register(function($classname) {
    include "classes/$classname.php";
});

// created this bc i think it's prob a good idea to have a password for uses lol

function createNewStudentTable(){
    $db = new Database();
    $db->query("DROP TABLE IF EXISTS student;");
    $db->query("CREATE TABLE student
                    (name TEXT,
                    schoolYear INT(1),
                    major VARCHAR(50),
                    minor VARCHAR(50),
                    studentId VARCHAR(7) NOT NULL,
                    password TEXT NOT NULL,
                    PRIMARY KEY(studentId),
                    CONSTRAINT chk_person CHECK (schoolYear IN (1,2,3,4) )
                    );");
}

// why in the world would you put a bound on the var time???? 
function createNewCourseTable(){
    $db = new Database();
    $db->query("DROP TABLE IF EXISTS course;");
    $db->query("CREATE TABLE course
                    (courseId INT NOT NULL,
                    semesterId INT,
                    courseName TEXT,
                    courseNumber INT,
                    subject TEXT,
                    professor TEXT,
                    creditHours INT,
                    days TEXT,
                    time TEXT,
                    location TEXT,
                    PRIMARY KEY(courseId)
                    );");
}

//createNewStudentTable();

// nah don't try this ^ it doesn't work. gonna keep it here cuz why not. remove it if u want. 
function updateStudentTable(){
    $db = new Database();
    $db->query("ALTER TABLE student
                ADD COLUMN password TEXT NOT NULL AFTER studentId;");
}

function updateCoursesTable(){
    $db = new Database();
    $db->query("ALTER TABLE course
                ADD COLUMN courseName TEXT NOT NULL AFTER courseId;");
    $db->query("ALTER TABLE course
                ADD COLUMN courseNumber INT NOT NULL AFTER courseName;");
    $db->query("ALTER TABLE course
                ADD COLUMN semesterId INT NOT NULL AFTER courseId;");
}

// read from API add all courses to db
function addAllCoursesFromAPI($department){
    $response = file_get_contents("http://luthers-list.herokuapp.com/api/dept/".$department."/");

    $data = json_decode($response, TRUE);


    for ($x = 0; $x < count($data); $x++) {
        $courseID = $data[$x]["course_number"];
        $courseName = $data[$x]["description"];
        $semesterId = $data[$x]["semester_code"];
        $courseNumber = $data[$x]["catalog_number"];
        $subject = $data[$x]["subject"];
        $professor = $data[$x]["instructor"]["name"];
        $creditHours = $data[$x]["units"];
        if ($creditHours < 3){
            continue;
        }
        $days = $data[$x]["meetings"][0]["days"];
        if ($days == ""){
            continue;
        }
        $start = new DateTime($data[$x]["meetings"][0]["start_time"]);
        $end = new DateTime($data[$x]["meetings"][0]["end_time"]);
        $formatStart = $start->format('g:i');
        $formatEnd = $end->format('g:i');
        $time = $formatStart . "-" . $formatEnd;
        echo $formatStart . " " . $formatEnd . " " . $time;
        if ($formatStart == $formatEnd){
            continue;
        }
        $location = $data[$x]["meetings"][0]["facility_description"];

        $db = new Database();
        $insert = $db->query("INSERT INTO course (courseId, semesterId, courseName, courseNumber, subject, professor, 
                    creditHours, days, time, location) values (?, ?,?, ?,?,?,?,?,?,?);", 
                "iisississs", $courseID, $semesterId,$courseName, $courseNumber, $subject, $professor, $creditHours, $days, $time, $location);
    }
}

// updateStudentTable();
// updateCoursesTable();
//createNewStudentTable();
createNewCourseTable();
addAllCoursesFromAPI("CS");
addAllCoursesFromAPI("APMA");
addAllCoursesFromAPI("DS");
addAllCoursesFromAPI("PSYC");
addAllCoursesFromAPI("STAT");
addAllCoursesFromAPI("STS");

// some errors but whatever i dont care, the courses just won't show up