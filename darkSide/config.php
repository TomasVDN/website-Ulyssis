<?php
/* Database credentials. */
define('DB_SERVER', 'mysql.ulyssis.org');
define('DB_USERNAME', 'rpone');
define('DB_PASSWORD', 'MVb3F8Fm#');
define('DB_NAME', 'rpone_authentication');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>