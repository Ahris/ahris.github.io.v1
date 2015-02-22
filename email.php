<?php 
session_start();
if(isset($_POST['title']) && isset($_POST['message']) && isset($_POST['email'])) {
	$returnEmail =  trim(htmlentities($_POST['email']));
	$title = trim(htmlentities($_POST['title']));
	$message = trim(htmlentities($_POST['message']));
	$jobType = trim(htmlentities($_POST['jobType']));
	$time = trim(htmlentities($_POST['time']));
	$header = "From:" . $returnEmail;

	$content = $message." Job Type: ".$jobType." Time: ".$time;

	if($title != "" && $returnEmail != "" && $message != "") {
		if(mail('got2backup@gmail.com', $title, $content, $header)) {
			$_SESSION['emailSent'] = true;
		} else {
			$_SESSION['emailSent'] = false;
		}
	} else {
		$_SESSION['emailSent'] = false;
	}
} else {
	$_SESSION['emailSent'] = false;
}

header('Location: contact.php');

?>