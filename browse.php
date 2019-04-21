<?php
    session_start();
    require 'check_if_added.php';
    ini_set( "display_errors", 0); 
    $info=$_GET['info'];
    if($info==1){
      ?>
      <script>
        window.alert("Please Login in first!");
      </script>
      <meta http-equiv="refresh" content="0;url=browse.php" />
    <?php }
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
        #filter{
        background-color: black;color:white;width:300px;align-self: center; border:1px solid black;border-radius: 25px;
        box-shadow: 7px 7px 5px rgba(0, 0, 0, .5);
        transition: all 0.3s ease-in-out;
        }
        #filter:hover{
        background-color: black;
        color: white;
        transform: scale(1.1);
        box-shadow: 7px 7px 7px rgba(0,0,0,0.2);
        }
        #filter:focus{
        outline:none;
        }
        .fil:focus{
        background-color: black;
        color: white;
        transform: scale(1.1);
        box-shadow: 7px 7px 7px rgba(0,0,0,0.2);
        outline:none;
        }
        .fil{
        background-color: transparent;
        color:black;
        width:200px;
        padding: 15px;
        margin: 15px;
        align-self: center; 
        border:1px solid black;
        border-radius: 25px;
        box-shadow: 7px 7px 5px rgba(0, 0, 0, .5);
        transition: all 0.3s ease-in-out;
        }
        .fil:hover{
        background-color: black;
        color: white;
        transform: scale(1.1);
        box-shadow: 7px 7px 7px rgba(0,0,0,0.2);
        }
        .show {
            display: block;
        }
        .filterDiv {
          display: none;
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
        .cartbtn:hover{
            background-color: black;
            color: white;
        }
        .cartbtn:active{
            background-color: black;
            color: white; 
        }
        .row{
            padding-bottom: 15px;
            padding-top: 15px;
        }
        .coloumn{
            padding-bottom: 15px;
            padding-top: 15px;
        }
        .checked {
            color: orange;
        }
</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="background-color:rgba(0,0,0,0.8)">
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="jumbotron" id="jumbo" style="background-color: gray;border-bottom:1px solid black;"><center>
                    <h1>Welcome to The AlphaMart!</h1>
                    <p>We have the best sunglasses, watches and bracelets for you. No need to hunt around, we have all in one place.</p>
                    <button id="filter">Apply filters</button>
                    <br><div id="myBtnContainer" style="padding-top: 55px;">
                        <button class="btn active fil" onclick="filterSelection('all')"> Show all</button>
                        <button class="btn fil" onclick="filterSelection('sunglasses')"> sunglasses</button>
                        <button class="btn fil" onclick="filterSelection('watches')"> Watches</button>
                        <button class="btn fil" onclick="filterSelection('bracelets')"> Bracelets</button>
                    </div></center>
            </div>
            <div class="container-fluid" id="sunglassstart">
                <div class="row">
                    <div class="filterDiv sunglasses col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/6.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Hawkeye 302</h3>
                                    <p>Price: Rs. 36000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{ 
                                            if(check_if_added_to_cart(1)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="1">
                                                <button onclick="addtocart('1');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 filterDiv sunglasses ">
                        <div class="thumbnail">
                                <img src="img/7.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Ranger 89</h3>
                                    <p>Price: Rs. 40000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="2">
                                                <button onclick="addtocart('2');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv sunglasses col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/8.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Ranger 128</h3>
                                    <p>Price: Rs. 50000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="3">
                                                <button onclick="addtocart('3');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv sunglasses col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/9.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Gladiator 564</h3>
                                    <p>Price: Rs. 80000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                               echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="4">
                                                <button onclick="addtocart('4');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="filterDiv sunglasses col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/10.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Hawkeye 385</h3>
                                    <p>Price: Rs. 36000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{ 
                                            if(check_if_added_to_cart(13)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="13">
                                                <button onclick="addtocart('13');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 filterDiv sunglasses ">
                        <div class="thumbnail">
                                <img src="img/11.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Ranger 753</h3>
                                    <p>Price: Rs. 40000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(14)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="14">
                                                <button onclick="addtocart('14');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv sunglasses col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/12.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Ranger 456</h3>
                                    <p>Price: Rs. 50000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(15)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="15">
                                                <button onclick="addtocart('15');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv sunglasses col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/13.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Gladiator 805</h3>
                                    <p>Price: Rs. 80000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(16)){
                                               echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="16">
                                                <button onclick="addtocart('16');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="filterDiv sunglasses col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/14.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Hawkeye 765</h3>
                                    <p>Price: Rs. 36000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{ 
                                            if(check_if_added_to_cart(17)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="17">
                                                <button onclick="addtocart('17');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 filterDiv sunglasses ">
                        <div class="thumbnail">
                                <img src="img/15.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Ranger 844</h3>
                                    <p>Price: Rs. 40000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(18)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="18">
                                                <button onclick="addtocart('18');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv sunglasses col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/16.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Ranger 800</h3>
                                    <p>Price: Rs. 50000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(19)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="19">
                                                <button onclick="addtocart('19');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv sunglasses col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/17.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Gladiator 201</h3>
                                    <p>Price: Rs. 80000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(20)){
                                               echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="20">
                                                <button onclick="addtocart('20');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row" id="watchstart">
                    <div class="filterDiv watches col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/35.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Titan Model #301</h3>
                                    <p>Price: Rs. 13000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="5">
                                                <button onclick="addtocart('5');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv watches col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/32.jpg" alt="Image not available!">
                            <center>
                                <div class="caption">
                                    <h3>Titan Model #201</h3>
                                    <p>Price: Rs. 3000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="6">
                                                <button onclick="addtocart('6');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv watches col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/33.jpg" alt="Image not available!">
                            <center>
                                <div class="caption">
                                    <h3>HMT Milan</h3>
                                    <p>Price: Rs. 8000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="7">
                                                <button onclick="addtocart('7');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv watches col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/34.jpg" alt="Favre Leuba">
                            <center>
                                <div class="caption">
                                    <h3>Favre Leuba #111</h3>
                                    <p>Price: Rs. 18000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="8">
                                                <button onclick="addtocart('8');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="filterDiv watches col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/18.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Rado kicks</h3>
                                    <p>Price: Rs. 17000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{ 
                                            if(check_if_added_to_cart(21)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="21">
                                                <button onclick="addtocart('21');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 filterDiv watches ">
                        <div class="thumbnail">
                                <img src="img/19.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Rado boxter</h3>
                                    <p>Price: Rs. 25000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(22)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="22">
                                                <button onclick="addtocart('22');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv watches col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/20.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Rado 800</h3>
                                    <p>Price: Rs. 80000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(23)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="23">
                                                <button onclick="addtocart('23');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv watches col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/21.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Fossil chrono</h3>
                                    <p>Price: Rs. 56000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(24)){
                                               echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="24">
                                                <button onclick="addtocart('24');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="filterDiv watches col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/22.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Titan Ultraus</h3>
                                    <p>Price: Rs. 16000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{ 
                                            if(check_if_added_to_cart(25)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="25">
                                                <button onclick="addtocart('25');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 filterDiv watches ">
                        <div class="thumbnail">
                                <img src="img/23.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Fossil Genpacta</h3>
                                    <p>Price: Rs. 86000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(26)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="26">
                                                <button onclick="addtocart('26');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv watches col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/24.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Rollex Slide</h3>
                                    <p>Price: Rs. 123000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(27)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="27">
                                                <button onclick="addtocart('27');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv watches col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/25.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Rollex Swade</h3>
                                    <p>Price: Rs. 156000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(28)){
                                               echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="28">
                                                <button onclick="addtocart('28');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row" id="braceletstart">
                    <div class="filterDiv bracelets col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/28.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Leather</h3>
                                    <p>Price: Rs. 1500.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="9">
                                                <button onclick="addtocart('9');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv bracelets col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/29.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Beaded</h3>
                                    <p>Price: Rs. 1000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="10">
                                                <button onclick="addtocart('10');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv bracelets col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/30.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Golden</h3>
                                    <p>Price: Rs. 900.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="11">
                                                <button onclick="addtocart('11');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="filterDiv bracelets col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/31.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Metallic</h3>
                                    <p>Price: Rs. 120.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="12">
                                                <button onclick="addtocart('12');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="filterDiv bracelets col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/36.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Black Nonmetal Bracelet</h3>
                                    <p>Price: Rs. 500.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(29)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="29">
                                                <button onclick="addtocart('29');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="filterDiv bracelets col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/37.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Brown Leather Bracelet</h3>
                                    <p>Price: Rs. 600.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(30)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="30">
                                                <button onclick="addtocart('30');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="filterDiv bracelets col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/38.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Gold Metal Alloy Bracelet</h3>
                                    <p>Price: Rs. 500.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(31)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="31">
                                                <button onclick="addtocart('31');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="filterDiv bracelets col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/39.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Black Nonmetallic Band</h3>
                                    <p>Price: Rs. 700.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(32)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="32">
                                                <button onclick="addtocart('32');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
               </div>
               <div class="row">
                    <div class="filterDiv bracelets col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/40.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Black Metal Bracelet</h3>
                                    <p>Price: Rs. 700.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(33)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="33">
                                                <button onclick="addtocart('33');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="filterDiv bracelets col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/41.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Gold Metal Bracelet</h3>
                                    <p>Price: Rs. 800.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(34)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="34">
                                                <button onclick="addtocart('34');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="filterDiv bracelets col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/42.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Blue Metal Bracelet</h3>
                                    <p>Price: Rs. 2000.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(35)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="35">
                                                <button onclick="addtocart('35');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="filterDiv bracelets col-md-3 col-sm-6">
                        <div class="thumbnail">
                                <img src="img/43.jpg">
                            <center>
                                <div class="caption">
                                    <h3>Black Leather Band</h3>
                                    <p>Price: Rs. 700.00</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span><br><br>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="browse.php?info=1" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(36)){
                                                echo 'Added to cart';
                                            }else{
                                                ?>
                                                <div id="36">
                                                <button onclick="addtocart('36');" class="btn btn-block btn-primary cartbtn" name="add" value="add" class="btn btn-block btr-primary">Add to cart</button>
                                                </div>
                                                <?php
                                            }
                                         }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <a href="#jumbo" style="float:right;" role="button" class="btn btn-danger">Back to top</a>
               <center>
                   <p>Copyright &copy AlphaMart. All Rights Reserved. | Contact Us: +91 9799996309</p>
               </center>
               </div>
           </footer>
        </div>
        <script>
            function addtocart(val) {
              $.ajax({
              type: "GET",
              url: "cart_add.php",
              data:'id='+val,
              success: function(data){
                $("#"+val).html(data);
              }
              });
            }
            filterSelection("all")
            function filterSelection(c) {
              var x, i;
              x = document.getElementsByClassName("filterDiv");
              if (c == "all") c = "";
              for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
              }
            }

            function w3AddClass(element, name) {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
              }
            }

            function w3RemoveClass(element, name) {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                  arr1.splice(arr1.indexOf(arr2[i]), 1);     
                }
              }
              element.className = arr1.join(" ");
            }
            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function(){
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
              });
            }
            $(document).ready(function(){
                $("#myBtnContainer").hide();
                $("#filter").click(function(){
                    $("#myBtnContainer").toggle(200);
                });
            });
            </script>
    </body>
</html>