<?php /*%%SmartyHeaderCode:91554207652c9d14d840428-75695898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34df1a2e3c7298e6cfd0bc4cd3c68254178343fb' => 
    array (
      0 => 'Smarty/templates/index2.html',
      1 => 1369595083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91554207652c9d14d840428-75695898',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52c9d14d901939_30028530',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c9d14d901939_30028530')) {function content_52c9d14d901939_30028530($_smarty_tpl) {?><!DOCTYPE HTML>
<html>

    <head>
        <title>Hosteria San Benito</title>
        <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen">
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
                $('.quake-slider').quake({effects: ['blind', 'explode', 'explodeFancy'],
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
                        <img style="float: left; border-radius: 7px 0 0 0;" width="50%" height="300" src="images/logo/logo_big2.jpg">
                        <img style="float: right; border-radius: 0 7px 0 0;" width="50%" height="300" src="images/galeria/13.jpg">
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
                            <img src="images/slider/1.jpg" alt="" />
                            <img src="images/slider/2.jpg" alt="" />
                            <img src="images/slider/3.jpg" alt="" />
                            <img src="images/slider/4.jpg" alt="" />
                            <img src="images/slider/5.jpg" alt="" />
                            <img src="images/slider/6.jpg" alt="" />
                        </div>
                        <div class="quake-slider-captions quake-slider-caption-container">
                            <div class="quake-slider-caption">
                                Descripción imagen 1.
                            </div>
                            <div class="quake-slider-caption">
                                Descripcion imagen 2.
                            </div>
                            <div class="quake-slider-caption">
                                Descripcion imagen 3.
                            </div>
                            <div class="quake-slider-caption">
                                Descripcion imagen 4.
                            </div>
                            <div class="quake-slider-caption">
                                Descripcion imagen 5.
                            </div>
                            <div class="quake-slider-caption">
                                Descripcion imagen 6.
                            </div>
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
                <p>
                    © 2013 Hosteria San Benito
                    Concordia - Entre Ríos - Argentina
                </p>
            </footer>
            <div class="gototop"></div>
        </div>

        <!-- javascript at the bottom for fast page loading -->
        <!-- <script type="text/javascript" src="js/jquery.js"></script>-->

    </body>
</html>
<?php }} ?>