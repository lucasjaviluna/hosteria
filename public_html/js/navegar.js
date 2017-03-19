$(document).ready(function() {

    //Funcionalidad scroll ToTop
    $(window).scroll(function() {
        if ($(this).scrollTop() > 120)
            $('.gototop').fadeIn();
        else
            $('.gototop').fadeOut();
    });

    $('.gototop').click(function(e) {
        e.preventDefault();
        $("html, body").stop().animate({scrollTop: 0}, "slow");
    });
    /*$(document).on("click", ".gototop", function(e) {
     e.preventDefault();
     $("html, body").stop().animate({scrollTop: 0}, "slow");
     });*/

    //Para detener el "cabezazo" del click en un enlace del menu
    $('a.link_menu').click(function(e) {
        e.preventDefault();
        //e.stopPropagation();
        //console.log(e.currentTarget);
    });

    //Validity para form de contacto
    /*$(function() {
     $('#form_contacto').validity(function() {
     
     $('#nombre').require();
     $('#email').require()
     .match("email");
     $('#mensaje').require();
     $('#captcha').require();
     
     });
     });*/

    //Atrapa el evento submit para el formulario del contacto
    //Se verifica si los datos pasan o no la validacion para poder enviar el email
    $('#form_contacto').submit(function() {
        if (validateMyAjaxInputs()) {

            console.log("Enviar Correo");
            $('#mensaje_contacto').show();
            $('#mensaje_contacto').removeAttr('style');
            $('#mensaje_contacto').css({fontSize: "20px", color: "blue"});
            $('#mensaje_contacto').html("Enviando correo...");
            var datos = $('#form_contacto').serialize();
            $.ajax({
                url: 'send_email.php',
                type: 'POST',
                data: datos,
                success: function(resp) {
                    console.log(resp);
                    if (resp === 'OK') {
                        $('#mensaje_contacto').css({fontSize: "18px", color: "black", background: "green"});
                        $('#mensaje_contacto').html('Su correo ha sido enviado con éxito!.<br>En breve nos comunicaremos con usted');
                        $('#form_contacto').get(0).reset();
                        $('#refresh_captcha').click();
                    } else {
                        $('#mensaje_contacto').css({fontSize: "18px", color: "white", background: "red"});
                        $('#mensaje_contacto').html(resp);
                    }
                    $('#mensaje_contacto').fadeOut(4500);
                },
                error: function() {
                    console.log("Error al enviar el email");
                }
            });

        } else {
            console.log("NO validado para enviar correo");
        }
        return false;

    });

    // This is the validation function:
    function validateMyAjaxInputs() {

        // Start validation:
        $.validity.start();

        $('#nombre').require();
        $('#email').require()
                .match("email");
        $('#mensaje').require();
        $('#captcha').require();

        // All of the validator methods have been called:
        // End the validation session:
        var result = $.validity.end();

        // Return whether it's okay to proceed with the Ajax:
        return result.valid;
    }



    //Refresh Captcha
    $('#refresh_captcha').click(function(event) {
        event.preventDefault();
        $('#img_captcha').attr('src', 'captcha.php?' + Math.random() + "=" + Math.random());
    });



    //-------ADMIN-----------//
    //Atrapa el evento submit para el formulario de configuracion de promociones
    $('#form_promociones').submit(function() {
        $('#mensaje_promociones').show();
        $('#mensaje_promociones').removeAttr('style');
        $('#mensaje_promociones').css({fontSize: "20px", color: "blue"});
        $('#mensaje_promociones').html('Guardando datos...');
        var editor_data = CKEDITOR.instances.editor.getData();//Tomo los datos del editor
        $("#editor").html('');
        $("#editor").html(editor_data);//asigno los datos del editor al textarea para serializar y enviar por post
        var data = $('#form_promociones').serialize();
        $.ajax({
            url: 'save_promociones.php',
            type: 'POST',
            data: data,
            success: function(resp) {
                if(resp === 'OK'){
                    $('#mensaje_promociones').css({fontSize: "18px", color: "black", background: "green"});
                    $('#mensaje_promociones').html('La información de promociones ha sido guardada con éxito');
                    setTimeout(function() {
                        location.href = 'index.php';
                        return false;
                    }, 3000);
                }else{
                    $('#mensaje_promociones').css({fontSize: "18px", color: "white", background: "red"});
                    $('#mensaje_promociones').html('Ha ocurrido un error al intentar guardar los datos. <br>Inténtelo de nuevo más tarde').fadeOut(4000);
                }
            }
        });
        return false;
    });
    
    $('#volver_adm_promocion').click(function(){
        //console.log('volver');
        location.href = 'http://www.hosteriasanbenito.com.ar';
    });

});

function navegar(target) {

    console.log(target);
    var aleatorio = Math.floor((Math.random() * 3) + 1) * 1000;
    var im = "./images/loader.gif";

    $("#site_content").html("<img style='padding-top:140px;padding-left:506px' src=" + im + " alt='Cargando...'>");

    if (target === 'home') {//porque sino no carga el slider de la home
        setTimeout(function() {
            location.href = 'index.php';
            return false;
        }, aleatorio);
    }
    console.log("Llega al Ajax");
    //return true;

    //Navegacion
    $.ajax({
        type: "POST",
        url: "index.php?target=" + target,
        //data: datos,
        success: function(resp) {
            console.log("OK");

            console.log(aleatorio);
            //if(target !== 'home')
            setTimeout(function() {
                //$.getScript("js/quake.slider.js");
                $('#site_content').html(resp);




            }, aleatorio);
            if (target === 'contacto') {
                setTimeout(function() {
                    $.validity.clear();
                }, aleatorio + 1000);
            }
        },
        error: function() {
            console.log("Error");
            //$("#mensaje_error").html("Su mensaje no pudo ser enviado.<br>Por favor int&eacute;ntelo m&aacute;s tarde");
        }
    });
}



function navegar2(target) {
    console.log(target);
    var im = "./images/loader.gif";
    $("#site_content").html("<img style='padding-top:140px;padding-left:506px' src=" + im + " alt='loader'>");

    if (target === 'home') {//porque sino no carga el slider de la home
        location.href = 'index.html';
        return false;
    }
    //var url = "index.php?target="+target;
    var url = "Smarty/templates/" + target + ".html";
    $('#site_content').load(url, function() {
        console.log("Contenido de " + target + " cargado.");
        if (target === 'contacto') {
            $.validity.clear();
        }
    });

}

