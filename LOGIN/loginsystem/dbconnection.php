<?php
define('DB_SERVER','localhost');
define('DB_USER','habadati_login');
define('DB_PASS' ,'--%FT1RR7cm{');
define('DB_NAME', 'habadati_login');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to Your MySQL: " . mysqli_connect_error();
 }

?>

