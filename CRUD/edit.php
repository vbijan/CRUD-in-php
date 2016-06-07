<?php
	require ("databaceconnect.php");

	
$id=$_GET["id"];
//echo $id;

$firstname=mysql_real_escape_string($_POST['fname']);
  $lastname=mysql_real_escape_string($_POST['lname']);
  $address=mysql_real_escape_string($_POST['address']);
   $phone=mysql_real_escape_string($_POST['phno']);

$sql="Update student_info set firstname='$firstname',lastname='$lastname',
address='$address',phone='$phone' where s_id=$id";
mysql_query($sql);

header("Location: view.php");
?>