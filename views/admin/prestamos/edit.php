<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Prestamos
            <small>NUEVO</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">

                        <?php if ($this->session->flashdata("Error")): ?>

                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("Error"); ?></p>

                            </div>
                        <?php endif; ?>

                        <form action="<?php echo base_url(); ?>mantenimiento/prestamos/update" method="POST">

                            <input type="hidden" value="<?php echo $prestamo->codigo; ?>" name="codigo">

                            <div class="form-group">
                                <label form="nombre">ESTUDIANTE: </label>
                                <input type="text" class="form-control" id="Estudiante" name="Estudiante" value="<?php echo $prestamo->Estudiante ?>">
                            </div>$usuarios

                            <div class="form-group">
                                <label form="anho">FECHA INICIAL:</label>
                                <input type="text" class="form-control" id="fecha_inicio" name="fecha_inicio" value="<?php echo $prestamo->fecha_inicio ?>">
                            </div>

                            <div class="form-group">
                                <label form="nombre">FECHA FINAL:</label>
                                <input type="text" class="form-control" id="fecha_final" name="fecha_final" value="<?php echo $prestamo->fecha_final ?>">
                            </div>

                            <div class="form-group">
                                <label form="nombre">MONTO POR DIA:</label>
                                <input type="text" class="form-control" id="montoxDia" name="montoxDia" value="<?php echo $prestamo->montoxDia ?>">
                            </div>

                            <div class="form-group">
                                <label  form="nombre">MONTO:</label>
                                <input type="text" class="form-control" id="monto" name="monto" value="<?php echo $prestamo->monto ?>">
                            </div>

                            <div class="form-group">
                                <label form="nombre">DIAS PRESTADOS:</label>
                                <input type="text" class="form-control" id="diasPrestados" name="diasPrestados" value="<?php echo $prestamo->diasPrestados ?>">
                            </div>
                            <div class="form-group">
                                <label for="nombre">CODIGO LIBRO:</label>
                                <input type="text" class="form-control" id="libro" name="libro" value="<?php echo $prestamo->libro ?>">
                            </div>                                                                  
                            <div class="form-group">
                                <button type="submit" class="btn btn-succes btn-flat">GUARDAR</button>
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
