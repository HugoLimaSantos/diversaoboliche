<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

session_start();
include 'conexao.php';


$user = $_COOKIE['logi'];
$query =sprintf("SELECT root FROM USUARIOS WHERE login = '$user';");
$dados = mysqli_query($conn, $query) or die("erro");
$linha = mysqli_fetch_assoc($dados);

if ($linha['root'] == 'sim'){

        $id_admin = $_POST['id_admin'];
        $senh = MD5($_POST['senh']);
        $root = utf8_decode($_POST['root']);

        $query=sprintf("UPDATE `USUARIOS` SET `senha`='$senh',`root`='$root' WHERE ID='$id_admin';");
        $dados = mysqli_query($conn, $query) or die("erro");

        if ($dados){

                echo"<script language='javascript' type='text/javascript'>alert('Admin atualizado com sucesso!');window.location.href='admin-management.php';</script>";

        }

} else {

        echo"<script language='javascript' type='text/javascript'>alert('O seu usuário não tem permissão de acesso para editar outros admins!');window.location.href='admin-management.php';</script>";

}