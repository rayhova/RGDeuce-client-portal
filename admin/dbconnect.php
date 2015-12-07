<?php
// This is an example dbconnect.php
$dbhost = 'localhost';

$dbuser = 'rgdclien_wpadmin';

$dbpass = 'lWdS&GI(DV^]';

$dbname = 'rgdclien_rgdportal';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
{
trigger_error("Connection failed: " . mysqli_connect_error());
          }


?>