<!DOCTYPE html>
<html>

<head>
  <title>Poodle</title>
  
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
	<?php include "master.php"; ?>
   </head>
<body>

<?php 
if(isset($_GET['error']))
echo "<p id='error'>".$_GET['error']."</p>";
?>

<table align="center">
<br><br><br>
	<tr><form action="additem.php" method="post" ></tr>
    <tr><td>First Name: </td><td><input type="text" size="40" name="firstname" ></td></tr>
	<tr><td>Last Name: </td><td><input type="text" size="40" name="lastname" ></td></tr>
	<tr><td>Gender: </td><td><input type="text" size="40" name="gender" ></td></tr>
	<tr><td>Address: </td><td><input type="text" size="40" name="address" ></td></tr>
	<tr><td>Employer: </td><td><input type="text" size="40" name="employer" ></td></tr>
	<tr><td>Email: </td><td><input type="text" size="40" name="email" ></td></tr>
	<tr><td>City: </td><td><input type="text" size="40" name="city" ></td></tr>
	<tr><td>State: </td><td><input type="text" size="40" name="state" ></td></tr>
	<tr><td></td><td><input type="submit" value="Add new item"></td></tr>
	<tr></form></tr>
	


</table>

</body>
</html>

