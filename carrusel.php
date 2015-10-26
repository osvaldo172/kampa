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

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style.less">

</head>

<body>


<div class="logo">
    <img src="">
</div>

<div id="project-carousel-first carousel-indicators carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#project-carousel-first #carousel-indicators #carousel-example-generic"  data-to="0" class="active"></li>
        <li data-target="#project-carousel-first #carousel-indicators #carousel-example-generic" data-to="1"></li>
        <li data-target="#project-carousel-first #carousel-indicators #carousel-example-generic" data-to="2"></li>
        <li data-target="#project-carousel-first #carousel-indicators #carousel-example-generic" data-to="3"></li>
    </ol>

    <div class="carousel-inner">
        <div class="item active">
            <div class="contenedor">
                <div class="contenedorHijo">
                    <div class="contenidoHijoInterior"></div>
                </div>
            </div>

            <div class="contenedor2">
            </div>
        </div>

        <div class="item">
            <img src="img/riel/back2.jpg">
        </div>

        <div class="item">
            <img src="img/riel/back3.jpg">
        </div>

        <div class="item">
            <img src="img/riel/back4.jpg">
        </div>
    </div>
</div>

<nav class="navbar navbar-default menu">
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
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">KAMPA</a></li>
                <li><a href="#">LIGHT IN THE DARKNESS</a></li>
                <li><a href="#">LETHAL VIPER</a></li>
                <li><a href="#">SUPERLIGHT</a></li>
                <li><a href="#">CLASSIC GOLDEN</a></li>
                <li><a href="#">ELITE</a></li>
                <li><a href="#">ROPA</a></li>
                <li><a href="#">TIENDA</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div id="project-carousel-second" class="carousel slide carousel-fade" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active shoes-carousel">
            <img src="img/calzado/light_in_the_darkness.png" alt="placeholder">
            <div class="bg-verde-azul description-shoes">
                <div class="container">
                    <h1 class="text-center">
                        LIGHT IN THE DARKNESS
                    </h1>
                    <p>
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>
        </div>
        <div class="item shoes-carousel">
            <img src="img/calzado/lethal_viper.png" alt="placeholder">
            <div class="bg-azul description-shoes">
                <div class="container">
                    <h1 class="text-center white">
                        LETHAL VIPER
                    </h1>
                    <p>
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>
        </div>
        <div class="item shoes-carousel">
            <img src="img/calzado/superlight.png" alt="placeholder">
            <div class="bg-naranja description-shoes">
                <div class="container">
                    <h1 class="text-center yellow">
                        SUPERLIGHT
                    </h1>
                    <p>
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>
        </div>
        <div class="item shoes-carousel">
            <img src="img/calzado/classic_golden.png" alt="placeholder">
            <div class="bg-gris description-shoes">
                <div class="container">
                    <h1 class="text-center gold">
                        CLASSIC GOLDEN
                    </h1>
                    <p>
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    </p>
                    <a class="btn btn-carrito" href="#" role="button"><img src="img/carrito.png"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="[id*=project-carousel]" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="[id*=project-carousel]" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>

<div id="footer">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <img src="img/footer/copyright.png">
            <!--<p>KAMPA Copyright&copy</p>-->
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p class="pull-right">
                <img src="img/footer/siguenos.png">
                <img src="img/footer/FACEBOOK-ICONO.png" class="faceboock">
                <img src="img/footer/twitter-icono.png">
            </p>
        </div>
    </div>
</div>


</body>

