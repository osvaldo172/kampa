<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kampa The Control</title>



    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

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

<!--<a href="http://kampapremier.com/tienda"> <img src="img/logo.png" class="img-logo"></a>-->
<a href="#"> <img src="img/logo-g.png" class="img-logo"></a>

<div class="logo">
</div>

<div id="carousel_fade" class="carousel slide carousel-fade">
    <ol class="carousel-indicators">
        <li data-target="#carousel_fade" data-slide-to="0" class="active"></li>
        <li data-target="#carousel_fade" data-slide-to="1"></li>
        <li data-target="#carousel_fade" data-slide-to="2"></li>
        <li data-target="#carousel_fade" data-slide-to="3"></li>
        <li data-target="#carousel_fade" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">

        <div class="item active">
            <img src="img/back-2.jpg">
        </div>

        <div class="item">
            <img src="img/back-1.jpg">
        </div>

        <div class="item">
            <a class="btn btn-tienda" href="http://kampapremier.com/tienda" role="button">
                <p>IR A TIENDA</p>
            </a>
            <img src="img/riel/back2.jpg">
        </div>

        <div class="item">
            <a class="btn btn-tienda btn-tienda2" href="http://kampapremier.com/tienda" role="button">
                <p>IR A TIENDA</p>
            </a>
            <img src="img/riel/back3.jpg">
        </div>

        <div class="item">
            <img src="img/riel/back4.jpg">
        </div>

    </div>
    <!--<a class="carousel-control left btn-control " href="#carousel_fade" data-slide="prev">‹</a>
    <a class="carousel-control right btn-control" href="#carousel_fade" data-slide="next">›</a>-->
</div>


<!--<div id="myCarousel" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-inner">
            <!--<div class="item active animated fadeIn">
                <div class="shop-lion" id="main">
                    <img src="img/back-2.jpg" class="lion">
                    <canvas id="canvas" width="1285" height="804" class="shop"></canvas>
                </div>
            </div>-->

         <!--   <div class="animated fadeIn item active">
                <img src="img/back-2.jpg">
            </div>

            <div class="animated fadeIn item">
                <img src="img/back-1.jpg">
            </div>

            <div class="animated fadeIn item">
                <a class="btn btn-tienda" href="http://kampapremier.com/tienda" role="button">
                    <p>IR A TIENDA</p>
                </a>
                <img src="img/riel/back2.jpg">
            </div>

            <div class="animated fadeIn item">
                <a class="btn btn-tienda btn-tienda2" href="http://kampapremier.com/tienda" role="button">
                    <p>IR A TIENDA</p>
                </a>
                <img src="img/riel/back3.jpg">
            </div>

            <div class="animated fadeIn item">
                <img src="img/riel/back4.jpg">
            </div>
        </div>
    </div>
</div>-->

<!--<div id="myCarousel" class="carousel2 slide carousel-fade" data-ride="carousel1">

    <ol class="carousel-indicators">
        <li data-target="#myCarousel"  data-to="0" class="active slider-circles"></li>
        <li data-target="#myCarousel" class="slider-circles" data-to="1"></li>
        <li data-target="#myCarousel" class="slider-circles" data-to="2"></li>
        <li data-target="#myCarousel" class="slider-circles" data-to="3"></li>
    </ol>

    <div class="carousel-inner">
        <div class="item active animated fadeIn">
            <div class="shop-lion">
                <img src="img/back-2.jpg" class="lion">
                <canvas id="canvas" width="1285" height="804" class="shop"></canvas>
            </div>
        </div>

        <div class="animated fadeIn item">
            <img src="img/riel/back2.jpg">
        </div>

        <div class="animated fadeIn item">
            <img src="img/riel/back3.jpg">
        </div>

        <div class="animated fadeIn item">
            <img src="img/riel/back4.jpg">
        </div>
    </div>
</div>-->

