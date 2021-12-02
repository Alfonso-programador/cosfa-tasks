<?php 
  session_start();
  unset($_SESSION['id_user']);
  unset($_SESSION['name']);
  header("Location: ../login_front.php"); 
 ?>