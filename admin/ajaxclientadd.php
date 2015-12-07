<?php
include_once 'dbconnect.php';


//Fetching Values from URL
$name2=$_POST['name1'];
$username2=$_POST['username1'];


$password = filter_input(INPUT_POST, 'p1', FILTER_SANITIZE_STRING);
if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }
$role2=$_POST['role1'];

  // Create a random salt
        //$random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE)); // Did not work
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
 
        // Create salted password 
        $password = hash('sha512', $password . $random_salt);
//Insert query
mysqli_query($conn, "INSERT INTO clients(name, username, password, salt, role) VALUES ('$name2', '$username2', '$password', '$random_salt', '$role2')");
echo "Form Submitted Succesfully";
mysqli_close($conn); // Connection Closed
?>