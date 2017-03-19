<?php /*%%SmartyHeaderCode:26944657951a8075fc7b582-42932240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8614d0aa9773b82106384d4d38c0807e7edf1e6' => 
    array (
      0 => 'Smarty/templates/index.html',
      1 => 1469494242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26944657951a8075fc7b582-42932240',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58cb3c604f0708_09514558',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cb3c604f0708_09514558')) {function content_58cb3c604f0708_09514558($_smarty_tpl) {?><!DOCTYPE HTML>
<html>

    <head>
        <title>Hosteria San Benito</title>
        <meta name="title" content="Hosteria San Benito" />
        <meta name="description" content="Hosteria San Benito Concordia" />
        <meta name="keywords" content="hosteria, san benito,Benito,concordia, entre rios,entre,rios,estadia, relax,servicios,calidad" />
        <meta http-equiv="content-language" content="es">
        <meta name="revisit" content="10 days">
        <meta name="robots" content="all" >
        <link type="text/plain" rel="author" href="../../humans.txt" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

        <!-- modernizr enables HTML5 elements and feature detects -->
        <!-- <script type="text/javascript" src="js/modernizr-1.5.min.js"></script> -->
        <!-- <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script> -->


        <script src="js/jquery.min.js" type="text/javascript"></script>
        <link href="css/demo.css" rel="stylesheet" type="text/css" />
        <link href="css/quake.slider.css" rel="stylesheet" type="text/css" />
        <!--<link href="skins/dark-room/quake.skin.css" rel="stylesheet" type="text/css" />-->
        <!--<script src="js/jquery.js" type="text/javascript"></script>-->
        <script src="js/quake.slider.js" type="text/javascript"></script>
        <script type="text/javascript">
            
            $(document).ready(function() {
                //$('.quake-slider').quake({effects: ['blind', 'explode', 'explodeFancy'],
                    
                $('.quake-slider').quake({effects: ['randomFade', 'linearPeal', 'linearPealReverse', 'swirlFadeIn', 'swirlFadeOut',
                 'diagonalFade', 'blind', 'barsUp', 'barsDown', 'blindFade', 'explode', 'explodeFancy', 'mixBars',
                 'mixBarsFancy', 'fade', 'blindFadeReverse', 'slideIn', 'slideInFancy', 'slideLeft', 'slideRight',
                 'fallingBlindFade', 'raisingBlindFade'],
                    thumbnails: true,
                    captionOpacity: '0.3'
                });
            });
            
        </script>       

        <script type="text/javascript" src="js/navegar.js"></script>
    </head>

    <body>

        <div id="main">

            <header>
                <div id="logo">
                    <div id="logo_text">
                        <img class="img" width="600" height="300" src="images/logo/logo_big2.jpg">
                    </div>
                </div>  

                <ul id="nav">
                    <li><a href="#" class="link_menu" onclick="navegar('home');"><img src="images/home.png" /> Home</a></li>
                    <li><a href="#" class="link_menu" onclick="navegar('servicios');"><span><img src="images/servicios.png" /> Servicios</span></a></li>
                    <li><a href="#" class="link_menu" onclick="navegar('promociones');"><span><img src="images/promocion.png" /> Promociones</span></a></li>
                    <li><a href="#" class="link_menu" onclick="navegar('galeria');"><img src="images/galeria.png" /> Galería</a></li>
                    <li><a href="#" class="link_menu" onclick="navegar('contacto');"><img src="images/contacto.png" /> Contacto</a></li>
                </ul>
            </header>
            <div id="site_content">
                <div class="wrapper">
                    <div class="quake-slider">
                        <div class="quake-slider-images">
<!--                            <img src="images/slider/1.jpg" alt="" />
                            <img src="images/slider/2.jpg" alt="" />
                            <img src="images/slider/4.jpg" alt="" />
                            <img src="images/slider/3.jpg" alt="" />-->
                            <img src="images/slider/10.jpg" alt="" />
                            <!--<img src="images/slider/6.jpg" alt="" />-->
                            <img src="images/slider/5_d.jpg" alt="" />
                            <img src="images/slider/37.jpg" alt="" />
                        </div>
                        <div class="quake-slider-captions quake-slider-caption-container">
                            <div class="quake-slider-caption">
                                En Hostería San Benito encontrará un lugar nuevo,
                                con la mejor atención personalizada y servicios de calidad.
                            </div>
                            <!--<div class="quake-slider-caption">
                                Un lugar donde disfrutar 
                                una buena experiencia que es parte importante de su estadía en la ciudad.
                            </div>-->
                            <div class="quake-slider-caption">
                                 Nos encontramos a minutos de las termas de Concordia, uno de los principales atractivos de la ciudad...
                            </div>
                            <!--<div class="quake-slider-caption">
                                Descripcion imagen 5.
                            </div>
                            <div class="quake-slider-caption">
                                Descripcion imagen 6.
                            </div>-->
                        </div>
                    </div>
                </div>

                <!--<div id="content">
                    <h1>Pantalla inicial del sitio</h1>
                    <p>En esta sección se podría poner información institucional de la Hosteria San Benito, o bien algún tipo de información personalizada al respecto.</p>
                    <h3>Compatible con navegadores modernos</h3>
                    <p>Esta plantilla ha sido testeada en los siguiente browsers:</p>
                    <ul>
                        <li>FireFox 20</li>
                        <li>Google Chrome 26</li>
                        <li>Internet Explorer 9</li>
                    </ul>
                </div>-->
            </div>
            <footer>
                &copy; 2013 Hosteria San Benito
                Concordia - Entre Ríos - Argentina<br />
                <span style="font-size:10px">Webmaster: <a target="_blank" href="mailto:lucasjaviluna@gmail.com">Lucas Luna</a></span>
            </footer>
            <div class="gototop"></div>
        </div>
        
        <!--Google Analytics-->
        <script>
                
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-41383346-1', 'hosteriasanbenito.com.ar');
            ga('send', 'pageview');
            
        </script>
        
        <!-- javascript at the bottom for fast page loading -->
        <!-- <script type="text/javascript" src="js/jquery.js"></script>-->

    </body>
</html>
<?php }} ?>