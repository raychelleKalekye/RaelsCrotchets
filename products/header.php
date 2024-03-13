<!DOCTYPE HTML>
<html>
    <head>
    <title>RAE'S PATTERNS</title>
       
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Instrument+Serif:ital@0;1&family=Playfair+Display&display=swap" rel="stylesheet">
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
   
           .nav1 i {
               font-size: 30px;
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
               padding-left:3px;
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
               
           }}
    </head>
    <body>
    <section class="header">
          
          <nav class="nav1">
              
              <a href=""><img src="/rae_website/images/yarn-needle.png"></a><h1>RAE'S PATTERNS</h1>
                  
                  <ul class="list1">
                      <li><a href=""><i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                      <li><a href=""><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                      <li><a href=""><i class="fa fa-search" aria-hidden="true"></i></a></li>
                      
                      
                  </ul>
          </nav>
       <a><i  id= "barsIcon" class="fa fa-bars" aria-hidden="true" ></i></a>
          <nav class="navLinks" id="navLinks">
              
              <a><i class="fa fa-window-close" aria-hidden="true" onclick="hideMenu()"></i></a>
              <ul class="list2">
                  <li><a href="">Sweaters</a></li>
                  <li><a href="">Tops</a></li>
                  <li><a href="">Bottom-Wear</a></li>
                  <li><a href="">Head-Wear</a></li>
                  <li><a href="">Socks</a></li>
                  <li><a href="">Bags</a></li>
                  <li><a href="">Patterns</a></li>
              </ul>
              
          </nav>
              
          
          
      </section>
    </body>
</html>