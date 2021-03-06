<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Inicio - El Crack Deportivo</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/justified-nav.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="css/carousel.css" rel="stylesheet">
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=902318613167663";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">
        <style type="text/css">
            audio {
                width: 230px;
            }
        </style>
        <div class="row">
            <div class="col-lg-12 header">
                <div class="col-lg-3"><img src="img/logo_elcrack.png"></div>
                <div class="col-lg-3" style="margin-top: 15px; padding-left:50px;">
                    <p style="color:white;">Escuchanos en ¡VIVO!</p><hr>
                    <audio controls ><source src="http://angeladon.io/audio.mp3" type="audio/mpeg"></audio>
                </div>
                <div class="col-lg-3">
                </div>
                <div class="col-lg-3" style="margin-top:10px;">
                    <a style="margin-left: 10px; color:white" onMouseOver="this.style.cssText = 'color: #A8D6D9;margin-left: 10px;'" onMouseOut="this.style.cssText = 'color: white;margin-left: 10px;'" href="https://twitter.com/crackdeportivo"><i class="fa fa-twitter fa-2x"></i></a>
                    <a style="color:white; margin-left: 10px;"onMouseOver="this.style.cssText = 'color: #A8D6D9;margin-left: 10px;'" onMouseOut="this.style.cssText = 'color: white;margin-left: 10px;'" href="https://www.facebook.com/crackdeportivo/"><i class="fa fa-facebook-official fa-2x"></i></a>
                    <a style="color:white; margin-left: 10px;"onMouseOver="this.style.cssText = 'color: #A8D6D9;margin-left: 10px;'" onMouseOut="this.style.cssText = 'color: white;margin-left: 10px;'" href="https://www.youtube.com/channel/UCRooEgy_ZOzl6_a21TCdr1w"><i class="fa fa-youtube fa-2x"></i></a>
                    <hr>
                    <div <?php if ($isMobile) echo "style='font-size: 12px;'"; ?>>
                        <?php
                        $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
                        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

                        echo "<div style='color:white'>" . $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . ", " . date('Y') . "</div>";
                        ?>
                        <hr>
                    </div>
                </div>
            </div>  
        </div>


        <div class="row">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse" >
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FÚTBOL <span class="caret"></span></a>
                                <ul class="dropdown-menu" style="background: #E4CD27;">
                                    <li><a href="#">PRIMERA DIVISIÓN</a></li>
                                    <li><a href="#">NACIONAL B</a></li>
                                    <li><a href="#">FÚTBOL DE ASCENSO</a></li>
                                    <li><a href="#">ELIMINATORIAS</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" >INTERNACIONAL <span></span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COPAS <span class="caret"></span></a>
                                <ul class="dropdown-menu" style="background: #E4CD27;">
                                    <li><a href="#">CHAMPIONS LEAGUE</a></li>
                                    <li><a href="#">COPA LIBERTADORES</a></li>
                                    <li><a href="#">COPA SUDAMERICANA</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" >SELECCIÓN ARGENTINA <span ></span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" >MESSI VS CRISTINANO <span></span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" >TENIS <span ></span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">POLIDEPORTIVO <span class="caret"></span></a>
                                <ul class="dropdown-menu" style="background: #E4CD27;">
                                    <li><a href="#">GOLF</a></li>
                                    <li><a href="#">BÁSQUET</a></li>
                                    <li><a href="#">ATLETISMO</a></li>
                                    <li><a href="#">RUGBY</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" >VER PARA CREER <span ></span></a>
                            </li>
                            <li style='margin-left: 70px;'  class="dropdown bg-lineas-diagonales">
                                <a> <div class='entrevista-menu' ><strong>ENTREVISTAS</strong></div></a>
                            </li>
                        </ul>

                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
        </div>
        <div class="row ">
            <div class="col-lg-12 clubes text-center">
                <div><p><a href="/category/Aldosivi"><br>
                            <img class="alignnone wp-image-17145" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/Club_Atl_tico_Aldosivi.png" alt="Club_Atl_tico_Aldosivi" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/Club_Atl_tico_Aldosivi-150x150.png 150w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Club_Atl_tico_Aldosivi-160x160.png 160w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Club_Atl_tico_Aldosivi-240x240.png 240w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Club_Atl_tico_Aldosivi-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Club_Atl_tico_Aldosivi-184x184.png 184w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Club_Atl_tico_Aldosivi.png 256w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/argentinos-primera-division/"><img class="alignnone wp-image-17149" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/160px-Escudo_del_Club_Argentinos_Juniors.svg_.png" alt="160px-Escudo_del_Club_Argentinos_Juniors.svg" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/160px-Escudo_del_Club_Argentinos_Juniors.svg_-150x150.png 150w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/160px-Escudo_del_Club_Argentinos_Juniors.svg_.png 160w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/160px-Escudo_del_Club_Argentinos_Juniors.svg_-60x60.png 60w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/Arsenal"><img class="alignnone wp-image-5997" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/afc.png" alt="Arsenal" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/afc-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/afc.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/atletico-rafaela-primera-division"><img class="alignnone wp-image-5998" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/adr.png" alt="Atlético de Rafaela" width="37" height="37" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/adr-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/adr.png 62w" sizes="(max-width: 37px) 100vw, 37px"></a><a href="/category/Banfield"><img class="alignnone wp-image-5999" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/ban.png" alt="Banfield" width="41" height="41" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/ban-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/ban.png 62w" sizes="(max-width: 41px) 100vw, 41px"></a><a href="/category/belgrano-primera-division"><img class="alignnone wp-image-5996" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/cab.png" alt="Belgrano" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/cab-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/cab.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/Boca"><img class="alignnone wp-image-17147" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/BocaJuniors_escudo.png" alt="BocaJuniors_escudo" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/BocaJuniors_escudo-150x150.png 150w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/BocaJuniors_escudo-300x300.png 300w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/BocaJuniors_escudo-160x160.png 160w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/BocaJuniors_escudo-240x240.png 240w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/BocaJuniors_escudo-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/BocaJuniors_escudo-184x184.png 184w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/BocaJuniors_escudo.png 402w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/chicago-nacional-b"><img class="alignnone wp-image-17150" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo_Nueva_Chicago.png" alt="Escudo_Nueva_Chicago" width="40" height="41"></a><a href="/category/colon"><img class="alignnone wp-image-17152" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/216px-Escudo_del_Club_Colón_de_Santa_Fe.svg_.png" alt="216px-Escudo_del_Club_Colón_de_Santa_Fe.svg" width="37" height="41"></a><a href="/category/crucero-del-norte"><img class="alignnone wp-image-17153" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/crucero.png" alt="crucero" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/crucero-150x150.png 150w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/crucero-160x160.png 160w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/crucero-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/crucero.png 180w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/defensayjusticia"><img class="alignnone wp-image-6000" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/dyj.png" alt="Defensa y Justicia" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/dyj-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/dyj.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/estudiantes-primera-division"><img class="alignnone wp-image-6001" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/elp.png" alt="Estudiantes" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/elp-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/elp.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/gimnasia"><img class="alignnone wp-image-6003" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/gyelp.png" alt="Gimnasia" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/gyelp-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/gyelp.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/godoy-cruz"><img class="alignnone wp-image-17155" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/150px-Escudo_del_Club_Godoy_Cruz_de_Mendoza.svg_.png" alt="150px-Escudo_del_Club_Godoy_Cruz_de_Mendoza.svg" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/150px-Escudo_del_Club_Godoy_Cruz_de_Mendoza.svg_.png 150w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/150px-Escudo_del_Club_Godoy_Cruz_de_Mendoza.svg_-60x60.png 60w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/huracan-primera-division"><img class="alignnone wp-image-17156" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo-Huracan-1.png" alt="Escudo Huracan (1)" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo-Huracan-1-150x150.png 150w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo-Huracan-1-300x300.png 300w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo-Huracan-1-160x160.png 160w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo-Huracan-1-240x240.png 240w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo-Huracan-1-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo-Huracan-1-184x184.png 184w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo-Huracan-1.png 1022w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/independiente"><img class="alignnone wp-image-5994" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/cai.png" alt="Independiente" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/cai-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/cai.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/lanus-primera-division"><img class="alignnone wp-image-6008" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/lanus.png" alt="Lanús" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/lanus-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/lanus.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/newells"><img class="alignnone wp-image-6004" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/nob.png" alt="Newells" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/nob-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/nob.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/olimpo"><img class="alignnone wp-image-5989" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/co.png" alt="Olimpo" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/co-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/co.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/quilmes"><img class="alignnone wp-image-6005" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/qac.png" alt="Quilmes" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/qac-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/qac.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/racing"><img class="alignnone wp-image-6006" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/rc.png" alt="Racing" width="38" height="38" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/rc-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/rc.png 62w" sizes="(max-width: 38px) 100vw, 38px"></a><a href="/category/river"><img class="alignnone wp-image-17157" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/39A067738.png" alt="39A067738" width="30" height="38"></a><a href="/category/rosario-central"><img class="alignnone wp-image-5993" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/carc.png" alt="Rosario Central" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/carc-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/carc.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/sanlorenzo"><img class="alignnone wp-image-5991" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/casla.png" alt="San Lorenzo" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/casla-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/casla.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/san-martin-sj"><img class="alignnone wp-image-17158" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo_original_San_Martin_SJ.png" alt="Escudo_original_San_Martin_SJ" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo_original_San_Martin_SJ-150x150.png 150w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo_original_San_Martin_SJ-300x300.png 300w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo_original_San_Martin_SJ-160x160.png 160w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo_original_San_Martin_SJ-240x240.png 240w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo_original_San_Martin_SJ-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo_original_San_Martin_SJ-184x184.png 184w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Escudo_original_San_Martin_SJ.png 600w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/sarmiento-de-junin"><img class="alignnone wp-image-17159" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/Sarmiento-de-Junín.png" alt="Sarmiento de Junín" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/Sarmiento-de-Junín-150x150.png 150w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Sarmiento-de-Junín-160x160.png 160w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Sarmiento-de-Junín-240x240.png 240w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Sarmiento-de-Junín-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Sarmiento-de-Junín-184x184.png 184w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/Sarmiento-de-Junín.png 256w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/temperley"><img class="alignnone wp-image-17160" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/hkdBwRp.png" alt="hkdBwRp" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/hkdBwRp-150x150.png 150w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/hkdBwRp-160x160.png 160w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/hkdBwRp-240x240.png 240w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/hkdBwRp-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/hkdBwRp-184x184.png 184w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/hkdBwRp.png 256w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/velez-primera-division"><img class="alignnone wp-image-5990" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/cavs.png" alt="Vélez" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/cavs-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/cavs.png 62w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/union"><img class="alignnone wp-image-17161" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/0010008171.png" alt="0010008171" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/0010008171-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/0010008171.png 100w" sizes="(max-width: 40px) 100vw, 40px"></a><a href="/category/tigre"><img class="alignnone wp-image-6007" src="http://www.elcrackdeportivo.com.ar/wp-content/uploads/tigre.png" alt="Tigre" width="40" height="40" srcset="http://www.elcrackdeportivo.com.ar/wp-content/uploads/tigre-60x60.png 60w, http://www.elcrackdeportivo.com.ar/wp-content/uploads/tigre.png 62w" sizes="(max-width: 40px) 100vw, 40px"><br>
                        </a></p>
                </div>
            </div>  
        </div>