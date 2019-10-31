<!DOCTYPE html>
<html>

<head>
  <title>Poodle</title>
   <table align="right"><br>
   <tr><td align="right"><form action="search.php" method="get" >
	<input type="text" size="40" name="keyword" ><input type="submit" value="Explore" />
	</form>
   </td></tr></table>
   
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

<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;

$hosts = [
    'localhost:9200'     
];

$client = ClientBuilder::create()->setHosts($hosts)->build();

$searchterm ="" ;

if(isset($_GET["keyword"]))
	#validate searchterm
    $searchterm = trim($_GET['keyword']); 
	#sanitize searchterm
    $searchterm = strip_tags($searchterm);
	
if (empty($searchterm)){
	header('Location:./index.php?error=Please enter a keyword to search');
	exit();
}
	#print "<span>Please enter a keyword to search </span>";

    
else{
	$params = [
    'index' => 'bank',
    'size'   => 1000,    
      'body' => [
         'query' => [
            'bool' => [
               'should' => [
                  
                  ['match' => ['firstname' => "{$searchterm}"]],
                  ['match' => ['lastname' => "{$searchterm}"]],
                  ['match' => ['gender' => "{$searchterm}"]],
                  ['match' => ['address' => "{$searchterm}"]],
                  ['match' => ['employer' => "{$searchterm}"]],
                  ['match' => ['email' => "{$searchterm}"]],
                  ['match' => ['city' => "{$searchterm}"]],
                  ['match' => ['state' => "{$searchterm}"]]
               ]
            ]
         ],  
      ]
  ];
  
$response = $client->search($params);

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
		<a>Name: </a><a>'.$output[$i]['_source']['firstname'].' '.$output[$i]['_source']['lastname'].' </a>
		<br>
		<a>Gender: </a><a>'.$output[$i]['_source']['gender'].'</a>
		<br>
		<a>Address: </a><a>'.$output[$i]['_source']['address'].'</a>
		<a>, City: </a><a>'.$output[$i]['_source']['city'].' </a>
		<a>, State: </a><a>'.$output[$i]['_source']['state'].' </a>
		</div>';
	} 
echo "</div>";	 
}	

#print_r($response);

?>
</body>
</html>

