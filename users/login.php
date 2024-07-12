<?php
$invalid = false;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        require __DIR__ . "/db_connect.php";
        if ($conn) {
            $email = $conn->real_escape_string($_POST["Email"]);
            $sql = "SELECT * FROM users WHERE Email='$email'";
            $result = $conn->query($sql);

            if ($result) {
                $user = $result->fetch_assoc();
                if ($user) {
                    if (password_verify($_POST["Password"], $user["Password"])) {
                        session_start();
                        session_regenerate_id();
                        $_SESSION["user_id"] = $user["phoneNo"];
                        header('Location: index.php');
                        exit(); 
                    } else {
                        $invalid = true;
                    }
                }
                $conn->close();
            } else {
                echo "Error executing query: " . $conn->error;
            }
        } else {
            echo "Failed to connect to the database";
        }
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>LOG IN</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <style>

        </style>
    </head>
    <body>
       <?php if($invalid):?>
        <em>INVALID LOGIN</em>
       <?php endif ?>
      <form class="login" method="POST">
        <h1>LOG IN</h1>
        <div>
                    <label for="Email"> Email:</label>
                    
                    <input type="Email" name="Email" id="Email" value="<?=htmlspecialchars($_POST["Email"] ?? "")?>">
        </div>   
        <div>
            <label for="Password">Password:</label>
            <input type="password" name="Password" id="Password">
        </div>
        <button>LOG IN</button>
      </form>
      <div>
        <p>DON'T HAVE AN ACCOUNT?</p>
        <a href="/rae_website/users/signup.html"><button>SIGN UP</button></a>
      </div>

    </body>
</html>