<?php

include 'dbconfig.php';
include 'dbconnect.php';

?>
<html><head>
<title>MyFridgeRental Administrative System</title>
<SCRIPT LANGUAGE="JavaScript">
function LoginWindow() {
       LoginWin = window.open('login.php', 'lWin', 'width=500,height=475,scrollbars=no,location=no,menubar=no,status=no,titlebar=no,directories=no,toolbar=no')
}
</SCRIPT>
</head><body bgcolor="#ffffff">
<CENTER><H2><FONT FACE="Arial">MyFridgeRental Administrative System - Products</FONT></H2>
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 WIDTH=100%>
<TR><TD><FONT FACE="Arial" SIZE=2>
<A HREF="productadd.php">Add a Product</A>

<P><TABLE BORDER=1 CELLPADDING=2 CELLSPACING=0 WIDTH=100%>
<TR><TH BGCOLOR="#CCCCCC"><FONT FACE="Arial" SIZE=2>Name</FONT></TH><TH BGCOLOR="#CCCCCC" COLSPAN=2><FONT FACE="Arial" SIZE=2>Actions</FONT></TH></TR>
<?php
	$productresult = mysql_query("select * FROM PRODUCT order by NAME");
	while($productinfo = mysql_fetch_array($productresult)) {
		$productid=$productinfo['ID'];
		$productname=$productinfo['NAME'];
		print "<TR><TD><FONT FACE=\"Arial\" SIZE=2>$productname</FONT></TD><TH><FONT FACE=\"Arial\" SIZE=2><A HREF=\"productadd.php?productid=$productid\">UPDATE</A></FONT></TH><TH><FONT FACE=\"Arial\" SIZE=2><A HREF=\"productdelete.php?productid=$productid\">DELETE</A></FONT></TH></TR>\n";
	}
	mysql_free_result($productresult);
?>
</TABLE>
<P>Return to the <A HREF="/admin/">Administration Start Page</A>
</FONT>
</TD></TR>
</TABLE></CENTER>
<?php
include 'dbdisconnect.php';
?>
</body></html>