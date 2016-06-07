<?php

  
  //if(isset($_POST['submit'])!="")
  
  $firstname=mysql_real_escape_string($_POST['fname']);
  $lastname=mysql_real_escape_string($_POST['lname']);
  $address=mysql_real_escape_string($_POST['address']);
   $phone=mysql_real_escape_string($_POST['phno']);

   
 

   //creating db conncetion
   require_once ('databaceconnect.php');
   //mysql_connect("localhost","root","") or die ("could not connect");

   //selecting db to use
  // mysql_select_db("student") or die ("couldnot find database");
   //echo "successful connection";


   //perform database query


   $sql = "Insert INTO student_info(firstname,lastname,address,phone) VALUES('$firstname','$lastname','$address','$phone')";

$query = mysql_query($sql);
   
 
// if(mysql_query($sql)!=null)
// {
//  echo "alert("success")";
// }



header("Location: view.php")

?>