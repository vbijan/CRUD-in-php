<?php
require 'databaceconnect.php';

$query = "SELECT *FROM Student_info";
mysql_query returns boolean value
if($is_query_run = mysql_query($query))
{
	echo "query executed<br>";
	
	while($query_execute = mysql_fetch_assoc($is_query_run))
	{
		echo '<table border = "1" style = "width:300"><tr><td>'.$query_execute['s_name'].'</td><td>'.$query_execute['s_class'].'</td></tr></table>';
		echo $query_execute['s_name'].'<br>';
	}
}
else
{
	echo "query not executed";
}

?>