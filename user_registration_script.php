<?php
    require 'connection.php';
    session_start();
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=index.php" />
        <?php
    }
    $password=$_POST['password'];
    if(strlen($password)<6){
        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=index.php" />
        <?php
    }
    $contact=$_POST['contact'];
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $country=mysqli_real_escape_string($con,$_POST['country']);
    $state=mysqli_real_escape_string($con,$_POST['state']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $duplicate_user_query="select id from users where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=index.php" />
        <?php
    }else{
        $user_registration_query="insert into users(name,email,password,contact,city,address,state,country) values ('$name','$email','$password','$contact','$city','$address','$state','$country')";
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        $_SESSION['email']=$email;
        $_SESSION['id']=mysqli_insert_id($con); 
        ?>
        <meta http-equiv="refresh" content="0;url=index.php" />
        <?php
    }
    
?>