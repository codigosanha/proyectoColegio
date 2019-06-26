
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Listado de Grados

        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>mantenimiento/carreras/add" class="btn btn-primary btn-flat">
                          <span class="fa fa-plus"></span> Agregar Carrera</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tecnico o Carrera Universitaria</th>
                                    <th>Opciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($carreras)):?>
                                    <?php foreach($carreras as $car):?>
                                        <tr>
                                            <td><?php echo $car->Id_Carrera;?></td>
                                            <td><?php echo $car->Carrera;?></td>

                                            <td>
                                                <div class="btn-group">


                            <a href="<?php echo base_url()?>mantenimiento/carreras/edit/<?php echo $car->Id_Carrera;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>

                            <a href="<?php echo base_url();?>mantenimiento/carreras/delete/<?php echo $car->Id_Carrera;?>" class="btn btn-danger"><span class="fa fa-trash"></span></a>

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

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion Grados </h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
