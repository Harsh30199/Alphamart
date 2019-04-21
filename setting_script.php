<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }  
    $old_password=$_POST['oldPassword'];
    $new_password=$_POST['newPassword'];
    $email=$_SESSION['email'];

    $password_from_database_query="select password from users where email='$email'";
    $password_from_database_result=mysqli_query($con,$password_from_database_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($password_from_database_result);

    if($row['password']==$old_password){
        $update_password_query="update users set password='$new_password' where email='$email'";
        $update_password_result=mysqli_query($con,$update_password_query) or die(mysqli_error($con));
        ?>
        <script>
            window.alert("Password successfully updated!");
        </script>
        <meta http-equiv="refresh" content="0;url=index.php" />
        <?php
    }else{
        ?>
        <script>
            window.alert("Wrong password!!");
        </script>
        <meta http-equiv="refresh" content="1;url=settings.php" />
        <?php
    }
?>