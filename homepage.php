<?php


include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RGDeuce Client Portal | <?php echo $clientname ?> Homepage Design</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script> 
<link rel="stylesheet" href="../css/style.css" />         

</head>

<body>
 <?php 
 $clientname = $_GET['clientname'];
 $id = $_GET['id'];
$query = "SELECT * FROM homepage WHERE clientname='$clientname' AND id='$id'";
$result = mysqli_query($mysqli,$query) or die('Error: ' . mysqli_error($mysqli));
    while ($row=mysqli_fetch_array($result))
    {
        $homepageimage = $row['image'];
		$desc = $row['description'];
        //Step Through The Problem
        
    } ?>
    <div class="mockup-container">
<img src="<?php echo $homepageimage ?>" />
</div>
</body>
</html>