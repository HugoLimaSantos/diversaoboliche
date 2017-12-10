<?php 

//session_start();
if((!isset ($_COOKIE['logi']) == true) ) {
	  unset($_SESSION);
	  //unset($_SESSION['senha']);
	  header('location:../../login.html');
}

$logado = $_COOKIE['logi'];
//print_r($_POST);

include 'conexao.php';

?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="../plugins/dataTables.bootstrap.min.css"> 
<script type="text/javascript" language="javascript" src="../plugins/jquery-1.12.4.js"> </script>
<script type="text/javascript" language="javascript" src="../plugins/jquery.dataTables.min.js">   </script>
<script type="text/javascript" language="javascript" src="../plugins/dataTables.bootstrap.min.js"> </script>
<script type="text/javascript" src="../js/admin.js" ></script>


<style>

    .save {
        margin-top: -2px;
        margin-left: -14px;
    }

    .ranking-csv {

        margin-left: 12px;

    }

    .reset {

        margin-left: 12px;

    }

</style>


<div class="container">
  <button type="button" class="close" data-dismiss="modal" onclick= "window.location.href='index-admin.php?url=7'" aria-hidden="true">menu</button>
      
      <!-- Form to insert/update client ranking -->
    
      <h2 class="text-left">Registro de Pontuação</h2>

      <form class="form col-md-12 center-block" method="POST" action="insertranking.php">

        <div class="form-group row">
            <label for="example-search-input" class="col-2 col-form-label">Apelido*</label>
          <div class="col-10">
              <input class="form-control" type="text" maxlength="50" name="apelido" id="example-text-input" required />
        </div>
      </div>

      <div class="form-group row">
         <label for="example-date-input" class="col-2 col-form-label">Data jogo</label>
       <div class="col-10">
          <input class="form-control" type="date" value="<?php echo date('Y-m-d')?>" id="example-date-input" name="datajogo">
      </div>
    </div>

     <div class="form-group row">
	      <label for="numero">Pista</label>       
      <div class="col-10">
         <input type="text" class="form-control" id="numero" name="pista" maxlength="50" pattern="[0-9]{1-50}" />
    </div>
  </div>

    <div class="form-group row">
	      <label for="numero">Pontuação*</label>       
    <div class="col-10">
          <input type="number" class="form-control" id="numero" name="pontuacao" min="1" max="50000" pattern="[0-9]{1-50}" required />
    </div>
  </div>
  
    <div class="form-group row">
        <label for="example-search-input" class="col-2 col-form-label">Observação</label>
    <div class="col-10">
        <input class="form-control" type="text" name="Observaçâo" id="example-text-input" maxlength="50" />
    </div>
  </div> 
        <button type="submit" class="btn btn-primary save">Salvar</button> 
        <button type="reset" class="btn btn-primary reset">Limpar</button>   
  </form>

         <!-- Table to see changes in real time of RANKING table -->
  
       <h2 class="text-left">Consulta</h2>

        <table data-order='[[ 2, "desc" ]]' id="init-filter" class="table table-striped table-bordered" cellspacing="0" width="100%">
         <thead>
                <tr>
                    <th>Apelido</th>
                    <th>Data do último jogo</th>
                    <th>Pontuação Geral</th>
                    <th>Excluir</th>
                </tr>
        </thead>
        
        <tbody>

<?php

    $result = $conn->query('SELECT * FROM RANKING ORDER BY pontuacao_final DESC');
      if($result){
        while ($row = $result->fetch_assoc()){ 
            $id = $row['id_ranking'];
            echo"<tr><td>".utf8_encode($row['apelido'])."</td><td>".utf8_encode($row['data_jogo'])."</td><td>".$row['pontuacao_final']."</td><td><button style='font-size:13px' class='exclude-ranking' value='$id' ><i class='glyphicon glyphicon-remove'></></button></td></tr>";

        }
            $result->free();
    }
    
    $conn->close();

?>
     </tbody>
  </table>

  <button type="button" class="btn btn-primary clean-ranking" >Fechar o mês</button> 
  <button type="button" class="btn btn-primary ranking-csv" >csv</button>  

</div>
