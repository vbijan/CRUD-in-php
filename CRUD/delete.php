<?php

require ("databaceconnect.php");


//perform database query


$id=$_GET["id"];

$sql=mysql_query("DELETE FROM student_info WHERE s_id=$id");
$result = mysql_query($sql);
header("Location: view.php");


?>