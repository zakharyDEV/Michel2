<?php

    session_start();
    define('TITLE',"Michel"); 
    
    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }
    

    
    include 'HTML-head.php';
?> 