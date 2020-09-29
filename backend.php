<?php
// POST - > by $_POST superglobal variable
// GET - > by $_GET superglobal variable
// REQUEST -> by $_REQUEST superglobal variable
    echo "Hello ".$_REQUEST['firstname'].", you are from ".$_REQUEST['city']."<br>";

$servername = "localhost"; //127.0.0.1
$db_name = "phpform";
$db_user = "root";
$db_password = "";    

$conn = new mysqli($servername,$db_user,$db_password);
$conn->select_db($db_name);

if ($conn->connect_error){
    echo $conn->connect_error;
    exit;
}

$query = "INSERT INTO users (firstname, city) VALUES ('".$_REQUEST['firstname']."', '".$_REQUEST['city']."')";
    
    if ($conn->query($query)){
        echo "Saved Successfully.";
    } else {
        echo "Error in save to database.";
    }



?>