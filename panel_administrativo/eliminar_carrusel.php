<?php

if(isset($_GET["id"])){
	include "conexion_carrusel.php";
	$img = get_img($_GET["id"]);
	if($img!=null){
		del($img->id);
		unlink($img->folder.$img->src);
		header("Location:index_carrusel.php");


	}
}


?>