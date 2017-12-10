
<?php 
 

 
$host = "127.0.0.1";
$db   = "boliche";
$user = 'root';
$pass = '';
// conecta ao banco de dados
$conn = @mysqli_connect("127.0.0.1", "root", "","boliche") or die ("Sem conexão com o servidor");
// seleciona a base de dados em que vamos trabalhar
$select = @mysqli_select_db($conn, "boliche") or die("Sem acesso ao DB, Entre em contato com o Administrador.");

try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=boliche', $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
     
    
    
   
} catch(PDOException $e) {
    //echo 'ERROR: ' . $e->getMessage();
}

 ?>


