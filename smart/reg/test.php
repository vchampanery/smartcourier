


<!DOCTYPE html>
<html>
<head>
	<title>This is test</title>
	<?php include "../layout/links.html"; ?>
	<link rel="stylesheet" type="text/css" href="../public/css/createcss/scroll.css">
	
</head>
<body>
	<div class="container">
		<div class="row">
	    	<?php include "../layout/header.php"; ?>
	  
	     	<?php include "../layout/leftsidebar.php"; ?>	
	     	
	     	<div class="col-sm-8 m-auto d-block" style="height: 400px;">
	     		<form action="../oth/login.php" onclick="return login">
	     		<div class="scroll">
	     			<center>
	     				<br>step1 : password generate <Br>
					<?php 
					$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                       $password =   substr(str_shuffle($chars),0,8); 
                       echo $password;
						?>
						<br>step2 : send email <Br>
						<?php 
						$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
// mail("vchampanery@gmail.com","My subject",$msg);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../../vendor/autoload.php";

$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP

$mail->CharSet="iso-8859-1";
$mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'smitp1901@gmail.com';                    // SMTP username
$mail->Password = 'smit@2505';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->From = 'smitp1901@gmail.com';
$mail->FromName = 'Mailer';
$mail->addAddress('smitp1901@gmail.com');     // Add a recipient
$mail->addReplyTo('vchampanery1710@gmail.com');
$mail->addCC('vchampanery1710@gmail.com');
$mail->addBCC('vchampanery1710@gmail.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


						?>
					</center>
				</div>
				</form>
			</div>
			<?php include "../layout/rightsidebar.php"; ?>
	   		<?php include "../layout/footer.php"; ?>
		</div>
	</div>
	<script type="text/javascript">
		function login() {
			window.location ="../oth/login.php"; 
		}
	</script>
</body>
</html>