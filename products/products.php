<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'website_data';
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}



try{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['productId'])){
            echo 'Product Id id missing';
        }
        else {
           

           
            if ($_FILES['productImage']['error'] !== UPLOAD_ERR_OK) {
                echo 'Error uploading file. Error code: ' . $_FILES['productImage']['error'];
                exit;
        }
        $id = $_POST['productId'];
        $proName = $_POST['productName'];
        $price = $_POST['Price'];
        $category = $_POST["Category"];
        $file=addslashes(file_get_contents($_FILES['productImage']['tmp_name']));
        
        
        $id = $conn->real_escape_string($id);
        $proName = $conn->real_escape_string($proName);
        $price = $conn->real_escape_string($price);
        $category = $conn->real_escape_string($category);

        $query = "INSERT INTO products (productId, productName, Category, Price, productImage) VALUES ('$id', '$proName', '$category', '$price', '$file')";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            echo "Product saved successfully";
        } else {
            echo "Error: Data was not saved" . $conn->error;
        }
        if($query_run){
            echo '<script type="text/javascript">alert("Image Profile Uploaded")</script>';

        }else{
            throw new Exception("Image Profile Not Uploaded: " .$mysqli->error);

        }
    }
}}
catch(Exception $e){
    echo '<script type="text/javascript">alert("Error: '. $e->getMessage().'")</script>';
}

$conn->close();
?>
