<!DOCTYPE html>
<html>
<head>
	<title>AlphaMart</title>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php
require 'header.php';
?><br><br><br><br>
	<div class="container">
		<div class="well" style="margin-right: 180px;margin-left: 180px; background-color: rgb(0,0,0,0.8);color:white;">
<form name="fgtpass.php" method="post" action = "validate_forgot.php">
<div class="form-group">
    <label>Please enter the Email address you used to register: </label><br>
    <input type="email" class="form-control" name="email" placeholder="Enter Email">
</div>
<div class="form-group">
    <input type="submit" class="form-control btn btn-primary brn-block" value="Get Password">
</div>
</form>
</div>
</div>
<center><img src="img/ques.jpg" height="200px" width="240px" alt="Image not Available!"></center>
</body>
</html>