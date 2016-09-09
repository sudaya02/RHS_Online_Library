<?php
include('dbcon.php');

$id=$_GET['id'];

mysql_query("delete from user where User_ID='$id'") or die(mysql_error());

header('location:users.php');
?>