<?php
include('dbconn.php');
session_start();
if(isset($_GET['log']))
{
	session_destroy();
	unset($_SESSION['ROLE']);
	unset($_SESSION['IS_LOGIN']);
	header('location:../index.html');
	die();
}
