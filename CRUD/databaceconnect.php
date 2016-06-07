<?php
$mysql_host= 'localhost';
$mysql_user = 'root';
$mysql_password = '';
$db = @mysql_connect($mysql_host,$mysql_user,$mysql_password);

if(!$db)
{
	die ('cannot connect to database');
}
else{
		if(!mysql_select_db('student'))
		{
			echo 'cannot connet';

		}
		else
		{
		

			//echo 'connection success';
		}	
	}
	//$dbcon = mysqli_connect('localhost','root','','student');
?>