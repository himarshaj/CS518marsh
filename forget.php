<html>
<html>
 <head>
	 <font face="AR CHRISTY" color="black" size="150">Poodle.com</font> 
     <link href="style.css" rel="stylesheet">
</head>

<body>

<div id="heading"></div>
<nav id="nav01"></nav>
<div id="main">

<br><br><br><br><br>

<?php

require('PHPMailer-master/vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$servername="localhost";
$username="admin";
$pass="monarchs"; //admin password
$db="userlog";

$connection =new mysqli($servername,$username,$pass,$db);

$email = $_POST['mail'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0)
{
  $reset_token=md5($email);

}
else
{
    echo "Email does not exists";
}

$sql = "UPDATE users SET reset_token='$reset_token' WHERE email='$email'";
mysqli_query($connection, $sql);

$message = "<p>Please click the link below to reset your password</p>";
$message .= "<a href='http://localhost/Poodle.com/setpassword.php?email=$email&reset_token=$reset_token'>";
$message .= "Reset password";
$message .= "</a>";
send_mail($email, "Reset password", $message);	


function send_mail($to, $subject, $message)
{
    $mail = new PHPMailer(true);

    try {
        //Server settings
	$mail->SMTPDebug = 0;                                       // Enable verbose debug output
	$mail->isSMTP();                                            // Set mailer to use SMTP
	$mail->Host       = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
	$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	$mail->Username   = 'noreply.poodle@gmail.com';                     // SMTP username
	$mail->Password   = 'doodle4poodle*';                               // SMTP password
	$mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
	$mail->Port       = 587;                                    // TCP port to connect to

	$mail->setFrom('noreply.poodle@gmail.com', 'Poodle.com');
	//Recipients
	$mail->addAddress($to);

	// Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = $subject;
	$mail->Body    = $message;

	$mail->send();
	echo 'Message has been sent. Please check your email for the reset password link.';
    } catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

$connection->close();


//mysqli_query($conn, "INSERT INTO `forget`(`mail`, `reset_token`) VALUES ( `$mail`,`$reset_token`)");

?>
<br><br><br><br><br><br>

</body>
<footer id="foot01"></footer>
</div>
<script src="script.js"></script>
</html>