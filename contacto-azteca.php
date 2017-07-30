<?php $form_path='assets/formoid/form.php'; require_once $form_path; ?><!DOCTYPE html>
<!--**********************************************************************
* FILENAME :        TIERRA AZTECA | Azteca Contact             
*
* DESCRIPTION :
*       Customer support.
*
*       Copyright Tierra Azteca © All rights reserved.
* 
* AUTHOR :    Richard Maya
* START DATE :    07 Jul 17
*
* VERSION : 1.0
*
*-->
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-control" content="public, max-age:1209600" />
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="copyright" content="Copyright © 2017 Tierra Azteca">
    
    <!-- SITE TITLE
    ================================================== -->
    <title>Alimentación saludable. ¡Consúltanos y te diremos cómo!</title>
    
    <!-- FAVICONS
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    
    <!-- SEO INFO
    ================================================== -->
    <meta name="description" content="Espacio saludable con alimentación ligera. ¡Consulta las ubicaciones!">
    <meta name="keywords" content="máquinas vending, vending toluca, vending méxico, alimentación sana, dieta equilibrada">
    <meta name="author" content="Richard Maya">
    <meta name="designer" content="Richard Maya">
    <meta name="geo.region" content="MX" />
    <meta name="geo.placename" content="San Fernando Huixquilucan" />
    <meta name="geo.position" content="19.38746;-99.282212" />
    <meta name="ICBM" content="19.38746, -99.282212" />
    
    <!-- STYLESHEETS
    ================================================== -->
    <link rel="stylesheet" href="assets/tether/css/tether.min.css">
    <link rel="stylesheet" href="assets/animate/animate.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
   
<!-- NAV BAR
================================================== -->
<section id="main-logo">
    <center>
        <img class="wow fadeInUp" src="gph/tierra-azteca.svg" alt="tierra-azteca-logo">
    </center>
</section>

<nav class="navbar navbar-toggleable-md sticky-top navbar-light bg-faded wow fadeIn">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <a class="navbar-brand" href="#">
                <img src="gph/tierra-azteca.svg" width="45" height="45" alt="tierra-azteca-logo">
            </a>
            <li class="nav-item">
                <a class="nav-link" href="index.html">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="maquinas-vending.html">Máquinas de Vending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="productos-azteca.html">Productos Azteca</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tierra-azteca.html">Nosotros</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contacto-azteca.html">Contacto <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>


<!-- HEADING
================================================== -->
<section id="contact-heading" class="parallax-window d-flex align-items-center wow fadeIn" data-parallax="scroll" data-image-src="img/contact.jpg">
    <div class="container">
        <div class="row">
            <heading class="wow fadeInUp">
                <h1 class="azteca-heading text-center wow">
                    <span class="azteca-heading-white">Tierra Azteca</span> <br> Contacto
                </h1>
            </heading>
        </div>
    </div>
</section> 


<!-- BLUE SLOGAN
================================================== -->
<section id="blue-slogan">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <h3 class="azteca-subtitle wow fadeInUp">Productos saludables de alta calidad a precios competitivos</h3>
        </div>
    </div>
</section>


