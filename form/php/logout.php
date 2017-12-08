<?php

session_start();

	unset($_SESSION);
	//unset($_SESSION['senha']);
	header('location:../../index.php');

?>
