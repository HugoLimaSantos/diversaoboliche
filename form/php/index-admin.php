

<?php  
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.
*/

session_start();
if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	//unset($_SESSION['senha']);
	header('location:../../login.html');
	}

$logado = $_COOKIE['logi'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <link rel='stylesheet' type = 'text/css' href = '../css/style.css' >
    <link rel='stylesheet' type = 'text/css' href = '../../css/bootstrap.css' >
    <link rel='stylesheet' type = 'text/css' href = '../../css/font-awesome.min.css' >
    <link rel='stylesheet' type = 'text/css' href = '../../css/jquery-ui.css' >
    <link rel='stylesheet' type = 'text/css' href = '../../css/main.css' >
    <link rel='stylesheet' type = 'text/css' href = '../../css/normalize.css' >
    <link rel='stylesheet' type = 'text/css' href = '../../css/jquery-ui.css' >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
<script type="text/javascript" src="../plugins/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="../js/selectestadocidade.js" ></script>
  <script type="text/javascript" src="../js/admin.js" ></script>

</head>
<body>

<div id="mySidenav" class="sidenav">
    
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index-admin.php?url=1">Cadastro Admin</a>
  <a href="index-admin.php?url=2">Gerenciamento de Admins</a>
  <a href="index-admin.php?url=3">Cadastro Clientes</a>
  <a href="index-admin.php?url=4">Gerenciamento de Clientes</a>
  <a href="index-admin.php?url=5">Galeria</a>
  <a href="index-admin.php?url=6">Lixeira-Galeria</a>
  <a href="index-admin.php?url=7">Ranking</a>
  <a href="index-admin.php?url=8">LOGOUT</a>

</div>

  <section>
    <div class="container">
      <div id="main">
  <h2>Diversão Boliche</h2>
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

        <?php
  
if(isset($_GET["url"])){
$url = $_GET["url"];
}else{
$url = null;
}

switch($url){
case "1":
 include "cadastroAdmin.php";
break;
case "2":
 include "admin-management.php";
break;
case "3":
require_once "cadastrocliente.php";
break;
case "4":
require_once "user-management.php";
break;
case "5":
require_once "getimage.php";
break;
case "6":
require_once "trash_management.php";
break;
case "7":
require_once "ranking.php";
break;
case "8":
require_once "logout.php";
break;
default:
require_once "../../logo.html";
}

 ?>           
</div>

   </div>
  </section>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     
</body>
</html> 


