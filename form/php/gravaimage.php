<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

session_start();

include 'conexao.php';

// check if an archive was sent
if ( isset( $_FILES[ 'photo' ][ 'name' ] ) && $_FILES[ 'photo' ][ 'error' ] == 0 ) {
     
    $tmp_archive = $_FILES[ 'photo' ][ 'tmp_name' ];
    $name = $_FILES[ 'photo' ][ 'name' ];
	$size = floatval ($_FILES[ 'photo' ][ 'size' ]);
 
	   	// Take the archive extention
    	$ext = pathinfo ( $name, PATHINFO_EXTENSION );
 
    	// Convert the extention letters to lower case
    	$ext = strtolower ( $ext );
 
		// Filter just the allowed extentions: .jpg;.jpeg;.gif;.png
		if ( strstr ( '.jpg;.jpeg;.gif;.png;.bmp', $ext ) ) {
			
			// check the image size in bytes.. maximum is 15 M.
			if ( $size <= 15000000) {
			$image_name = uniqid(time()) . '.' . $ext;
	
			$image_path = "../../images/gallery/" . $image_name;
	
			// try to move the archive to it's destination
			if ( @move_uploaded_file ( $tmp_archive, $image_path ) ) {
				
				echo 'Arquivo salvo com sucesso em : <strong>' . $image_path . '</strong><br />';
				
				// Insert the new picture in the database
				$query = mysqli_query($conn, "INSERT INTO FOTOS VALUES ('',  '".$image_name."')");
			
				// Check if the query end succesfully
			
            if ($query){
				echo "Foto registrada com sucesso no banco de dados.";
			}

			header('location:getimage.php');	

        }
        else
            echo"<script language='javascript' type='text/javascript'>alert('Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.');window.location.href='getimage.php';</script>";
    
	  }
 		else
  	 		echo"<script language='javascript' type='text/javascript'>alert('Tamanho máximo permitido para upload de fotos é de 15M!');window.location.href='getimage.php';</script>";
	}
    else
        echo"<script language='javascript' type='text/javascript'>alert('Você poderá enviar apenas arquivos *.jpg;*.jpeg;*.gif;*.bmp;*.png ');window.location.href='getimage.php';</script>";
}
else
    echo"<script language='javascript' type='text/javascript'>alert('Nenhuma foto selecionada!');window.location.href='getimage.php';</script>";


?>
