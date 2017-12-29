<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>

    .root {
        margin-top: -2px;
        margin-left: -14px;
    }

</style>


<div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" onclick= "window.location.href='index-admin.php?url=1'" aria-hidden="true">menu</button>
     <h1 class="text-center">Login</h1>
     </div>

	 <div class="modal-body">

      <form class="form col-md-12 center-block" method = "POST" action = "cadastro.php">
      
      <div class="form-group col-sm-2 root">
          <label for="root">Privilégios de root</label>
          <select id="root" class="form-control" name="root">
                <option value="não">não</option>
                <option value="sim">sim</option>
          </select>
      </div>
      
      <div class="form-group">
        <input type = "email" class = "form-control input-lg" name = "logi" maxlength="100" placeholder = "Email">
      </div>
      <div class="form-group">
        <input type = "password" class = "form-control input-lg" name = "senh" maxlength="100" placeholder = "Senha">
      </div>
    <!--  <div class="form-group">
        <input type="password" class="form-control input-lg" name="CONFIRMAR SENHA" placeholder="Senha">
      </div>
-->
            <div class="form-group">
              <button type = "submit " class="btn btn-primary btn-lg btn-block">Registrar</button>
              

         </div>
      </form>
    </div>
	  <div class="modal-footer">

 <div class="col-md-12">
   <button class="btn" data-dismiss="modal" aria-hidden="true" onclick= "window.location.href='index-admin.php'">Cancelar</button>
</div> 
</div>

</div>
