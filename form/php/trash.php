<?php

if((!isset ($_COOKIE['logi']) == true) )
{
	unset($_SESSION);
	header('location:../../login.html');
}

session_start();

include 'conexao.php';
var_dump ($GLOBALS);
$picture = $_POST["picture"];

    //take the picture name
    $cut = substr($picture, 21, 200);
    echo $cut;
    echo '<br>';
    echo $picture;
    echo '<br>';
    echo strlen($cut); // 27 characters

    //specific the path that the image is going to be moved
    $new_path = '../../images/trash/' . $cut;

    //move the image to trash folder
    copy ($picture, $new_path );

    //delete the image in the gallery folder
    unlink ($picture);

    //delete the image in the database
    //$query = mysqli_query($conn, "DELETE INTO FOTOS VALUES ('',  '".$cut."')");
    $query = mysqli_query($conn, "DELETE FROM FOTOS WHERE fot_img ='$cut'" );
    //DELETE FROM `FOTOS` WHERE fot_img = "15114434905a16cc22a9910.jpg"

    //get the query status
    if ($query){
		echo "Foto deletada com sucesso.";
	}
		
		
	header('location:getimage.php');	
		

?>


