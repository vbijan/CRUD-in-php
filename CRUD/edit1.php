<html>
<head>
<title>form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table>
	
	<form action = "edit.php?id=
	<?php
	echo $_GET["id"];
	?>
	" method = "POST" align="left" id="form">

First Name<br>
 <input text='text' name = 'fname' size="40"><br>
Last Name<br>
<input text='text' name = 'lname' size="40"><br>
Address<br>
<input text= 'text' name = 'address' size="40"><br>
Phone No<br>
<input text='text' name = 'phno' size="40"><br><br>
<input type = 'submit' name = 'submit' value = 'Save'>
<input type = 'reset' name = 'reset' value = 'Reset'>
</form>
</table>

</body>
</html>
