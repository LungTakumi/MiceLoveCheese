<?php #DBConnect.php
$conn = new mysqli();
$host ="postgres://niclzsjyoobfnu:86vVCQmpq47Z6893OZ5qwYdSx1@ec2-54-225-100-236.compute-1.amazonaws.com:5432/d2d2lsqfkquc0m";
$user ="niclzsjyoobfnu";
$password = "86vVCQmpq47Z6893OZ5qwYdSx1";
$dbname = "d2d2lsqfkquc0m";
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
