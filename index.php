<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/style.css">
</head>
<body>

<div class="container">


<?php include 'header.php';?>  
<?php include 'menu.php';?>

<article>

 <?php
 include_once 'handler.php'; // проверяем авторизирован ли пользователь
 
 
 echo '

 <h1>Welcome to our web site!</h1>
  <p> The role of the School Psychologist is complex and diverse. The role can vary from system to system.  However, it is universally true that School psychologists help children and youth succeed academically, socially, and emotionally. Their principle objective is to apply scientific values of learning and behavior to improve school-related difficulties and to facilitate the learning and development of children. They collaborate with educators, parents, and other professionals to create safe, healthy, and supportive learning environments for all students.</p>
  <img src="https://usercontent1.hubstatic.com/12540998_f520.jpg" style="width:378px;height:248px;">
 ';
 

 ?>      
 


</article>

<?php include 'footer.php';?>

</div>

</body>
</html>
