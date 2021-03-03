<?php ob_start();
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include_once("functions/db.php");

include_once("functions/functions.php");


// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

redirect("http://localhost/filetracker/login.php");








?>