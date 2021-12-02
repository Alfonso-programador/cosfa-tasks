<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body>
<div class="container px-4 py-5 mx-auto">
   <form action="php/new_account.php" method="post">
    

    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="img/cosfa.png"> </div>
                        <h3 class="mb-5 text-center heading">Cosfa Tasks App</h3>
                        <h6 class="msg-info">Crea tu cuenta</h6>
                        <?php
                                        if (isset($_GET["msgrow"])) {

                                            echo "<div class='alert alert-danger' role='alert'>".$_GET["msgrow"]."
                                                </div>";
                                         
                                        }
                         ?>
                        <div class="form-group"> <label class="form-control-label text-muted">Email</label> <input type="email" id="email" name="email" class="form-control" required> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Nombre</label> <input type="text" id="email" name="name" class="form-control" required> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" id="psw" name="password"class="form-control" required> </div>
                        <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color" type="submit">Crear Cuenta</button> </div>
                  
                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-3">¿Ya tienes cuenta?<a class="btn btn-white ml-2" href="login_front.php">Iniciar sesion</a></p>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">Administra tus tareas personales</h3> <small class="text-white">Cosfa Tasks App es una aplicacion creada para que empleados y estudiantes del Colegio San Francisco de Asis puedan administrar sus tareas personales </small>
                </div>
            </div>
        </div>
    </div>
   </form>
</div>
</body>
</html>