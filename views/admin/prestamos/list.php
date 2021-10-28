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
                                <a href="<?php echo base_url();?>mantenimiento/prestamos/add" class="btn btn-prymary btn-flat"><span class="fa fa-plus"></span>Agregar Nuevo Prestamo</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered btn-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ESTUDIANTE</th>
                                            <th>FECHA INICIO</th>
                                            <th>FECHA FINAL</th>
                                            <th>MONTO POR DIA</th>
                                            <th>MONTO</th>
                                            <th>DIAS PRESTADOS</th>                                            
                                            <th>CODIGO DE LIBRO</th>
                                            <!-- <th>INGRESO</th> -->
                                             <!--HAY QUE ARREGLAR EL FORMATO DE LA TABLA PARA QUE SE PUEDAB VISUALIZAR TODOS LOS CAMPOS DE LA TABLA LIBRO -->                                       
                                            <th>OPCIONES</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($prestamo)):?>
                                            <?php foreach ($prestamo as $usr):?> 
                                        <tr>
                                            <td><?php echo $usr->codigo;?></td>                                            
                                            <td><?php echo $usr->Estudiante;?></td>
                                            <td><?php echo $usr->fecha_inicio;?></td>
                                            <td><?php echo $usr->fecha_final;?></td>
                                            <td><?php echo $usr->montoxDia;?></td>
                                            <td><?php echo $usr->monto;?></td>
                                            <td><?php echo $usr->diasPrestados;?></td>                                            
                                            <td><?php echo $usr->libro;?></td>
                                            <!--<td><?php echo $usr->f_ingreso;?></td> -->
                                            <td>
                                            <div class="btn-group">                               
                                                    <!--<button type="button" class="btn btn-info btn-view-prestamo" data-toggle="modal" data-target="#modal-default" value="<?php echo $usr->codigo;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>-->

                                                    <a href="<?php echo base_url()?>mantenimiento/prestamos/edit/<?php echo $usr->codigo;?>" class="btn btn-warning"><span 
                                                    class="fa fa-pencil"></span></a>

                                                    <a href="<?php echo base_url();?>mantenimiento/prestamos/delete/<?php echo $usr->codigo;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
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
        <h4 class="modal-title">Informacion de prestamos</h4>
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
