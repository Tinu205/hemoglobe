<?php
    function load_template($name){
        include $_SERVER['DOCUMENT_ROOT']."/hemoglobe/templates/$name.php";
    }
    function load_page($name){
        include $_SERVER['DOCUMENT_ROOT']."/hemoglobe/$name.php";
    }
?>
