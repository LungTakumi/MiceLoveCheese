<?php #DBConnect.php
$conn = new mysqli();
$host ="localhost";
$user ="root";
$password = "";
$dbname = "project_1";
$conn -> connect($host, $user, $password, $dbname);
if (mysqli_connect_errno()) {
 echo("Failed to connect, the error message is : ".
 mysqli_connect_error());
 exit();
}

if (!mysqli_set_charset($conn, "utf8")) {  
} 
else {
} 
?>
