<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'enter server IP or domain here');
define('DB_USERNAME', 'enter username that has priviledges to database');
define('DB_PASSWORD', 'enter password for username');
define('DB_NAME', 'enter database name');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
