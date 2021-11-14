<!DOCTYPE html>

<?php
$GLOBALS["UrlWeb"] = "C:/xampp/htdocs/CLIENTE/";
$GLOBALS["UrlWebhttp"] = "http://localhost/CLIENTE/";
?>
<html>
    <head>
        <title></title>
        <?php include_once $GLOBALS["UrlWeb"] . "/Views/Commons/header.php" ?>
    </head>
    <body>


        <nav class="navbar navbar-dark bg-dark text-white">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="http://localhost/CLIENTE/Acces/imagenes/R.png" alt="" width="50" height="50">

                    Aplicacion WEB ADSI
                </a>

            </div>
        </nav>
        <div class="row mt-4">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <form action="http://localhost/CLIENTE/Controladores/Proxy.php?c=Consultorio&a=listar" method="POST">
                        <div class="card-header bg-success text-white text-center">Inicio de sesion</div>
                        <div class="card-body">

                            <label>Usuario</label></br> 
                            
                            <input name="usuario"type="text"  required="required"><br/>
                            <label>Contraseña</label></br>
                            <input name="contrasena"type="password"required="required"><br/><br/>
                           
                        </div>
                        <div class="card-footer text-center"><input type="submit" value="Ingresar"class="btn btn-primary"></div>
                    </form>
                </div>
            </div>
            <div class="col-4"></div>
        </div>

        <h2></h2>

    </body>
</html>
