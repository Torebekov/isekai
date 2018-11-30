<?php
session_start();
$db = new mysqli('10.8.204.177', 'u1159802_arman', '231957arman', 'db1159802_saebiz');
if(isset($_POST['submit'])){
	$user = $_SESSION['user'];
	$pshich = $_GET['psych'];
	$comment = $_POST['comment'];
	$today = date("F j, Y, g:i a"); 
	$sql = "INSERT INTO `chat`(`user`, `comment`, `psych`, `date`,`author` ) VALUES ('$user','$comment','$pshich','$today', '$user')";
	$db->query($sql);
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
<?php include 'handler.php'; ?>

<div id="psych" style="display: none;">
	<?php echo $_GET['psych']?>
</div>


<form action="" method="post">
	<textarea rows="10" cols="60" name="comment"></textarea>
	<br>
	<input type="submit" name="submit">
</form>
<div id="get_data">
</div>
</div>

<script src="jquery-3.2.1.min.js"></script> 
<script>
var psych = document.getElementById('psych').innerHTML;


function dis()
		{
			xmlhttp = new XMLHttpRequest();
			var url = "select.php?psych="+psych;
			xmlhttp.open("GET", url, false);
			xmlhttp.send(null);
			document.getElementById('get_data').innerHTML = xmlhttp.responseText;
		}
		dis ();
		setInterval(function(){
			dis();
		},500);


</script>


</body>
</html>