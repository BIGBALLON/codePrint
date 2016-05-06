<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>print_ctl</title>
	</head>

	<body>
	<?php
		
		$name = $_POST['name'];
		$passwd = $_POST['passwd'];
		$content = $_POST['content'];
		$content = stripslashes($content);
		$result = false;
		$handle = fopen('namelist', 'r');
		while($userinfo = fscanf($handle, "%s %s")){
			list($team, $password) = $userinfo;
			if($team == $name && $passwd == $password)
				$result = true;
		}
		fclose($handle);
		if(!$result){
			echo "<script language=javascript>alert('team number or password is wrong!');</script>";
			echo "<script language=javascript>history.back();</script>";
		}else {
		//phpinfo();
			$filename = "./code/".$name."-".date('H-i-s');
			$fp = fopen($filename, "wb");
			$content = date('H-i-s')."\t\t".$name."\n\n".$content;
			fwrite($fp, $content);
			fclose($fp);
			$command = "lpr -o prettyprint ".$filename;
			system($command);	
			echo "<script language=javascript>alert('Your code has been printed successfully, please wait a moment!');</script>";
			echo "<script language=javascript>history.back();</script>";
		}
	?>
	</body>
	
</html>
