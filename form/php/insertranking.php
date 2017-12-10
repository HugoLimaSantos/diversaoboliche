<?php

session_start();
if((!isset ($_COOKIE['logi']) == true) ) {
	unset($_SESSION);
	//unset($_SESSION['senha']);
	header('location:../../login.html');
}

$logado = $_COOKIE['logi'];

include 'conexao.php';

function mysqli_fetch_all1($result) {
                                	$return = array();
                                        $value = mysqli_fetch_array($result);
                                        foreach ($value as $key => $row) {
    
                                                $return = print ("<td>$result</td>");
                                       }
                                        return $return;
}

$linha ="";
$pfinal=array();
$pontuacaofinal="";
$apelido = utf8_decode(ucfirst($_POST['apelido']));
$datajogo = utf8_decode(ucfirst( $_POST['datajogo']));
$pista = $_POST['pista'];
$pontuacao = $_POST['pontuacao'];
$idcliente1 = "";
$observacao = utf8_decode(ucfirst($_POST['Observaçâo']));
$query = "SELECT id_cliente FROM Cad_Cliente WHERE '$apelido'= apelido ;";
$result = mysqli_query($conn, $query) or die ("erro");
$idcliente1 = mysqli_fetch_row($result);
//$idcliente = $idcliente1[0];
print_r ($idcliente1);

if ($idcliente1[0] != 0) {

    $query = sprintf("SELECT pontuacao_final FROM RANKING WHERE id_cliente ='$idcliente1[0]' ;");
    $dados = mysqli_query($conn, $query) or die("erro");
    // transforma os dados em um array
    $linha = mysqli_fetch_row($dados);

     $pfinal[0] = $linha[0];
     $pfinal[1] = $pontuacao;
     
  
        if ($linha[0] == 0) {
                     
               $pontuacaofinal = sprintf(array_sum($pfinal));

	        $query = sprintf("INSERT INTO RANKING (id_cliente,apelido,data_jogo,pista,pontuacao,pontuacao_final,observacao) VALUES ('$idcliente1[0]','$apelido','$datajogo','$pista','$pontuacao','$pontuacaofinal','$observacao');");
	        $dados = mysqli_query($conn, $query) or die("erro");
	                 echo"<script language='javascript' type='text/javascript'>alert('Pontuação inserida com sucesso!');window.location.href='ranking.php';</script>";
        }
           else {
               	$pontuacaofinal = sprintf(array_sum($pfinal));
               	$query=sprintf("UPDATE `RANKING` SET `data_jogo`='$datajogo',`pista`='$pista',`pontuacao`='$pontuacao',`pontuacao_final`='$pontuacaofinal',`observacao`='$observacao' WHERE '$idcliente1[0]' = id_cliente ;");
               	$dados = mysqli_query($conn, $query) or die("erro");
                echo"<script language='javascript' type='text/javascript'>alert('Pontuação atualizada com sucesso!');window.location.href='ranking.php';</script>";
          }
           
    } 
        else {
             echo"<script language='javascript' type='text/javascript'>alert('Não existe o cadastro do cliente!');window.history.back();</script>";
        }


?>