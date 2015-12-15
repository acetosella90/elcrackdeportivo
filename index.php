<?php
require_once 'clases/Mobile_Detect.php';
$detect = new Mobile_Detect;
$isMobile = $detect->isMobile();

// get all news

require_once 'clases/Database.php';
require_once 'clases/Query.php';
require_once 'clases/Noticia.php';
require_once 'clases/Entrevista.php';

$db = new Database();
$noticiasSQL = $db->getAllNoticias();
$noticias = array();
while ($row = mysql_fetch_array($noticiasSQL)) {
    $noticia = new Noticia($row['id_noticia'], $row['imagen'], $row['link'], $row['descripcion'], $row['titulo'], $row['destacada']);
    array_push($noticias, $noticia);
}
//get all interviews

$entrevistasSQL = $db->getAllEntrevistas();
$entrevistas = array();
while ($row = mysql_fetch_array($entrevistasSQL)) {
    $entrevista = new Entrevista($row['id'], $row['link'], $row['descripcion'], $row['titulo'], $row['imagen']);
    array_push($entrevistas, $entrevista);
}


include_once('common/header.php');
?>

        <div class="row menuBanner">
            <div class="col-lg-7 maxHeight">
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel"  <?php
                    if ($isMobile) {
                        echo "style='width:100%;'";
                    }
                    ?> >
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel"  data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="container" style="height:100%; max-height:200px;">
                                    <?php
                                    if ($isMobile) {
                                        echo "<img src='admin/img/".$noticias[0]->getImagen()."' alt='foto1'  height='400' style='margin-left:-15px;width:112%' >";
                                    } else {
                                        echo "<img src='admin/img/".$noticias[0]->getImagen()."' alt='foto1' width='800' height='400' style='margin-left:-15px;'  >";
                                    }
                                    ?>

                                    <div class="carousel-caption">
                                        <h2><?php echo $noticias[0]->getTitulo(); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container" style="height:100%; max-height:200px;">
                                    <?php
                                    if ($isMobile) {
                                        echo "<img src='admin/img/".$noticias[1]->getImagen()."' alt='foto1'  height='400' style='margin-left:-15px;width:112%' >";
                                    } else {
                                        echo "<img src='admin/img/".$noticias[1]->getImagen()."' alt='foto1' width='800' height='400' style='margin-left:-15px;'  >";
                                    }
                                    ?>

                                    <div class="carousel-caption">
                                        <h2><?php echo $noticias[1]->getTitulo(); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="container" style="height:100%; max-height:200px;">
                                    <?php
                                    if ($isMobile) {
                                        echo "<img src='admin/img/".$noticias[2]->getImagen()."' alt='foto1'  height='400' style='margin-left:-15px;width:112%' >";
                                    } else {
                                        echo "<img src='admin/img/".$noticias[2]->getImagen()."' alt='foto1' width='800' height='400' style='margin-left:-15px;'  >";
                                    }
                                    ?>

                                    <div class="carousel-caption">
                                        <h2><?php echo $noticias[2]->getTitulo(); ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>  
            <div class="col-lg-5 maxHeight">
                <div class="row">
                    <div class="col-lg-12 noticiaBanner" <?php if (!$isMobile) echo "style='height:130px;'"; ?>>
                        <div class="col-lg-4" >
                            <img style="margin-top:10px;" src="admin/img/<?php echo $noticias[3]->getImagen(); ?>" alt="foto1" height="110" width="140" >
                        </div>
                        <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">
                            
                                <?php echo "<div style='display: table-cell; vertical-align: middle;'>".$noticias[3]->getDescripcionAcortada(220). "</div>"; ?>
                            
                        </div>
                    </div>
                    <div class="col-lg-12 noticiaBanner" <?php if (!$isMobile) echo "style='height:130px;'"; ?>>
                        <div class="col-lg-4" >
                            <img style="margin-top:10px;" src="admin/img/<?php echo $noticias[4]->getImagen(); ?>" alt="foto1" height="110" width="140" >
                        </div>
                        <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">
                            <?php echo "<div style='display: table-cell; vertical-align: middle;'>".$noticias[4]->getDescripcionAcortada(220). "</div>"; ?>
                        </div>
                    </div>
                    <div class="col-lg-12 noticiaBanner" <?php if (!$isMobile) echo "style='height:130px;'"; ?>>
                        <div class="col-lg-4" >
                            <img style="margin-top:10px;" src="admin/img/<?php echo $noticias[5]->getImagen(); ?>" alt="foto1" height="110" width="140" >
                        </div>
                        <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">
                            <?php echo "<div style='display: table-cell; vertical-align: middle;'>".$noticias[5]->getDescripcionAcortada(220). "</div>"; ?>
                        </div>
                    </div>  
                </div>
            </div>  
        </div>
        <div class="row hidden">
            <div class="col-lg-12 resultados">

            </div>  
        </div>


        <!-- Example row of columns -->
        <div class="row">
            <div class="col-lg-9 principal">
                <div class="row">
                    <div class="col-lg-4 noticiaPrincipal" style="background-color:white;">
                        <div class="noticiasFotos">
                            <img src="admin/img/<?php echo $noticias[6]->getImagen(); ?>" alt="foto1" height="200" width="330" >
                        </div>
                        <div>
                            <h4><strong><?php echo $noticias[6]->getTitulo(); ?></strong></h4>
                            <p><?php echo $noticias[6]->getDescripcionAcortada(150); ?> .</p>
                        </div>

                    </div>
                    <div class="col-lg-4 noticiaPrincipal" style="background-color:white;">
                        <div class="noticiasFotos">
                            <img src="admin/img/<?php echo $noticias[7]->getImagen(); ?>" alt="foto1" height="200" width="330" >
                        </div>
                        <div>
                            <h4><strong><?php echo $noticias[7]->getTitulo(); ?></strong></h4>
                            <p><?php echo $noticias[7]->getDescripcionAcortada(150); ?> .</p>
                        </div>

                    </div>
                    <div class="col-lg-4 noticiaPrincipal" style="background-color:white;">
                        <div class="noticiasFotos">
                            <img src="admin/img/<?php echo $noticias[8]->getImagen(); ?>" alt="foto1" height="200" width="330" >
                        </div>
                        <div>
                            <h4><strong><?php echo $noticias[8]->getTitulo(); ?></strong></h4>
                            <p><?php echo $noticias[8]->getDescripcionAcortada(150); ?> .</p>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-8 noticiaSecundaria">
                        <div class="col-lg-12" style="height:50%; padding-bottom:10px;">
                            <div class="col-lg-4 offset1" style="height:100%">
                                <img class="redondo" src="admin/img/<?php echo $noticias[9]->getImagen(); ?>" alt="foto1" height="160" width="160" >
                            </div>
                            <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">

                                <p style="display: table-cell; vertical-align: middle;">
                                <h4><strong><?php echo $noticias[9]->getTitulo(); ?></strong></h4>
                                <?php echo $noticias[8]->getDescripcionAcortada(150); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:50%;">
                            <div class="col-lg-4 offset1" style="height:100%">
                                <img class="redondo" src="admin/img/<?php echo $noticias[10]->getImagen(); ?>" alt="foto1" height="160" width="160" >
                            </div>
                            <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">

                                <p style="display: table-cell; vertical-align: middle;">
                                <h4><strong><?php echo $noticias[10]->getTitulo(); ?></strong></h4>
                                <?php echo $noticias[10]->getDescripcionAcortada(150); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 princialPublicidad" style="background-color:white;">
                        <img src="fotos_prueba/cocacola-amaia-arrazola247.jpg" alt="publicidad" style='height: 100%; width: 100%;'/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 noticiaPrincipal">
                        <div class="noticiasFotos">
                            <img src="admin/img/<?php echo $noticias[11]->getImagen(); ?>" alt="foto1" height="200" width="330" >
                        </div>
                        <div>
                            <h4><strong><?php echo $noticias[11]->getTitulo(); ?></strong></h4>
                            <p><?php echo $noticias[11]->getDescripcionAcortada(200); ?></p>
                        </div>

                    </div>
                    <div class="col-lg-4 noticiaPrincipal">
                        <div class="noticiasFotos">
                            <img src="admin/img/<?php echo $noticias[12]->getImagen(); ?>" alt="foto1" height="200" width="330" >
                        </div>
                        <div>
                            <h4><strong><?php echo $noticias[12]->getTitulo(); ?></strong></h4>
                            <p><?php echo $noticias[12]->getDescripcionAcortada(200); ?></p>
                        </div>

                    </div>
                   <div class="col-lg-4 noticiaPrincipal">
                        <div class="noticiasFotos">
                            <img src="admin/img/<?php echo $noticias[13]->getImagen(); ?>" alt="foto1" height="200" width="330" >
                        </div>
                        <div>
                            <h4><strong><?php echo $noticias[13]->getTitulo(); ?></strong></h4>
                            <p><?php echo $noticias[13]->getDescripcionAcortada(200); ?></p>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-8 noticiaSecundaria">
                        <div class="col-lg-12" style="height:50%; padding-bottom:10px;">
                            <div class="col-lg-4 offset1" style="height:100%">
                                <img class="redondo" src="admin/img/<?php echo $noticias[14]->getImagen(); ?>" alt="foto1" height="160" width="160" >
                            </div>
                            <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">
                                <p style="display: table-cell; vertical-align: middle;">
                                <h4><strong><?php echo $noticias[14]->getTitulo(); ?></strong></h4>
                                <?php echo $noticias[14]->getDescripcionAcortada(200); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12" style="height:50%; padding-bottom:10px;">
                            <div class="col-lg-4 offset1" style="height:100%">
                                <img class="redondo" src="admin/img/<?php echo $noticias[15]->getImagen(); ?>" alt="foto1" height="160" width="160" >
                            </div>
                            <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">
                                <p style="display: table-cell; vertical-align: middle;">
                                <h4><strong><?php echo $noticias[15]->getTitulo(); ?></strong></h4>
                                <?php echo $noticias[15]->getDescripcionAcortada(200); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 princialPublicidad" style="background-color:white;">
                        <img src="fotos_prueba/garba.jpg" alt="publicidad" style="height:100%; width:100%; " />
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12 entrevistaPrincipal">
                        <div class="col-lg-12">
                            <h4><strong>Titulo3 das das </strong></h4>
                        </div>
                        <div class="col-lg-4" style="height:390px; padding:10px; ">
                            <img src="admin/img/<?php echo $entrevistas[0]->getImagen(); ?>" alt="publicidad" style="height:100%; width:100%; " />
                        </div>
                        <div class="col-lg-8" style="height:100%; margin-top:11px;">
                            <div class="row">
                            <div id="myCarousel2" class="carousel slide" data-ride="carousel2" style="margin-top:-10px;">
                                <div class="carousel-inner" role="listbox">
                                    <?php if(count($entrevistas) > 1){ ?>
                                    <div class="item active">
                                        <div class="container" style="height:100%; max-height:200px; padding:10px;">
                                            <div class="row">
                                            <?php  if(count($entrevistas) > 1){ ?>
                                                <div class="col-lg-2">
                                                    <img src="admin/img/<?php echo $entrevistas[1]->getImagen(); ?>" alt="publicidad" style="height:130px; width:100%; " />
                                                    <center><h4><?php echo $entrevistas[1]->getTitulo(); ?></h4></center>
                                                </div>
                                                <?php } ?>
                                                <?php  if(count($entrevistas) > 2){ ?>
                                                <div class="col-lg-2">
                                                    <img src="admin/img/<?php echo $entrevistas[2]->getImagen(); ?>" alt="publicidad" style="height:130px; width:100%; " />
                                                    <center><h4><?php echo $entrevistas[2]->getTitulo(); ?></h4></center>
                                                </div>
                                                <?php } ?>
                                                 <?php  if(count($entrevistas) > 3){ ?>
                                                <div class="col-lg-2">
                                                    <img src="admin/img/<?php echo $entrevistas[3]->getImagen(); ?>" alt="publicidad" style="height:130px; width:100%; " />
                                                    <center><h4><?php echo $entrevistas[3]->getTitulo(); ?></h4></center>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="row">
                                                <?php  
                                                if(count($entrevistas) > 4){ ?>
                                                <div class="col-lg-2">
                                                    <img src="admin/img/<?php echo $entrevistas[4]->getImagen(); ?>" alt="publicidad" style="height:130px; width:100%; " />
                                                    <center><h4><?php echo $entrevistas[4]->getTitulo(); ?></h4></center>
                                                </div>
                                                <?php } ?>
                                                <?php  if(count($entrevistas) > 5){ ?>
                                                <div class="col-lg-2">
                                                    <img src="admin/img/<?php echo $entrevistas[5]->getImagen(); ?>" alt="publicidad" style="height:130px; width:100%; " />
                                                    <center><h4><?php echo $entrevistas[5]->getTitulo(); ?></h4></center>
                                                </div>
                                                <?php } ?>
                                                <?php  if(count($entrevistas) > 6){ ?>
                                                <div class="col-lg-2">
                                                    <img src="admin/img/<?php echo $entrevistas[6]->getImagen(); ?>" alt="publicidad" style="height:130px; width:100%; " />
                                                    <center><h4><?php echo $entrevistas[6]->getTitulo(); ?></h4></center>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php if(count($entrevistas) > 7){ ?>
                                    <div class="item ">
                                        <div class="container" style="height:100%; max-height:200px; padding:10px;">
                                            <div class="row">
                                                <?php  
                                                if(count($entrevistas) > 7){ ?>
                                                <div class="col-lg-2">
                                                    <img src="admin/img/<?php echo $entrevistas[7]->getImagen(); ?>" alt="publicidad" style="height:130px; width:100%; " />
                                                    <center><h4><?php echo $entrevistas[7]->getTitulo(); ?></h4></center>
                                                </div>
                                                <?php } ?>
                                                <?php  if(count($entrevistas) > 8){ ?>
                                                <div class="col-lg-2">
                                                    <img src="admin/img/<?php echo $entrevistas[8]->getImagen(); ?>" alt="publicidad" style="height:130px; width:100%; " />
                                                    <center><h4><?php echo $entrevistas[8]->getTitulo(); ?></h4></center>
                                                </div>
                                                <?php } ?>
                                                <?php  if(count($entrevistas) > 9){ ?>
                                                <div class="col-lg-2">
                                                    <img src="admin/img/<?php echo $entrevistas[9]->getImagen(); ?>" alt="publicidad" style="height:130px; width:100%; " />
                                                    <center><h4><?php echo $entrevistas[9]->getTitulo(); ?></h4></center>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="row">
                                                <?php  
                                                if(count($entrevistas) > 10){ ?>
                                                <div class="col-lg-2">
                                                    <img src="admin/img/<?php echo $entrevistas[10]->getImagen(); ?>" alt="publicidad" style="height:130px; width:100%; " />
                                                    <center><h4><?php echo $entrevistas[10]->getTitulo(); ?></h4></center>
                                                </div>
                                                <?php } ?>
                                                <?php  if(count($entrevistas) > 11){ ?>
                                                <div class="col-lg-2">
                                                    <img src="admin/img/<?php echo $entrevistas[11]->getImagen(); ?>" alt="publicidad" style="height:130px; width:100%; " />
                                                    <center><h4><?php echo $entrevistas[11]->getTitulo(); ?></h4></center>
                                                </div>
                                                <?php } ?>
                                                <?php  if(count($entrevistas) > 12){ ?>
                                                <div class="col-lg-2">
                                                    <img src="admin/img/<?php echo $entrevistas[12]->getImagen(); ?>" alt="publicidad" style="height:130px; width:100%; " />
                                                    <center><h4><?php echo $entrevistas[12]->getTitulo(); ?></h4></center>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php  } ?>
                                </div>
                                <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 noticiaPrincipal" style="background-color:white;">
                        <div class="noticiasFotos">
                            <img src="admin/img/<?php echo $noticias[16]->getImagen(); ?>" alt="foto1" height="200" width="330" >
                        </div>
                        <div>
                            <h4><strong><?php echo $noticias[16]->getTitulo(); ?></strong></h4>
                            <p><?php echo $noticias[16]->getDescripcionAcortada(200); ?> .</p>
                        </div>

                    </div>
                    <div class="col-lg-4 noticiaPrincipal" style="background-color:white;">
                        <div class="noticiasFotos">
                            <img src="admin/img/<?php echo $noticias[17]->getImagen(); ?>" alt="foto1" height="200" width="330" >
                        </div>
                        <div>
                            <h4><strong><?php echo $noticias[17]->getTitulo(); ?></strong></h4>
                            <p><?php echo $noticias[17]->getDescripcionAcortada(200); ?> .</p>
                        </div>

                    </div>
                    <div class="col-lg-4 noticiaPrincipal" style="background-color:white;">
                        <div class="noticiasFotos">
                            <img src="admin/img/<?php echo $noticias[18]->getImagen(); ?>" alt="foto1" height="200" width="330" >
                        </div>
                        <div>
                            <h4><strong><?php echo $noticias[18]->getTitulo(); ?></strong></h4>
                            <p><?php echo $noticias[18]->getDescripcionAcortada(200); ?> .</p>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-lg-3 sideBar">
                <div class="col-lg-12">
                    <center><audio controls style="width:100%" ><source src="http://angeladon.io/audio.mp3" type="audio/mpeg"></audio></center>
                </div>
                <div class="col-lg-12 posiciones hidden"></div>
                <div class="col-lg-12 imagen1SideBar">
                    <img src="fotos_prueba/tapa_ole.jpg" style="height:100%; width:100%">
                </div>
                <div class="col-lg-12 imagen1SideBar">
                    <a class="twitter-timeline"  href="https://twitter.com/OrbitDesarrollo" data-widget-id="675907943297105921">Tweets por el @OrbitDesarrollo.</a>
                    <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + "://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");</script>
                </div>
                <div class="col-lg-12 imagen1SideBar">
                    <div class="fb-page" data-href="https://www.facebook.com/Orbit-1035903329793773/" data-width="362" data-height="340" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Orbit-1035903329793773/"><a href="https://www.facebook.com/Orbit-1035903329793773/">Orbit</a></blockquote></div></div></div>
                    <div class="col-lg-12 imagen2SideBar"><img src="fotos_prueba/tapa_ole.jpg" style="height:100%; width:100%"></div>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12 vine ">
                <a href=""><img src="img/vine.jpg" style="height:100%;"></a>
                
            </div>  
        </div>
        <div class="row">
            <div class="col-lg-12 galeriaVideos">
                <div class="row">
                    <div class="col-lg-7 galeriaVideo" style="padding:30px;">
                        <img src="fotos_prueba/tapa_ole.jpg" style="height:85%; width:100%">
                        <h3 style="color:black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu</h3>
                    </div>
                    <div class="col-lg-5 galeriaVideoColumna">
                        <div class="col-lg-12" <?php if (!$isMobile) echo "style='height:130px;'"; ?>>
                            <div class="col-lg-4" >
                                <img style="margin-top:10px;" src="fotos_prueba/prueba1.jpg" alt="foto1" height="110" width="140" >
                            </div>
                            <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">
                                <p style="display: table-cell; vertical-align: middle;">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 galeriaVideoColumna">
                        <div class="col-lg-12" <?php if (!$isMobile) echo "style='height:130px;'"; ?>>
                            <div class="col-lg-4" >
                                <img style="margin-top:10px;" src="fotos_prueba/prueba1.jpg" alt="foto1" height="110" width="140" >
                            </div>
                            <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">
                                <p style="display: table-cell; vertical-align: middle;">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 galeriaVideoColumna">
                        <div class="col-lg-12" <?php if (!$isMobile) echo "style='height:130px;'"; ?>>
                            <div class="col-lg-4" >
                                <img style="margin-top:10px;" src="fotos_prueba/prueba1.jpg" alt="foto1" height="110" width="140" >
                            </div>
                            <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">
                                <p style="display: table-cell; vertical-align: middle;">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Site footer -->

        <div class="row">
            <div class="col-lg-12 menuFooter hidden">

            </div>  
        </div>


    </div> <!-- /container -->

<?php
include_once('common/footer.php');
?>