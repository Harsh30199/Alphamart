<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: index.php?info=1');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id' AND ut.status='Added to cart'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']; 
       }
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
                                <p class="jumbotron" style="font-size: 50px;font-family: calibri;color:white;background-color: rgba(0,0,0,0.8);text-align: center">
                                    Your cart is empty!<br>
                                    Go <a href="browse.php">back</a> to products?
                                </p><br><br>
                                <center><img src="img/emptycart.jpg" height="100px" width="120px" alt="Your cart is empty!"></center>
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
                           
                         ?><form action="success.php" method="post">
                        <tr>
                            <td><?php echo $counter ?></td><td><?php $namehere=$row['name']; echo $row['name'];?></td><td><?php echo $row['price']; $price=$row['price']?><input type="hidden" name="price" readonly value="<?php echo $price;?>"></td><td><?php echo '<input type="number" name="qty" ng-model='.$namehere.' placeholder="Enter Quantity" min="0" value="1" required="true">';?><input type="hidden" name="id" value="<?php echo $user_id?>">
                                <input type="hidden" name="id2" value="<?php $itemid=$row['id']; echo $itemid?>"></td>
                        </tr>
                        <tr>
                            <td></td><td>Total</td><td>Rs <span ng-bind="<?php echo $price; $price=0;?>*<?php echo $namehere;  $namehere=''?>"></span>/-</td><td><input type="submit" value="Place order" class="btn btn-primary"><a style="margin-left: 20px;" href='cart_remove.php?id=<?php echo $row['id'] ?>' class="btn btn-danger">Remove Item</a></td>
                        </tr></form>
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
<script type="text/javascript">
    let c=0;
    function getmodel()
    {
        c=c+1;
        return parseString(c)
    }
</script>
</html>
