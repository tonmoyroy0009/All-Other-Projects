<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header id="main-header">
  <div class="container">
    <h1 align="center">
      Welcome to cricket database
    </h1>
  </div>
</header>
<nav id="navbar" >
  <div class="container">
   <ul align ="center">
     <li><a href="index.php">Bccb</a></li>
     <li><a href="player.php">Cricket player</a></li>
     <li><a href="club.php">Cricket club</a></li>
     <li><a href="index.php">search</a></li>
   </ul>
   </div>


<div style="height: 40px;background-color: white"></div>

<div style="background-color: grey">

	<h2 style="margin: 0"><center>Player Registration Form</center></h1> 
      <title> Player registration</title>
	  <form action ="savedata.php" method="post">
	  </head>
	  
	 <hr>
	 <fieldset>
	 <legend>Personal details</legend>
	  First Name:<input type="text" name="fn"><br><br>
       Middle Name:<input type="text" name="mn"><br><br>
       Last Name:<input type="text" name="ln"><br><br>
       Father's Name:<input type="text" name="frn"><br><br>
       Mother's Name:<input type="text" name="mrn"><br><br>
       Date of Birth:<input type="date" name="dob"><br><br>
	   </fieldset>
	   <hr>
	   <fieldset>
	   <legend>Permanent address</legend>
	   
	   House no:<input type="number" name="h"><br><br>
       Location:<input type="text" name="l"><br><br>
       Village:<input type="text" name="v"><br><br>
       Thana:<input type="text" name="t"><br><br>
       District:<input type="text" name="d"><br><br>
       Post code:<input type="number" name="p"><br><br>
	   </fieldset>
	   <hr>
	   <fieldset>
	   <legend>Present address</legend>
	   
	   House no:<input type="number" name="ho"><br><br>
       Location:<input type="text" name="lo"><br><br>
       Village:<input type="text" name="vi"><br><br>
       Thana:<input type="text" name="th"><br><br>
       District:<input type="text" name="di"><br><br>
       Post code:<input type="number" name="po"><br><br>
	   </fieldset>
	   
	   <fieldset>
	   <legend>Previous history</legend>
	   
	   
       <table style="width:57.5%">
       <tr>
        <th>Club name</th>
       <th>from</th> 
       <th>To</th>
	   <th>Total Run</th>
	   <th>Total wicket</th>
	   <th>Team Leader</th>
       </tr>
       <tr>
       <td><input type="text" name="cn1"></td>
       <td><input type="date" name="fr1"</td>
	   <td><input type="date" name="to1"</td>
	   <td><input type="number" name="tr1"</td>
	   <td><input type="number" name="tw1"</td>
	   <td><input type="text(1)" name="tl1"</td>
       </tr>
       <tr>
       <td><input type="text" name="cn2"></td>
       <td><input type="date" name="fr2"</td>
	   <td><input type="date" name="to2"</td>
	   <td><input type="number" name="tr2"</td>
	   <td><input type="number" name="tw2"</td>
	   <td><input type="text(1)" name="tl2"</td>
       </tr>
  
       </table>
	  
	   
	   </fieldset>
	   <br>
	   <br>
	   
      <fieldset>
      <legend>Best Performance</legend>
	   <table>
       <tr>
       <th>Club name</th>
       <th>Oponent Club name</th>
       <th>Event id</th>
       <th>Match id</th>
       <th>Runs</th>
       <th>wicket</th>
       </tr>
       <tr>
       <td><input type="text"name="cn1"></td>
       <td><input type="text"name="ocn1"></td>
       <td><input type="text"name="evi1"></td>
       <td><input type="text"name="mati1"></td>
       <td><input type="number"name="run1"></td>
       <td><input type="number"name="wic1"></td>
        </tr>
       <tr>
       <td><input type="text"name="cn2"></td>
       <td><input type="text"name="ocn2"></td>
       <td><input type="text"name="evi2"></td>
       <td><input type="text"name="mati2"></td>
       <td><input type="number"name="run2"></td>
       <td><input type="number"name="wic2"></td>
       </tr>
       <tr>
       <td><input type="text"name="cn3"></td>
       <td><input type="text"name="ocn3"></td>
       <td><input type="text"name="evi3"></td>
       <td><input type="text"name="mati3"></td>
       <td><input type="number"name="run3"></td>
       <td><input type="number"name="wic3"></td>
       </tr>

       </table>
       </fieldset>
	   <br>
	   <br>
	   
	   <fieldset>
	   <legend>Educational qualifications</legend>
	   
	   Degree:<input type="text" name="de"><br><br>
	   Institute:<input type="text" name="in"><br><br>
	   Department:<input type="text" name="dep"><br><br>
	   Board:<input type="text" name="bo"><br><br?
	   Year:<input type="number" name="ye"><br><br>
	   
	  </fieldset>
	  
	   
	   <hr>
	   <fieldset>
	   <legend>Membership</legend>
	   <table>
	   	<tr>
	   	<th>
	   		Membershipid Id
	   	</th>
	   	<th>
	   		Name of the membership
	   	</th>
	   	<th>
	   		Type
	   	</th>
	   	<th>
	   		Registran date
	   	</th>
	   	<th>
	   		Expiration date
	   	</th>
	   	
	   </tr>
	   <tr>
       <td><input type="text"name="cn2"></td>

       <td><input type="text"name="ocn2"></td>

       <td><input type="text"name="evi2"></td>

       <td><input type="text"name="mati2"></td>
       
       <td><input type="number"name="run2"></td>
     
        </tr>
	   </table>
	    
	   
	   
	   
	   
	   </fieldset>
	   
	   <fieldset>
	   DATE of Registration:<input type="date"><br><br>
	   
	   signature:<textarea rows=1></textarea>
	   </fieldset>
	   
	   
	  
	   <fieldset>
	   <input type="submit" name="submit"
	   </fieldset>
	   </form>
	
		
















	
</div>

















<div id="main-footer">
  
<footer  align="center">
  <p>Copyright &copy;My websitM</p>
</footer>
</div>

</body>
</html>