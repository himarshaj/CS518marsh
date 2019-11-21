<!DOCTYPE html>
<html>

<head>
  <title>Poodle</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "master.php";?>
	
   </head>
<body>

<table align="center">
<?php 
if(isset($_GET['error']))
echo "<p id='error'>".$_GET['error']."</p>";
?>
<tr> 
 <td align="right">
  <form action="search.php" method="get" >
  <input type="text" size="40" name="keyword" >
  <input type="submit" value="Explore" />
  </form>
  <a href="advanced_search.php">Advanced Search</a>
 </td>
 <td width="405" height="405">  
  <img src="http://localhost/Poodle.com/dogimage.jpg" alt="Dog" >
 </td>
</tr>
</table> 


<footer id="foot01"></footer>

</body>
<script>document.getElementById("foot01").innerHTML = "<p>&copy;  " + new Date().getFullYear() + " Poodle.com | All rights reserved.</p>";
</script>

</html> 



