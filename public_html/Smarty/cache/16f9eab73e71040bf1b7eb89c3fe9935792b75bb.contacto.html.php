<?php /*%%SmartyHeaderCode:121861603351a80a29076aa7-59573140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16f9eab73e71040bf1b7eb89c3fe9935792b75bb' => 
    array (
      0 => 'Smarty/templates/contacto.html',
      1 => 1370913196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121861603351a80a29076aa7-59573140',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5796505c5b49a8_79522226',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5796505c5b49a8_79522226')) {function content_5796505c5b49a8_79522226($_smarty_tpl) {?><!DOCTYPE HTML>
<html>

    <head>
        <meta name="title" content="Hosteria San Benito" />
        <meta name="description" content="Hosteria San Benito Concordia" />
        <meta name="keywords" content="hosteria, san benito,Benito,concordia, entre rios,entre,rios,estadia, relax,servicios,calidad" />
        <meta http-equiv="content-language" content="es">
        <meta name="revisit" content="10 days">
        <meta name="robots" content="all" >
        <link type="text/plain" rel="author" href="../../humans.txt" />
       <!-- <meta name="description" content="website description" />
        <meta name="keywords" content="website keywords, website keywords" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen">
-->

        <!-- modernizr enables HTML5 elements and feature detects -->
        <!--<script type="text/javascript" src="js/modernizr-1.5.min.js"></script>-->
        <!--<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>-->
        


        <script src="js/jquery.min.js" type="text/javascript"></script>



        <!--Validity form contacto-->
        <script type="text/javascript" src="js/validity.js"></script> 
        <link rel="stylesheet" type="text/css" href="css/jquery.validity.css"> 
        
        <script type="text/javascript">
        $(function() {
            $('#form_contacto').validity(function() {

                $('#nombre').require();
                $('#email').require()
                        .match("email");
                $('#mensaje').require();
                $('#captcha').require();

            });
        });
        </script>
        
        <script type="text/javascript" src="js/navegar.js"></script>
    </head>

    <body>
            <div id="site_content">
                <div id="content">

                    <h2>Hostería San Benito</h2>
                    <ul>
                        <li>Teléfono: 0345-4988660</li>
                        <li>Celular: 0345-154082356</li>
                        <li>Dirección: Avda. Independencia Nº 149  Concordia - Entre Ríos </li>
                    </ul>
                </div>     

                <div id="sidebar_container">
                    <form id="form_contacto" action="" method="post">
                        <h2>Contactenos</h2>
                        <div class="form_settings">
                            <p><span>Nombre(*):&nbsp;</span><input id="nombre" class="contact" type="text" name="nombre" placeholder="Nombre..." /></p>
                            <p><span>Email(*):&nbsp;</span><input id="email" class="contact" type="text" name="email" placeholder="Email..." /></p>
                            <p><span>Teléfono:&nbsp;</span><input id="telefono" class="contact" type="text" name="telefono" placeholder="Teléfono..." /></p>
                            <p><span>Mensaje(*):&nbsp;</span><textarea id="mensaje" class="textarea" rows="7" cols="50" name="mensaje" placeholder="Mensaje..."></textarea></p>
                            <p style="padding: 10px 0; line-height: 2em;">Escriba el texto de la imagen(*):
                                <input type="text" id="captcha" class="input_captcha" name="captcha" /> <img id="img_captcha" class="im_captcha" src="captcha.php"> <a id="refresh_captcha" href="#"><img class="refresh" src="images/refresh.png"></a>
                            </p>
                            <p style="padding-top: 15px">
                                <span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Enviar" />
                                <div id="mensaje_contacto"></div>
                            </p>
                        </div>
                    </form> 
                </div>

                <div id="content">
                    <br>
                    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FHoster%25C3%25ADa-San-Benito%2F299268016781862%3Ffref%3Dts&amp;width=450&amp;height=290&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:290px;" allowTransparency="true"></iframe>
                </div> 
                <div style="clear: both">
                </div>

                <div id="content">
                    <h2>Ubicación</h2>
                    <iframe width="1070" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=CcDBdU90Pvq5FZj_IP4d3LqK_CkBB1Y-CeitlTGR8KYjsjQdXQ&amp;q=Avda.+Independencia+149+loc:+Concordia,+Entre+R%C3%ADos,+Argentina&amp;aq=0&amp;oq=Concor&amp;sll=-31.353193,-58.007662&amp;sspn=0.002355,0.004823&amp;t=h&amp;ie=UTF8&amp;hq=Avda.+Independencia+149&amp;hnear=&amp;cid=2765407887351556033&amp;ll=-31.346137,-58.010795&amp;spn=0.002199,0.003433&amp;z=18&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=CcDBdU90Pvq5FZj_IP4d3LqK_CkBB1Y-CeitlTGR8KYjsjQdXQ&amp;q=Avda.+Independencia+149+loc:+Concordia,+Entre+R%C3%ADos,+Argentina&amp;aq=0&amp;oq=Concor&amp;sll=-31.353193,-58.007662&amp;sspn=0.002355,0.004823&amp;t=h&amp;ie=UTF8&amp;hq=Avda.+Independencia+149&amp;hnear=&amp;cid=2765407887351556033&amp;ll=-31.346137,-58.010795&amp;spn=0.002199,0.003433&amp;z=18&amp;iwloc=A" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
                    <!--<a href="https://maps.google.com/maps?q=Avda.+Independencia+149+loc:+Concordia,+Entre+R%C3%ADos,+Argentina&hl=es&ie=UTF8&ll=-31.34649,-58.010731&spn=0.002501,0.004823&sll=-31.353193,-58.007662&sspn=0.002355,0.004823&geocode=CcDBdU90Pvq5FZj_IP4d3LqK_CkBB1Y-CeitlTGR8KYjsjQdXQ&oq=Concor&t=h&hq=Avda.+Independencia+149&z=18&iwloc=A">MAPA</a>-->
                </div>




            </div>

            <div class="gototop"></div>
  

        <!-- javascript at the bottom for fast page loading -->
        



    </body>
</html>
<?php }} ?>