<html>
<head>
  <title>Poodle</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "master.php"; ?>
   </head>
<body>

<style>
.snippet .p {
display: block;
  background-color: #e6e9ed;
  color: black;
}

</style>

<div class="container" align= "center">


<div class="row" id="filter" align="left">
		<form action="advanced_search.php" method= "post">
		
		<table><br><br>
			<tr>
			<td><div>
				<select name="gender">
					<option value="">Select Gender</option>
					<option value="M">Male</option>
					<option value="F">Female</option>
				</select>
			</td></div>
			</tr>
			<tr>
			<tr><td><div>
				<select name="city" >
					<option value="">Select City</option>
					<option value="belvoir">Belvoir</option>
					<option value="cliffside">Cliffside</option>
					<option value="bartonsville">Bartonsville</option>
					<option value="riviera">Riviera</option>
					<option value="harborton">Harborton</option>
				</select>
			</td></div></tr><tr>
			<td><div>
				<select name="state" >
					<option value="">Select State</option>
					<option value="IL">IL</option>
					<option value="TN">TN</option>
					<option value="pa">PA</option>
					<option value="id">ID</option>
					<option value="ms">MS</option>
					<option value="ny">NY</option>
					<option value="wv">WV</option>
				</select>
			</td></div></tr>
			<input size="60" class="form-control" type="text" placeholder="Search" name="keyword1" /><button type="submit" >Explore</button>
		</table>	
		</form>
	</div>

	
</div>

<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;

$hosts = [
    'localhost:9200'     
];

$client = ClientBuilder::create()->setHosts($hosts)->build();

$selected1 = "";
$selected2 = "";
$selected3 = "";
$searchterm1 ="" ;


if(isset($_POST["keyword1"]))
	#validate searchterm
    $searchterm1 = trim($_POST['keyword1']); 
	#sanitize searchterm
    $searchterm1 = strip_tags($searchterm1);

if(isset($_POST['gender']))
    $selected1 = trim($_POST['gender']); 
    $selected1 = strip_tags($selected1);
	
if(isset($_POST['city']))
    $selected2 = trim($_POST['city']); 
    $selected2 = strip_tags($selected2);

if(isset($_POST['state'])){
    $selected3 = trim($_POST['state']); 
    $selected3 = strip_tags($selected3);}

$match_string = ("$searchterm1 $selected1 $selected2 $selected3");

#print_r($match_string);

$params = [
    'index' => 'bank',
    'size'   => 1000,    
      'body' => [
         'query' => [
            'bool' => [
               'should' => [
                  
                  ['match' => ['firstname' => "{$match_string}"]],
                  ['match' => ['lastname' => "{$match_string}"]],
                  ['match' => ['gender' => "{$match_string}"]],
                  ['match' => ['address' => "{$match_string}"]],
                  ['match' => ['employer' => "{$match_string}"]],
                  ['match' => ['email' => "{$match_string}"]],
                  ['match' => ['city' => "{$match_string}"]],
                  ['match' => ['state' => "{$match_string}"]]
				  
               ]
            ]
         ],  
      ]
  ];
  
$response = $client->search($params);


#print_r($response);
#print_r($response1);
#print_r($response2);
#print_r($response3);
#print_r($gendermatch);

$output_n = sizeof($response['hits']['hits'],0);

if($output_n==0)
{
	echo "No results found, Please try again";
}
	
$time = ((int)($response['took'])/1000);
$output = ($response['hits']['hits']);

print_r($time);
echo " seconds to display ";
print_r($output_n);
echo " matches";

echo "<div class = 'snippet' style = 'margin-bottom: 10%;' >";
 for ($i=0; $i<$output_n; $i++)
	{
		echo '<br><div id="'.$output[$i]['_id'].'" class="p" >
		<a>'.$output[$i]['_source']['firstname'].' '.$output[$i]['_source']['lastname'].' </a>
		<br>
		<a>'.$output[$i]['_source']['address'].' </a>
		<br>
		<a>'.$output[$i]['_source']['gender'].' </a>
		<br>
		<a>'.$output[$i]['_source']['city'].' </a>
		<br>
		<a>'.$output[$i]['_source']['state'].' </a>
		</div>';
	} 
echo "</div>";	 


?>



<footer id="foot01"></footer>
</body>
<script>document.getElementById("foot01").innerHTML = "<p>&copy;  " + new Date().getFullYear() + " Poodle.com | All rights reserved.</p>";
</script>
</html>