<!-- CONTACT FORM & MAP
================================================== -->
<section id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1 col-md-7 offset-md-0">
                <h2 class="azteca-title d-flex justify-content-left wow fadeInDown" id="azteca-contact-form">Contáctanos</h2>
                
                <form class="formoid-solid-blue" method="post">
                    <div class="row">
                       
                        <!-- Nombre -->
                        <div class="form-group col-6 wow fadeInUp">
                            <label for="nombre">Nombre *</label>
                            <input placeholder="Nombre" type="text" name="name[first]" required="required" class="form-control" id="nombre">
                        </div>
                        
                        <!-- Apellido -->
                        <div class="form-group col-6 wow fadeInUp">
                            <label for="apellido">Apellido *</label>
                            <input placeholder="Apellido" type="text" name="name[last]" required="required" class="form-control" id="apellido">
                        </div>
                    </div>
                    
                    <div class="row">
                       
                        <!-- Teléfono -->
                        <div class="form-group col-6 wow fadeInUp">
                            <label for="telefono">Teléfono *</label>
                            <input type="tel" class="form-control" maxlength="24" name="phone" required="required" placeholder="Teléfono">
                        </div>
                        
                        <!-- Empresa -->
                        <div class="form-group col-6 wow fadeInUp">
                            <label for="empresa">Empresa *</label>
                            <input type="text" class="form-control" name="input" required="required" placeholder="Empresa">
                        </div>
                    </div>
                    
                    <!-- Correo Electrónico -->
                    <div class="row">
                        <div class="form-group col-12 wow fadeInUp">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" placeholder="Correo Electrónico">
                        </div>
                    </div>
                    
                    <!-- Mensaje -->
                    <div class="row">
                        <div class="form-group col-12 wow fadeInUp">
                            <label for="textarea">Mensaje *</label>
                            <textarea name="textarea" class="form-control" id="message" cols="20" rows="5" required="required" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    
                    <div class="row d-flex justify-content-center wow fadeInUp">
                        <button class="btn btn-azteca-outline" type="submit">Enviar Mensaje</button>
                    </div>
                    
                </form>
            </div>
            
            <div class="col-10 offset-1 col-md-5 offset-md-0">
                <h2 class="azteca-title d-flex justify-content-left wow fadeInDown" id="azteca-map">Encuéntranos</h2>
                
                <!-- Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.574606540957!2d-99.28435418509399!3d19.387563686909935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDIzJzE1LjIiTiA5OcKwMTYnNTUuOCJX!5e0!3m2!1sen!2s!4v1499639173095" width="100%" height="300" allowfullscreen class="wow fadeInUp"></iframe> <br><br>
                
                <!-- Location -->
                <div class="row wow fadeInUp">
                    <div class="col-2">
                        <img src="gph/facebook-placeholder-for-locate-places-on-maps.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-10">
                        <p>Calle paralela 2 #17 Col. San Fernando Huixquilucan. Estado de México C.P. 52765</p>
                    </div>
                </div>
                
                <!-- Phone Number -->
                <div class="row wow fadeInUp">
                    <div class="col-2">
                        <img src="gph/call-answer.svg" alt="" class="img-fluid">
                    </div>
                    <div class="col-10">
                        <p>Tel. <a href="tel://55-5815-0387">(52) 55 5815-0387</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- SLOGAN
================================================== --> 
<section id="slogan">
    <div class="container">
        <div class="row">
            <div class="col-2 offset-1 text-right">
                <img class="wow fadeInLeft" src="gph/tierra-azteca.svg" alt="tierra-azteca-logo">
            </div>
            <div class="col-6">
                <h2 class="azteca-title text-center wow fadeInUp">Saludable en cada Selección</h2>
            </div>
            <div class="col-2 text-left">
                <img class="wow fadeInRight" id="vending-logo" src="gph/tierra-vending.svg" alt="tierra-vending-logo">
            </div>
        </div>
    </div>
</section>


<!-- FOOTER
================================================== -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1 col-md-6 offset-md-0 wow fadeInLeft">
                <div class="row">
                    <div class="col-3">
                        <img src="gph/destination.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-9">
                        <h5>Encuéntranos</h5>
                        <p>Calle paralela 2 #17 Col. San Fernando Huixquilucan, Estado de México. C.P: 52765</p>
                        <a href="contacto-azteca.html">Ver Mapa</a>
                    </div>
                </div>
            </div>
            <div class="col-10 offset-1 col-md-6 offset-md-0 wow fadeInRight">
                <div class="row">
                    <div class="col-3">
                        <img src="gph/chat.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-9">
                        <h5>Contáctanos</h5>
                        <p>Tel: <a href="tel://55-5815-0387">(52) 55 5815-0387</a> <br>
                            E-mail: <a href="mailto:contacto@tierraazteca.com">contacto@tierraazteca.com</a></p>
                        <a href="contacto-azteca.html">Escríbenos un mensaje</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Site Map -->
        <div class="row justify-content-center">
            <ul class="nav nav-justified wow fadeInUp">
                <li>
                    <a href="index.html">Inicio</a>
                    <span>|</span>
                    <a href="maquinas-vending.html">Máquinas Vending</a>
                    <span>|</span>
                    <a href="productos-azteca.html">Productos Azteca</a>
                    <span>|</span>
                    <a href="tierra-azteca.html">Nosotros</a>
                    <span>|</span>
                    <a href="contacto-azteca.html">Contacto</a>
                </li>
            </ul>
        </div>
        
        <div class="row justify-content-center wow fadeInUp">
            <p class="text-center" id="copyright">© Tierra Azteca 2017. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>


<!-- SCRIPTS
================================================== -->
<script src="assets/jquery/jquery.min.js"></script>
<script src="assets/tether/js/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/parallax/parallax.min.js"></script>
<script src="assets/wow/wow.min.js"></script>
<script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>

<script type="text/javascript">
var wow = new WOW(
  {
    boxClass:     'wow',     
    animateClass: 'animated', 
    offset:       50,         
    mobile:       false,    
    live:         true,       
    callback:     function(box) {
    },
    scrollContainer: null
  }
);
wow.init();
    
$('.parallax-window').parallax({
    imageSrc: 'img/contact.jpg',
    positionY: 'top'
});
</script>
</body>
</html>