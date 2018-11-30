<?php
        include_once 'handler.php'; // проверяем авторизирован ли пользователь

        // если да, перенаправляем его на главную страницу
        if($user) {
        header ('Location: index.php');
        exit();
        }

        if (!empty($_POST['login']) AND !empty($_POST['password']))
        {
         // фильтрируем логин и пароль
         $login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
         $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));
         // проверяем есть ли логин в нашей базе данных
            if (mysql_result(mysql_query("SELECT COUNT(*) FROM `user` WHERE `login` = '".$login."' LIMIT 1;"), 0) != 0)
        {
            
            header ('Location: reg-not-ok.php');
            
        }

        

        else {
            mysql_query("INSERT INTO `user` (`login`, `password`) VALUES ('".$login."', '".$password."')");
            
            header ('Location: reg-ok.php');
            

        exit();
    }
    }

    ?>