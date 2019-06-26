<!-- =============================================== -->

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"></li>
            <li>
                <a href="../widgets.html">
                    <i class="fa fa-home"></i> <span>Inicio</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-university"></i> <span>Carreras Diversificado</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-down"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>mantenimiento/Carreras"><i class="fa fa-folder-o"></i>Carrera</a></li>
              <!--   <li><a href="<?php //echo base_url();?>mantenimiento/Seccion"><i class="fa fa-circle-o"></i> Seccion</a></li>
                    <li><a href="<?php //echo base_url(); ?>mantenimiento/Alumnos"><i class="fa fa-circle-o"></i> Alumnos</a></li> -->
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-graduation-cap"></i> <span> Graduados</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-down"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
              <li><a href="<?php echo base_url();?>mantenimiento/Graduados"><i class="fa fa-user-circle-o"></i>Lista de Graduados</a></li>
              <li><a href="<?php echo base_url();?>mantenimiento/Titulos"><i class="fa fa-address-book"></i>Titulos</a></li>


                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-pdf-o"></i> <span>Constancias </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>mantenimiento/VistaConstancia"><i class="fa fa-print"></i> Impresion Constancias</a></li>

                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->
