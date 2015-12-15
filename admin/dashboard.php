<?php
$title = "Inicio";
session_start();
if(empty($_SESSION['id'])){
    echo "<script>window.location='index.php';</script>";
}

include_once('common/header.php');
include_once('common/theme_color.php');

?>
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Dashboard</span>
                            </li>
                        </ul>
                        
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Dashboard
                        <small>dashboard & statistics</small>
                    </h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN DASHBOARD STATS 1-->
                    <div class="row">
                        <?php
                            if($db->isUserUser($_SESSION['id'])){
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat blue">
                                <div class="visual">
                                    <i class="icon-user"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <?php
                                            $cant = mysql_fetch_assoc($db->getCantUsers())['cant'];
                                        ?>
                                        <span data-counter="counterup" data-value="<?php echo $cant; ?>">0</span>
                                    </div>
                                    <div class="desc"> Usuarios </div>
                                </div>

                                <a class="more" href="new_user.php"> Agregar usuario
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat red">
                                <div class="visual">
                                    <i class="icon-book-open"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <?php
                                            $cant = mysql_fetch_assoc($db->getCantNoticias())['cant'];
                                        ?>
                                        <span data-counter="counterup" data-value="<?php echo $cant; ?>">0</span></div>
                                    <div class="desc"> Noticias </div>
                                </div>
                                <a class="more" href="new_noticia.php"> Agregar Noticia
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat green">
                                <div class="visual">
                                    <i class="icon-info"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <?php
                                            $cant = mysql_fetch_assoc($db->getCantEntrevistas())['cant'];
                                        ?>
                                        <span data-counter="counterup" data-value="<?php echo $cant; ?>">0</span>
                                    </div>
                                    <div class="desc"> Entrevistas </div>
                                </div>
                                <a class="more" href="new_entrevista.php"> Agregar Entrevista
                                    <i class="m-icon-swapright m-icon-white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->
                    
                </div>
            </div>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <?php
include_once('common/footer.php');
        ?>