<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "chromatus_test";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $db);

// Check connection
if ($mysqli -> connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
//echo "Connected successfully <br> <br>";

?>
