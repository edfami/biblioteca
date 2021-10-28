<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Usuarios
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

                                <form action="<?php echo base_url();?>mantenimiento/usuarios/update" method="POST">

                            <input type="hidden" value="<?php echo $usuarios->id;?>" name="id">

                                    <div class="form-group">
                                        <label form="nombre">NOMBRE: </label>
                                        <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $usuarios->nombres?>">
                                    </div>

                                    <div class="form-group">
                                        <label form="anho">APELLIDOS:</label>
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $usuarios->apellidos?>">
                                    </div>

                                    <div class="form-group">
                                        <label form="nombre">TELEFONO:</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $usuarios->telefono?>">
                                    </div>

                                    <div class="form-group">
                                        <label form="nombre">EMAIL:</label>
                                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $usuarios->email?>">
                                    </div>

                                    <div class="form-group">
                                        <label  form="nombre">USUARIO:</label>
                                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $usuarios->username?>">
                                    </div>

                                    <!--<div class="form-group">
                                        <label form="nombre">PASSWORD:</label>
                                        <input type="text" class="form-control" id="password" name="password" value="<?php echo $usuarios->password?>">
                                    </div>-->
                                    <div class="form-group">
                                        <label for="nombre">ROL:</label>
                                        <input type="text" class="form-control" id="rol_id" name="rol_id" value="<?php echo $usuarios->rol_id?>">
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
