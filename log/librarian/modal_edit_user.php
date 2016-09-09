	<div id="edit<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" for="inputEmail">Username</label>
				<div class="controls">
				<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['User_ID']; ?>" required>
				<input type="email" id="inputEmail" name="username" value="<?php echo $row['Emailadd']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				<input type="password" name="password" id="inputPassword" value="<?php echo $row['Passwordd']; ?>" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Full Name</label>
				<div class="controls">
	
				<input type="text" id="inputEmail" name="firstname" value="<?php echo $row['Username']; ?>" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Contact</label>
				<div class="controls">

				<input type="tel" id="inputEmail" name="lastname" value="<?php echo $row['Contactno']; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="edit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>
	
	<?php
	if (isset($_POST['edit'])){
	
	$user_id=$_POST['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	
	mysql_query("update user set Emailadd='$username', Passwordd='$password' , Username = '$firstname' , Contactno = '$lastname'  where user_id='$user_id'")or die(mysql_error()); ?>
	<script>
	window.location="users.php";
	</script>
	<?php
	}
	?>