<?php #DBConnect.php
$conn = new PDO("pgsql:host=ec2-54-225-100-236.compute-1.amazonaws.com;port=5432;dbname=d2d2lsqfkquc0m;user=niclzsjyoobfnu;password=86vVCQmpq47Z6893OZ5qwYdSx1"); 

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
