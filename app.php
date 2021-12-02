<?php
session_start();
if(!isset($_SESSION["id_user"])){
    header("location:login_front.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cosfa Tasks App</title>
  <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand p-2" href="#">Cosfa Tasks App</a>

           
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    </button>

    <div class="navbar" id="navbarColor01">
      
      <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Busca Tu Tarea" id="search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>

      </form>
    </div>
  </div>
</nav>

<div class="container p-4">
  <div class="row">
    <div class="col-md-5">
    
      <div class="card bg-light mb-3">
        <div class="card-body">
          <form id="task-form">
            <input type="hidden" id ="taskId">
            <div class="form-group">
              <input type="text" id="name" placeholder="Nombre de la tarea" class="form-control">
            </div>
            <br>
            <div class="form-group">
              <textarea id="description" cols="30" rows="10" class="form-control" placeholder="Descripcion de la tarea"></textarea>
            </div>
            <br>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-lg btn-secondary">
              Guardar Tarea
            </button>
            </div>
            
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-7">
      <div class="card my-4" id="task-result">
        <div class="card-body">
          <ul id="container">
            
          </ul>
        </div>
      </div>
      <table class="table table-hover table-bordered table-sm">
        <thead>
          <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Descripcion</td>
          </tr>
        </thead>
        <tbody id="tasks"></tbody>
      </table>
    </div>
  </div>
</div>
<br>
<br>
 <div class="container p-4">
  <h3>Mi cuenta</h3>
           <p class="navbar-brand p-2"><?php echo $_SESSION["email"] ?></p>
        <button class="btn btn-secondary my-2 my-sm-0"><a href="php/logout.php" style="text-decoration: none;color: white;">Cerrar Sesion</a></button>

        </div>
  <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-primary text-white-50">
    <div class="container text-center">
      <small>Creado por &copy Alfonso Murillo Lora </small>
    </div>
  </footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
<script src="js/app.js"></script>

</body>
</html>