<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>AlphaMart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
        .fit { 
            max-width: 100%;
            max-height: 100%;
        }
        .center {
            display: block;
            margin: auto;
        }
        .thumbnail{
            padding-top: 10px;
            padding-left: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            box-shadow: 7px 7px 5px rgba(0, 0, 0, .5);
            transition: all 0.3s ease-in-out;
            border:1px solid rgba(0, 0, 0, .7);
        }
        .thumbnail:hover {
            transform: scale(1.1);
            box-shadow: 7px 7px 7px rgba(0,0,0,0.2);
        }
        .row{
            padding-bottom: 15px;
            padding-top: 15px;
        }
        .coloumn{
            padding-bottom: 15px;
            padding-top: 15px;
        }
        .products{
            padding-top: 19px;
            background-color: black;
            color:white;
            width:300px;
            height:60px;
            align-self: center;
            border:1px solid black;
            border-radius: 25px;
            box-shadow: 7px 7px 5px rgba(0, 0, 0, .5);
            transition: all 0.3s ease-in-out;
        }
        .products:hover{
        background-color: black;
        color: white;
        transform: scale(1.1);
        box-shadow: 7px 7px 7px rgba(0,0,0,0.2);
        }
        .products:focus{
        outline:none;
        }
        hr{
            width: 80%;
            border: 5px solid rgba(0,0,0,0.5);
            border-radius: 5px;
        }
        * {
          box-sizing: border-box;
        }

        .mttimg {
          position: relative;
          max-width: 100%;
          max-height: 400px;
          margin: 0 auto;
        }

        .mttimg img {vertical-align: middle;}

        .mttimg .content {
          position: absolute;
          bottom: 0;
          background: rgb(0, 0, 0);
          background: rgba(0, 0, 0, 0.5);
          color: #f1f1f1;
          width: 100%;
          padding: 20px;
        }
        </style>
    </head>
    <body style="background-color:rgba(0, 0, 0, 0.8);">
        <div>
            <?php
                require 'header.php';
            ?>
            <div id="myCarousel" style="border-bottom:1px solid black;" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner"  role="listbox">

                  <div class="item active">
                    <img src="img/1c.jpg" alt="Image not avialable!" class="center fit">
                    <div class="carousel-caption" style="padding-bottom:100px;">
                      <h3></h3>
                      <p></p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="img/2c.jpg" alt="Image not avialable!" class="center fit">
                    <div class="carousel-caption" style="padding-bottom:100px;">
                      <h3></h3>
                      <p></p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="img/2.jpg" alt="Image not avialable!" class="center fit">
                    <div class="carousel-caption" style="padding-bottom:100px;">
                      <h3></h3>
                      <p></p>
                    </div>
                  </div>
                
                  <div class="item">
                    <img src="img/3.jpg" alt="Image not avialable!" class="center fit">
                    <div class="carousel-caption" style="padding-bottom:100px;">
                      <h3></h3>
                      <p></p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="img/4.jpg" alt="Image not avialable!" class="center fit">
                    <div class="carousel-caption" style="padding-bottom:100px;">
                      <h3></h3>
                      <p></p>
                    </div>
                  </div>
              
                </div>

                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
                <div class="jumbotron" style="background-color: gray;border-bottom:1px solid black;"><center>
                    <hr>
                    <h1>Welcome to The Alphamart!</h1>
                    <p style="margin-left: 140px;margin-right: 140px;">The site for all the alpha males to get the best accesories out there! We have the best watches, bracelets and Sunglasses for you to make you look good! No need to hunt around, we have it all in one place.</p>
                    <a href="browse.php" role="button" class="products btn"><b>See all products   </b><span class="glyphicon glyphicon-chevron-right"></a>
                    <br></center>
                </div>      
            <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="browse.php#braceletstart">
                                <img src="img/bracelet.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Bracelets<span class="glyphicon glyphicon-chevron-right"></span></p>
                                        <p>Most unique bracelets to set your apart from the rest of the crowd.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="browse.php#watchstart">
                               <img src="img/watches.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Watches<span class="glyphicon glyphicon-chevron-right"></span></p>
                                    <p>Choose among the best available brands in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="browse.php#sunglassstart">
                               <img src="img/sunglasses.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Sunglasses<span class="glyphicon glyphicon-chevron-right"></span></p>
                                   <p>Our exquisite collection of Aviators, Cat-eyes and much more.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <div class="mttimg">
                <img src="img/covermtt.jpg" width="100%" height="400px">
                  <div class="content">
                    <h1>Meet the developer</h1>
                  </div>
            </div>
              <br><br><br><br>
            <div class = "container">
           <div class="row">
                <div class="thumbnail" style="width:100%;">
                  <img src="img/manan.jpg" alt="Manan" style="width:100%;height:500px;">
                  <div class="container">
                    <h2>Manan Bolia</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Engineer in Computer Science adnd Designer.</p>
                    <p>mananbolia14@gmail.com</p>
                    <p>9799996309</p>
                  </div>
                </div>

             <div class="thumbnail" style="width:100%;">
                  <img src="img/amit.jpg" alt="Amit" style="width:100%;height:500px;">
                  <div class="container">
                    <h2>Amit Birajdar</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Engineer in Computer Science adnd Designer.</p>
                    <p>amitbirajdar7@gmail.com</p>
                    <p>9892921223</p>
                  </div>
                </div>
            
             <div class="thumbnail" style="width:100%;">
                  <img src="img/harsh.jpg" alt="Harsh" style="width:100%;height:500px;">
                  <div class="container">
                    <h2>Harsh Agarwal</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Engineer in Computer Science adnd Designer.</p>
                    <p>harsh30199@gmail.com</p>
                    <p>9820534377</p>
                  </div>
                </div>

            </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy AlphaMArt. All Rights Reserved. | Contact Us: +91 9799996309</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
