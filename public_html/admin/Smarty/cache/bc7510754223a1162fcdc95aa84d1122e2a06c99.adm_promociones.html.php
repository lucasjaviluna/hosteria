<?php /*%%SmartyHeaderCode:1789151aabb3fa16251-50258338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc7510754223a1162fcdc95aa84d1122e2a06c99' => 
    array (
      0 => 'templates\\adm_promociones.html',
      1 => 1370143305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1789151aabb3fa16251-50258338',
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51aac590d82517_17505347',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51aac590d82517_17505347')) {function content_51aac590d82517_17505347($_smarty_tpl) {?><!DOCTYPE HTML>
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
        <!--<link rel="stylesheet" type="text/css" href="../css/style2.css" />-->
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
        <h2>Configuración de Promociones</h2>
        <form id="form_promociones" method="post" action="">
            <textarea style="width: 500px" name="editor" id="editor"><p>Además de brindarle servicios de calidad, también contamos con promociones especiales a viajantes.</p>

<p><strong>Promocion Junio</strong><br />
Habitacion doble dos noches a $5505656 con todos los servicios incluidos promoción válida dias de semanas. NO incluye fin de semanas ni feriados.<br />
Si estan incluidos los toallones y camisetas nuevas de Dinho jajo.<span style="color:#FF0000"><strong> <span style="font-size:24px">River Plate el mas grande de Argentina</span></strong></span></p>

<p>Parece que no vamos a salir campeones...<span style="font-family:times new roman,times,serif"> <span style="font-size:22px">Vamos a ver que pasa tal vez se nos de</span></span></p>
</textarea>
            <input type="submit" value="Guardar" id="guardar_adm_promocion">
            <input type="button" value="Volver al sitio" id="volver_adm_promocion">
        </form>
        
        
    </body>
    
    
        <script>
            CKEDITOR.replace('editor');
        </script>
        
</html><?php }} ?>