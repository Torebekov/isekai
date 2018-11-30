<?php


//connection to the server and selecting database
mysql_connect('10.8.204.177', 'u1159802_arman', '231957arman') or die('Ошибка соеденения с MySQL!');
mysql_select_db('db1159802_saebiz') or die ('Ошибка соеденения с базой данных MySQL!');
mysql_query('SET NAMES `utf8`'); // defining coding

?>