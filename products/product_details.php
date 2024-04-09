<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Instrument+Serif:ital@0;1&family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">

        <style>
            * {
                margin: 0;
                padding: 0;
                font-family: 'Crimson Text', serif;
            }
            .product_info{
                display:flex;
            }
            .product{
                padding-left:110px;
                padding-top:160px;
                
            }
            .img{
                padding-top:40px;
                padding-left:50px;
            }
            .pro_image{
                width:400px;
                height:400px;
                border-radius:20px;
                
            }
            .heading{
                text-align:center;
                font-weight:100px;
                font-size:40px;
                font-family: 'Bacasime Antique', serif;
                padding-top:30px;
            }
            .product p{
                padding:10px;
                font-size:30px;
                text-transform:uppercase;
            }
            .product .btn{
                margin-left:10px;
                padding: 4px 3px 4px 2px;
                background-color:#ADD8E6;
               
            }
            .product .btn:hover{
                z-index: 2;
                border:1px solid #f2aa93;
                transition:1s;
            }

        </style>
    </head>
    <body>
        
    <?php require_once('../reusables/header.php');?>

    <h2 class="heading">PRODUCT DETAILS</h2>

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
                           
                            echo '<div class="img">';
                            echo '<a class="pro_image" href="/rae_website/products/product_details.php"><img src="data:image;base64,' . base64_encode($row['productImage']) . '" alt="Image"></a>' .'<br>';
                            echo '</div>';
                            echo '<div class="product">';
                            echo '<p class="pro_name">' . $row['productName'] . '</p>';
                            echo '<p class="pro-price">' . $row['Price'] . '</p>';    
                            echo '<button href= "/rae_website/products/shopping_cart.php" class="btn">ADD TO CART</button>' ; 
                            echo '</div>';
                        
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

