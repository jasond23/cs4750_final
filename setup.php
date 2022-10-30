<?php

spl_autoload_register(function($classname) {
    include "classes/$classname.php";
});

// created this bc i think it's prob a good idea to have a password for uses lol

function createNewStudentTable(){
    $db = new Database();
    $db->query("DROP TABLE IF EXISTS student;");
    $db->query("CREATE TABLE student
                    (name VARCHAR(50),
                    schoolYear INT(1),
                    major VARCHAR(10),
                    minor VARCHAR(10),
                    studentId VARCHAR(7) NOT NULL,
                    password TEXT NOT NULL,
                    PRIMARY KEY(studentId),
                    CONSTRAINT chk_person CHECK (schoolYear IN (1,2,3,4) )
                    );");
}

//createNewStudentTable();

// nah don't try this ^ it doesn't work. gonna keep it here cuz why not. remove it if u want. 
function updateStudentTable(){
    $db = new Database();
    $db->query("ALTER TABLE student
                ADD COLUMN password TEXT NOT NULL AFTER studentId;");
}

updateStudentTable();