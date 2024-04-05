<?php
$servername="localhost";
$username="root";
$password="";
$database="website_data";

$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die ("Connection failed");
}
else{
    return $conn;
}
?>