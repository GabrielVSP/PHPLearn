<?php

	session_start();
	
	if (isset($_SESSION['none']))
	{

		echo $_SESSION['none'];

	}

	/*unset($_SESSION['none']);
	session_destroy();*/

?>