<?php

	$db = new mysqli('10.8.204.177', 'u1159802_arman', '231957arman', 'db1159802_saebiz');
	$sql = "SELECT * FROM admin";
	$res = $db->query($sql);
	
	$users = array();
	
	while($row = $res->fetch_assoc()){
		
		$users[] = $row;
		
	}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/style.css">
</head>
<body>

<div class="container">


<?php include 'header.php';?>  
<?php include 'menu.php';?>
<?php include_once 'handler.php'; ?>
<table border="3">
	
	<tbody>
		<tr>
			<td>
				Name
			</td>
		</tr>
		<?php foreach($users as $user): ?>
			<tr>
				<td>
					<?php echo $user['login'];?>
				</td>
				<td>
					<a href="user-messages.php?psych=<?php echo $user['login'];?>">ASK</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
	
</table>