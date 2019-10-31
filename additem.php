<!DOCTYPE html>
<html>

<head>
  <title>Poodle</title>
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
	<?php include "master.php"; ?>
   </head>
<body>

<?php
require 'vendor/autoload.php';
use Elasticsearch\ClientBuilder;

$hosts = [
    'localhost:9200'     
];

$client = ClientBuilder::create()->setHosts($hosts)->build();

$id = substr($firstname,0,1). rand(1001,5000);


$firstname ="" ;
$lastname ="" ;
$gender ="" ;
$address ="" ;
$employer ="" ;
$email ="" ;
$city ="" ;
$state ="" ;


if(isset($_POST["firstname"]))
	$firstname = trim($_POST['firstname']); 
	$firstname = strip_tags($firstname);
if(isset($_POST["lastname"]))
	$lastname = trim($_POST['lastname']); 
	$lastname = strip_tags($lastname);
if(isset($_POST["gender"]))
	$gender = trim($_POST['gender']); 
	$gender = strip_tags($gender);
if(isset($_POST["address"]))
	$address = trim($_POST['address']); 
	$address = strip_tags($address);
if(isset($_POST["employer"]))
	$employer = trim($_POST['employer']); 
	$employer = strip_tags($employer);
if(isset($_POST["email"]))
	$email = trim($_POST['email']); 
	$email = strip_tags($email);
if(isset($_POST["city"]))
	$city = trim($_POST['city']); 
	$city = strip_tags($city);
if(isset($_POST["email"]))
	$state = trim($_POST['state']); 
	$state = strip_tags($state);	
	
	
if (empty($firstname)){
	header("Location:./newitem.php?error=First name can't be empty");
	exit();
	}

    
else{
	$params = [	'index' => 'bank',
				'id' => $id,
				'body' => [
				'firstname' => $firstname,
				'lastname' => $lastname,
				'gender' => $gender,
				'address' => $address,
				'employer' => $employer,
				'email' => $email, 
				'city' => $city,
				'state' => $state ]
			];	

$response = $client->index($params);
echo "<br><br><br>" ;
echo "New item added succesfully! ";
#print_r($firstname);
#print_r(htmlspecialchars($response));

}
	


?>
</body>
</html>

