<?php
include_once 'header.php';
$username = $_SESSION['username'];
$clientname = $_SESSION['name'];

$query1 = "SELECT * FROM homepage WHERE clientname='$clientname' Order By Date DESC LIMIT 1";
$result1 = mysqli_query($mysqli,$query1) or die('Error: ' . mysqli_error($mysqli));
    while ($row1=mysqli_fetch_array($result1))
    {
        $homepageimage = $row1['image'];
		$homedate = $row1['date'];
	}
	$query2 = "SELECT * FROM internal WHERE clientname='$clientname' Order By Date DESC LIMIT 1";
$result2 = mysqli_query($mysqli,$query2) or die('Error: ' . mysqli_error($mysqli));
    while ($row2=mysqli_fetch_array($result2))
    {
        $internalimage = $row2['image'];
		$internaldate = $row2['date'];
	}
	$query3 = "SELECT * FROM logos WHERE clientname='$clientname' Order By Date DESC LIMIT 1";
$result3 = mysqli_query($mysqli,$query3) or die('Error: ' . mysqli_error($mysqli));
    while ($row3=mysqli_fetch_array($result3))
    {
        $logoimage = $row3['image'];
		$logodate = $row3['date'];
	}
		
?>

        <?php if (login_check($mysqli) == true) : ?>
            <p><?php echo htmlentities($_SESSION['name']); ?>, Welcome to your client design portal!</p>
            <p>Your Designs:</p>
            <p><table width="90%" border="0" cellspacing="0px">
  <tr class="table-headerrow">
    <td>&nbsp;</td>
    <td class="one-third-column"><a href="logos.php">LOGOS</a></td>
    <td class="one-third-column"><a href="homepages.php">HOMEPAGE</a></td>
    <td class="one-third-column"><a href="internals.php">INTERNAL</a></td>
  </tr>
  <tr>
    <td class="table-firstcolumn">LATEST IMAGE</td>
    <td><img src="<?php echo $logoimage ?>" class="homepagethumb"></td>
    <td><img src="<?php echo $homepageimage ?>" class="homepagethumb"></td>
    <td><img src="<?php echo $internalimage ?>" class="homepagethumb"></td>
  </tr>
  <tr>
    <td class="table-firstcolumn">DATE OF LAST SUBMISSION</td>
    <td><?php echo $logodate ?>;</td>
    <td><?php echo $homedate ?></td>
    <td><?php echo $internaldate ?></td>
  </tr>
  <tr>
    <td class="table-firstcolumn"># of DESIGNS</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

            </p>
            
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
    </body>
</html>