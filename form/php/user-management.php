<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

include 'conexao.php';

?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/dataTables.bootstrap.min.css"> 
    <script type="text/javascript" language="javascript" src="../plugins/jquery-1.12.4.js"> </script>
    <script type="text/javascript" language="javascript" src="../plugins/jquery.dataTables.min.js">   </script>
    <script type="text/javascript" language="javascript" src="../plugins/dataTables.bootstrap.min.js"> </script>
    <script type="text/javascript" src="../js/admin.js" ></script>

<div class="container">
  <button type="button" class="close" data-dismiss="modal" onclick= "window.location.href='index-admin.php?url=4'" aria-hidden="true">menu</button>
  <h2>Clientes</h2>         
  <table id="init-filter" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Apelido</th>
        <th>Email</th>
        <th>CPF</th>
        <th>Newsletter</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>

<?php
$result = $conn->query('SELECT * FROM Cad_Cliente ORDER BY nome');
if($result){
    while ($row = $result->fetch_assoc()){ 
        $id = $row['id_cliente'];
        echo"<tr><td>".utf8_encode($row['nome'])."</td><td>".utf8_encode($row['apelido'])."</td><td>".$row['email']."</td><td>".$row['cpf']."</td><td>".utf8_encode($row['newsletter'])."</td><td><a href='client-edit.php?id=$id'><button style='font-size:13px' class='edit-client' value='$id' ><i class='glyphicon glyphicon-pencil'></></button></td><td><button style='font-size:13px' class='exclude-client' value='$id' ><i class='glyphicon glyphicon-remove'></></button></td></tr>";

     }
    $result->free();
}
$conn->close();

?>

    </tbody>
  </table>
</div>
