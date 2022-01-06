<?php 


require_once("config.php");


echo session_save_path();
echo "<br>";

var_dump(session_status());
echo "<br>";

switch (session_status()) {
	case PHP_SESSION_ACTIVE:
		echo "sessions are enabled, and one exists";
		break;

	case PHP_SESSION_DISABLED:
		echo " if sessions are disabled.";
		break;


	case PHP_SESSION_NONE:
		echo "if sessions are enabled, but none exists.";
		break;
		
	default:
		// code...
		break;
}

 ?>