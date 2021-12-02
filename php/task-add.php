<?php 
	include("database.php");
  session_start();
   $id_usu = $_SESSION["id_user"];
	if(isset($_POST["name"])){
		$name =  $_POST["name"];
		$description = $_POST["description"];
		$query = "INSERT INTO task(name,description,id_usu) VALUES ('$name','$description','$id_usu')";
		$result = mysqli_query($connection,$query);
		if(!$result){
			die("Error");
		}
		echo 'Tarea agregada';
	}

?>