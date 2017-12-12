<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

//session_start();
include 'conexao.php';

$user = $_COOKIE['logi'];
$query =sprintf("SELECT root FROM USUARIOS WHERE login = '$user';");
$dados = mysqli_query($conn, $query) or die("erro");
$linha = mysqli_fetch_assoc($dados);

if ($linha['root'] == 'sim'){

    $id = $_POST["id"];
    $query = mysqli_query($conn, "DELETE FROM USUARIOS WHERE ID='$id'" );

    if ($query){
	
        echo"<script language='javascript' type='text/javascript'>alert('Cadastro excluído com sucesso');window.location.href='ranking.php'; </script>";
    } 

} else {

        echo"<script language='javascript' type='text/javascript'>alert('Cadastro excluído com sucesso');window.location.href='ranking.php'; </script>";

}


?>