
<?php
 include_once 'handler.php'; // проверяем авторизирован ли пользователь
 if($admin) {echo '
 <nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about-us.php">About us</a></li>
    <li><a href="psych_table.php">Psychologists table</a></li>
  </ul>
</nav>
 ';
 }
 else
 {
 	if ($user)
 	{
echo '
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about-us.php">About us</a></li>
	<li><a href="user-table.php">User table</a></li>
  </ul>
</nav>

';
 	}
 	else
 	{
 echo '
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about-us.php">About us</a></li>
    <li><a href="user-page.php">I am a user</a></li>
    <li><a href="psich-page.php">I am a psychologist</a></li>

  </ul>
</nav>
 
 ';
 }
}
 ?>      
 





