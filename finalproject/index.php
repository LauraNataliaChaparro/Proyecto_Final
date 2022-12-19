<!--Codigo PHP-->
<?php
    include('config/config.php');
?>
<!--Pagina Web-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedagogia Infantil</title>
    <link rel="shortcut icon" href="images/icono.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>
<!-- Cuerpo de la pagina principal-->
<body>
    <!--Cabecera de la pagina-->
    <header>
        <nav>
            <a href="<?= ROOT ?>/index.php">Inicio</a>
            <a href="<?= ROOT ?>/users/add.php">Registro</a>
        </nav>
        <section class="textos-header">
            <h1>La Pedagogia Infantil</h1>
            <h2>"Educar no es dar una carrera para vivir,<br> sino templar el alma para las dificultades de la vida."</h2>
        </section>
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C88.31,284.53 279.62,-126.97 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </header>
    <main>
        <!--Contenido Informativo-->
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">¿Como se define la pedagogia infantil?</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="images/img2.jpg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>La Definicion Propia</h3>
                    <p>La pedagogía infantil es una disciplina científica que tiene como campo de estudio la educación en la niñez.</p>
                    <h3><span>2</span>Lo Fundamental</h3>
                    <p>La infancia constituye una etapa fundamental en el proceso de desarrollo y formación de la personalidad. Los primeros años de vida del niño se establecen los cimientos para un crecimiento saludable y armonioso. La pedagogía infantil se aboca a estos años tan esenciales.
                    La pedagogía infantil también actúa de diversas maneras para reforzar los procesos educativos en la infancia y así influir en la socialización del niño.</p>
                </div>
            </div>
        </section>
        <!--Slider de Imagenes-->
        <section class="slider">
            <div class="slider-container">    
                <img class="slider-item" src="images/img7.jpg" alt="">
                <img class="slider-item" src="images/img6.jpg" alt="">
                <img class="slider-item" src="images/img3.jpg" alt="">
            </div>
        </section>
        <!--Contenido Informativo Dos-->
        <section class="clientes contenedor">
            <h2 class="titulo">¿Caracteristicas de la Pedagogia Infantil?</h2>
            <div class="cards">
                <div class="card">
                    <img src="images/img4.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Comprensión y Formación</h4>
                        <p>Comprender las necesidades educativas de los niños, de forma individualizada, y los contextos vitales en los que se desenvuelven, para favorecer su formacion de niños autonomos y con pensamiento critico.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/img5.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Diseño y Elaboración</h4>
                        <p>Diseñar, coordinar, ejecutar y evaluar programas de formación que permitan elaborar y analizar políticas educativas que incidan en una mayor atención en la etapa de la educación infantil.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Informacion de Contacto-->
        <section class="social-networks">
            <div class="contenedor">
                <h2 class="titulo">Redes Sociales</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="images/Facebook.png" alt="">
                        <h3>Facebook</h3>
                        <p>NataliaChaparro</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="images/WhatsApp.png" alt="">
                        <h3>WhatsApp</h3>
                        <p>(+57) 311 5780627</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="images/Instagram.png" alt="">
                        <h3>Instagram</h3>
                        <p>@NataliaChaparro</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
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