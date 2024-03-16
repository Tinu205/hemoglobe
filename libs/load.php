<?php
    include_once "includes/User.class.php";
    include_once "includes/database.class.php";
    include_once "includes/Sessions.class.php";

    Session::start();

    function load_template($name){
        include $_SERVER['DOCUMENT_ROOT']."/hemoglobe/templates/$name.php";
    }
    //well load page was never used 
    // function load_page($name){
    //     include $_SERVER['DOCUMENT_ROOT']."/hemoglobe/$name.php";
    // }
?>
