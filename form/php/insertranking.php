<?php

session_start();
if((!isset ($_COOKIE['login']) == true) )
{
	unset($_SESSION);
	//unset($_SESSION['senha']);
	header('location:../../login.html');
	}

$logado = $_COOKIE['login'];
include '/conexao.php';

$potuacaofinal="";
$apelido = utf8_decode(ucfirst($_POST['apelido']));
$datajogo =utf8_decode(ucfirst( $_POST['datajogo']));
$pista =utf8_decode(ucfirst($_POST['pista']));
$pontuacao =utf8_decode(ucfirst($_POST['pontuacao']));
$Observaçâo =utf8_decode(ucfirst($_POST['Observaçâo']));
$idcliente =mysql_fetch_assoc(mysql_query("SELECT id_cliente FROM cad_cliente WHERE '$apelido'= apelido ;") or die(mysql_error()));

if (!isset $idcliente) {
	$query =sprintf("SELECT pontuacao_final FROM ranking WHERE id_cliente = '$idcliente';");
 
   $dados = mysql_query($query) or die(mysql_error());
// transforma os dados em um array
       $linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
     $potuacaofinal = mysql_num_rows($dados);
     print_r($potuacaofinal);
               }

else{
	echo echo"<script language='javascript' type='text/javascript'>alert('O campo apelido deve ser preenchido ou cadastro do cliente nao foi efetuado !');window.location.href='ranking.php';</script>";
     }


if (isset $idcliente) {
	$query = "INSERT INTO ranking (id_cliente,apelido,data_jogo,pista,pontuacao,'',observacao) VALUES ('$idcliente','$apelido','$datajogo','$pista','$pontuacao','',$Observaçâo);";

	   $dados = mysql_query($query) or die(mysql_error());
print_r($dados);
}
  
        else{
echo echo"<script language='javascript' type='text/javascript'>alert('Nao foi efetuado INSERT no BD !');window.location.href='ranking.php';</script>";

        }
       












?>