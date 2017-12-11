<?php

session_start();

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

include 'conexao.php';

$id = $_POST["ranking_id"];

$query = mysqli_query($conn, "DELETE FROM RANKING WHERE id_ranking='$id'" );


/*if ($query){
	
      echo"<script language='javascript' type='text/javascript'>alert('Registro excluído com sucesso'); </script>";


} 

else {

        echo"<script language='javascript' type='text/javascript'>alert('Erro ao excluir'); </script>";

}*/


?>