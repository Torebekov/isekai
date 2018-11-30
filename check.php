<?php 

include_once 'handler.php'; // проверяем авторизирован ли пользователь

    // если да, перенаправляем его на главную страницу
if($user) {
    header ('Location: index.php');
    exit();
}

if($admin) {
    header ('Location: index.php');
    exit();
}


?>