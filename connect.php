
<?php

include 'libs/load.php';
$server = "localhost";
$username = "panda";
$password = "cutepanda"; 
$database = "hemo";
$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


load_template("reg_anal");

$conn->close();
?>
