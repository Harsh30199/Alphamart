<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
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
        <style type="text/css">
            .thumbnail{
            color: black;
            background-color: white;
            padding-top: 10px;
            padding-left: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            box-shadow: 7px 7px 5px rgba(0, 0, 0, .5);
            transition: all 0.3s ease-in-out;
            border:1px solid rgba(0, 0, 0, .7);
        }
        .thumbnail:hover {
            color: white;
            background-color: black;
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
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
        }
        </style>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container">
                <a href="resetpass.php"><div class="row thumbnail">
                    <h1>Reset Password
                    <span style="float: right" class="glyphicon glyphicon-chevron-right"></span></h1>
                </div></a>
                <a href="history.php"><div class="row thumbnail">
                    <h1>Order history
                    <span style="float: right" class="glyphicon glyphicon-chevron-right"></span></h1>
                </div></a>
                </div>
            </div>
            <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy AlphaMart. All Rights Reserved. | Contact Us: +91 979996309</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
