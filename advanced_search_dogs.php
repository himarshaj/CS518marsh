<html>
<head>
  <title>Poodle</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "master.php"; ?>
   </head>
<body>

<div class="container" align= "center">
	

<div class="row" id="filter" align="left">
		<form>
		
		<table><br><br>
			<tr>
			<td><div>
				<select data-filter="temperament">
					<option value="">Select Temperament</option>
					<option value="">Confident </option>
					<option value="">Independent</option>
					<option value="">Laid Back, Happy</option>
					<option value="">Shy/Timid </option>
					<option value="">Adaptable  </option>
				</select>
			</td></div>
			</tr>
			<tr>
			<tr><td><div>
				<select data-filter="intelligence" >
					<option value="">Select Intelligence</option>
					<option value="">High</option>
					<option value="">Low</option>
				</select>
			</td></div></tr><tr>
			<td><div>
				<select data-filter="popularity" >
					<option value="">Select Popularity</option>
					<option value="">High</option>
					<option value="">Low</option>
				</select>
			</td></div></tr><tr>
			<td><div>
				<select data-filter="size" placeholder="" >
					<option value="">Select Size</option>
					<option value="">Extra Small (XS)</option>
					<option value="">Small (S)</option>
					<option value="">Medium (M)</option>
					<option value="">Large (L)</option>
					<option value="">Extra Large (XL)</option>
					<option value="">Extra-Extra Large (XXL)</option>
				</select>
			</td></div></tr>
		</table>	
		</form>
	</div>
<div class="row" id="search" align="left">
	<form id="search-form" action="" method="POST" enctype="multipart/form-data">
		<div class="form-group col-xs-9">
			<input size="60" class="form-control" type="text" placeholder="Search" /><button type="submit" >Explore</button>
		</div>
		<div class="form-group col-xs-3">
			
		</div>
	</form>
</div>	
	
	
</div>

<footer id="foot01"></footer>
</body>
<script>document.getElementById("foot01").innerHTML = "<p>&copy;  " + new Date().getFullYear() + " Poodle.com | All rights reserved.</p>";
</script>
</html>