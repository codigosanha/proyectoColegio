
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Titulos Universitarios
        <small>Editar</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>

                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>mantenimiento/Titulos/update" method="POST">


                        <input type="hidden" name="idtitulouni" value="<?php echo $titulos->Id_Titulo;?>">

                            <div class="form-group">
                              <label for="nombregraduado">Graduad@</label>
                              <select name="nombregraduado" id="nombregraduado" class="form-control" required="required">
                                <option value="">Seleccione...</option>
                                <?php foreach ($datosgraduado as $nombregraduado) :?>
                                <?php if($nombregraduado->Id_Graduado == $titulos->Id_Graduado):?>
                                <option value="<?php echo $nombregraduado->Id_Graduado;?>" selected><?php echo $nombregraduado->NombreCompleto ?></option>
                                <?php else:?>
                                <option value="<?php echo $nombregraduado->Id_Graduado;?>"><?php echo $nombregraduado->NombreCompleto ?></option>
                                <?php endif; ?>
                                <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                  <div class="col-md-6">
                                    <label for="Num_Acta">Numero de Acta:</label>
                                    <input type="number" class="form-control" id="Num_Acta" name="Num_Acta"
                                    value="<?php echo $titulos->Num_Acta; ?>">
                                  </div>

                                  <div class="col-md-6">
                                    <label for="Anio">Año:</label>
                                    <input type="number" class="form-control" id="Anio" name="Anio"
                                    value="<?php echo $titulos->Anio; ?>">
                                  </div>
                                  <br>
                              </div>

                              <br><br>

                              <div class="form-group">
                                <div class="col-md-6">
                                  <label for="NumeroFolio">Numero de Folio:</label>
                                  <input type="number" class="form-control" id="NumeroFolio" name="NumeroFolio"
                                  value="<?php echo $titulos->NumeroFolio; ?>">
                                </div>

                                    <div class="col-md-6">
                                      <label for="LibroActaGrad">Numero de Libro Acta Graduacion:</label>
                                      <input type="number" class="form-control" id="LibroActaGrad" name="LibroActaGrad"
                                      value="<?php echo $titulos->LibroActaGrad; ?>">
                                    </div>
                                    <br>
                                </div>
                                <br><br>


                            <div class="form-group">
                              <div class="col-md-7">
                                <label for="FechaGraduacion">Fecha de Graduacion :</label>
                                <input type="date" class="form-control" id="FechaGraduacion" name="FechaGraduacion"   value="<?php echo $titulos->FechaGraduacion; ?>" required>
                            </div>
                            <br>
                              </div>
                              <br> <br>

                            <div class="form-group">
                                <label for="carrera"> Carrera:</label>
                                <select name="carrera" id="carrera" class="form-control" required="required">
                                    <option value="">Seleccione...</option>
                                    <?php foreach ($carreras as $carrera) :?>
                                        <?php if($carrera->Id_Carrera == $titulos->Id_Carrera):?>
                                            <option value="<?php echo $carrera->Id_Carrera;?>" selected><?php echo $carrera->Carrera ?></option>
                                        <?php else:?>
                                            <option value="<?php echo $carrera->Id_Carrera;?>"><?php echo $carrera->Carrera ?></option>
                                        <?php endif; ?>

                                    <?php endforeach;?>
                                </select>
                            </div>
<br>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">Guardar</button>
                            </div>
                        </form>
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
