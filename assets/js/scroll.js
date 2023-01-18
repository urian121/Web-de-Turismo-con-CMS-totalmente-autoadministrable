$(function(){
    $("#detectascroll").on("click", function () {
        var sv = $(document).scrollTop();
        //scroll horizontal
        var sh = $(document).scrollLeft();
        $(this).find("span").text("(" + sh + "," + sv+ ")");
    });
    $("#scrollelemento").on("click", function () {
        var boton = $(this);
        var elemento = boton.parent();
        //scroll vertical
        var sv = elemento.scrollTop();
        //scroll horizontal
        var sh = elemento.scrollLeft();
        boton.find("span").text("(" + sh + "," + sv+ ")");
    });
    
    $("#turismo").on("click", function(){
        var posicion = $(".destinos").offset().top;
        $("html, body").animate({
            scrollTop: posicion
        }, 2000); 
    });
    $("#quiensoy").on("click", function(){
        var posicion = $(".grilla-espacio_doble").offset().top;
        $("html, body").animate({
            scrollTop: posicion
        }, 2000); 
    });
    $("#portafolio").on("click", function(){
        var posicion = $(".contenedor_portafolio").offset().top;
        $("html, body").animate({
            scrollTop: posicion
        }, 2000); 
    });
    $("#contacto").on("click", function(){
        var posicion = $(".grid-footer").offset().top;
        $("html, body").animate({
            scrollTop: posicion
        }, 2000); 
    });
    $(document).on("scroll", function(){
        var desplazamientoActual = $(document).scrollTop();
        var controlArriba = $("#irarriba");
        if(desplazamientoActual > 100 && controlArriba.css("display") == "none"){
            controlArriba.fadeIn(500);
        }
        if(desplazamientoActual < 100 && controlArriba.css("display") == "block"){
            controlArriba.fadeOut(500);
        }
    });
    $("#irarriba a").on("click", function(e){
        e.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 1000); 
    });
});