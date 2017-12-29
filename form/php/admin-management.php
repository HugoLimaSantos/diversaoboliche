<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

//session_start();
include 'conexao.php';

$user = $_COOKIE['logi'];
$query =sprintf("SELECT root FROM USUARIOS WHERE login = '$user';");
$dados = mysqli_query($conn, $query) or die("erro");
$linha = mysqli_fetch_assoc($dados);

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../plugins/dataTables.bootstrap.min.css"> 
<script type="text/javascript" language="javascript" src="../plugins/jquery-1.12.4.js"> </script>
<script type="text/javascript" language="javascript" src="../plugins/jquery.dataTables.min.js">   </script>
<script type="text/javascript" language="javascript" src="../plugins/dataTables.bootstrap.min.js"> </script>
<script type="text/javascript" src="../js/admin.js" ></script>

<div class="container">
  <button type="button" class="close" data-dismiss="modal" onclick= "window.location.href='index-admin.php?url=2'" aria-hidden="true">menu</button>

<?php

if ($linha['root'] == 'sim'){

			?>
                  <h2>Admins</h2>         
  				    <table id="init-filter" class="table table-striped table-bordered" cellspacing="0" width="100%">
    					<thead>
      						<tr>
        						<th>Login</th>
        						<th>Senha</th>
        						<th>Root</th>
        						<th>Editar</th>
        						<th>Excluir</th>
        					</tr>
    					</thead>
    					<tbody>

						<?php
							$result = $conn->query('SELECT * FROM USUARIOS ORDER BY login');
							
							if($result){
    							while ($row = $result->fetch_assoc()){ 
        								
										$id = $row['ID'];
        								echo"<tr><td>".utf8_encode($row['login'])."</td><td>".utf8_encode($row['senha'])."</td><td>".utf8_encode($row['root'])."</td><td><a href='admin-edit.php?id=$id'><button style='font-size:13px' class='edit-client' value='$id' ><i class='glyphicon glyphicon-pencil'></></button></td><td><button style='font-size:13px' class='exclude-admin' value='$id' ><i class='glyphicon glyphicon-remove'></></button></td></tr>";

     						}
    						$result->free();
						}
						
						$conn->close();

					?>
    </tbody>
  </table>
			
<?php

} else {



    	$query = mysqli_query($conn,"SELECT * FROM USUARIOS WHERE login = '$user';");

    	if($query){

        	while ($row = $query->fetch_assoc()){
				
					?>	
					 <div class="modal-content">
              			<div class="modal-header">
                			<button type="button" class="close" data-dismiss="modal" onclick= "window.location.href='index-admin.php?url=2'" aria-hidden="true">menu</button>
                  				<h1 class="text-center">Editar Admin</h1>
             			</div>

	           			<div class="modal-body">

                		<form class="form col-md-12 center-block" method = "POST" action = "change-pass-admin.php">
      
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
         			<button class="btn" data-dismiss="modal" aria-hidden="true" onclick= "window.location.href='index-admin.php'">Cancelar</button>
   				</div> 
			 </div>
		</div>






<?php


	}

  }

}


?>

</div>