<!DOCTYPE html>
<html>
<head>
    
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  *FROM student_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Address></th><th>Phone</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
        $id=$row["s_id"];
         echo "<tr><td>" . $row["s_id"]. "</td><td>" . $row["firstname"]. "</td><td> " . $row["lastname"]. "</td><td>".$row["address"]."</td><td>".$row["phone"]."</td><td>
         <a href=delete.php?id=$id>Delete</a></td><td>
         <a href=edit1.php?id=$id>Edit</a></td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}


$conn->close();
?>  
<br><br>


</body>
</html>