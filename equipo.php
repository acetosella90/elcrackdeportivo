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
    $entrevista = new Entrevista($row['id'], $row['link'], $row['descripcion'], $row['titulo']);
    array_push($entrevistas, $entrevista);
}
include_once('common/header.php');
?>

<div class="row">
	<div class="col-md-12 bannerTitulo" ></div>
</div>
<div class="row">
	<div class="col-md-3" ></div>
	<div class="col-md-6 imagenTitulo" ></div>
	<div class="col-md-3" ></div>
</div>
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
                        <img src="admin/img/<?php echo $noticias[9]->getImagen(); ?>" alt="foto1" height="160" width="160" >
                    </div>
                    <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">

                        <p style="display: table-cell; vertical-align: middle;">
                        <h4><strong><?php echo $noticias[9]->getTitulo(); ?></strong></h4>
                        <?php echo $noticias[8]->getDescripcionAcortada(150); ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-12" style="height:50%; padding-bottom:10px;">
                    <div class="col-lg-4 offset1" style="height:100%">
                        <img src="admin/img/<?php echo $noticias[10]->getImagen(); ?>" alt="foto1" height="160" width="160" >
                    </div>
                    <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">

                        <p style="display: table-cell; vertical-align: middle;">
                        <h4><strong><?php echo $noticias[10]->getTitulo(); ?></strong></h4>
                        <?php echo $noticias[10]->getDescripcionAcortada(150); ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-12" style="height:50%;">
                    <div class="col-lg-4 offset1" style="height:100%">
                        <img src="admin/img/<?php echo $noticias[4]->getImagen(); ?>" alt="foto1" height="160" width="160" >
                    </div>
                    <div class="col-lg-8" style="height:100%;display: table; overflow: hidden;">

                        <p style="display: table-cell; vertical-align: middle;">
                        <h4><strong><?php echo $noticias[4]->getTitulo(); ?></strong></h4>
                        <?php echo $noticias[4]->getDescripcionAcortada(150); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 princialPublicidad" style="background-color:white;">
                <img src="fotos_prueba/cocacola-amaia-arrazola247.jpg" alt="publicidad" style='height: 100%; width: 100%;'/>
            </div>
        </div>
        <div class="col-lg-12">
        	<h2>Noticias Relacionadas</h2>
        </div>
        <div class="col-lg-12 noticiaSecundaria">
        	<h2>Mas Noticias</h2>
	        <div class="row" >
	        	<div class="col-lg-6" style="background-color:red">
	        		<div class="col-lg-6">
	        			<img src="admin/img/<?php echo $noticias[4]->getImagen(); ?>" alt="foto1" height="160" width="160" >
	        		</div>
	        		<div class="col-lg-6" style="height:100%;display: table; overflow: hidden;">
	        			<p style="display: table-cell; vertical-align: middle;">
                        <h4><strong><?php echo $noticias[4]->getTitulo(); ?></strong></h4>
                        <?php echo $noticias[4]->getDescripcionAcortada(150); ?>
                        </p>
	        		</div>
	        	</div>
	        	<div class="col-lg-6" style="background-color:yellow">
	        		<div class="col-lg-6">
	        			<img src="admin/img/<?php echo $noticias[4]->getImagen(); ?>" alt="foto1" height="160" width="160" >
	        		</div>
	        		<div class="col-lg-6" style="height:100%;display: table; overflow: hidden;">
	        			<p style="display: table-cell; vertical-align: middle;">
                        <h4><strong><?php echo $noticias[4]->getTitulo(); ?></strong></h4>
                        <?php echo $noticias[4]->getDescripcionAcortada(150); ?>
                        </p>
	        		</div>
	        	</div>	
	        </div>

	        <div class="row" >

	        	<div class="col-lg-6" style="background-color:orange">
	        		<div class="col-lg-6">
	        			<img src="admin/img/<?php echo $noticias[4]->getImagen(); ?>" alt="foto1" height="160" width="160" >
	        		</div>
	        		<div class="col-lg-6" style="height:100%;display: table; overflow: hidden;">
	        			<p style="display: table-cell; vertical-align: middle;">
                        <h4><strong><?php echo $noticias[4]->getTitulo(); ?></strong></h4>
                        <?php echo $noticias[4]->getDescripcionAcortada(150); ?>
                        </p>
	        		</div>
	        	</div>
	        	<div class="col-lg-6" style="background-color:green">
	        		<div class="col-lg-6">
	        			<img src="admin/img/<?php echo $noticias[4]->getImagen(); ?>" alt="foto1" height="160" width="160" >
	        		</div>
	        		<div class="col-lg-6" style="height:100%;display: table; overflow: hidden;">
	        			<p style="display: table-cell; vertical-align: middle;">
                        <h4><strong><?php echo $noticias[4]->getTitulo(); ?></strong></h4>
                        <?php echo $noticias[4]->getDescripcionAcortada(150); ?>
                        </p>
	        		</div>
	        	</div>	
	        </div>
	        <div class="row" >
	        	<div class="col-lg-6" style="background-color:blue">
	        		<div class="col-lg-6">
	        			<img src="admin/img/<?php echo $noticias[4]->getImagen(); ?>" alt="foto1" height="160" width="160" >
	        		</div>
	        		<div class="col-lg-6" style="height:100%;display: table; overflow: hidden;">
	        			<p style="display: table-cell; vertical-align: middle;">
                        <h4><strong><?php echo $noticias[4]->getTitulo(); ?></strong></h4>
                        <?php echo $noticias[4]->getDescripcionAcortada(150); ?>
                        </p>
	        		</div>
	        	</div>
	        	<div class="col-lg-6" style="background-color:grey">
	        		<div class="col-lg-6">
	        			<img src="admin/img/<?php echo $noticias[4]->getImagen(); ?>" alt="foto1" height="160" width="160" >
	        		</div>
	        		<div class="col-lg-6" style="height:100%;display: table; overflow: hidden;">
	        			<p style="display: table-cell; vertical-align: middle;">
                        <h4><strong><?php echo $noticias[4]->getTitulo(); ?></strong></h4>
                        <?php echo $noticias[4]->getDescripcionAcortada(150); ?>
                        </p>
	        		</div>
	        	</div>	
	        </div>
        </div>
    </div>
    <div class="col-lg-3 sideBar">
    	<div class="col-lg-12 posiciones hidden"></div>
		<div class="col-lg-12 entrevistas">
		    <div id="myCarousel" class="carousel slide" data-ride="carousel">
		      <div class="carousel-inner" role="listbox">
		        <div class="item active">
		          <img class="first-slide" src="fotos_prueba/cocacola-amaia-arrazola247.jpg" alt="First slide" style="height:100%; width:100%;">
		        </div>
		        <div class="item">
		          <img class="second-slide" src="fotos_prueba/garba.jpg" alt="Second slide" style="height:100%;width:100%;">
		        </div>
		        <div class="item">
		          <img class="third-slide" src="fotos_prueba/cocacola-amaia-arrazola247.jpg" alt="Third slide" style="height:100%;width:100%;">
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
			<div class="fb-page" data-href="https://www.facebook.com/Orbit-1035903329793773/" data-width="362" data-height="340" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Orbit-1035903329793773/"><a href="https://www.facebook.com/Orbit-1035903329793773/">Orbit</a></blockquote></div></div></div>
			
		</div>
    </div>
</div>


<?php
include_once('common/footer.php');
?>