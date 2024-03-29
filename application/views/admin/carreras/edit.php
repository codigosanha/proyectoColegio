
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Carreras
        <small>Editar</small>
        </h1
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
                        <form action="<?php echo base_url();?>mantenimiento/Carreras/update" method="POST">

                            <input type="hidden" value="<?php echo $car->Id_Carrera;?>" name="idCarrera">
                            <div class="form-group <?php echo !empty(form_error("Carrera"))? 'has-error': ''; ?>">
                                <label for="nombre">Carrera:</label>
                                <input type="text" class="form-control" id="Carrera" name="Carrera"
                                 value="<?php  echo !empty(form_error("Carrera"))? set_value("Carrera"):$car->Carrera;?>">
                                     <?php echo form_error("Carrera", "<span class='help_block'>", "</span>"); ?>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-flat">Guardar</button>
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
