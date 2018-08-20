<!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sucursales
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-home"></i> inicio</a></li>
        <li class="active">Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tabla Sucursales</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
        <!--======================================
          =            TABLA SUCURSALES            =
        =======================================-->
        <table class="table table-bordered table-striped dt-responsive tablas">
         
          <thead style="background-color: #0c5078;color: #ffffff;">
         
            <tr>
           
              <th style="width:10px">#</th>
              <th>Nombre Usuario</th>
              <th>Contraseña</th>
              <th>Estado</th>
              <th style="width: 20px">Editar</th>
              <th style="width: 20px">Eiminar</th>


            </tr> 

          </thead>

          <tbody>
          
            <?php 
              $datoSucursal = ControladorSucursal::ctrSucursal();

              foreach ($datoSucursal as $c => $dato) {
                echo '<tr>
                <td>'.($c+1).'</td>
                <td>'.$dato["USUNOMBRE"].'</td>
                <td>'.$dato["USUCONTRASENA"].'</td>
                <td>'.$dato["USUESTADO"].'</td>
                <td><button type="button" class="btn btn-block btn-primary"><i class="fa fa-pencil-square-o"></i></button></td>
                <td><button type="button" class="btn btn-block btn-danger"><i class="fa fa-trash-o"></i></button></td></tr>';
              }
             ?>

          </tbody>
        </table>
        <!--====  End of TABLA SUCURSALES  ====-->          
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->