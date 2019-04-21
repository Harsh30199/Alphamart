<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button{
  background-color: transparent;
  color: #999999;
  border: none;
  padding: 15px;
}
button:hover{
  color: white;
}
select{

}
.loginbtn, .signupbtn {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 6px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

.modal {
  display: none;
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}

.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto;
  border: 1px solid #888;
  width: 80%; 
}

.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}

</style>

<nav id="navbar" class="navbar navbar-inverse">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand">The AlphaMart</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar"> 
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><span class="glyphicon glyphicon-user"></span> Sign Up</button></li>
                           <li><button onclick="document.getElementById('id01').style.display='block'"> <span class="glyphicon glyphicon-log-in"></span> Login</button></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="login_submit.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/avatar.gif" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="email"><b>Enter Email</b></label><br>
      <input type="email" class="form-control" name="email" placeholder="  xyz@abc.comx" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>

      <label for="password"><b>Enter Password</b></label><br>
      <input type="password" class="form-control" name="password" placeholder="minimum 6 characters" pattern=".{6,}" required><br>
      

      <input type="submit" value="Login" class="loginbtn btn btn-success"><br>
      <span>Forgot <a href="fgtpass.php">password?</a></span>
    </div>
  </form>
</div>
<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<?php
            $dbcon=mysqli_connect("localhost","id9149179_root","123456");
            if($dbcon){
                mysqli_select_db($dbcon,'id9149179_database');
            }
            else{
                die("Error! Could not connect");
            }
            $query="SELECT * from country";
            $result = mysqli_query($dbcon,$query);
            while($row=mysqli_fetch_assoc($result)) {
              $resultset[] = $row;
            }
            $results=$resultset;
?>

<div id="id02" class="modal">

  <form class="modal-content animate" method="post" action="user_registration_script.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p> 
      <hr>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
                             <div class="form-group">
                                  <select name="country" id="country-list" class="form-control" onChange="getState(this.value);">
                                  <option value disabled selected>Select Country</option>
                                  <?php
                                  foreach($results as $country) {
                                  ?>
                                  <option value="<?php echo $country["id"]; ?>"><?php echo $country["name"]; ?></option>
                                  <?php
                                  }
                                  ?></select>
                            </div>
                            <div class="form-group">
                              <select name="state" id="state-list" class="form-control" onChange="getCity(this.value);" required="true">
                                    <option value="">Select State</option>
                                </select>
                            </div>
                            <div class="form-group">
                              <select name="city" id="city-list" class="form-control" required="true">
                                    <option value="">Select City</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="signupbtn" value="Sign Up" required="true">
                            </div>
    </div>
  </form>
</div>

<script>
function getState(val) {
  $.ajax({
  type: "POST",
  url: "getState.php",
  data:'country_id='+val,
  success: function(data){
    $("#state-list").html(data);
    getCity();
  }
  });
}


function getCity(val) {
  $.ajax({
  type: "POST",
  url: "getCity.php",
  data:'state_id='+val,
  success: function(data){
    $("#city-list").html(data);
  }
  });
}

</script>

<script>
var modal = document.getElementById('id02');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>