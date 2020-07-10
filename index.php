<?php
	require_once("includes/config.php");
	require_once("includes/classes/VDatabase.php");
	
	$db = new VDatabase(true);
	$message = "";
	
	$query = sprintf("SELECT * FROM users ORDER BY UserId DESC");
	
	$rows = $db->getRows($query);
	
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
		<a href="adduser.php" style="float: right">Add User</a><br/>
		<table border="1px solid black" width="100%">
			<thead>
				<tr>
					<td>User ID</td>
					<td>Full Name</td>
					<td>Email</td>
					<td>Country</td>
					<td>Phone</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach($rows as $row) {?>
				<tr>
					<td><?php echo $row['UserId'];?></td>
					<td><?php echo $row['FullName'];?></td>
					<td><?php echo $row['EmailId'];?></td>
					<td><?php echo $row['Country'];?></td>
					<td><?php echo $row['Phone'];?></td>
				</tr>
				<?php } 
				if(count($rows) == 0)
				{
					echo "<tr><td colspan='4' style='text-align: center'>Users not found</td></tr>";
				}
				?>
				
			</tbody>
		</table>
	</div>
</body>
</html>
