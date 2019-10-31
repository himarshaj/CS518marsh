<html>
<body>
<?php
include 'master.php';
$email=$_POST['email'];
$name=$_POST['uId'];
$passd=$_POST['pwd'];
$servername="localhost";
$username="admin";
$pass="monarchs";
$db="userlog";
$conn=new mysqli($servername,$username,$pass,$db);
if($conn->connect_error)
{
	die("Connection failed:".$connect_error."<br>");
}
else echo"Successfully connected to the database!<br>";
$sql="SELECT password FROM users WHERE uname='$name'";
$result=$conn->query($sql);
$res="";
if($result->num_rows>0)
{
  while($rows=$result->fetch_assoc())
  {
	  $res=$rows["password"];
  }

if(password_verify($passd, $res))
{
	echo "<br><br>You are logged in";
	session_start();
	$_SESSION['email']=$email;
	$_SESSION['pwd']=$pass;
	$_SESSION['uId']=$name;
	$SID= session_id();
	header('Location:./index.php');	
	exit();
}
else 
	
{
	
	header('Location:./login.php?error=wrong password');
    exit();

}
}
else 

{
	header('Location:./login.php?error=incorrect username<br>if you are new click <a href="signup.php">here</a>');
    exit();

}
$conn->close();
  ?>
</body>
</div>
</html>