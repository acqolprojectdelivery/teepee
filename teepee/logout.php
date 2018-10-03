<?php
	session_start();
	session_destroy();
	setcookie("useremail", "", time() + (86400 * -30), "/");
	header("location: firstpage.php");

?>
