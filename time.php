<?php
	echo("Result with date():<br />");
	echo(date("l") . "<br />");
	echo(date("l dS \of F Y h:i:s A") . "<br />");
	echo("Oct 3,1975 was on a ".date("l", mktime(0,0,0,10,3,1975))."<br />");
	echo("ych ".date(DATE_RFC822) . "<br />");
	echo(date(DATE_ATOM,mktime(0,0,0,10,3,1975)) . "<br /><br />");

	echo("Result with gmdate():<br />");
	echo(gmdate("l") . "<br />");
	echo(gmdate("l dS \of F Y h:i:s A") . "<br />");
	echo("Oct 3,1975 was on a ".gmdate("l", mktime(0,0,0,10,3,1975))."<br />");
	echo(gmdate(DATE_RFC822) . "<br />");
	echo(gmdate(DATE_ATOM,mktime(0,0,0,10,3,1975)) . "<br />");
	echo(date("H-i-s"));
?>
