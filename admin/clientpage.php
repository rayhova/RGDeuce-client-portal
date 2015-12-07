<?php

include_once 'header.php';
$username = $_SESSION['username'];
$clientname = $_SESSION['name'];

$clientname2 = $_GET['clientname'];
$id = $_GET['id']; ?>

<?php if (login_check($mysqli) == true) : ?>
<div class="col-md-4"><div class="list-title">Homepages</div><ul class="item-list">
<?php $query1 = "SELECT * FROM homepage WHERE clientname='$clientname2' Order By Date DESC";
$result1 = mysqli_query($mysqli,$query1) or die('Error: ' . mysqli_error($mysqli));
    while ($row1=mysqli_fetch_array($result1))
    {
        $homepageimage = $row1['image'];
		$homedate = $row1['date'];
		
	echo '<li>';
	echo '<img src="'.$homepageimage.'"/> <br />'.$homedate;
	echo '</li>';	
	}?></ul></div>
    <div class="col-md-4"><div class="list-title">Internals</div><ul class="item-list">
	<?php $query2 = "SELECT * FROM internal WHERE clientname='$clientname2' Order By Date DESC";
$result2 = mysqli_query($mysqli,$query2) or die('Error: ' . mysqli_error($mysqli));
    while ($row2=mysqli_fetch_array($result2))
    {
        $internalimage = $row2['image'];
		$internaldate = $row2['date'];
		
	echo '<li>';
	echo '<img src="'.$internalimage.'"/> <br />'.$internaldate;
	echo '</li>';		
	} ?></ul></div>
     <div class="col-md-4"><div class="list-title">Logos</div><ul class="item-list">
    <?php 
	$query3 = "SELECT * FROM logos WHERE clientname='$clientname2' Order By Date DESC";
$result3 = mysqli_query($mysqli,$query3) or die('Error: ' . mysqli_error($mysqli));
    while ($row3=mysqli_fetch_array($result3))
    {
        $logoimage = $row3['image'];
		$logodate = $row3['date'];
		
	echo '<li>';
	echo '<img src="'.$logoimage.'"/> <br />'.$logodate;
	echo '</li>';
	}
		
	
	
			
		 ?>
         </ul></div>
    <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
</body>
</html>