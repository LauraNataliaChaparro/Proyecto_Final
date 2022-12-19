<!--Codigo PHP-->
<?php
    include_once('../config/config.php');
    include('function.php');

    $p = new Functions();
    $data = $p->getAll();

    if( isset($_GET['id']) && !empty($_GET['id'])){
        $remove = $p->delete($_GET['id']);
        if($remove){
            header('Location:'.ROOT.'/users/index.php');
        }else{
            $mensaje = '<div class="alert alert-danger" role="alert">Error al Eliminar</div>';
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
    <title>Usuarios Registrados</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <!--Cabecera de la pagina-->
    <header>
        <nav>
            <a href="<?= ROOT ?>/index.php">Inicio</a>
            <a href="<?= ROOT ?>/users/add.php">Registro</a>
            <a href="<?= ROOT ?>/users/index.php">Usuarios Registrados</a>
        </nav>
        <section class="textos-header">
            <h1>Usuarios Registrados</h1>
        </section>
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C88.31,284.53 279.62,-126.97 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>

    <!--Contenido que muestra los usuarios registrados-->
    <div class="container">
        <div class="row">
            <?php
                while( $pt = mysqli_fetch_object($data)){
                    echo "<div class='col'";
                    echo "<h2> $pt->nombres $pt->apellidos</h2>";
                    echo "<h4> $pt->profesion </h4>";
                    echo "<p><b>E-mail: </b>$pt->email</p>";
                    echo "<div class='text-center'>";
                        echo "<a class='btn btn-success' href='".ROOT."/users/edit.php?id=$pt->id'>Modificar</a> - <a class='btn btn-danger' href='".ROOT."/users/index.php?id=$pt->id'>Eliminar</a> ";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>

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