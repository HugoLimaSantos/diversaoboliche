<?php

session_start();

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}


include 'conexao.php';

$logado = $_COOKIE['logi'];
$query = "SELECT apelido,data_jogo,pontuacao_final FROM RANKING ORDER BY pontuacao_final DESC";
$data = mysqli_query($conn, $query);

//$data = json_decode($_SESSION['json'],true);

$filename = $_SERVER["REQUEST_URI"].@date('Ymd').".xls";
header("Content-Disposition: attachment;filename=\"$filename\"");
header ("Content-Type: application/vnd.ms-excel");

$flag = false;

//print_r ($data);

foreach ($data as $row){
    
    if (!$flag) {
    // display field/column names as first row
        echo implode ("\t", array_keys($row))."\r\n";
        $flag = true;

}

    echo implode ("\t", array_values ($row))."\r\n";

}


exit;
print_r($row);


?>
