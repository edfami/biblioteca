
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                LIBROS
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

                                <?php if($this->session->flashdata("Error")):?>

                                <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("Error");?></p>
                                        
                                      </div>
                                  <?php endif;?>

                                <form action="<?php echo base_url();?>mantenimiento/libros/store" method="POST">

                                    <div class="form-group">
                                        <label form="nombre">NOMBRE DEL LIBROS:</label>
                                        <input type="text" class="form-control" id="nombre_libro" name="nombre_libro">
                                    </div>

                                    <div class="form-group">
                                        <label form="anho">AÑO:</label>
                                        <input type="text" class="form-control" id="anho" name="anho">
                                    </div>

                                    <div class="form-group">
                                        <label form="nombre">AUTOR:</label>
                                        <input type="text" class="form-control" id="autor" name="autor">
                                    </div>

                                    <div class="form-group">
                                        <label form="nombre">EDITORIAL:</label>
                                        <input type="text" class="form-control" id="editorial" name="editorial">
                                    </div>

                                    <div class="form-group">
                                        <label form="nombre">CATEGORIA:</label>
                                        <input type="text" class="form-control" id="categoria" name="categoria">
                                    </div>

                                    <div class="form-group">
                                        <label form="nombre">FECHA INGRESO:</label>
                                        <input type="text" class="form-control" id="f_ingreso" name="f_ingreso">
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
