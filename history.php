<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: index.php?info=1');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price,ut.quantity from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id' AND ut.status='Confirmed'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
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
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    </head>
    <body>
        <div>
            <?php 
               require 'header.php';
            ?>
            <br>
            <div class="container" ng-app="">
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                        if($no_of_user_products==0){
                            ?><div class="container">
                                <p class="jumbotron" style="font-size: 50px;font-family: calibri;background-color: rgba(0,0,0,0.8);color:white;text-align: center">
                                    Your order history is empty!
                                </p><br><br>
                                </center>
                            </div>
                        <?php
                        }else{?>
                                <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>Item Number</th><th>Item Name</th><th>Price</th><th>Quantity</th>
                                    </tr>
                            <?php
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <td><?php echo $counter ?></td><td><?php $namehere=$row['name']; echo $row['name'];?></td><td><?php echo $row['price'];?></td><td><?php echo $row['quantity'];?></td>
                        </tr>
                        <?php $counter=$counter+1;}?>
                        </tbody>
                        </table>
                    <?php } ?>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy AlphaMart. All Rights Reserved. | Contact Us: +91 9799996309</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
