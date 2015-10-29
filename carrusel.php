<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kampa The Control</title>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/carousel.js" ></script>
    <script src="./parallelogram.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.less">
    <link rel="stylesheet" type="text/css" href="animate.css">

</head>

<body>



<nav class="navbar navbar-default menu">
    <div class="menu-aux">
        <img src="img/logo.png" class="logo-menu">
    </div>
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav menu_href_slide_to">
                <!-- <li class=""><a href="#">KAMPA</a></li> -->
                <li data-to="0" class="active"><a href="#">LIGHT IN THE DARKNESS</a></li>
                <li data-to="1"><a href="">LETHAL VIPER</a></li>
                <li data-to="2"><a href="#">SUPERLIGHT</a></li>
                <li data-to="3"><a href="#">CLASSIC GOLDEN</a></li>
                <li data-to="4"><a href="#">ELITE</a></li>
                <li><a href="#">ROPA</a></li>
                <li><a href="tienda">TIENDA</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div id="project-carousel-second" class="carousel slide" data-ride="carousel">

<!--     <ol class="carousel-indicators">
        <li data-target="#project-carousel-second"  data-slide-to="0" class="active slider-circles"></li>
        <li data-target="#project-carousel-second" class="slider-circles" data-slide-to="1"></li>
        <li data-target="#project-carousel-second" class="slider-circles" data-slide-to="2"></li>
        <li data-target="#project-carousel-second" class="slider-circles" data-slide-to="3"></li>
    </ol> -->
    <!-- Wrapper for slides -->

    <div class="carousel-inner">
        <div class="item active shoes-carousel">
            <img class="animated bounceInRight" src="img/calzado/light_in_the_darkness.png" alt="placeholder">
            <div class="description-shoes change-color">
                <div class="container">
                    <h1 class="text-center animated bounceInLeft">
                        LIGHT IN THE DARKNESS
                    </h1>
                    <p class="animated bounceInLeft">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>
        </div>
        <div class="item shoes-carousel">
            <img class="animated bounceInRight" src="img/calzado/lethal_viper.png" alt="placeholder">
            <div class="bg-azul description-shoes">
                <div class="container">
                    <h1 class="text-center white animated bounceInLeft">
                        LETHAL VIPER
                    </h1>
                    <p class="animated bounceInLeft">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>
        </div>
        <div class="item shoes-carousel">
            <img class="animated bounceInRight" src="img/calzado/superlight.png" alt="placeholder">
            <div class="bg-naranja description-shoes">
                <div class="container">
                    <h1 class="text-center yellow animated bounceInLeft">
                        SUPERLIGHT
                    </h1>
                    <p class="animated bounceInLeft">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>
        </div>
        <div class="item shoes-carousel">
            <img class="animated bounceInRight" src="img/calzado/classic_golden.png" alt="placeholder">
            <div class="bg-gris description-shoes">
                <div class="container">
                    <h1 class="text-center gold animated bounceInLeft">
                        CLASSIC GOLDEN
                    </h1>
                    <p class="animated bounceInLeft">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#project-carousel-second" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#project-carousel-second" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

<div id="footer">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 quita-padding">
            <img src="img/footer/copyright.png" class="kampa-copy">
            <!--<p>KAMPA Copyright&copy</p>-->
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 quita-padding">
            <p class="pull-right">
                <img src="img/footer/siguenos.png">
                <img src="img/footer/FACEBOOK-ICONO.png" class="faceboock">
                <img src="img/footer/twitter-icono.png">
            </p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.carousel').carousel()

    })
</script>
<script type="text/javascript">
    if(document.getElementById("canvas").getContext){
        create_parallelogram(-100, 810);
    }
    else {
        $('body').append('This browser does not support HTML5 canvas.');
    }

    function create_parallelogram(posx, width_parallelogram){
        var ctx = document.getElementById("canvas").getContext("2d");
        clear_canvas(ctx);

        ctx.strokeStyle = '#2fff00';
        ctx.lineWidth = 3;
        ctx.borderRight = 3;

        var imageObj = new Image();
        imageObj.onload = function(){
            var pattern = ctx.createPattern(imageObj, 'repeat');
            ctx.rect(0, 0, ctx.width, ctx.height);
            ctx.fillStyle = pattern;
            ctx.fill();
        };
        imageObj.src = "img/back-1.jpg";

        ctx.parallelogram(parseInt(posx), 1, parseInt(width_parallelogram), 810);
        ctx.fill();
        ctx.stroke();
    }

    function clear_canvas(ctx){
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
</script>
</body>

<script>
    function getMousePos(canvas, evt) {
        var rect = canvas.getBoundingClientRect();
        return {
            x: evt.clientX - rect.left,
            y: evt.clientY - rect.top
        };
    }

    var canvas = document.getElementById('canvas');
    canvas.addEventListener('mousemove', function(evt) {
        var mousePos = getMousePos(canvas, evt);
        //var message = 'Mouse position: ' + mousePos.x + ',' + mousePos.y;
        create_parallelogram(-280, mousePos.x*1.52);
    }, false);
</script>

</html>