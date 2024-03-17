<?php
include 'libs/load.php';
if (isset($_GET['logout'])) {

    Session::destroy();
    header("Location: add_details.php");
    exit();
    //die("Session destroyed, <a href='logintest.php'>Login Again</a>");
}
?>