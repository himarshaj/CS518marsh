<!DOCTYPE html>
<html>

<head>
  <title>Poodle</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "master.php"; ?>
   </head>
<body>

<table align="center">
<tr> 
 <td align="right">      
	<input size="40">
	<button>Explore</button>
	<br>
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
