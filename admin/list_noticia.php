<?php
$title = "Listado de Noticias";
include_once('common/header.php');
include_once('common/theme_color.php');
$noticias = $db->getAllNoticias();

?>
                   
                
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Datatables</span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Listado de Noticias</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a href="new_noticia.php"><button id="sample_editable_1_new" class="btn sbold green"> Agregar Noticia
                                                        <i class="fa fa-plus"></i>
                                                    </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                    
                                                <th> Titulo </th>
                                                <th> Descripción </th>
                                                <th> Link </th>
                                                <th> ¿Destacada? </th>
                                                <th> Etiquetas </th>
                                                <th> Imagen </th>
                                                <th> Editar </th>
                                                <th> Eliminar </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            while ($row = mysql_fetch_assoc($noticias)) {
                                                $adm = ($row['destacada'] == '1') ? "SI" : "NO";
                                                echo "<tr class='odd gradeX'>";
                                                echo "<td>".$row['titulo']."</td>";
                                                echo "<td>".substr($row['descripcion'],0,30)."</td>";
                                                echo "<td>".$row['link']."</td>";
                                                echo "<td>".$adm."</td>";
                                                echo "<td>".$row['etiquetas']."</td>";
                                                echo "<td><img height='50' src='img/".$row['imagen']."'></td>";
                                                echo "<td><a href='edit_noticia.php?id=".$row['id_noticia']."'><span class='label label-sm label-success'> Editar </span></a></td>";
                                                echo "<td><a href='delete_noticia.php?id=".$row['id_noticia']."'><span class='label label-sm label-warning'> Eliminar </span></a></td>";
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
        </div>
        <!-- END CONTAINER -->
        <?php
include_once('common/footer.php');
        ?>