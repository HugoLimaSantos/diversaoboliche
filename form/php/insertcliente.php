<?php
session_start();
//header('content-type: text/html; charset=UTF-8')

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	//unset($_SESSION['senha']);
	header('location:../../login.html');
}

/*function mysql_fetch_all($result) {
$return = array();
  $value = mysqli_fetch_array($conn, $result);
   foreach ($value as $key => $row) {
    
   $return = print ("<td>$result</td>");

       
   }
   return $return;
}
*/

$logado = $_COOKIE['logi'];


include 'conexao.php';

 ini_set('default_charset','UTF-8');

$nome= utf8_decode(ucfirst($_POST['nome']));
$apelido = utf8_decode(ucfirst( $_POST['apelido']));
$email =  $_POST['email'];
$cpf= utf8_decode(ucfirst($_POST['cpf']));
$datanasc = utf8_decode(ucfirst($_POST['datanasc']));
$datacad = utf8_decode(ucfirst($_POST['datacad']));
$rua = utf8_decode(ucfirst($_POST['rua']));
$numero = utf8_decode(ucfirst($_POST['numero']));
$complemento = utf8_decode(ucfirst($_POST['complemento']));
$cep = utf8_decode(ucfirst($_POST['cep']));
$estado = utf8_decode(ucfirst($_POST['estado']));
$cidade = utf8_decode(ucfirst($_POST['cidade']));
$bairro = utf8_decode(ucfirst($_POST['bairro']));
$newsletter = utf8_decode($_POST['newsletter']);
$desconto= utf8_decode(ucfirst(""));

$query_cpf =sprintf("SELECT cpf FROM Cad_Cliente WHERE cpf = '$cpf';");
$cpf_row = mysqli_query($conn, $query_cpf) or die("erro");
$total_cpf = mysqli_num_rows($cpf_row); 

$query_apelido =sprintf("SELECT apelido FROM Cad_Cliente WHERE apelido = '$apelido';");
$apelido_row = mysqli_query($conn, $query_apelido) or die("erro");
$total_apelido = mysqli_num_rows($apelido_row); 

if ( $total_cpf <= 0 ) {

   if ( $total_apelido <= 0 ){

        $query =sprintf( "INSERT INTO Cad_Cliente (id_cliente,nome,apelido,cpf,rua,bairro,cep,cidade,numero,complemento,UF,data_nascimento,data_cadastro,email,newsletter,desconto) VALUES (' ','$nome','$apelido','$cpf','$rua','$bairro','$cep','$cidade','$numero','$complemento','$estado','$datanasc','$datacad','$email','$newsletter','$desconto');");
 
        $dados = $conn->query($query) or die('Erro ao cadastrar');
   
        echo"<script language='javascript' type='text/javascript'>alert('Cliente cadastrado com sucesso ');window.location.href='cadastrocliente.php';</script>";
   } else {
           
           echo"<script language='javascript' type='text/javascript'>alert('Esse apelido já existe!');window.history.back();</script>";

   }

} else {

        echo"<script language='javascript' type='text/javascript'>alert('Esse CPF já existe! ');window.history.back();</script>";

}  


























/*elseif ($apelidobd['apelido'] == $apelido) {
      
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='index-admin.php?url=3';</script>";
        die();

      }
*/


/*
else{
	 echo"<script language='javascript' type='text/javascript'>alert('O campo apelido deve ser preenchido ou cadastro do cliente nao foi efetuado !');window.location.href='index-admin.php?url=2';</script>";
     }


if (isset $idcliente) {
	$query = "INSERT INTO ranking (id_cliente,apelido,data_jogo,pista,pontuacao,'',observacao) VALUES ('$idcliente','$apelido','$datajogo','$pista','$pontuacao','',$Observaçâo);";

	   $dados = mysql_query($query) or die(mysql_error());
print_r($dados);
}
  
        else{
echo echo"<script language='javascript' type='text/javascript'>alert('Nao foi efetuado INSERT no BD !');window.location.href='ranking.php';</script>";

        }
       



*/








?>