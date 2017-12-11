<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="../plugins/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/admin.js" ></script>
   <button type="button" class="close" data-dismiss="modal" onclick= "window.location.href='index-admin.php?url=6'" aria-hidden="true">menu</button>
    <div class="modal-header">
    <h1 class="text-center">Lixeira</h1>
    </div>

<?php
                    $count = 1;
            	    $path = '../../images/trash/';
				    $photos = glob("$path{*.jpg,*.JPG,*.png,*.PNG,*.JPEG,*.jpeg}", GLOB_BRACE); //glob push all images in the $photos array
                    $photos = array_reverse ($photos); //reverse the array to show the last update in the array first position
    
    		            foreach($photos as $img){
                    
		
                    if ( $count == 1 ) { 
?>
                                        <div class="row"> <!-- Start row -->
   						                            <div class="col-md-4">
     							                          <div class="thumbnail">
        							                        <a href="<?php echo $img; ?>" target="_blank">
         							                          <img src="<?php echo $img; ?>" alt="Lights" >
         							                            <div class="caption"> </div>
        							                        </a>
       								                        <button type="button" class="btn btn-default btn-sm exclude_forever" value="<?php echo $img; ?>" >
        						                          	<span class="glyphicon glyphicon-remove"></span> Remover
        							                      </button>
                                                          <button type="button" class="btn btn-default btn-sm restore_to_gallery" value="<?php echo $img; ?>" >
        						                          	<span class="glyphicon glyphicon-refresh"></span> Restaurar
        							                      </button>
     							                        </div>
                                        </div>

<?php 
                        
    					} elseif ($count == 3) {

?>		
                					              <div class="col-md-4">
     						                  			 <div class="thumbnail">
        									                <a href="<?php echo $img; ?>" target="_blank">
        									                 <img src="<?php echo $img; ?>" alt="Nature" >
         									                  <div class="caption"> </div>
      									                  </a>
        								                   <button type="button" class="btn btn-default btn-sm exclude_forever" value="<?php echo $img; ?>" >
        						                          	<span class="glyphicon glyphicon-remove"></span> Remover
        							                      </button>
                                                          <button type="button" class="btn btn-default btn-sm restore_to_gallery" value="<?php echo $img; ?>" >
        						                          	<span class="glyphicon glyphicon-refresh"></span> Restaurar
        							                      </button>
      									                </div>
  									                </div>
								                  </div> <!-- finish row -->
<?php 
                                  $count = 0;

					   } else { 

?>
   						                          <div class="col-md-4">
     							                        <div class="thumbnail">
        							                      <a href="<?php echo $img; ?>" target="_blank">
         							                        <img src="<?php echo $img; ?>" alt="Lights" >
         							                          <div class="caption"> </div>
        							                      </a>
        								                  <button type="button" class="btn btn-default btn-sm exclude_forever" value="<?php echo $img; ?>" >
        						                          	<span class="glyphicon glyphicon-remove"></span> Remover
        							                      </button>
                                                          <button type="button" class="btn btn-default btn-sm restore_to_gallery" value="<?php echo $img; ?>" >
        						                          	<span class="glyphicon glyphicon-refresh"></span> Restaurar
        							                      </button>
     							                      </div>
                                      </div>
                		
				
<?php	                         		                          
                    
          }
            $count++;

      }
?>

  
</div>