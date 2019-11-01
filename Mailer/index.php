<?php
	$email = "soniiakshayy8000@gmail.com" ;
	$message = $_POST['msg'] ;
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$name=$fname." ".$lname;
	require("PHPMailer_5.2.0/class.PHPMailer.php");
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "smtp.gmail.com"; 
	$mail->SMTPAuth = true;   
	$mail->Port=465;
	$mail->SMTPSecure = "ssl";
	$mail->Username = "soniiakshayy8000@gmail.com";  // SMTP username
	$mail->Password = "8000623262"; // SMTP password

// $email = $_REQUEST['email'] ;
	$mail->From = "soniiakshayy8000@gmail.com" ;	
	$mail->FromName= $name;
	$mail->AddAddress($email);
	$mail->IsHTML(true);
	$mail->Subject = "Earcanhear inquire";
	$mail->Body    = $message;
	$mail->AltBody = $message;

	if(!$mail->Send())
	{
		echo "Message could not be sent. <p>";
		echo "Mailer Error: " . $mail->ErrorInfo;
		
	}
	header("Location: ../page/contactus.php?status=success")
?>
 
