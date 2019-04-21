<?php 
require 'connection.php';

if(isset($_POST) & !empty($_POST)){
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$sql = "SELECT * FROM `users` WHERE email = '$email'";
	$res = mysqli_query($con, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		$r = mysqli_fetch_assoc($res);
		$password = $r['password'];
		$to = $r['email'];
		$subject = "Your Recovered Password";
 		$message = "Please use this password to login :  " . $password ."<br> -Team Alphamart";
		$headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: Team Alphamart <customersupport@aplhamart.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
		if(mail($to, $subject, $message, $headers)){
		    ?>
		  <script>
        	window.alert("Password sent to your registered Email id");
      	</script>
      	<meta http-equiv="refresh" content="0;url=index.php" />
	<?php 
		    
		}
		else{
		    ?>
		<script>
        	window.alert("Error occured mail not sent");
      	</script>
      	<meta http-equiv="refresh" content="0;url=index.php" />	<?php	}
	}
	else{
	    ?>
		<script>
        	window.alert("Unregistered Email id");
      	</script>
      	<meta http-equiv="refresh" content="0;url=index.php" />
      	<?php
	}
}
?>
