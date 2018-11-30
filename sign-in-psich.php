<?php

include 'check.php';
session_start();
if(!empty($_POST['login']) AND !empty($_POST['password']))
    {
     // фильтрируем логин и пароль
     $login = mysql_real_escape_string(htmlspecialchars($_POST['login']));
     $password = mysql_real_escape_string(htmlspecialchars($_POST['password']));

     $search_user = mysql_result(mysql_query("SELECT COUNT(*) FROM `admin` WHERE `login` = '".$login."' AND `password` = '".$password."'"), 0);
	 
     if($search_user == 0)
     {
		
        header ('Location: sign-in-admin-not-ok.php');
        

    }
    else
    {
            // заносим логин и пароль в куки
            $time = 60*60*24; // сколько времени хранить данные в куках
            setcookie('login', $login, time()+$time, '/');
            setcookie('password', $password, time()+$time, '/');
            echo 'You succesfully authorised!     '; echo ($login);
			$_SESSION['psych'] = $login;
            header ('Location: index.php');
            exit();
        }
    }
?>
    