<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/style.css">
</head>
<body>

<div class="container">


<?php include 'header.php';?>  
<?php include 'menu.php';?>

<?php include 'check.php';?>
<article>
  
 
  <center><h1>Welcome to psychologist page!</h1></center>
  	
  <h2>Please SIGN IN in order to reply to questions</h2>

  <form action="sign-in-psich.php" method="post">

  	<input type="text" name="login" placeholder="login"><br>
  	<input type="password" name="password" placeholder="password"><br>
  	<input type="submit" name="submit" value="SIGN IN">
  
  	
  </form>
  
</article>

<?php include 'footer.php';?>

</div>

</body>
</html>
