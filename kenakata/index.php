<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
body  {
  background-image: url("computer.jpg");
  background-color: #cccccc;
  background-size: 1920px 840px;
}
</style>
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
        
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h1><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></h1><br><br>
		<h2><font color='black'>Want to Buy Products??</font></h2>
		<a href="order.php" class="w3-button w3-black"><button type="submit" class="btn" name="login_user">Order</button></a><br><br>
		<a href="123.php" class="w3-button w3-black"><button type="submit" class="btn" name="login_user">Change password</button></a><br><br>
    	<p> <a href="index.php?logout='1'" style="color: red;"><button type="submit" class="btn" name="login_user">logout</button></a> </p>
    <?php endif ?>
	
</div>

        
		
</body>
</html>