<?php 

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

//session_start();
include 'conexao.php';

?>
