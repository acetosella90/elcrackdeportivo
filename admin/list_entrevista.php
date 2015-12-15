<?php
$title = "Listado de Entrevista";
include_once('common/header.php');
include_once('common/theme_color.php');
$entrevistas = $db->getAllEntrevistas();

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
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Listado de Entrevistas</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a href="new_entrevista.php"><button id="sample_editable_1_new" class="btn sbold green"> Agregar Entrevista
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
                                                <th> Editar </th>
                                                <th> Eliminar </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php 
                                            while ($row = mysql_fetch_assoc($entrevistas)) {
                                                echo "<tr class='odd gradeX'>";
                                                echo "<td>".$row['titulo']."</td>";
                                                echo "<td>".$row['descripcion']."</td>";
                                                echo "<td>".$row['link']."</td>";
                                                echo "<td><a href='edit_entrevista.php?id=".$row['id']."'><span class='label label-sm label-success'> Editar </span></a></td>";
                                                echo "<td><a href='delete_entrevista.php?id=".$row['id']."'><span class='label label-sm label-warning'> Eliminar </span></a></td>";
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