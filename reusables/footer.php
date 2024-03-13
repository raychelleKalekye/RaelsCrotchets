<html>
    <head>
        <style>
             
            .lower_section{
                padding-top:6%;
                display:flex;
                flex:1;
                background-color: #f2d3b1 ;
                height:40vh;
                margin-top: 100%;
                
            }
            
            .lower_section div{
                padding-left:4%;
                padding-right:5%;
                padding-bottom:7%;
            }
            .lower_section ul li{
                list-style:none;
                padding-bottom:4px;
                padding-top:3px;
                font-weight:bold;
                font-size: large;

            }
            .lower_section h6{
                font-weight:bold;
                font-size: large;
                padding-bottom:4px;
            }
            .lower_section p{
                
                font-size: 20px;
                padding-bottom:4px;
            }
            .lower_section ul a{
                text-decoration: none;
                color:#3a853a;
            
            }
            .div4 ul li{
                display:inline-block;
                padding-left:4px;
                padding-right:4px;
                cursor:pointer;
            }
            .div3 label{
                font-size:20px; 
                padding-left:2px;
                padding-bottom:5 px;
            }
            .div3 input{
                padding-left:3px;
            }
            .div3 button{
                padding-top:2px;
                
                cursor:pointer;
                align-items:center;
                border:2px solid #f2aa93;
                background: rgb(233, 227, 227);
                margin-top:4%;
                margin-left:19%;
            }
            .div3 button:hover{
                
                z-index: 2;
                border:1px solid #f2aa93;
               
                transition:1s;

            }
        </style>
    </head>
    <body>
  
    <section class="lower_section">
            <div class="div1">
                <h6>MORE ABOUT US</h6>
                <ul>
                    <li><a href="/rae_website/front_page/home.php">Home</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </div>
            <div class="div2">
                <h6>HELP AND INFO</h6>
                <ul>

                    <li><a href="">FAQ</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                    <li><a href="">Cookie Policy</a></li>
                    <li><a href="">Return Policy</a></li>
                    <li><a href="">Terms of Service</a></li>

                </ul>
            </div>
            <div class="div3">
                <p>Want to receive news on dicounts and sales?</p>
                <p>Enter your email below</p>
                <br>
                <label>Email:</label>
                <input type="email" id="email" name="email">
                <button class="submit">SUBMIT EMAIL</button>
            </div>
            <div class="div4">
                <p>Want to Interact with us on social media?</p>
                <p>Follow,Like,Share and Subscribe </p>
                <ul>
                    <li><a><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </section>
    </body>
</html>