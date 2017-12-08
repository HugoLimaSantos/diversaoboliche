<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="../plugins/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/selectestadocidade.js" ></script>

<!--===========================================================================-->
<body>

<div class="container">
  <button type="button" class="close" data-dismiss="modal" onclick= "window.location.href='index-admin.php?url=3'" aria-hidden="true">menu</button>
  <h2>Cadastro de clientes</h2>


<form class="form col-md-12 center-block" method="POST" action="insertcliente.php">
 <meta charset="UTF-8">
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Nome*</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nome" maxlength="100" id="example-text-input" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Apelido*</label>
  <div class="col-10">
    <input class="form-control" type="text" name="apelido" maxlength="80" id="example-text-input" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email*</label>
  <div class="col-10">
    <input class="form-control" type="email" name="email" maxlength="80" id="example-email-input" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">CPF (11 dígitos)*</label>
  <div class="col-10">
    <input class="form-control" type="text" name="cpf" id="example-email-input" maxlength="11" pattern="[0-9]{11}" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Data Nascimento</label>
  <div class="col-10">
    <input class="form-control" type="date" value="2011-08-19" name="datanasc" id="example-date-input">
  </div>
</div>

<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Data Cadastro</label>
  <div class="col-10">
    <input class="form-control" type="date" value="<?php echo date('Y-m-d')?>" name="datacad" id="example-date-input">
  </div>
</div>

<div class="row">
        <div class="form-group  col-sm-4">
          <label for="logradouro">Logradouro</label>
          <input type="text" class="form-control" name="rua" maxlength="100" id="logradouro"/>
        </div>
        
        <div class="form-group  col-sm-4">
          <label for="numero">Número</label>
          <input type="text" class="form-control" name="numero" maxlength="8" id="numero"/>
        </div>
        
        <div class="form-group  col-sm-4">
          <label for="complemento">Complemento</label>
          <input type="text" class="form-control" name="complemento" maxlength="150" id="complemento"/>
        </div>
      </div>
      
      <div class="row">
        <div class="form-group  col-sm-4">
          <label for="cep">CEP</label>
          <input type="text" class="form-control" name="cep" id="cep" maxlength="9" pattern="[0-9]{5}-[0-9]{3}" placeholder = "Ex.: 13290-000"/>
        </div>
        
        <div class="form-group  col-sm-4">
          <label for="estado">Estado</label>
          <select id="estado" class="form-control" name="estado">
                      <option value="">Selecione o estado</option>
                  </select>
        </div>
        
        <div class="form-group  col-sm-4">
          <label  for="cidades">Cidade</label>
          <select id="cidades" class="form-control" name="cidade">
            <option value="">Selecione a cidade</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="form-group  col-sm-4">
          <label for="bairro">Bairro</label>
          <input type="text" class="form-control" name="bairro" maxlength="80" id="bairro"/>
        </div>
                 
        <div class="form-group  col-sm-4">
          <label for="newsletter">Deseja receber newsletter?</label>
          <select id="newsletter" class="form-control" name="newsletter">
                <option value="sim">sim</option>
                <option value="não">não</option>
          </select>
        </div>

     </div>
      <button type="submit" class="btn  btn-primary">Salvar</button> 
         <button class="btn" data-dismiss="modal" aria-hidden="true" type="reset">Limpar</button>

    </form>
</div>

</body>
</html>