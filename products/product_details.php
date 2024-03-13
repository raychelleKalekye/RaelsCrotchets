<html>
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Instrument+Serif:ital@0;1&family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">

    </head>
    <body>
        
    <?php require_once('../reusables/header.php');?>

    <h2>PRODUCT DETAILS</h2>

    <div class="product_info">
        <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="website_data";

            if(isset($_GET['productId'])){
                $productId=$_GET['productId'];
                $conn=new mysqli($servername,$username,$password,$database);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } else {
                    $sql = "SELECT * FROM products WHERE productId=?";
                    if ($stmt = $conn->prepare($sql)) {
                        $stmt->bind_param("s", $productId);
                        $stmt->execute();
    
                        $result = $stmt->get_result();
    
                        while ($row = $result->fetch_assoc()) {
                           
                            echo '<div class="product">';
                            echo '<a class="pro_image" href="/rae_website/products/product_details.php"><img src="data:image;base64,' . base64_encode($row['productImage']) . '" alt="Image"></a>' .'<br>';
                        
                            echo '<p class="pro_name">' . $row['productName'] . '</p>';
                            echo '<p class="pro-price">' . $row['Price'] . '</p>';    
                            echo '<button class="btn">ADD TO CART</button>' ; 
                        
                        }
    
                        $stmt->close();
                    } else {
                        die("Error in preparing the statement: " . $conn->error);
                    }
    
                    $conn->close();
                }
            } else {
                echo "productId parameter is missing.";
            
            }
        ?>
    </div>

    
    <?php require_once('../reusables/footer.php');?>
    </body>
</html>

