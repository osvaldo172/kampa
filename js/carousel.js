$(document).on('ready',function(){
    altoAnchoPantalla();
    var menu = $(".menu").position();
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

    $('#carousel_fade').carousel({
        interval: 10000
    });



    $( window ).scroll(function() {

        if($("body").scrollTop()>=menu.top-3){
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
        interval: 10000
    });

    $(".left-shoes").click(function(){
        console.log("entro a esta madre");
        $(".shoes-img").switchClass("bounceInRight", "bounceInLeft");
        //text- shoes bounceInLeft
        $(".text-shoes").switchClass("bounceInLeft", "bounceInRight");

        var aux = $(".aux-li.active").prev();
        $(".aux-li.active").removeClass("active");
        if($(aux).length <= 0){
            $(".aux-li").last().addClass("active");
        }else{
            $(aux).addClass("active");
        }
    });

    $(".right-shoes").click(function(){
        console.log("entro a esta OTRA madre");
        $(".shoes-img").switchClass("bounceInLeft", "bounceInRight");
        $(".text-shoes").switchClass("bounceInRight", "bounceInLeft");

        var aux = $(".aux-li.active").next();
        $(".aux-li.active").removeClass("active");
        if($(aux).text() == "TIENDA"){
            $(".aux-li").first().addClass("active");
        }else{
            $(aux).addClass("active");
        }
    });

});

function irTienda(){
    window.location.assign("http://kampapremier.com/tienda");
}

var aux_animate = true;

function activeMenu(){
    if(aux_animate){
        aux_animate = false;
        $(".icon-bar").stop().animate({width: 50}, 300 );
    }else{
        aux_animate = true;
        $(".icon-bar").stop().animate({width: 22}, 300 );
    }
}