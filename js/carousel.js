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

    $('.carousel2').carousel({
        pause: true,
        interval: false
    });

    $('#myCarousel').carousel({
        interval: 5000
    });



    $( window ).scroll(function() {
        if($("body").scrollTop()>=799){
            $(".menu").addClass("menu-fixed");
            $(".menu-aux").removeClass("escode-menu");
            $(".menu-slider-aux").addClass("menu-slider");
        }else{
            $(".menu").removeClass("menu-fixed");
            $(".menu-aux").addClass("escode-menu");
            $(".menu-slider-aux").removeClass("menu-slider");
        }
    });

    $('.menu_href_slide_to li').on('click', function() {
        $('#project-carousel-second').carousel(parseInt(this.getAttribute('data-to')));
        $('.menu_href_slide_to li').removeClass("active");
        $(this).addClass("active");
    });

    $('.menu_href_slide_to li a').click(function(event){
        event.preventDefault();
    });

    jQuery('#project-carousel-second').carousel({
        interval: 7000
    })


});