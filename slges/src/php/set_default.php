<?php
	session_start();
	unset($_SESSION['eins']);
	unset($_SESSION['zwei']);
	unset($_SESSION['drei']);
	unset($_SESSION['vier']);
	unset($_SESSION['fünf']);
	unset($_SESSION['sechs']);
	unset($_SESSION['sieben']);
	unset($_SESSION['acht']);
	unset($_SESSION['neun']);
	unset($_SESSION['zehn']);


	if (!isset($_SESSION['eins']))
	{
		$_SESSION['eins'] = 255;
		$_SESSION['zwei'] = 272;
		$_SESSION['drei'] = 273;
		$_SESSION['vier'] = 256;
		$_SESSION['fünf'] = 343;
		$_SESSION['sechs'] = 301;
		$_SESSION['sieben'] = 312;
		$_SESSION['acht'] = 479;
		$_SESSION['neun'] = 304;
		$_SESSION['zehn'] = 261;
	}
	header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
