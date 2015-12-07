<?php


include_once 'header.php';

$username = $_SESSION['username'];
$clientname = $_SESSION['name'];?>

 <?php if (login_check($mysqli) == true) : ?>
 
 <h2>Mockups </h2>
 <?php
$query1 = "SELECT * FROM internal WHERE clientname='$clientname' Order By Date DESC ";
$result1 = mysqli_query($mysqli,$query1) or die('Error: ' . mysqli_error($mysqli));
    while ($row1=mysqli_fetch_array($result1))
    {
        $internalimage = $row1['image'];
		$internaldate = $row1['date'];
		$internaldesc = $row1['description'];
		$id = $row1['id'];
		
		echo '<div class="homepage-mock">
  <a href ="internal.php?clientname='.$clientname.'&id='.$id.'"><img src="';
  echo $internalimage;
  echo '" class="homepagesmock" /></a> <br />';
 echo $internaldate ;
 echo '<br />';
 echo $internaldesc ;
echo '<br />
 </div>';
	}


?>
 </div>
 
<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
</body>
</html>