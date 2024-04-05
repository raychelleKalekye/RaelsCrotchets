<?php
session_start();
if(isset($_SESSION["user_id"])){
    $conn= require __DIR__  . "/db_connect.php";

    $sql="SELECT * FROM users WHERE phoneNo={$_SESSION["user_id"]}";
    $result=$conn->query($sql);
    $user=$result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <style>

        </style>
    </head>
    <body>
        <h1>HOME</h1>
        <?php 
        if (isset($user)):
        ?>
        <p>Welcome, <?= htmlspecialchars($user["fname"])?>!</p>
        <br><br>
        <p><a href="./logout.php">LOG OUT</a></p>
        <?php else:?>
            <p><a href="./login.php">LOG IN</a> OR <a href="./signup.html">SIGN UP</a>
        <?php endif;?>

    </body>
</html>