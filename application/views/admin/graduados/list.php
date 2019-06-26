
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        GRADUADOS COLEGIO LA ESPERANZA
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
              <div class="row">
                  <div class="col-md-12">
                      <a href="<?php echo base_url();?>mantenimiento/Graduados/add" class="btn btn-primary ">
                        <span class="fa fa-plus"></span> Agregar Graduado</a>
                  </div>
              </div>
  <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No. Carnet</th>
                                    <th>Nombre Completo</th>
                                    <th>Opciones</th>
                                </tr>
                               </thead>
                            <tbody>
                                <?php if(!empty($datosgraduado )):?>
                                    <?php foreach($datosgraduado as $graduado ):?>
                                        <tr>
                                            <td><?php echo $graduado->Id_Graduado;?></td>
                                              <td><?php echo $graduado->Num_Carnet;?></td>
                                            <td><?php echo $graduado->NombreCompleto;?></td>
                                            <td>
                                                <div class="btn-group">

    <a href="<?php echo base_url()?>mantenimiento/Graduados/edit/<?php echo $graduado->Id_Graduado;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>

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
