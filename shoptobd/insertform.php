<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "shop");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}// Escape user inputs for security
$txtfullname = mysqli_real_escape_string($link, $_REQUEST['txtfullname']);
$txtuname = mysqli_real_escape_string($link, $_REQUEST['txtuname']);
$txtmobile = mysqli_real_escape_string($link, $_REQUEST['txtmobile']);
$txtfb = mysqli_real_escape_string($link, $_REQUEST['txtfb']);
$txtmail = mysqli_real_escape_string($link, $_REQUEST['txtmail']);
$txtadress = mysqli_real_escape_string($link, $_REQUEST['txtadress']);
// attempt insert query execution
$sql = "INSERT INTO customer (txtfullname, txtuname, txtmobile, txtfb,txtmail,txtadress) VALUES ('$txtfullname',
'$txtuname', '$txtmobile','$txtfb' , '$txtmail','$txtadress')";
if(mysqli_query($link, $sql)){
echo "Records added successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);
?>