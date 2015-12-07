<?php

include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RGDeuce Client Portal | <?php echo $pagetitle ?></title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script> 
<link rel="stylesheet" href="../css/style.css" />         

</head>

<body>
<header><div class="container">
<div class="logo"><?php if(login_check($mysqli) == true) : ?> <a href="home.php"><img src="images/logo.png" /></a><?php else : ?> <a href="/"><img src="images/logo.png" /></a> <?php endif; ?></div>
<nav>
<ul class="menu admin">
<li><a href="homepages.php">Homepage Mockups</a></li>
<li><a href="internals.php">Internal Mockups</a></li>
<li><a href="logos.php">Logo Designs</a></li>
<li><?php if(login_check($mysqli) == true) : ?><a href="/includes/logout.php">Logout</a><?php else : ?><a href="/">Login</a><?php endif; ?></li>
<div class="clear-both"></div>

</ul>
</nav>
</div> <!-- container -->
</header>
<div class="main container">
