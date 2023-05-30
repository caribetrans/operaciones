<?php
session_start();
if(!isset($_SESSION['user'])) {
	$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	// user is not logged in, do something like redirect to login.php

	if ($link==''){
    header("Location:/operaciones/public/login/index.php");
	die();
	}else{
	header("Location:/operaciones/public/login/index.php?&url=$link");
	die();
}


}
?>