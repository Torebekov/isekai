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
  
 

 
  <center><h1>Please REGISTER first in order to send messages</h1></center>
  	
  
  <form action="user-register-php.php" method="post" >
                <table class = "reg_table">

                    <tr>
                        <td class ="reg_td "><label>LOGIN <br></label></td>
                        <td><input pattern=".{6,10}" class ="colortext" name="login" type="text"         placeholder="Login" title="More than 6 letters required" required></td>
                    </tr>

                    <tr>
                        <td class ="reg_td"><label >PASSWORD <br></label></td>
                        <td><input type="password" name="password" pattern=".{8,16}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="********" class = "colortext" onchange="form.cpw.pattern = this.value;" required></td>
                    </tr>  

                    <tr>
                        <td class ="reg_td"><label >CONFIRM PASSWORD <br></label></td>
                        <td><input type="password" name="cpw" pattern=".{8,16}" title="Password is not the same" placeholder="********" class = "colortext" required></td>
                    </tr>  

                </table>
                <p>
                    <input type="submit" name="submit" value="REGISTRATION" class="btn btn-primary">
                </p>
   
            </form>
  
</article>

<?php include 'footer.php';?>

</div>

</body>
</html>
