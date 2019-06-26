
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Vista Impresion Constancias
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">

                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Carnet </th>
                                    <th>Nombre</th>
                                    <th>Acta</th>
                                    <th>Año</th>
                                    <th>Folio</th>
                                    <th>Libro de ActasGrad.</th>
                                    <th>Fecha Graduacion</th>
                                    <th>Carrera</th>
                                    <td>Imprimir</td>

                                </tr>
                            </thead>
                            <tbody>
                              <?php if(!empty($titulos)):?>
                                  <?php foreach($titulos as $titulo):?>
                                      <tr>
                                          <td><?php echo $titulo->Id_Titulo;?></td>
                                          <td><?php echo $titulo->Carnet;?></td>
                                          <td><?php echo $titulo->nombre;?></td>
                                          <td><?php echo $titulo->Num_Acta;?></td>
                                          <td><?php echo $titulo->Anio;?></td>
                                          <td><?php echo $titulo->NumeroFolio;?></td>
                                          <td><?php echo $titulo->LibroActaGrad;?></td>
                                          <td><?php echo $titulo->FechaGraduacion;?></td>
                                          <td><?php echo $titulo->carrera;?></td>

                                            <td>
                                              <button type="button" class="btn btn-warning btn-ingreso"
                                              value="<?php echo $titulo->Id_Titulo;?>" data-toggle="modal" data-target="#modal-ingreso">
                                              <span class="fa fa-eye"></span></button>
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

<div class="modal fade" id="modal-ingreso">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Formulario de Ingreso</h4>
      </div>
      <form action="<?php echo base_url();?>mantenimiento/vistaConstancia/view" method="POST" id="form-ingreso">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">Numero:</span>
                <input type="text" name="numero" class="form-control" required="required">
                <input type="hidden" name="Id_Titulo" id="Id_Titulo">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">Año:</span>
                <input type="text" name="year" class="form-control" required="required">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success"><span class="fa fa-print"> </span>Generar Certificado</button>
      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal MIO MIO -->
<!-- /.modal -->
<div class="modal fade" id="modal-default" style="overflow-y: scroll;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion Constancia</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success btn-print"><span class="fa fa-print"> </span>Imprimir</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal MIO MIO -->
