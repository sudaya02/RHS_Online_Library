<? ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mail</title>
</head>

<body>
<?php

			$message = '<html><body>';
			//$message .= '<img src="http://mahaudayam.com/logo/logo.png" width="400" alt="Website Change Request" />';
			$message .= "<br />Dear ".$usename.",<br />";
			$message .= "Thank you for signing up with us.<br />Your new account has been setup and you can now login to our Reservoir High School Library using the details below.";
			$message .= "<br /><br />";
			$message .= "Username : ".$email."<br />";
			$message .= "Password : ".$pass."<br /><br />";
			
			$message .= "To login, visit http://rhslibrary.com/";
			$message .= "<br /><br />";
			$message .= "Thank You<br />";
			$message .= ":: RHS Library ::";
			$message .= "</body></html>";
			
			$to = $emi;
			
			$subject = 'Confirm Registration';
			
			$headers = "From: RHS Library (info@rhslibrary.com)\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			mail($to, $subject, $message, $headers);
			
			?>			
</body>
</html>
<? ob_flush(); ?>