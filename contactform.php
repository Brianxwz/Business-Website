<?php

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$from = $_POST['mail'];
		$msg = $_POST['message'];
		
		$email = "kirbyzhang@hotmail.com";
		$header = "From: ".$from;
		$txt = "You have received a Cartridge Depot email from ".$name.".\n\n".$msg;
		
		// error msg if form is empty
		if (empty($name) || empty($subject) || empty($from) || empty($msg)) {
			header("Location: ../contact.php?empty");
		} else {
			// error msg if email is invalid
			if (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../contact.php?invalidemail");
			} else {
				// otherwise send mail successfully
				mail($email, $subject, $txt, $header);
				header("Location: ../contact.php?mailsent");
			}
		}
	}
