<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>print_ctl</title>
</head>

<body>
<?php
	
	$name = $_POST['name'];
	$passwd = $_POST['passwd'];
	$content = $_POST['content'];
	$content = stripslashes($content);
//	echo $content;
	$fp = fopen("./code/temp.txt", "w");
//	$content = date('H-i-s')."\t\t".$name."\n\n".$content;
	fwrite($fp, $content);
	fclose($fp);
?>
</body>
</html>
