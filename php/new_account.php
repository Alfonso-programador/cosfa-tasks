<?php 
  include("database.php");
  $email = $_POST["email"];
  $password = $_POST["password"];
  $name = $_POST["name"];
  $sql = "INSERT INTO users(name,email,password) VALUES ('$name', '$email', '$password')";
  $result = mysqli_query($connection,$sql);
  if(!$result){
  	 echo($email);
  		header("location: ../signup.php?msgrow=Error,Vuelva a intentarlo");
  }else{

  	header("Location: ../login_front.php?msgok=Usuario Creado Satisfactoriamente"); 
  }
?>