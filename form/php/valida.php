
<?php

include 'conexao.php';

//if(!empty($_POST['SUBMIT']))
//{

$logi = $_POST['logi'];
$senh = MD5($_POST['senh']);
$query ="";
//echo '<pre>',print_r($senh),'</pre>';
/*
//$query = "SELECT login ,senha FROM usuarios WHERE login = '$login'";
$query =sprintf("SELECT login , senha FROM usuarios WHERE login = '$login';");
    $dados = mysql_query($query, $conn) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados); 
*/
var_dump($logi);
var_dump("SELECT * FROM USUARIOS WHERE login = '$logi' AND senha = '$logi';");
    if ((!empty ($logi))||(!empty ($senh))){
      $verifica = mysqli_query($conn, "SELECT * FROM USUARIOS WHERE login = '$logi' AND senha = '$senh';") or die("erro ao selecionar");
var_dump($verifica);
        if (mysqli_num_rows($verifica) <= 0){ 
print_r(mysqli_num_rows($verifica));
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../../login.html';</script>";
          die();
        }else{
          setcookie("logi",$logi);
          header("Location:index-admin.php");
        }
    }
    else {
      header('Location: ../../index.php');
    }
?>