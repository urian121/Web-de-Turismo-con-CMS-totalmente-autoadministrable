
$(document).ready(function () {

    /******msj cuando existe el correo******/
    setTimeout(function () {
       $(".cex").fadeOut(1500);
    }, 3000);

    /***msj csc cerrar sesion correctamente**/
    setTimeout(function () {
       $(".csc").fadeOut(1500);
    }, 3000);

/**Msj dui: datos del usuario incorrectos**/
    setTimeout(function () {
       $(".dui").fadeOut(1500);
    }, 3000);

    /***msj a cerrado  sesion correctamente***/
    setTimeout(function () {
       $(".sc").fadeOut(1500);
    }, 3000);

/**dsui: datos del usuario incorrectos al intentar iniciar sesion*****/
    setTimeout(function () {
       $(".sc").fadeOut(1500);
    }, 3000);


    /**Efecto cargando en el panel**/
    setTimeout(function () {
       $(".cargando").fadeOut(500);
    }, 100);

	/**Desaparecer la Alerta de msj con el boton X***/
    $('#bannerClose').click(function(){
        $("#proBanner").fadeOut(500);
    });

	/***Datos del usuario actualizados du**/
	setTimeout(function () {
        $(".du").fadeOut(1500);
    }, 3000);

	/**Producto eliminado***/
    setTimeout(function () {
        $(".dpf").fadeOut(1500);
    }, 3000);

    /***Msj de producto actualizado correctamente***/
    setTimeout(function () {
        $(".pa").fadeOut(1500);
    }, 3000);

    /****vbc video borrado correctamente***/
    setTimeout(function () {
        $(".vbc").fadeOut(1500);
    }, 3000);


/**Desaparecer mjs de registro exitoso Categoria**/
    setTimeout(function () {
        $(".ct").fadeOut(1500);
    }, 3000);

    /**Desaparecer mjs de registro exitoso etiqueta**/
    setTimeout(function () {
        $(".et").fadeOut(1500);
    }, 3000);

	/**Desaparecer msj de Producto Registrado Correctamente***/
    setTimeout(function () {
        $(".prx").fadeOut(1500);
    }, 3000);




/**Desaparecer msj de categoria Borrada**/
    setTimeout(function () {
        $(".dc").fadeOut(1500);
    }, 3000);

/**Desaparecer msj de Etiqueta Borrada**/
    setTimeout(function () {
        $(".de").fadeOut(1500);
    }, 3000);

});

/***mjs editando la Web****/
setTimeout(function () {
        $(".lt").fadeOut(1500);
    }, 3000);

setTimeout(function () {
        $(".b1").fadeOut(1500);
    }, 3000);

setTimeout(function () {
        $(".b2").fadeOut(1500);
    }, 3000);

setTimeout(function () {
        $(".lrs").fadeOut(1500);
    }, 3000);

setTimeout(function () {
        $(".mu").fadeOut(1500);
    }, 3000);

setTimeout(function () {
        $(".in").fadeOut(1500);
    }, 3000);
/***fin editar web***/



/***ocultando msj de estatus categoria cambiado***/
setTimeout(function () {
        $(".scta").fadeOut(1500);
    }, 3000);




/****Cambiar Logo */
$('#subirLogo').on('change', '#logo', function(e){
    e.preventDefault();
    var formData = new FormData($(this).parents('form')[0]);

    $.ajax({
        url: 'dataLogo.php',
        type: 'POST',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },

       data: $("#Miform").serialize(), 
        success: function(data){
        //$("#conteLogo").html(data); 
        $("#Miform")[0].reset();
        location.href="logotipo.php?lt=lt";  
        },
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});


/****Banner 1 */
$('#subirBannerOne').on('change', '#bannerOne', function(e){
    e.preventDefault();
    var formData = new FormData($(this).parents('form')[0]);

    $.ajax({
        url: 'dataBannerOne.php',
        type: 'POST',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },

       data: $("#MiformbannerOne").serialize(), 
        success: function(data){
        //$("#conteLogo").html(data); 
        $("#MiformbannerOne")[0].reset();
        location.href="banners.php?b1=b1";  
        },
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});


/****Banner 2 */
$('#subirBannerTwo').on('change', '#bannerTwo', function(e){
    e.preventDefault();
    var formData = new FormData($(this).parents('form')[0]);

    $.ajax({
        url: 'dataBannerTwo.php',
        type: 'POST',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },

       data: $("#MiformbannerTwo").serialize(), 
        success: function(data){
        //$("#resp").html(data); 
        $("#MiformbannerTwo")[0].reset();
        location.href="banners.php?b2=b2";  
        },
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});


/****Banner 3 */
$('#subirBannerThree').on('change', '#bannerThree', function(e){
    e.preventDefault();
    var formData = new FormData($(this).parents('form')[0]);

    $.ajax({
        url: 'dataBannerThree.php',
        type: 'POST',
        xhr: function() {
            var myXhr = $.ajaxSettings.xhr();
            return myXhr;
        },

       data: $("#MiformbannerThree").serialize(), 
        success: function(data){
        //$("#resp").html(data); 
        $("#MiformbannerThree")[0].reset();
        location.href="banners.php?b2=b2";  
        },
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});





/***Validando el numero de telefono solo 10 digitos en info de negocio y datos personales**/
$(document).ready(function () {
  $('input#teleContacto')
    .keypress(function (event) {
      if (event.which < 48 || event.which > 57 || this.value.length === 10) {
        return false;
      }
    });

/***Validando numero de tlf desde datos personales ***/
    $('input#phone')
    .keypress(function (event) {
      if (event.which < 48 || event.which > 57 || this.value.length === 10) {
        return false;
      }
    });
});
/***fin validacion de numero tlf***/
