<?php 
session_start();
if(isset($_SESSION['lang']))
{
	if(isset($_GET['lang']))
		$_SESSION['lang'] = $_GET['lang'];
}else{
	$_SESSION['lang'] = 'fr';
}
$allowed_lang = array('en','ar','fr');
if(!in_array($_SESSION['lang'], $allowed_lang))
	$_SESSION['lang'] = 'fr';
include 'lang/' . $_SESSION['lang'] . '.php';
?>