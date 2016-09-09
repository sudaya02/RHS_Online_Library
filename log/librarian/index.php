<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">		
                       
<?php

$sql=mysql_query("SELECT * FROM author");
	$auth=mysql_num_rows($sql);
	
	$sql1=mysql_query("SELECT * FROM book");
	$book=mysql_num_rows($sql1);
	
	$sql2=mysql_query("SELECT * FROM member");
	$mem=mysql_num_rows($sql2);
	
	$sql3=mysql_query("SELECT * FROM publisher");
	$pub=mysql_num_rows($sql3);
	
	$sql4=mysql_query("SELECT * FROM user");
	$user=mysql_num_rows($sql4);
	
	$sql5=mysql_query("SELECT * FROM borrow");
	$bor=mysql_num_rows($sql5);
?>

		<div id="signup-form">
		<div class="clearfix" id="header">
                <h1 style="color:#999999; text-align: center; margin-top:40px; margin-bottom:40px;"><img src="../images/computer.png" width="40px;" />&nbsp;&nbsp;Dashboard</h1>      
				</div>   

<table align="center">
<tr>
<td>				
<div style="width: 176px; height: 71px; border: 1px #b8b8b8 solid; background-color: #fff; margin-right:10%; margin-bottom:20px; padding:20px;"><img src="../images/education.png" /><p style=" position: absolute; margin-top:-50px; margin-left:80px;"><?php echo "<b>".$mem."</b><br>Members"; ?></p></div></td>
<td>				
<div style="width: 176px; height: 71px; border: 1px #b8b8b8 solid; background-color: #fff; margin-right:10%; margin-bottom:20px; padding:20px;"><img src="../images/professor.png" /><p position: absolute; style="margin-top:-50px; margin-left:80px;"><?php echo "<b>".$user."</b><br>Users"; ?></p></div></td>
<td>				
<div style="width: 176px; height: 71px; border: 1px #b8b8b8 solid; background-color: #fff; margin-right:10%; margin-bottom:20px; padding:20px;"><img src="../images/lady.png" /><p position: absolute; style="margin-top:-50px; margin-left:80px;"><?php echo "<b>".$pub."</b><br>Publishers"; ?></p></div></td>
</tr>
<tr>
<td>				
<div style="width: 176px; height: 71px; border: 1px #b8b8b8 solid; background-color: #fff; margin-right:10%; margin-bottom:20px; padding:20px;"><img src="../images/201402022155556.png" /><p position: absolute; style="margin-top:-50px; margin-left:80px;"><?php echo "<b>".$bor."</b><br>Borrows"; ?></p></div></td>
<td>				
<div style="width: 176px; height: 71px; border: 1px #b8b8b8 solid; background-color: #fff; margin-right:10%; margin-bottom:20px; padding:20px;"><img src="../images/file.png" /><p position: absolute; style="margin-top:-50px; margin-left:80px;"><?php echo "<b>".$book."</b><br>Books"; ?></p></div></td>
<td>				
<div style="width: 176px; height: 71px; border: 1px #b8b8b8 solid; background-color: #fff; margin-right:10%; margin-bottom:20px; padding:20px;"><img src="../images/User.png" /><p position: absolute; style="margin-top:-50px; margin-left:80px;"><?php echo "<b>".$auth."</b><br>Authors"; ?></p></div></td>
</tr>
</table> 
  

				
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>