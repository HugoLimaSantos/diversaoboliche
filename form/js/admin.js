$(document).ready(function () {

//////////////// Handle call trash.php ///////////////

    $(' .move_trash ').click( function() {

    var picture=($(this).val());
        
       return $.ajax({
        datatype:'Array',
        type:'post',
        url:'../php/trash.php',
        data:{picture}, 
        complete: function(data){
            console.log (data);	
            window.location.href='getimage.php';

        }
           

    }); 
 });


//////////////// Handle call exclude-image.php ///////////////

    $(' .exclude_forever ').click( function() {

    var picture=($(this).val());
    var confirm_ope = confirm ('Deseja realmente excluir esse cliente?');

    if (confirm_ope) {
       return $.ajax({
        datatype:'Array',
        type:'post',
        url:'../php/exclude-image.php',
        data:{picture}, 
        complete: function(data){
            console.log (data);	
            alert('Foto excluída com sucesso!');
            window.location.href='trash_management.php';

        }
    }); 

   } else {

            event.preventDefault();

   }

 });


//////////////// Handle call restore-image.php ///////////////

    $(' .restore_to_gallery ').click( function() {

    var picture=($(this).val());
    //alert ($(this).val());
    var confirm_ope = confirm ('Deseja realmente restaurar essa foto para a galeria?');

    if (confirm_ope) {

      return $.ajax({
        datatype:'Array',
        type:'post',
        url:'../php/restore-image.php',
        data:{picture}, 
        complete: function(data){
            console.log (data);
            alert('Foto restaurada com sucesso!');	
            window.location.href='trash_management.php';

        }
    }); 

   } else {

            event.preventDefault();
            
   }

 });


//////////////// Handle call client-edit.php ///////////////

/*   $(' .edit-client ').click( function() {
       
       //alert($(this).val());
       var id = ($(this).val());
       alert (id);
       return $.ajax({
          datatype:'Array',
          type:'post',
          url:'../php/client-edit.php',
          data:{id}, 
          
          complete: function(data){
            alert (data);
            console.log (data);	
            window.location.href='client-edit.php';
            
        }
           
    }); 
       

}); */  


//////////////// Handle call client-exclude.php ///////////////

    $(' .exclude-client ').click( function() {

     //alert($(this).val());
     var id_cli=($(this).val());
     var confirm_ope = confirm ('Deseja realmente excluir esse cliente?');
     
     if (confirm_ope) {
       return $.ajax({
          datatype:'Array',
          type:'post',
          url:'../php/client-exclude.php',
          data:{id_cli}, 
          
          complete: function(data){
            //alert (data);
            console.log (data);	
            alert ('Cliente excluído da base de dados!')
            window.location.href='index-admin.php?url=4';
            
        }
           
    });

   } else {

            event.preventDefault();

   } 

 });


///////////////// Handle avoid call update-client.php ////////////////

$(' .confirm_update ').click( function (){

    var confirm_ope = confirm ('Deseja realmente atualizar os dados desse cliente?');

    if (!confirm_ope){

        event.preventDefault();

    }

}); 


////////// Handle press cancel button a client-edit.php ////////////

$(' .cancel ').click( function (){

    event.preventDefault();
    window.location.href='user-management.php';

}); 


///////// Handle calls DataTable function at client management.php ////////
 
 $('#init-filter').DataTable();

});
