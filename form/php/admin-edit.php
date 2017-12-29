<?php

session_start();

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

include 'conexao.php';

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>

    .root {
        margin-top: -2px;
        margin-left: -14px;
    }

</style>


<?php

$id = $_GET['id'];

$user = $_COOKIE['logi'];
$query =sprintf("SELECT root FROM USUARIOS WHERE login = '$user';");
$dados = mysqli_query($conn, $query) or die("erro");
$linha = mysqli_fetch_assoc($dados);

if ($linha['root'] == 'sim') {

    $query = mysqli_query($conn,"SELECT * FROM USUARIOS WHERE ID='$id'");

    if($query){

        while ($row = $query->fetch_assoc()){ 

        ?>
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick= "window.location.href='index-admin.php?url=2'" aria-hidden="true">menu</button>
                  <h1 class="text-center">Editar Admin</h1>
             </div>

	           <div class="modal-body">

                <form class="form col-md-12 center-block" method = "POST" action = "update-admin.php">
      
                <div class="form-group col-sm-2 root">
          
                 <label for="root">Privilégios de root</label>
                    <select id="root" class="form-control" name="root">
                        <option value="não">não</option>
                        <option value="sim">sim</option>
                    </select>
              </div>

            <input type="text" class="form-control" name="id_admin" id="example-text-input" value="<?php echo $row['ID']; ?> "style="visibility:hidden" />
      
            <div class="form-group">
                <input type = "email" class = "form-control input-lg" name = "logi" maxlength="100" value="<?php echo $row['login']; ?>" disabled >
            </div>
      
            <div class="form-group">
                <input type = "password" class = "form-control input-lg" name = "senh" maxlength="100" placeholder = "Nova senha" required >
            </div>
          
            <!--  <div class="form-group">
                    <input type="password" class="form-control input-lg" name="CONFIRMAR SENHA" placeholder="Senha">
                  </div> -->
           
           <div class="form-group">
              <button type = "submit " class="btn btn-primary btn-lg btn-block">Mudar a senha</button>
          </div>
      
      </form>
     </div>
	     <div class="modal-footer">
     <div class="col-md-12">
         <button class="btn" data-dismiss="modal" aria-hidden="true" onclick= "window.location.href='admin-management.php'">Cancelar</button>
    </div> 
 </div>
</div>


<?php
    }
  }

} else {

      echo"<script language='javascript' type='text/javascript'>alert('O seu usuário não tem permissão de acesso para trocar a senha de admins!');window.location.href='admin-edit.php';</script>";

}

?>