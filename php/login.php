<?php
	session_start(); 
	include("database.php");
	$email = $_POST["email"];
	$password = $_POST["password"];
	$query = "SELECT * FROM users WHERE email = '$email' and password ='$password' ";
	$result = mysqli_query($connection, $query);
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();	
		$_SESSION["id_user"] = $row["id"];
		$_SESSION["email"] = $row["email"];
		header("Location: ../app.php"); 
	}else{
		header("location: ../login_front.php?msgrow= Error, email y/o contraseña incorrecta");
	}
?>