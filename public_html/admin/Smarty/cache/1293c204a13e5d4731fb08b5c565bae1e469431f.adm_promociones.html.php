<?php /*%%SmartyHeaderCode:88528008451aac84ec45e04-45562307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1293c204a13e5d4731fb08b5c565bae1e469431f' => 
    array (
      0 => 'templates/adm_promociones.html',
      1 => 1370195187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88528008451aac84ec45e04-45562307',
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_578e2f87d3ba32_83102905',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578e2f87d3ba32_83102905')) {function content_578e2f87d3ba32_83102905($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>
        <title>Configuración de Promociones</title>
        <meta name="title" content="Hosteria San Benito" />
        <meta name="description" content="Hosteria San Benito Concordia" />
        <meta name="keywords" content="hosteria, san benito,concordia, entre rios, estadia, relax,servicios,calidad" />
        <meta http-equiv="content-language" content="es">
        <meta name="revisit" content="10 days">
        <meta name="robots" content="all" >
        <link type="text/plain" rel="author" href="../../humans.txt" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="../css/style2.css" />
        <link rel="stylesheet" href="../css/menu.css" type="text/css" media="screen">
        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <!--<link href="../css/demo.css" rel="stylesheet" type="text/css" />-->
      
        <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="../js/navegar.js"></script>
        
        <script src="ckeditor/ckeditor.js"></script>
        <link rel="stylesheet" href="ckeditor/contents.css" type="text/css" media="screen">
        
        <!--<script type="text/javascript" src="../js/navegar.js"></script>-->
    </head>
    <body>
        <div id="site_content">
        <h2>Configuración de Promociones</h2>
        <form id="form_promociones" method="post" action="save_promociones.php">
            <textarea style="width: 500px" name="editor" id="editor"><p><span style="color:#0000FF"><span style="font-family:comic sans ms,cursive"><span style="font-size:22px">Promoción para pescadores</span></span></span><span style="color:#0000FF"><span style="font-family:comic sans ms,cursive"><span style="font-size:22px">!!!!</span></span></span></p>

<p><span style="font-family:comic sans ms,cursive"><span style="font-size:22px">Para 3 o 4personas $3300xdia (precio x dos dias minimos) incluye: lancha, combustible, carnada, refresco, picada, 8hs de pesca, Alojamiento, Desayuno, Quincho con Parrilla, Freezer, cocina, utensillos y estacionamiento cubierto.</span></span></p>

<p> </p>

<div><span style="font-size:20px"><span style="color:#800080"><span style="font-family:comic sans ms,cursive">Consulte por Promoción: Alojamiento para dos personas+entradas a termas+Spa Facial</span></span></span></div>

<div> </div>

<div> </div>

<p> </p>

<p><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Trabajamos con Tarjetas de Debito y Crédito.</span></span></p>

<p><span style="color:#00FF00"><span style="font-size:18px"><span style="font-family:comic sans ms,cursive">Consultar por Desayuno para Celiacos!!!</span></span></span></p>

<p> </p>

<p><span style="font-family:comic sans ms,cursive; font-size:16px"><span style="font-size:18px">Además de brindarle servicios de calidad, también contamos con promociones especiales a VIAJANTES.</span></span></p>

<p><span style="font-family:comic sans ms,cursive; font-size:16px"><span style="font-size:18px">Contactanos por <span style="color:#00FF00">Whats App!</span>!! al 3454082356.</span></span></p>
</textarea>
            <input type="submit" value="Guardar" id="guardar_adm_promocion">
            <input type="button" value="Volver al sitio" id="volver_adm_promocion">
            <div id="mensaje_promociones"></div>
        </form>
        </div>
        
        
    </body>
    
    
        <script>
            CKEDITOR.replace('editor');
        </script>
        
</html><?php }} ?>