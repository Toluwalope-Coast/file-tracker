<?php ob_start();

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include_once("functions/db.php");

include_once("functions/functions.php");?>

<!DOCTYPE html>
<html>
<head>

  
