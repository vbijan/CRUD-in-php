<?php
require ('databaceconnect.php');
if (isset($_POST['submit'])){
$username=mysql_escape_string($_POST['user']);
$password=mysql_escape_string($_POST['pass']);
if (!$_POST['user'] | !$_POST['pass'])
 {
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='signup.html'
        </SCRIPT>");
exit();
     }
$sql= mysql_query("SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'");
if(mysql_num_rows($sql) > 0)
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        //window.alert('Login Succesfully!.')
        window.location.href='dashboard.html'
        </SCRIPT>");
exit();
}
else{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong username password combination.Please re-enter.')
        window.location.href='signup.html'
        </SCRIPT>");
exit();
}
}
else{
}
?>
