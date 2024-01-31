<?php


    session_start();
    define('TITLE',"Signup | Michel");
    
    if(isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }
    include 'includes/HTML-head.php';
?>