<nav class="navbar navbar-default menu">

    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" onclick="activeMenu()" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse menu-slider-aux" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav menu_href_slide_to">
                <!-- <li class=""><a href="#">KAMPA</a></li> -->
                <li data-to="0" class="aux-li active"><a href="#">LIGHT IN THE DARKNESS</a></li>
                <li data-to="1" class="aux-li"><a href="#">SUPERLIGHT</a></li>
                <li data-to="2" class="aux-li"><a href="#">LETHAL VIPER</a></li>
                <li data-to="3" class="aux-li"><a href="#">CLASSIC GOLDEN</a></li>
                <li data-to="4" class="aux-li"><a href="#">ELITE</a></li>
                <!--<li><a href="http://kampapremier.com/tienda">ROPA</a></li>-->
                <li onclick="irTienda()"><a href="http://kampapremier.com/tienda">TIENDA</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div id="project-carousel-second" class="carousel carousel2 slide carousel-fade" data-ride="carousel">

    <!--     <ol class="carousel-indicators">
            <li data-target="#project-carousel-second"  data-slide-to="0" class="active slider-circles"></li>
            <li data-target="#project-carousel-second" class="slider-circles" data-slide-to="1"></li>
            <li data-target="#project-carousel-second" class="slider-circles" data-slide-to="2"></li>
            <li data-target="#project-carousel-second" class="slider-circles" data-slide-to="3"></li>
        </ol> -->
    <!-- Wrapper for slides -->

    <div class="carousel-inner">
        <div class="item active shoes-carousel">
            <img class="animated shoes-img bounceInRight" src="img/calzado/superlight.png" alt="placeholder">
            <div class="bg-naranja description-shoes">
                <div class="container alinea-text">
                    <h1 class="text-center yellow animated text-shoes bounceInLeft">
                        LIGHT IN THE DARKNESS
                    </h1>
                    <p class="animated text-shoes bounceInLeft">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>

        </div>
        <div class="item shoes-carousel">
            <img class="animated shoes-img bounceInRight" id="algo" src="img/calzado/light_in_the_darkness.png" alt="placeholder">
            <div class="description-shoes bg-verde-azul">
                <div class="container alinea-text">
                    <h1 class="text-center animated text-shoes bounceInLeft">
                        SUPERLIGHT
                    </h1>
                    <p class="animated text-shoes bounceInLeft container-small">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>
        </div>
        <div class="item shoes-carousel">
            <img class="animated shoes-img bounceInRight" src="img/calzado/lethal_viper.png" alt="placeholder">
            <div class="bg-azul description-shoes">
                <div class="container alinea-text">
                    <h1 class="text-center white animated text-shoes bounceInLeft">
                        LETHAL VIPER
                    </h1>
                    <p class="animated text-shoes bounceInLeft color-blanco container-small">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>
        </div>
        <div class="item shoes-carousel">
            <img class="animated shoes-img bounceInRight" src="img/calzado/classic_golden.png" alt="placeholder">
            <div class="bg-gris description-shoes">
                <div class="container alinea-text">
                    <h1 class="text-center gold animated text-shoes bounceInLeft">
                        CLASSIC GOLDEN
                    </h1>
                    <p class="animated text-shoes bounceInLeft container-small text-classic-golden">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>
        </div>
        <div class="item shoes-carousel">
            <img class="animated shoes-img bounceInRight" src="img/calzado/elite.png" alt="placeholder">
            <div class="bg-black description-shoes">
                <div class="container alinea-text">
                    <h1 class="text-center gold animated white text-shoes bounceInLeft">
                        ELITE
                    </h1>
                    <p class="animated text-shoes bounceInLeft container-small white">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>
        </div>

    </div>

    <!-- Controls -->
    <a class="left carousel-control left-shoes" href="#project-carousel-second" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control right-shoes" href="#project-carousel-second" data-slide="next">
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
    /*<if(document.getElementById("canvas").getContext){
        create_parallelogram(-100, 810, $(".lion").height());
    }
    else {
        $('body').append('This browser does not support HTML5 canvas.');
    }

    function create_parallelogram(posx, width_parallelogram, height_parallelogram){
        var ctx = document.getElementById("canvas").getContext("2d");
        clear_canvas(ctx);
        console.log("entro a esta cosa");
        ctx.strokeStyle = '#2fff00';
        ctx.lineWidth = 3;
        ctx.borderRight = 3;

        var imageObj = new Image();

        imageObj.src='img/back-1.jpg';
        if(window.innerWidth>1266){
            console.log("entro 1");
            imageObj.src='img/back-1.jpg';
        }else if(window.innerWidth<=1266 && window.innerWidth>1246){
            console.log("entro 2");
            imageObj.src='canvas/back-1266.jpg';

        }else if(window.innerWidth<=1246 && window.innerWidth>1226){
            console.log("entro 3");
            imageObj.src='canvas/back-1246.jpg';

        }else if(window.innerWidth<=1226 && window.innerWidth>1206){
            console.log("entro 4");
            imageObj.src='canvas/back-1226.jpg';

        }else if(window.innerWidth<=1206 && window.innerWidth>1166){
            console.log("entro 5");
            imageObj.src='canvas/back-1206.jpg';

        }else if(window.innerWidth<=1186 && window.innerWidth>1146){
            console.log("entro 6");
            imageObj.src='canvas/back-1186.jpg';

        }else if(window.innerWidth<=1166 && window.innerWidth>1146){
            console.log("entro 7");
            imageObj.src='canvas/back-1166.jpg';

        }else if(window.innerWidth<=1146 && window.innerWidth>1126){
            console.log("entro 8");
            imageObj.src='canvas/back-1146.jpg';

        }else if(window.innerWidth<=1126 && window.innerWidth>1106){
            console.log("entro 9");
            imageObj.src='canvas/back-1126.jpg';

        }else if(window.innerWidth<=1106 && window.innerWidth>1086){
            console.log("entro 10");
            imageObj.src='canvas/back-1106.jpg';

        }else if(window.innerWidth<=1086 && window.innerWidth>1066){
            console.log("entro 11");
            imageObj.src='canvas/back-1086.jpg';

        }else if(window.innerWidth<=1066 && window.innerWidth>1046){
            console.log("entro 12");
            imageObj.src='canvas/back-1066.jpg';

        }else if(window.innerWidth<=1046 && window.innerWidth>1026){
            console.log("entro 13");
            imageObj.src='canvas/back-1046.jpg';

        }else if(window.innerWidth<=1026 && window.innerWidth>1006){
            console.log("entro 14");
            imageObj.src='canvas/back-1026.jpg';

        }else if(window.innerWidth<=1006 && window.innerWidth>986){
            console.log("entro 15");
            imageObj.src='canvas/back-1006.jpg';

        }else if(window.innerWidth<=986 && window.innerWidth>966){
            console.log("entro 16");
            imageObj.src='canvas/back-986.jpg';

        }else if(window.innerWidth<=966 && window.innerWidth>946){
            console.log("entro 17");
            imageObj.src='canvas/back-966.jpg';

        }else if(window.innerWidth<=946 && window.innerWidth>926){
            console.log("entro 18");
            imageObj.src='canvas/back-946.jpg';

        }else if(window.innerWidth<=926 && window.innerWidth>906){
            console.log("entro 19");
            imageObj.src='canvas/back-926.jpg';

        }else{
            console.log("entro else");
            imageObj.src='canvas/back-926.jpg';
        }

        imageObj.src='tienda.jpg';

        //imageObj.src=$("#super").attr("src");
        imageObj.onload = function(){
            var pattern = ctx.createPattern(imageObj, 'no-repeat');
            ctx.rect(0, 0, ctx.width, ctx.height);
            ctx.fillStyle = pattern;

            ctx.fill();
        };

        console.log($(".lion").height());
        ctx.parallelogram(parseInt(posx), 1, parseInt(width_parallelogram), $(".lion").height());
        ctx.fill();
        ctx.stroke();
    }


    function clear_canvas(ctx){
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }*/
</script>
</body>

<script>
    /*function getMousePos(canvas, evt) {
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

    $(window).resize( respondCanvas );

    function respondCanvas(){
        var canvas = document.getElementById('canvas');
        var container = $(canvas).parent();
        window.algo = canvas;
        console.log(container);
        $(canvas).attr('width', $(container).width() );
        $(canvas).attr('height', $(".lion").height() );
    }

    respondCanvas();*/

</script>

</html>
