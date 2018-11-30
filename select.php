<?php

include_once 'handler.php';
session_start();

if(isset($_SESSION['psych'])){	
	$user = $_GET['user'];
	$psych = $_SESSION['psych'];
}else{
	$psych = $_GET['psych'];
	$user = $_SESSION['user'];
}

$db = new mysqli('10.8.204.177', 'u1159802_arman', '231957arman', 'db1159802_saebiz');
$sql = "SELECT * FROM chat WHERE user='$user' and psych='$psych' ";

$res = $db->query($sql);
$messages = array();

if($res){
	
	while($row = $res->fetch_assoc()){
		
		echo $row['author'].": ".$row['comment'];
		echo "<br/>";
			
	}
	
	
	
	
}else{
	echo "";
}


?>