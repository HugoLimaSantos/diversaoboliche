<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

session_start();

include 'conexao.php';
var_dump ($GLOBALS);
$picture = $_POST["picture"];

 
$delete = unlink ($picture);


    if ($delete){
		
             // echo"<script language='javascript' type='text/javascript'>alert('Foto excluída com sucesso!');</script>";

	}else {

             // echo"<script language='javascript' type='text/javascript'>alert('Erro ao deletar a foto!');</script>";
    }
		
?>


