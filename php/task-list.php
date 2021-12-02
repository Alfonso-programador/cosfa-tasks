<?php 
   session_start();
 include("database.php");
 $id_usu = $_SESSION["id_user"];

 $query = "SELECT * FROM task WHERE id_usu ='$id_usu'";
 $result = mysqli_query($connection,$query);
 if(!$result){
 	die("Error");
 }

 $json = array();
 while($row = mysqli_fetch_array($result)){
 		$json[] = array(
 				'name' => $row['name'],
 				'description' => $row['description'],
 				'id' => $row['id']
 		);
 }
		
 $jsonstring = json_encode($json);
 echo $jsonstring;
?>