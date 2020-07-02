<?php 
	require_once("includes/config.php");
	require_once("includes/classes/VDatabase.php");
	
	$db = new VDatabase(true);
		
		$message = "";
	
	if(isset($_POST['submit']))	
	{
			$fullname	= mysql_real_escape_string($_POST['fullname']);
			$phone 		= mysql_real_escape_string($_POST['phone']);
			$emailid	= mysql_real_escape_string($_POST['emailid']);
			
		if($message == "")
		{ 
		
				$sql = sprintf("INSERT INTO users (FullName, Phone, EmailId) VALUES ('%s','%s','%s')", $fullname, $phone, $emailid);
				$db->insertRow($sql);	
				
				$message = "User added successfully";				
		}
			
	}
		
		$db->closeConnection();
		
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- SITE TITLE -->
    <title>Simple PHP</title>
   
</head>
<body> 
	<div style="padding: 200px">
		<?php if(isset($message)) echo $message."<br/><br/>"; ?>
		<form name="adduser" method="post" action="">
			<label style="width: 150px; float: left">Full Name : </label>
			<input  type="text" name="fullname" value=""/>
			<br/><br/>
			<label style="width: 150px; float: left">EmailId : </label>
			<input  type="email" name="emailid" value=""/>
			<br/><br/>
			<label style="width: 150px; float: left">Phone : </label>
			<input  type="text" name="phone" value=""/>
			<br/><br/>
			<input type="submit" name="submit" value="Submit"/>
		</form>
	</div>
</body>
</html>