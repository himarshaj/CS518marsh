<html>

<head>
  <title>Poodle</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "master.php"; ?>
   </head>

<body>
<br><br><br><br><br><br>
<?php

session_start();
// initializing variables

$name=$mail=$mobile=$uId=$pwd="";

//Validations
if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
   if(empty($_POST["name"]))
   {
	header('Location:./signup.php?error=Name is required');
    exit();
   }
   else
   {
	$name=test($_POST["name"]);
    if(!preg_match("/^[a-zA-Z ]*$/",$name))
	{
	header('Location:./signup.php?error=Only letters and white space are allowed for the name');
    exit();
	}		
   }
   if(empty($_POST["email"]))
   {
	header('Location:./signup.html?error=Email is required');
    exit();
   }
   else
   {
	$mail=test($_POST["email"]); 
    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) 
	{
	header('Location:./signup.php?error=Invalid email format');
    exit();
    }
   }	
   if(empty($_POST["phone"]))
   {
	   $mobile="";
   }
   else
   {
    $mobile=test($_POST["phone"]);
    //if(!filter_var($mobile,"/^[0-9]*$/")||$mobile.length!=10) 
	if(!preg_match('/^[0-9]{3}[0-9]{3}[0-9]{4}$/',$mobile))
	{
	header('Location:./signup.php?error=Invalid phone number');
    exit();
    }
   }
   if(empty($_POST["username"]))
   {
	header('Location:./signup.php?error=Username is required');
    exit();
   }
   else
   {
	$uId=test($_POST["username"]);
    if(!preg_match("/^[a-zA-Z0-9 ]*$/",$name))
	{
	header('Location:./signup.php?error=Username must contain letters and/or digits only');
    exit();
	}		
   }
     if(empty($_POST["password"]))
   {
	header('Location:./signup.php?error=Password is required');
    exit();
   }
   else
   {
	$pwd=test($_POST["password"]);

    //if(!preg_match("/^[a-zA-Z0-9]*$/",$pwd))
	if(!preg_match("/^[a-zA-Z0-9]*$/",$pwd)||strlen($pwd)<8)
   {
	header('Location:./signup.php?error=Password must have digits and/or letters only and must be at least 8 characters long');
    exit();
	}		
   }
   $repwd=test($_POST["repassword"]);
    if(!strcmp($pwd,$repwd)==0) {
            header('Location:./signup.php?error=password not match');
            exit();        
	}





//database connection	
$servername="localhost";
$username="admin";
$pass="monarchs";
$db="userlog";

// connect to the database
$conn=mysqli_connect($servername,$username,$pass,$db);

if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
  }

$query = "SELECT * FROM users WHERE email='$mail'";
$result = $conn->query($query);
if ($result->num_rows>0) {
            //Email is taken
         header('location:signup.php?error=Email is already used. Please try another one or sign in using the same email.');
         exit();
        }
$query = "SELECT * FROM users WHERE mobile='$mobile'";
$result = $conn->query($query);
if ($result->num_rows>0) {
            //Mobile  is taken
         header('location:signup.php?error=Mobile number is already used. Please check again!');
         exit();
        }
		
$query = "SELECT * FROM users WHERE uname='$uId'";
$result = $conn->query($query);
if ($result->num_rows>0) {
            //Username is taken
         header('location:signup.php?error=Username is already in use. Please try again using a different username!');
         exit();
        }
  
 
 
// REGISTER USER

	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$mail = mysqli_real_escape_string($conn, $_POST['email']);
	$mobile= mysqli_real_escape_string($conn, $_POST['phone']);
	$uId= mysqli_real_escape_string($conn, $_POST['username']);
	$pwd= mysqli_real_escape_string($conn, $_POST['password']);
	$hash = password_hash($pwd, PASSWORD_BCRYPT);
    $reset_token=md5($mail);
	
$sql="INSERT INTO users (name,email,mobile,uname,password,reset_token) VALUES('$name','$mail', '$mobile','$uId','$hash', '$mail')";
 

if($conn->query($sql)==TRUE)
 {
	
	 echo"You have successfully registered<br>";
	 echo'Now to complete the process,<a href="login.php">click here</a> to login';
 }
 else echo"Error:".$sql."<br>".$conn->error;
 
$conn->close();

}

?>

<footer id="foot01"></footer>
</body>
<script>document.getElementById("foot01").innerHTML = "<p>&copy;  " + new Date().getFullYear() + " Poodle.com | All rights reserved.</p>";
</script>
</html>