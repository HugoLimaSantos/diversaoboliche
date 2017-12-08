<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

session_start();

include 'conexao.php';

echo '<pre>',print_r($GLOBALS),'</pre>';
$picture = $_POST["picture"];

    //take the picture name
    $cut = substr($picture, 21, 200);
    echo $cut;
    echo '<br>';
    echo $picture;
    echo '<br>';
    echo strlen($cut); // 27 characters

	
	$image_path = "../../images/gallery/" . $cut;
	
	// try to move the archive to it's destination
	copy ( $picture, $image_path );
				
		echo 'Arquivo salvo com sucesso em : <strong>' . $image_path . '</strong><br />';
        
         unlink ($picture);
			
		// Insert the new picture in the database
	    $query = mysqli_query($conn, "INSERT INTO FOTOS VALUES ('',  '".$cut."')");
			
		// Check if the query end succesfully
	
        if ($query){
			echo "Foto restaurada com sucesso no banco de dados.";
    	}
         else {
         echo"<script language='javascript' type='text/javascript'>alert('Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.');window.location.href='trash_management.php';</script>";
        }


?>
