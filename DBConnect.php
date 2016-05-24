<?php #DBConnect.php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

 echo($server." ".$username." ".$password." ".$db);

$conn = new mysqli($server, $username, $password, $db);

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
