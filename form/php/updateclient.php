<?php

session_start();

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}


include 'conexao.php';

$logado = $_COOKIE['logi'];

ini_set('default_charset','UTF-8');
mysqli_set_charset($conn,"utf8");

$id = ($_POST['id_cliente']);
$nome= ($_POST['nome']);
$apelido = ( $_POST['apelido']);
$email =  $_POST['email'];
$cpf= ($_POST['cpf']);
$datanasc = ($_POST['datanasc']);
$datacad = ($_POST['datacad']);
$rua = ($_POST['rua']);
$numero =($_POST['numero']);
$complemento = ($_POST['complemento']);
$cep = ($_POST['cep']);
$estado = ($_POST['estado']);
$cidade = ($_POST['cidade']);
$bairro = ($_POST['bairro']);
$newsletter = $_POST['newsletter'];
$desconto= ucfirst("");

$query_cpf =sprintf("SELECT cpf FROM Cad_Cliente WHERE cpf = '$cpf';");
$cpf_row = mysqli_query($conn, $query_cpf) or die("erro");
$total_cpf = mysqli_num_rows($cpf_row); 

$query_apelido =sprintf("SELECT apelido FROM Cad_Cliente WHERE apelido = '$apelido';");
$apelido_row = mysqli_query($conn, $query_apelido) or die("erro");
$total_apelido = mysqli_num_rows($apelido_row); 


//echo '<pre>',print_r($GLOBALS),'</pre>';


if ($total_cpf <= 1 ){

    if ( $total_cpf == 1 ){

        $query_cpf =sprintf("SELECT cpf FROM Cad_Cliente WHERE cpf = '$cpf' AND id_cliente='$id' ;");
        $cpf_row = mysqli_query($conn, $query_cpf) or die("erro");
        $total_cpf = mysqli_num_rows($cpf_row); 

        if ( $total_cpf != 1 ) {

             echo"<script language='javascript' type='text/javascript'>alert('Esse CPF já existe!');window.history.back();</script>";
             exit();


        }

    }

} else {

       echo"<script language='javascript' type='text/javascript'>alert('Esse CPF/apelido já existe!');window.history.back();</script>";
       exit();
}


   if ( $total_apelido <= 1 ){

       if ( $total_apelido < 1 ) {
        //Insert new nickname that is unic in the database.
        $query = mysqli_query( $conn, "UPDATE Cad_Cliente SET nome='$nome', apelido='$apelido', cpf='$cpf', rua='$rua', bairro='$bairro', cep='$cep', cidade='$cidade', numero='$numero', complemento='$complemento', UF='$estado', data_nascimento='$datanasc', data_cadastro='$datacad', email='$email', newsletter='$newsletter', desconto='$desconto' WHERE id_cliente='$id';");
        echo"<script language='javascript' type='text/javascript'>alert('Cadastro atualizado com sucesso ');window.location.href='user-management.php';</script>";

    
      } elseif ( $total_apelido == 1 ) {

        $query_apelido =sprintf( "SELECT apelido FROM Cad_Cliente WHERE apelido='$apelido' AND id_cliente='$id';");
        $apelido_row = mysqli_query($conn, $query_apelido) or die("erro");
        $total_apelido = mysqli_num_rows($apelido_row); 

        if ( $total_apelido == 1 ) {
           //Just upgrading other fields...
           $query = mysqli_query( $conn, "UPDATE Cad_Cliente SET nome='$nome', apelido='$apelido', cpf='$cpf', rua='$rua', bairro='$bairro', cep='$cep', cidade='$cidade', numero='$numero', complemento='$complemento', UF='$estado', data_nascimento='$datanasc', data_cadastro='$datacad', email='$email', newsletter='$newsletter', desconto='$desconto' WHERE id_cliente='$id';");
           echo"<script language='javascript' type='text/javascript'>alert('Cadastro atualizado com sucesso ');window.location.href='user-management.php';</script>";
            
        } else {

                echo"<script language='javascript' type='text/javascript'>alert('Esse apelido já existe! ');window.history.back();</script>";

          }

        }

      } else {

            echo"<script language='javascript' type='text/javascript'>alert('Erro ao atualizar!');window.history.back();</script>";

      } 

?>