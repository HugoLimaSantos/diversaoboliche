<?php

session_start();

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

include 'conexao.php';

$id = $_GET['id'];
//$id = '12';

?>


<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript" src="../plugins/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="../js/selectestadocidade.js" ></script>
  <script type="text/javascript" src="../js/admin.js" ></script>
  <style>
    .cancel-buttom{
        margin-top: -33px;
        margin-left: 125px;
    }
  </style>

</head>
<body>

<div class="container">
  <button type="button" class="close" data-dismiss="modal" onclick= "window.location.href='index-admin.php'" aria-hidden="true">menu</button>
  <h2>Editar Cadastro Cliente</h2>
<form class="form col-md-12 center-block" method="POST" action="updateclient.php">
 <meta charset="UTF-8">



<?php

$query = mysqli_query($conn,"SELECT * FROM Cad_Cliente WHERE id_cliente='$id'");

if($query){
    while ($row = $query->fetch_assoc()){ 
?>

<input type="text" class="form-control" name="id_cliente" id="example-text-input" value="<?php echo $row['id_cliente']; ?> "style="visibility:hidden" />
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Nome</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nome" maxlength="100" id="example-text-input" value="<?php echo utf8_encode($row['nome']); ?>" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Apelido</label>
  <div class="col-10">
    <input class="form-control" type="text" name="apelido" maxlength="80" id="example-text-input" value="<?php echo utf8_encode($row['apelido']); ?>" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email" name="email" maxlength="80" id="example-email-input" value="<?php echo $row['email']; ?>" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">CPF (11 dígitos)</label>
  <div class="col-10">
    <input class="form-control" type="text" name="cpf" id="example-email-input" maxlength="11" pattern="[0-9]{11}" value="<?php echo $row['cpf']; ?>" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Data Nascimento</label>
  <div class="col-10">
    <input class="form-control" type="date" value="<?php echo $row['data_nascimento']; ?>" name="datanasc" id="example-date-input">
  </div>
</div>

<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Data Cadastro</label>
  <div class="col-10">
    <input class="form-control" type="date" value="<?php echo $row['data_cadastro']; ?>" name="datacad" id="example-date-input">
  </div>
</div>
<div class="row">
        <div class="form-group  col-sm-4">
          <label for="logradouro">Logradouro</label>
          <input type="text" class="form-control" name="rua" maxlength="100" id="logradouro" value="<?php echo utf8_encode($row['rua']); ?>" />
        </div>
        
        <div class="form-group  col-sm-4">
          <label for="numero">Número</label>
          <input type="text" class="form-control" name="numero" maxlength="8" id="numero" value="<?php echo $row['numero']; ?>" />
        </div>
        
        <div class="form-group  col-sm-4">
          <label for="complemento">Complemento</label>
          <input type="text" class="form-control" name="complemento" maxlength="150" id="complemento" value="<?php echo utf8_encode($row['complemento']); ?>" />
        </div>
      </div>
      
      <div class="row">
        <div class="form-group  col-sm-4">
          <label for="cep">CEP</label>
          <input type="text" class="form-control" name="cep" maxlength="9" id="cep" value="<?php echo $row['cep']; ?>" />
        </div>

        <div class="form-group  col-sm-4">
          <label for="cep">Estado</label>
          <input type="text" class="form-control" name="estado" maxlength="50" id="estado" value="<?php echo utf8_encode($row['UF']); ?>" />
        </div>
        
        <div class="form-group  col-sm-4">
          <label for="cep">Cidade</label>
          <input type="text" class="form-control" name="cidade" maxlength="50" id="cidade" value="<?php echo utf8_encode($row['cidade']); ?>" />
        </div>

      </div>

      <div class="row">
        <div class="form-group  col-sm-4">
          <label for="bairro">Bairro</label>
          <input type="text" class="form-control" name="bairro" maxlength="80" id="bairro" value="<?php echo utf8_encode($row['bairro']); ?>"/>
        </div>
                 
        <div class="form-group  col-sm-4">
          <label for="newsletter">Deseja receber newsletter?</label>
          <select id="newsletter" class="form-control" name="newsletter">
                <option value="sim">sim</option>
                <option value="não">não</option>
          </select>
        </div>

     </div>
      <button type="submit" class="btn  btn-primary confirm_update" >Alterar Dados</button> 
     
 

<?php

         }
            
        }
?>

 <div class="cancel-buttom">
     <button class="btn cancel" data-dismiss="modal" aria-hidden="true"  onclick= "window.location.href='user-management.php'" >Cancelar</button>
    </div>
    </form>

   

   
</div>

</body>

</html>
