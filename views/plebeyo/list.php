
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                LIBROS
                <small>LISTADO</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                        
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="example1" class="table table-bordered btn-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOMBRE_LIBRO</th>
                                            <th>AÑO</th>
                                            <th>AUTOR</th>
                                            <th>EDITORIAL</th>
                                            <th>CATEGORIA</th>
                                            <!-- <th>INGRESO</th> -->
                                             <!--HAY QUE ARREGLAR EL FORMATO DE LA TABLA PARA QUE SE PUEDAB VISUALIZAR TODOS LOS CAMPOS DE LA TABLA LIBRO -->                                       
                                            <th>OPCIONES</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(!empty($libros)):?>
                                            <?php foreach ($libros as $libro):?> 
                                        <tr>
                                            <td><?php echo $libro->codigo;?></td>
                                            <td><?php echo $libro->nombre_libro;?></td>
                                            <td><?php echo $libro->anho;?></td>
                                            <td><?php echo $libro->autor;?></td>
                                            <td><?php echo $libro->editorial;?></td>
                                            <td><?php echo $libro->categoria;?></td>
                                            <!--<td><?php echo $libro->f_ingreso;?></td> -->
                                            <td>
                                            <div class="btn-group">                               
                                                    <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $libro->codigo;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>

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
        <h4 class="modal-title">Informacion de la Libros</h4>
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
