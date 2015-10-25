$(document).on('ready',function(){
    altoAnchoPantalla();

    $('.contenedor').mousemove(function( event ){
        //var cursorX = event.pageX;
        var percent = (event.pageX / $(window).width())*100;
        if(percent >= 50){
            percent = percent + 25;
            $('.contenedorHijo').width(percent+"%");
            $('.contenedorHijo').css('width', percent+"%");
            console.log("aplica1");

        }else{
            $('.contenedorHijo').css('width', percent+"%");
        }
    });


    function altoAnchoPantalla(){
        var alto = $(window).height();
        var ancho = $(window).width();
        $('.contenidoHijoInterior').css('height',alto+'px').css('width',ancho+'px');

    }

    $('.carousel').carousel({
        pause: true,
        interval: false
    });



    $( window ).scroll(function() {
        if($("body").scrollTop()>=770){
            $(".menu").addClass("menu-fixed");
        }else{
            $(".menu").removeClass("menu-fixed");
        }
    });

    $('.carousel-indicators li').on('click', function() {
        console.log("algo");
        $('.carousel').carousel(parseInt(this.getAttribute('data-to')));

    });
});