<!DOCTYPE html>
<html>
<head>
    <title>BOTTOM-WEAR</title>
    <title>RAE'S PATTERNS</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Instrument+Serif:ital@0;1&family=Playfair+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">

    <style>
            *{
                font-family: 'Crimson Text', serif;
                margin: 0;
                padding: 0;
            }
    
            .product{
                display:inline-block;
                padding-left: 10px;
                padding-top:90px;
                position:relative;
                overflow:hidden;

                
            }
            .product img{
                width:400px;
                height:400px;
                border-radius:20px;
                opacity:1;
                transition: opacity 0.3s ease;
            }
            .product p{
                text-align: center;
                font-size: 24px;
               
               
            }
            .heading{
                text-align:center;
                font-weight:100px;
                font-size:40px;
                font-family: 'Bacasime Antique', serif;
                padding-top:30px;

            }
            .product img:hover{
                transition:1s;
                z-index: 2;
               transform: translateY(-15px);

            }
         

           .product p{
            border-bottom: 20px;
           }
            .main_area{
                background-image:; 
            }
            .product .btn{
                margin-top: 6px;
                margin-left: 160px;
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
            <h2 class='heading'>BOTTOM-WEAR</h2>
            <section class="main_area">
            <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'website_data';

            $conn = new mysqli($servername, $username, $password, $database);
            if ($conn->connect_error) {
                die('Connection failed: ' . $conn->connect_error);
            } 

            $query = "SELECT productId, productName, Price, productImage FROM products WHERE Category='Dresses'";
            $query_run = mysqli_query($conn, $query);

            if ($query_run) {
                while ($row = mysqli_fetch_array($query_run)) {
                    echo '<div class="product">';
                    
                    echo '<a class="pro_image" href="/rae_website/products/product_details.php?productId=' . $row['productId'] . '">';
                    echo '<img src="data:image;base64,' . base64_encode($row['productImage']) . '" alt="Image"></a><br>';
                    echo '<p class="pro_name">' . $row['productName'] . '</p>';
                    echo '<p class="pro-price">' . $row['Price'] . '</p>';    
                    echo '<button href= "/rae_website/products/shopping_cart.php" class="btn">ADD TO CART</button>' ; 
                    echo '</div>';
                }
            }
            
             else {
                echo "Error fetching data: " . mysqli_error($conn);
            }
            ?>
            </section>
            <?php require_once('../reusables/footer.php');?>
</body>
</html>
