<?php
	$homepageresult = mysql_query("select * FROM HOMEPAGE where ID=$homepageid");
	$homepageinfo = mysql_fetch_array($homepageresult) or die($homepageresult."<br/><br/>".mysql_error());;
	$homepagedesc=$homepageinfo['DESCRIPTION'];
	mysql_free_result($homepageresult) or die($homepageresult."<br/><br/>".mysql_error());;
?> 
