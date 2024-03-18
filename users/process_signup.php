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
    echo "Connection was succesful"."<br><br>";
}

//makes sure email is valid
if(!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}
if(empty($_POST["phoneNo"])){
    die("Phone number is required");
}
//makes sure password has more than 8 characters
if (strlen($_POST["Password"])<8){
    die("Password must be atleast 8 characters");
}

//for the number
if(preg_match("/0-9/",$_POST["Password"])){
    die("Password must contain atleast one number");
}
//to ensure passwords are the same
if($_POST["Password"] !== $_POST["Confirm_password"]){
    die("Passwords do not match.Try again");
}
//to encrypt the password
$hashedPassword=password_hash($_POST["Password"],PASSWORD_DEFAULT);



$sql = "INSERT INTO users (fname, sname, us_name, phoneNo, Email, Password) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("sssiss",$_POST["fname"],$_POST["sname"],$_POST["us_name"],$_POST["phoneNo"],$_POST["Email"],$hashedPassword);
if($stmt->execute()){
    //redirection
    
    header('Location:signupmessage.html');
}
else {
    echo "Error during registration: " . $stmt->error;
}
$stmt->close();

?>