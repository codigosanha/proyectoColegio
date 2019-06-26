
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Titulos Diversificado
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>mantenimiento/Titulos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Titulos </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Graduado</th>
                                    <th>Acta</th>
                                    <th>Año</th>
                                    <th>Folio</th>
                                    <th>Libro ActasGrad.</th>
                                    <th>Fecha Graduacion</th>
                                      <th>Carrera</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($titulos)):?>
                                    <?php foreach($titulos as $titulo):?>
                                        <tr>
                                            <td><?php echo $titulo->Id_Titulo;?></td>
                                            <td><?php echo $titulo->nombregraduado;?></td>
                                            <td><?php echo $titulo->Num_Acta;?></td>
                                            <td><?php echo $titulo->Anio;?></td>
                                            <td><?php echo $titulo->NumeroFolio;?></td>
                                            <td><?php echo $titulo->LibroActaGrad;?></td>
                                            <td><?php echo $titulo->FechaGraduacion;?></td>
                                            <td><?php echo $titulo->carrera;?></td>


                                            <td>
                                                <div class="btn-group">

                                                    <a href="<?php echo base_url()?>mantenimiento/Titulos/edit/<?php echo $titulo->Id_Titulo;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>

                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- /.modal -->
