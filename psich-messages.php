<?php
session_start();
$db = new mysqli('10.8.204.177', 'u1159802_arman', '231957arman', 'db1159802_saebiz');
if(isset($_POST['submit'])){
	$user = $_GET['user'];
	$pshich = $_SESSION['psych'];
	$comment = $_POST['comment'];
	$today = date("F j, Y, g:i a"); 
	$sql = "INSERT INTO `chat`(`user`, `comment`, `psych`, `date`, `author`) VALUES ('$user','$comment','$pshich','$today', '$pshich')";
	$db->query($sql);
}


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/style.css">
</head>
	<body>
	<div style="display:none;" id="user">
		<?php echo $_GET['user'];?>
	
	</div>
	<div class="container">


	<?php include 'header.php';?>  
	<?php include 'menu.php';?>

	 <?php
	 include_once 'handler.php'; // проверяем авторизирован ли пользователь
	?>
	<form action="" method="post">
		
			<textarea rows="10" cols="60" name="comment"></textarea>
			<br>
			<input type="submit" name="submit">
	</form>
		<div id="get_data">
	</div>
	</div>

	<script src="jquery-3.2.1.min.js"></script> 
	<script src="ajax.js"></script>
	</body>
</html>
