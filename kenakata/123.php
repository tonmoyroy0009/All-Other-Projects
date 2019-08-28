<html>
     <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Password Change</title>
	<style>
body  {
  background-image: url("jacket.jpg");
  background-color: #cccccc;
  background-size: 1920px 840px;
}
</style>
     </head>
    <body>
    <h1><center>Change Password<center></h1>
   <form method="POST" action="456.php">
    <table>
    <tr>
   <td>Enter your UserName</td>
    <td><input type="username" size="10" name="username"></td>
    </tr>
    <tr>
    <td>Enter your existing password:</td>
    <td><input type="password" size="10" name="password"></td>
    </tr>
  <tr>
    <td>Enter your new password:</td>
    <td><input type="password" size="10" name="newpassword"></td>
    </tr>
    <tr>
   <td>Re-enter your new password:</td>
   <td><input type="password" size="10" name="confirmnewpassword"></td>
    </tr>
    </table>
    <p><input type="submit" value="Update Password">
    </form>
 
   <p> <a href="index.php?logout='1'" style="color: red;"><button type="submit" class="btn" name="login_user">logout</button></a> </p>
   </body>
    </html>