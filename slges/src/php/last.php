<?php
session_start();

if (!isset($_SESSION['eins']))
{
$_SESSION['eins'] = 255;
$_SESSION['zwei'] = 272;
$_SESSION['drei'] = 388;
$_SESSION['vier'] = 350;
$_SESSION['fünf'] = 343;
$_SESSION['sechs'] = 301;
$_SESSION['sieben'] = 312;
$_SESSION['acht'] = 89;
$_SESSION['neun'] = 359;
$_SESSION['zehn'] = 261;
}


$eins = $_SESSION['eins'];
$zwei = $_SESSION['zwei'];
$drei = $_SESSION['drei'];
$vier = $_SESSION['vier'];
$fünf = $_SESSION['fünf'];
$sechs = $_SESSION['sechs'];
$sieben = $_SESSION['sieben'];
$acht = $_SESSION['acht'];
$neun = $_SESSION['neun'];
$zehn = $_SESSION['zehn'];


if (isset($hash_id))
{

	if ($hash_id != $eins and
	$hash_id != $zwei and
	$hash_id != $drei and
	$hash_id != $vier and
	$hash_id != $fünf and
	$hash_id != $sechs and
	$hash_id != $sieben and
	$hash_id != $acht and
	$hash_id != $neun and
	$hash_id != $zehn and
	$hash_id != 265)
	{
	$_SESSION['zehn'] = $neun ;
	$_SESSION['neun'] = $acht ;
	$_SESSION['acht'] = $sieben ;
	$_SESSION['sieben'] = $sechs ;
	$_SESSION['sechs'] = $fünf ;
	$_SESSION['fünf'] = $vier ;
	$_SESSION['vier'] = $drei ;
	$_SESSION['drei'] = $zwei ;
	$_SESSION['zwei'] = $eins ;
	$_SESSION['eins'] = $hash_id ;
	}
}
?>
