<?php
include_once 'header.php';
$username = $_SESSION['username'];
$clientname = $_SESSION['name'];

$pagetitle = "Add Homepage Mockup";

	
?>
<?php if (login_check($mysqli) == true) : ?>
<h2>Clients</h2>
<ul class="client-list">
<?php
$query1 = "SELECT * FROM clients";
$result1 = mysqli_query($mysqli,$query1) or die('Error: ' . mysqli_error($mysqli));
    while ($row1=mysqli_fetch_array($result1))
    {
        $clientname = $row1['name'];
		$id = $row1['clientid'];
		
		echo '<li>
  <a href ="clientpage.php?clientname='.$clientname.'&id='.$id.'">';
  echo $clientname;
  echo '</a> <li />';
 	}


?>

</ul>


<?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
</body>
</html>