<header class="main-header">
 <!--=====================================
  LOGOTIPO
 =====================================-->
 
   <a href="inicio" class="logo">
    <!-- logo mini -->
    <span class="logo-mini">
      <img src="vistas/img/Credito-logo-mini-b.png" class="img-responsive" style="width: 38px;margin-left: 5px">
    </span>

    <!-- logo normal -->
  <div  align="center" style="height: 50px;">
    <span class="logo-lg">
      <img src="vistas/img/Credito-logo-b.png" class="img-responsive" style="height: 45px">
    </span>
  </div>

  </a>

 <!--=====================================
  BARRA DE NAVEGACIÓN
 =====================================-->
 <nav class="navbar navbar-static-top" role="navigation">

  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span> 
    </a>
    <div class="row">
      <div class="col-md-9 text-center">
        <h2 style="height: 0px;color: #ffffff;font-family: fantasy;margin-top: 5px;">Panel de <?php  //var_dump($_SESSION)
        echo $_SESSION["rolUsuario"]; ?></h2>
      </div>
    
    <!-- perfil de usuario -->
    <div class="col-md-2">
      <div class="navbar-custom-menu">
        
      <ul class="nav navbar-nav">
        
        <li class="dropdown user user-menu">
          
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            
            <img src="vistas/img/anonimo.png" class="user-image">

            <span class="hidden-xs"><?php echo $_SESSION["nombreUsuario"];?></span>

          </a>

          <!-- Dropdown-toggle -->

          <ul class="dropdown-menu">  
            <li class="user-header">
              
            </li>
            <li class="user-body">
              
            </li>
            <li class="user-footer">
              <div class="pull-right">
                <a href="salir" class="btn btn-default btn-flat">Salir</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    </div>

    </div>
 </nav>
</header>