<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
  <meta charset="UTF-8">
  <title>Credito S.A.</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!--================================
  =            Plugin CSS            =
  =================================-->
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Diseño login -->
  <link rel="stylesheet" href="vistas/dist/css/login.css"/>
  <!-- Diseño menu -->
  <link rel="stylesheet" href="vistas/dist/css/menu.css"/>
  <!--=====================================
  =            Plugin JS           =
  ======================================-->

<!-- jQuery 3 -->
<script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="vistas/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vistas/dist/js/demo.js"></script>
</head>
<?php 

  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {
echo '
<body  class="hold-transition sidebar-mini skin-blue login-page">
  
    <div class="wrapper">';
    /*================================
    =            Cabecera            =
    ================================*/
    
    include "modulos/cabecera.php";
    
    /*=====  End of Cabecera  ======*/
    /*============================
    =            menu            =
    ============================*/
    
    include "modulos/menu.php";
    
    /*=====  End of menu  ======*/
    /*=================================
    =            contenido            =
    =================================*/
    if ($_SESSION["rolUsuario"] == "Administrador") {
      if(isset($_GET["ruta"])){
      if ($_GET["ruta"] == "contenido" ||
        $_GET["ruta"] == "usuarios" ||
        $_GET["ruta"] == "frmPrevalidador" ||
        $_GET["ruta"] == "salir"
    ) {
        include "modulos/".$_GET["ruta"].".php";
      }else{
        include "modulos/404.php";
      }
    }else{
        include "modulos/inicio.php";
      }
    }else if($_SESSION["rolUsuario"] == "Analista"){
      if(isset($_GET["ruta"])){
      if ($_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "salir"
    ) {
        include "modulos/".$_GET["ruta"].".php";
      }else{
        include "modulos/404.php";
      }
    }else{
        include "modulos/inicio.php";
      }
    }
    
    
    /*=====  End of contenido  ======*/
    /*==============================
    =            FOOTER            =
    ==============================*/
    
    include "modulos/footer.php";
    echo '</div>'; 
    
    /*=====  End of FOOTER  ======*/
  }else{
    /*================================
    =            CABECERA            =
    ================================*/
    //style="background-color: rgba(45, 59, 88, 1);"
    echo '
<body  class="hold-transition sidebar-mini" id="bodyInicio">
    <div class="wrapper">
    <header class="main-header" >
    <nav class="navbar navbar-static-top">
      
        <a href="#" class="sidebar-toggle " data-toggle="push-menu" role="button">
        <span class="sr-only" style="background-color: #fff">Toggle navigation</span>
        <span class="icon-bar" ></span>
        <span class="icon-bar" ></span>
        <span class="icon-bar" ></span>
        </a>
      
      <div style="margin-left: 35%">
        <a href="inicio">
          <img src="vistas/img/Credito-logo.png" alt="credito-logo" class="mg-responsive" style="height: 50px;"/>
        </a>        
      </div>
    </nav>
  </header>';
    /*=====  End of CABECERA  ======*/
    
    /*=======================================
    =            LOGIN IZQUIERDA            =
    =======================================*/
    
    echo '
    <div class="row">
      <aside class="main-sidebar" style="top: 50px;padding-top: 10px;">
        <section class="sidebar">
        ';
        include "vistas/modulos/menu.php";
        //include "vistas/modulos/login.php";
    echo'
      </section>
      </aside>';
    
    /*=====  End of LOGIN IZQUIERDA  ======*/

echo '<div class="col-md-11">';
    
    /*=================================
    =            contenido            =
    =================================*/
    if(isset($_GET["ruta"])){
      if ($_GET["ruta"] == "inicio" ||
        
        $_GET["ruta"] == "frmPrevalidador" ||
        $_GET["ruta"] == "salir"
    ) {
        include "modulos/".$_GET["ruta"].".php";
      }else{
        include "modulos/404.php";
      }
    }else{
        include "modulos/inicio.php";
      }
      /*======================================
      =            MODAL DE LOGIN            =
      ======================================*/
      
      include "vistas/modulos/login.modal.php";
      
      /*=====  End of MODAL DE LOGIN  ======*/
      
        
    /*=====  End of contenido  ======*/
    
  /*==============================
  =            FOOTER            =
  ==============================*/
  include "vistas/modulos/footer.php";
  /*=====  End of FOOTER  ======*/
  echo '
</div>
  </div>
</div>';
    echo '</div>';
  }
   ?>
</body>
</html>