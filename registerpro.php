<? ob_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
$email=$_POST['email'];
$unam=$_POST['username'];
$pasword=$_POST['password'];
$gen=$_POST['gender'];
$conta = $_POST['contact']; 

include("dbclass.php");

$id=mysql_query("SELECT * FROM user");
$next_auto_id=mysql_num_rows($id)+1;
$auto_id=$next_auto_id;


$sql="INSERT INTO user(User_ID,Username,Gender,Emailadd,Contactno,RegistrationID,Passwordd,Roll,ClassID) values
('".$auto_id."','".$unam."','".$gen."','".$email."','".$conta."',' ','".$pasword."',' ',' ');";
mysql_query($sql,$con);

include ('mail.php');	
header("location:register.php?notify=Registration Success..! Please Login with your Username and Password");

?>

</body>
</html>
<? ob_flush();?>