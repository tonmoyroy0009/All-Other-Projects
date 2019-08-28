<?php 


if(isset($_POST['submit'])){

require_once("../resources/config.php");

$id =$_POST['id'];
$name = $_POST['name'];

$id1 =$_POST['id1'];
$name1 = $_POST['name1'];


$query ="insert into form values('".$id."','".$name."')";
$result=$connection->query($query);



$query1 ="insert into form1 values('".$id1."','".$name1."')";
$result=$connection->query($query1);




$connection->close();


}


?>