<!--Codigo PHP-->
<?php
    include_once('../config/config.php');
    include('function.php');

    $p = new Functions();
    $dp = mysqli_fetch_object($p->getOne($_GET['id']));

    if( isset($_POST) && !empty($_POST)){
        $update= $p->update($_POST);
        if($update){
            $mensaje = '<div class="alert alert-success" role="alert">Usuario Modificado con Exito!</div>';
        }else{
            $mensaje = '<div class="alert alert-danger" role="alert">Error al Modificar!</div>';
        }
    }
?>
<!--Pagina Web-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
    <link rel="stylesheet" href="../css/edit.css">
</head>
<body>
    <!--Cabecera de la pagina-->
    <header>
        <nav>
            <a href="<?= ROOT ?>/index.php">Inicio</a>
            <a href="<?= ROOT ?>/users/index.php">Usuarios Registrados</a>
        </nav>
        <section class="textos-header">
            <h1>La Pedagogia Infantil</h1>
        </section>
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C88.31,284.53 279.62,-126.97 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>

    <!--Formulario de Edicion-->
    <h2 class="titulo">¡Modificar Usuario!</h2>
    <form method="POST"  class="form-register">
            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre" value="<?= $dp->nombres ?>">
            <input type="hidden" name="id" value="<?=$dp->id?>">
            <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido" value="<?= $dp->apellidos?>">
            <input class="controls" type="text" name="direccion" id="direccion" placeholder="Ingrese su Direccion de Residencia" value="<?= $dp->direccion?>">
            <input class="controls" type="number" name="celular" id="celular" placeholder="Ingrese su Numero Telefonico" value="<?= $dp->celular?>">
            <input class="controls" type="text" name="profesion" id="profesion" placeholder="Ingrese su Profesion" value="<?= $dp->profesion?>">
            <input class="controls" type="email" name="email" id="email" placeholder="Ingrese su Correo Electronico" value="<?= $dp->email?>">
            <button class="botons" >Modificar Usuario</button>
    </form>    

    <!--Informacion de Contacto-->
    <section class="social-networks">
        <div class="contenedor">
            <h2 class="titulo">Redes Sociales</h2>
            <div class="servicio-cont">
                <div class="servicio-ind">
                    <img src="../images/Facebook.png" alt="">
                    <h3>Facebook</h3>
                    <p>NataliaChaparro</p>
                </div>
                <div class="servicio-ind">
                    <img src="../images/WhatsApp.png" alt="">
                    <h3>WhatsApp</h3>
                    <p>(+57) 311 5780627</p>
                </div>
                <div class="servicio-ind">
                    <img src="../images/Instagram.png" alt="">
                    <h3>Instagram</h3>
                    <p>@NataliaChaparro</p>
                </div>
            </div>
        </div>
    </section>

    <!--Pie de la pagina-->
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Telefono</h4>
                <p>311 5780627</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>lauranath97@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Ciudad</h4>
                <p>Sogamoso</p>
            </div>
        </div>
        <h2 class="titulo-final">Laura Natalia Chaparro Barrera</h2>
    </footer>
</body>
</html>