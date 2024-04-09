<html>
    <head>
       
        <style>
             * {
                margin: 0;
                padding: 0;
                font-family: 'Crimson Text', serif;
            }
    
            .header {
                width: 100%;
                height: 100px;
                position: relative;
                background-color: #f2c698;
            }
    
            .header h1 {
                font-size: 40px;
                color: #3e2723;
                font-family: 'Bacasime Antique', serif;
                opacity:0.7;
                text-align: center;
                padding-top:2%;
                padding-right:10px;
                font-weight:400px;
                padding-left: 14%;
            }
    
            .nav1 {
                height: 20px;
                display: flex;
                margin-bottom: 10px;
                justify-content: space-between;
                align-items: center;
                
            }
            .nav1 img{
                width:115px;
                position: absolute;
                top: 0;
                left: 0;
                opacity:0.5;
                background-color: #f2c698;
            }
    
            .list1 li {
                display: inline-block;
                text-decoration: none;
                padding-left: 20px;
                align-items: right;
            }
            .list1 span{
                 width:30px;
                 height:20px;
                 background-color: #d6a57a;
                 justify-content:space-between;
                 color:black;
                 border-radius:50%;
                 margin-left:3px;
                 top:50%;
                 right:-20%;
                 padding-left:3px;
                 padding-right: 3px;
                
            }
    
            .nav1 i {
                font-size: 40px;
                left: 0px;
            }
    
            .list1 i {
                font-size: 20px;
                padding-top:550%;

            }
            .navLinks{
                height:70px;
                text-align:center;
                background-color:#f2c698;
               
            }
            .fa-bars{
                display:none;
            }
            .navLinks .fa{
               display:none;
            }
            .navLinks ul li{
                list-style:none;
                display:inline-block;
                padding-left:10px;
                padding-right:4px;
                font-size:24px;
                padding-top:3%;
                
                
            }
            .navLinks ul li a{
                color:#3e2723;
                opacity:0.8;
                text-decoration:none;
            }
            
            .navLinks ul li::after{
                content:'';
                width:0%;
                height:2px;
                background:#de1a58;
                display:block;
                margin:auto;
            }
            .navLinks ul li:hover::after{
                width:100%;
            }
            @media(max-width:700px){
                .header h1{
                font-size: 40px;
                color: #3e2723;
                opacity:0.7;
                text-align: center;
                padding-top:22%;
                padding-right:1%;
                font-weight:400px;
                padding-left: 20%;
                }
                .navLinks {
                    position: absolute;
                    background: #bd6597;
                    height: 100vh;
                    width: 200px;
                    top: 0;
                    left: -200px; 
                    text-align: left;
                    z-index: 2;
                    transition: 1s;
                }
                 .fa-bars{
                    display:block;
                    padding-bottom:2%;
                    padding-left:20%;
                    padding-top:-0.9%;

                    font-size:30px;
                    color:#3a853a;
                    margin:10px;
                    cursor: pointer;
                 
                    
                    
                }
                .navLinks .fa-window-close {
                    display: block;
                    color: #fff;
                    margin: 10px;
                    font-size: 22px;
                    cursor: pointer;
                }
    
                .navLinks ul {
                    padding: 30px;
                }
                .lower_section{
                padding-top:6%;
                display:flex;
                flex:1;
                background-color: #f2d3b1 ;
                height:40vh;
                padding-bottom: 9%;
                margin-top: 100%;
                
            }

            }
            .cartTab{
                width:350px;
                background-color:#d6a57a ;
                color:#eee;
                position:fixed;
                inset: 0 0 0 auto;
                display:grid;
                grid-template-rows:70px 2fr 80px;
            
            }
            .cartTab h1{
                padding:20px;
                margin:0;

                font-weight:300;
            }
            .listCart button{
                font-family:Poppins;
                border:none;
                font-size: large;
                
                margin-top:100%;
                margin-left:15px;
                margin-right:5px;
                
                background-color:#f2d699 ;
                grid-template-columns:repeat(2,1fr);
            }
            .listCart button:hover{
                transition: 2s;
                z-index: 2;
                background-color:#bd6597;
            }
            .listCart .close{
                background-color: #baa2a2;
            }
            .listCart .item img{
                width:100%;

            }
            .listCart .item{
                display:grid;
                grid-template-columns:70px 150px 50px 1fr ;
                gap:10px;
                text-align:center;
                align-items:center;
            }
            .listCart .quantity span{
                display:inline-block;
                width:25px;
                height:25px;
                background-color: #baa2a2;
                color: #555;
                border-radius:50%;
                cursor:pointer;
                
            }
            .listCart .quantity span:nth-child(2){
                background-color:transparent;
                color:#eee;

            }
            .listCart .item:nth-child(even){
                background-color: #eee1;
            }
            .listCart{
                overflow:auto;
            }
            .listCart::-webkit-scrollbar{
                width:0;
            
            }
        </style>
    </head>
    <body>
         
    <section class="header">
          
          <nav class="nav1">
              
              <a href=""><img src="/rae_website/images/yarn-needle.png"></a><h1>RAE'S PATTERNS</h1>
                  
                  <ul class="list1">
                      <li><a href="/rae_website/users/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa shopping-basket" aria-hidden="true"></i></a></li><span>0</span>
                      <li><a href=""><i class="fa fa-search" aria-hidden="true"></i></a></li>
                      <li><a href="/rae_website/front_files/index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                      
                      
                  </ul>
          </nav>
       <a><i  id= "barsIcon" class="fa fa-bars" aria-hidden="true" ></i></a>
          <nav class="navLinks" id="navLinks">
              
              <a><i class="fa fa-window-close" aria-hidden="true" onclick="hideMenu()"></i></a>
              <ul class="list2"> 
                  <li><a href="/rae_website/products/Allproducts.php">All Products</a></li>
                  <li><a href="/rae_website/products/dresses.php">Dresses</a></li>
                  <li><a href="/rae_website/products/Tops.php">Tops</a></li>
                  <li><a href="/rae_website/products/bottomwear.php">Bottom-Wear</a></li>
                  <li><a href="/rae_website/products/bags.php">Bags</a></li>
                  
              </ul>
              
          </nav>
              
          
          
      </section>
      <section class="cartContainer">
      <div class="cartTab">
            <h2>Shopping Cart</h2>
            <div class="listCart">
                <div class="item">
                    <div class="img">

                    </div>
                    <div class="price">

                    </div>
                    <div class="quantity">
                        <span class="minus">&lt</span>
                        <span>1</span>
                        <span class="plus">&gt</span>
                    </div>

                </div>
                <button class="close">CLOSE </button>
                <button class="checkOut">CHECKOUT</button>
            </div>
        </div>
      </section>
      <script src="/rae_website/shoppingCart/functions.js">
    </body>
</html>
    