<html>
<head>
  <title>Poodle</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "master.php"; ?>
   </head>
<body>



<form action="authenticate_user.php" method="post">
	<table cellpadding="6" border="0" align="center">
		<br><br><br><br><br><br>
		<tr><th>Username:</th><td><input type="text" name="uId"/></td></tr>
		<tr><th>Password:</th><td><input type="password" name="pwd"/></td></tr>
		<tr><td></td><td><input type="submit" value="Login" /></td></tr>
		<tr><td></td><td>Forgot your password ? <a href="resetpassword.php">Click here</a></td></tr>
  <?php 
if(isset($_GET['error']))
echo "<p id='error'>".$_GET['error']."</p>";
?>
	</table>
</form>


<footer id="foot01"></footer>
</body>
<script>document.getElementById("foot01").innerHTML = "<p>&copy;  " + new Date().getFullYear() + " Poodle.com | All rights reserved.</p>";
</script>
</html>