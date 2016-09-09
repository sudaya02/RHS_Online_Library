<? ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$server="Localhost";
$db="reservoir_high_school";
$username="root";
$password="";
$con=mysql_connect($server,$username,$password);
mysql_select_db($db,$con);

?>


</body>
</html>
<? ob_flush(); ?>
