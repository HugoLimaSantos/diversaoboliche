<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

//session_start();
include 'conexao.php';

$id_admin = $_POST['id_admin'];
$senh = MD5($_POST['senh']);

$query=sprintf("UPDATE `USUARIOS` SET `senha`='$senh' WHERE ID='$id_admin';");
$dados = mysqli_query($conn, $query) or die("erro");

if ($dados){

    echo"<script language='javascript' type='text/javascript'>alert('Senha atualizada com sucesso!');window.location.href='admin-management.php';</script>";

}