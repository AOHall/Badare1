<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];
	
	$mailTo = "andrha16@uia.no";
	$headers = "From: ".$emailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
	
	mail($emailTo, $subject, $txt, $headers);
	
	header("Location": kontakt3.html?mailsend");
}