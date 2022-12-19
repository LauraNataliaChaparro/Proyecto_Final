<!--Codigo PHP-->
<?php
    include_once('../config/config.php');
    include('function.php');

    if( isset($_POST) && !empty($_POST)){
        $p = new Functions();

        $save = $p->save($_POST);
        if($save){
            $mensaje = '<div class = "alert alert-success"> Usuario Registrado </div>';
        }else{
            $mensaje = '<div class = "alert alert-success"> Error al Registrar! </div>';
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
    <title>Registro</title>
    <link rel="stylesheet" href="../css/add.css">
</head>
<!-- Cuerpo de la pagina principal-->
<body>
    <!--Cabecera de la pagina-->
    <header>
        <nav>
            <a href="<?= ROOT ?>/index.php">Inicio</a>
            <a href="<?= ROOT ?>/users/add.php">Registro</a>
            <a href="<?= ROOT ?>/users/index.php">Usuarios Registrados</a>
        </nav>
        <section class="textos-header">
            <h1>La Pedagogia Infantil</h1>
            <h2>"En cada niño se debería poner un cartel que dijera: <br> Tratar con cuidado, contiene sueños". <br> Mirko Badiale</h2>
        </section>
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C88.31,284.53 279.62,-126.97 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <!--Contenido Informativo-->
    <main>
        <section class="contenedor sobre-nosotros">
            <div class="contenedor-sobre-nosotros">
                <video class="imagen-about-us" controls>
                    <source src="../images/video.mp4" type="video/mp4">
                </video>
                <div class="contenido-textos">
                    <h3><span>1</span>¿Porque es importante?</h3>
                    <p>La pedagogía permite al docente elaborar, a través de la didáctica, las estrategias y métodos que permitan que la totalidad de sus alumnos se encuentren en las mismas condiciones para adquirir y apropiarse de los contenidos impartidos, como parte de su proceso formativo.
                    <br><br>Cabe destacar que hay autores que sostienen que la pedagogía no es una ciencia, sino que es un arte o un tipo de conocimiento</p>
                </div>
            </div>
        </section>
    </main>
    <!--Formulario de Registro-->
    <h2 class="titulo">¡Registrate!</h2>
    <form method="POST"  class="form-register">
        <h4>¡ Permitenos conectar contigo ! </h4>
            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre">
            <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido">
            <input class="controls" type="text" name="direccion" id="direccion" placeholder="Ingrese su Direccion de Residencia">
            <input class="controls" type="number" name="celular" id="celular" placeholder="Ingrese su Numero Telefonico">
            <input class="controls" type="text" name="profesion" id="profesion" placeholder="Ingrese su Profesion">
            <input class="controls" type="email" name="email" id="email" placeholder="Ingrese su Correo Electronico">
            <p>¡¡Contactenos!!</p>
            <button class="botons">Registrar Usuario</button>
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