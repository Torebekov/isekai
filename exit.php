<?php
session_start();
include_once 'handler.php'; // проверяем авторизирован ли пользователь

// проверяем авторизацию пользователя
if($user OR $admin) {
	setcookie('login', '', time()-1, '/');
	setcookie('password', '', time()-1, '/');
	
    session_destroy();
	header ('Location: index.php');

} 



?>