<?php

spl_autoload_register(function($classname) {
    include "classes/$classname.php";
});


$command = "home"; 
if (isset($_GET["command"]))
    $command = $_GET["command"];

session_start();


// if (!isset($_SESSION["studentId"])) {  
//     $command = "signup";            
// }

$application = new BaseController($command);
$application->run();
