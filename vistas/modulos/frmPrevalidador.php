 <div class="content-wrapper">
    <div class="container" style="width: auto">
    <section class="content-header">
      <h1>
        Simula tu crédito
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active">Crédito</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" align="center">
        <div class="box box-info">
            
            <!-- /.box-header -->
            <div class="box-body">
              
                <form role="form" method="post" enctype="multipart/form-data">
                <!-- text input -->
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ingresar Nombre Completo">
                </div>
               
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ingresar Dirección">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ingresar Teléfono">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Escribir Ingresos Mensuales">
                </div>   
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ingresar Egresos Mensuales">
                </div>  
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Ingresar Monto">
                </div>                             
                
                <!-- select -->
                <div class="form-group">
                  <select class="form-control">
                    <option>Seleccione Cantidad de Cuotas</option>
                    <?php 
                        for ($i=1; $i <25 ; $i++) {                           
                          echo '<option>'.$i.'</option>';
                        }
                    ?>
                    
                  </select>
                </div>
               <div class="box-footer" align="center">
                  <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
      </div>

    </section>
  </div>