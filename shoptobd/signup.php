<!DOCTYPE html> 
	<html> 
	<head> 
	<title>Signup | ShoptoBD </title> 
	<!-- Bootstrap --> 
	<link href="css/style.css" rel="stylesheet" media="screen"> 

	<link href="css/style.css" rel="stylesheet" media="screen"> 

	<link href="css/style.css" rel="stylesheet" media="screen"> 

	
	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script> 

	</head> 
	
	<body id="login"> 
	<div class="container"> 
	<form action="insertform.php" class="form-signin" method="post"> 
	<h1 ><Center>Sign Up</center></h1><hr /> 
	<p>
	<label>Full Name </label>
	<input type="text" class="input-block-level" placeholder="Full Name" name="txtfullname" required /> 
	<p><br>
	<input type="text" class="input-block-level" placeholder="Username" name="txtuname" required /> <br><br>
	<input type="text" class="input-block-level" placeholder="Mobile" name="txtmobile" required /> <br><br>
	<input type="text" class="input-block-level" placeholder="Facebook Profile" name="txtfb" required /> <br><br>
	<input type="email" class="input-block-level" placeholder="Email address" name="txtemail" required /> <br><br>
	<textarea name='txtaddress' class="input-block-level" placeholder="Address" rows="4" id="comment"></textarea> <br><br>
	<input type="password" class="input-block-level" placeholder="Password" name="txtpass" required /> 
	<hr /> 
	<button class="btn btn-large btn-primary" type="submit" name="btn-signup"><a href="dashboard.php">Sign Up</a></button> <br><br>
	<a href="index.php" style="float:left;" class="btn btn-large"><button>Sign In</button></a> 

	</form> 
	
	</div> <!-- /container --> 
	 

	</body> 
	</html>
