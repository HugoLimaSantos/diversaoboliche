<?php

session_start();

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

include 'conexao.php';

$id = $_POST["id_cli"];

$query = mysqli_query($conn, "DELETE FROM Cad_Cliente WHERE id_cliente='$id'" );

if ($query){
	
        echo"<script language='javascript' type='text/javascript'>alert('Cadastro excluído com sucesso'); </script>";


} 

/*else {

        echo"<script language='javascript' type='text/javascript'>alert('Erro ao excluir'); </script>";

}*/


?>