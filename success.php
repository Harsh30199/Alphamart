<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_POST['id'];
        $item_id=$_POST['id2'];
        $qty=$_POST['qty'];
        $confirm_query="update users_items set status='Confirmed', quantity=$qty where user_id=$user_id and item_id=$item_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>AlphaMart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
      <script>
        window.alert("Thank you for ordering! The item is removed from your cart and will be out for delivery soon :)");
      </script>
      <meta http-equiv="refresh" content="0;url=cart.php" />
</html>
