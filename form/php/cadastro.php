<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

session_start();
include 'conexao.php';


$logi = $_POST['logi'];
$senh = ($_POST['senh']);
$query ="";
$exibe ="";
//echo '<pre>',print_r($GLOBALS),'</pre>';

$query =sprintf("SELECT senha , login FROM USUARIOS WHERE login = '$logi';");
 
$dados = mysqli_query($conn, $query) or die("erro");
// transform the data em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados); 
//echo"<script language='javascript' type='text/javascript'>alert($total)</script>";       

$logarray =array();
$logarray = $total;
$sql = mysqli_query($conn, $query);
while($exibe = mysqli_fetch_assoc($sql)){
   list($logi ,$senh)= $exibe1;
$exibe = array_push($exibe1);
}
  
 // var_dump($exibe);
//print_r($logarray);
//var_dump($login);

if ($total <= 0){

  if (empty ($logi)) {
    unset($_SESSION['logi']);
    unset($_SESSION['senh']);
    echo"<script language='javascript' type='text/javascript'>alert('O campo login  deve ser preenchido');window.location.href='cadastroAdmin.php';</script>";

  }
  elseif (empty ($senh)) {
    unset($_SESSION['logi']);
    unset($_SESSION['senh']);
    echo"<script language='javascript' type='text/javascript'>alert('O campo senha deve ser preenchido');window.location.href='cadastroAdmin.php';</script>";
  }



    elseif ($exibe['logi'] == $logi) {
      
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastroAdmin.php';</script>";
        die();

      }
      else{
        $senh = MD5($_POST['senh']);

        $query = "INSERT INTO USUARIOS (login,senha) VALUES ('$logi','$senh');";
        
        $stmt = $conn->query($query);
        
        echo"<script language='javascript' type='text/javascript'>alert('Cadastro realizado com sucesso');window.location.href='cadastroAdmin.php';</script>";

         //var_dump($stmt) ;

      }
}else{

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastroAdmin.php';</script>";
        die();

} 


/*
    }else{
      if($exibe['login'] == $login){

        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        // $stmt = $conn->prepare($query);
     
        if($exibe){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='#'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='#'</script>";
        }
      }
    }

    */
?>