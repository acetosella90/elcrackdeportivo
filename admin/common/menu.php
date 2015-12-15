<!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler"> </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <?php
                            $db = new Database();
                            if($db->isUserUser($_SESSION['id'])){
                        ?>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">User</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="new_user.php" class="nav-link ">
                                        <i class="icon-user"></i>
                                        <span class="title">Agregar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="list_user.php" class="nav-link ">
                                        <i class="icon-users"></i>
                                        <span class="title">Listado</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php   
                            }
                        ?>
<!--***************************************** NOTICIAS -------------------------------------------------------------------->
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-book-open"></i>
                                <span class="title">Noticias</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="new_noticia.php" class="nav-link ">
                                        <i class="icon-user"></i>
                                        <span class="title">Agregar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="list_noticia.php" class="nav-link ">
                                        <i class="icon-users"></i>
                                        <span class="title">Listado</span>
                                    </a>
                                </li> 
                            </ul>
                        </li>
                    
<!--*****************************************END  NOTICIAS -------------------------------------------------------------------->
<!--***************************************** ENTREVISTAS -------------------------------------------------------------------->
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-info"></i>
                                <span class="title">Entrevistas</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="new_entrevista.php" class="nav-link ">
                                        <i class="icon-user"></i>
                                        <span class="title">Agregar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="list_entrevista.php" class="nav-link ">
                                        <i class="icon-users"></i>
                                        <span class="title">Listado</span>
                                    </a>
                                </li> 
                            </ul>
                        </li>
<!--*****************************************END  ENTREVISTAS -------------------------------------------------------------------->
<!--*****************************************   PUBLICIDAD   -------------------------------------------------------------------->
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-newspaper-o"></i>
                                <span class="title">Publicidad/Tapas</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="publicidad_tapa.php" class="nav-link ">
                                        <i class="fa fa-newspaper-o"></i>
                                        <span class="title">Agregar/Editar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
<!--*****************************************END  PUBLICIDAD -------------------------------------------------------------------->
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->