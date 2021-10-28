   <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Usuarios
                <small>LISTADO</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="<?php echo base_url();?>mantenimiento/estudiantes/add" class="btn btn-prymary btn-flat"><span class="fa fa-plus"></span>Agregar Nuevo Estudiante</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered btn-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBREs</th>
                                            <th>APELLIDOS</th>
                                            <th>TELEFONO</th>
                                            <th>EMAIL</th>
                                            <th>USUARIO</th>
                                            
                                            <!-- <th>INGRESO</th> -->
                                             <!--HAY QUE ARREGLAR EL FORMATO DE LA TABLA PARA QUE SE PUEDAB VISUALIZAR TODOS LOS CAMPOS DE LA TABLA LIBRO -->                                       
                                            <th>OPCIONES</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($usuarios)):?>
                                            <?php foreach ($usuarios as $usr):?> 
                                        <tr>
                                            <td><?php echo $usr->id;?></td>
                                            <td><?php echo $usr->nombres;?></td>
                                            <td><?php echo $usr->apellidos;?></td>
                                            <td><?php echo $usr->telefono;?></td>
                                            <td><?php echo $usr->email;?></td>
                                            <td><?php echo $usr->username;?></td>
                                            <!--<td><?php echo $usr->password;?></td>-->
                                            <!--<td><?php echo $usr->f_ingreso;?></td> -->
                                            <td>
                                            <div class="btn-group">                               
                                                    <!--<button type="button" class="btn btn-info btn-view-usuarios" data-toggle="modal" data-target="#modal-default" value="<?php echo $usr->id;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>-->

                                                    <a href="<?php echo base_url()?>mantenimiento/estudiantes/edit/<?php echo $usr->id;?>" class="btn btn-warning"><span 
                                                    class="fa fa-pencil"></span></a>

                                                    <a href="<?php echo base_url();?>mantenimiento/estudiantes/delete/<?php echo $usr->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                            <?php endforeach?>
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
        <h4 class="modal-title">Informacion de usuarios</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
