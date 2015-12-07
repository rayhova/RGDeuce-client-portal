<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RGDeuce Client Portal | <?php echo $pagetitle ?></title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script> 
<link rel="stylesheet" href="../admin/css/style.css" /> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />   

</head>

<body>
<header><div class="container">
<div class="logo"><?php if(login_check($mysqli) == true) : ?> <a href="home.php"><img src="images/logo.png" /></a><?php else : ?> <a href="/admin"><img src="images/logo.png" /></a> <?php endif; ?></div>
<nav>
<ul class="menu admin">
<li><a href="clientadd.php">Add Client</a></li>
<li><a href="homepageadd.php">Add Homepage Mockup</a></li>
<li><a href="internaladd.php">Add Internal Mockup</a></li>
<li><a href="logoadd.php">Add Logo Design</a></li>
<li><?php if(login_check($mysqli) == true) : ?><a href="/includes/logout.php">Logout</a><?php else : ?><a href="/">Login</a><?php endif; ?></li>
<div class="clear-both"></div>

</ul>
</nav>
</div> <!-- container -->
</header>
<div class="container">
