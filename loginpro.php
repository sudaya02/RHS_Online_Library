<? ob_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/mahastyle.css" />
</head>

<body>

<?php
session_start();

if(isset($_POST['username']))
{
	$un=mysql_real_escape_string($_POST['username']);
	$pw=mysql_real_escape_string($_POST['password']);
	if( $un && $pw)
	{
	include("dbclass.php");
	
	$login=mysql_query("SELECT * FROM user WHERE Emailadd='$un'");
	
	while($log=mysql_fetch_assoc($login))
	{
		$dbusername= $log['Emailadd'];
		$dbpassword= $log['Passwordd'];
		$_SESSION['id']=$log['User_ID'];
	}
	if( $un==$dbusername && $pw==$dbpassword)
	{

		header("location:log/librarian/dashboard.php");
	}
	else
	{
		header("location:login.php?notify=Incorrect User Name or Password.");
	}

	}
	else
	{
		header("location:login.php?notify2=Please fill required fields");
	
	}
}

?>

</body>
</html>
<? ob_flush();?>