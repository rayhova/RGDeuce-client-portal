<?php 

mysqli_query($conn, "INSERT INTO clients (name, username, password) VALUES ('$_POST[name]','$_POST[username]','$_POST[password]')" );

echo "1 record added";
 
mysqli_close($conn)
?>