<?php
include_once 'db_connect.php'; // проверяем подключение к базе данных

// проверяем заполнены ли логин и пароль в куках
if(!empty($_COOKIE['login']) AND !empty($_COOKIE['password']))
{
 // ищем пользователя в таблице users_profiles, mysql_real_escape_string используем как защиту от sql injection
 $search_user = mysql_query("SELECT * FROM `admin` WHERE `login` = '".mysql_real_escape_string($_COOKIE['login'])."' AND `password` = '".mysql_real_escape_string($_COOKIE['password'])."'");
 $admin = (mysql_num_rows($search_user) == 1) ? mysql_fetch_array($search_user) : 0;

 $userrow = mysql_real_escape_string($_COOKIE['login']);

}
else
{
 $admin = 0;
}


if (!empty($_COOKIE['login']) AND !empty($_COOKIE['password']) AND($admin==0)){

$search_user = mysql_query("SELECT * FROM `user` WHERE `login` = '".mysql_real_escape_string($_COOKIE['login'])."' AND `password` = '".mysql_real_escape_string($_COOKIE['password'])."'");
 $user = (mysql_num_rows($search_user) == 1) ? mysql_fetch_array($search_user) : 0;

$userrow = mysql_real_escape_string($_COOKIE['login']); 



}

else
{
	$user = 0;
}

?>