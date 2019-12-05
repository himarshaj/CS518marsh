<!DOCTYPE html>
<html>

<head>
  <title>Poodle</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "master.php";?>
	
   </head>
<body>
<script>
  function startDictation() {
    if (window.hasOwnProperty('webkitSpeechRecognition')) {
      var recognition = new webkitSpeechRecognition();
      recognition.continuous = false;
      recognition.interimResults = false;
      recognition.lang = "en-US";
      recognition.start();
      recognition.onresult = function(e) {
        document.getElementById('transcript').value
                                 = e.results[0][0].transcript;
        recognition.stop();
        document.getElementById('labnol').submit();
      };
      recognition.onerror = function(e) {
        recognition.stop();
      }
    }
  }
</script>

<table align="center">
<?php 
if(isset($_GET['error']))
echo "<p id='error'>".$_GET['error']."</p>";
?>
<tr> 
 <td align="right">
  <form id="labnol" action="search.php" method="get" >
  <input id= "transcript" type="text" size="40" name="keyword" >
  <img onclick="startDictation()" src="speaker.png" style="width:20px;height:20px;"/>
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



