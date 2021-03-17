<!DOCTYPE html>
<!--
Esta es una página de plantilla de inicio. Utilice esta página para comenzar su nuevo proyecto desde
cero. Esta página elimina todos los enlaces y solo proporciona el marcado necesario.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo NOMBRESITIO; ?></title>

  <!--Fuente de Google: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo RUTA_URL?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo RUTA_URL?>/dist/css/veums.min.css">
  <link rel="stylesheet" href="<?php echo RUTA_URL?>/css/estilos.min.css">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php require RUTA_APP . '/vistas/inc/navbar.php'; ?>
  <!-- /.navbar -->
  <!-- Contenedor de la barra lateral principal -->
  <?php require RUTA_APP . '/vistas/inc/aside.php'; ?>
 <!-- /.aside -->
  <!-- Envoltorio de contenido. Contiene contenido de la página -->
  <div class="content-wrapper">
    <!-- Encabezado de contenido (encabezado de página) -->
    <div class="content-header">
          
      <div class="container-fluid">
      <section>
        <div class="contenedor">
        <img src="<?php echo RUTA_URL?>/dist/img/banner1.jpg" class="img-fluid " alt="...">
        <h1 class="titulo-imagen">Veums Desarrollo web</h1>
  
        </div>
  </section>
        <div class="row mt-4 mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-center">Veums Desarrollo web</h1>
            <div class="" >«En "Veums Desarrollo Web" diseñamos y desarrollamos sitios web a medida de tus necesidades así como también optimizamos el que ya tienes.»</div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.encabezado de contenido -->
    <!-- Contenido principal-->
   <section class="content">
      <div class="container-fluid">
        <!-- Cajas pequeñas (caja de estadísticas)-->
        <div class="row">
        <div class="row">
          <div class="col-lg-4 col-12 col-md-6 col-sm-6">
            <!-- caja pequeña -->
            <div class="small-box bg-info">
              <div class="inner">
              <h2 class="text-center">Sitio Personal</h2>
                <img src="<?php echo RUTA_URL?>/img/SitioPersonal.jpg" class="img-thumbnail" alt="...">
                <h5 class="text-center">Ideal para sitios web personales</h5>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Más informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12 col-md-6 col-sm-6">
            <!-- caja pequeña -->
            <div class="small-box bg-success">
              <div class="inner">
              <h2 class="text-center">Tienda Online</h2>
                <img src="<?php echo RUTA_URL?>/img/ecommerce1.png" class="img-thumbnail" alt="...">
                <h5 class="text-center">Sitio web para el que quiera vender sus productos Online</h5>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Más informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12 col-md-6 col-sm-6">
            <!-- caja pequeña -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h2 class="text-center">Hoteles y Cabañas</h2>
                <img src="<?php echo RUTA_URL?>/img/Hoteles5.jpg" class="img-thumbnail" alt="...">
                <h5 class="text-center">Si lo que buscas es administrar tus recervas desde un solo lugar, esto es para vos</h5>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Más informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12 col-md-6 col-sm-6">
            <!-- caja pequeña -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h2 class="text-center">Tienda de Moda</h2>
                <img src="<?php echo RUTA_URL?>/img/TiendaModa.jpg" class="img-thumbnail" alt="...">
                <h5 class="text-center">Tienda de moda, ideal para ofrecer tus propios productos</h5>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Más informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12 col-md-6 col-sm-6">
            <!-- caja pequeña -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h2 class="text-center">Hogar y decoracion</h2>
                <img src="<?php echo RUTA_URL?>/img/decoradores.png" class="img-thumbnail" alt="...">
                <h5 class="text-center">Ideal para mostrar  a tus clientes los trabajos realizados o darles ideas de como decorar su hogar</h5>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Más informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-12 col-md-6 col-sm-6">
            <!-- caja pequeña -->
            <div class="small-box bg-danger">
              <div class="inner">
              <h2 class="text-center">Fotografia</h2>
                <img src="<?php echo RUTA_URL?>/img/Fotografia.jpg" class="img-thumbnail" alt="...">
                <h5 class="text-center">Sitio web muy dinamico para mostrar lo que haces con tus fotos</h5>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Más informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        </div>
        <!-- /.row -->
        <div class="my-5 text-info">
            <h3>Si deseas más información de como obtener nuestros servicios utiliza nuestro formulario de contacto.</h3>
          </div>
        <div class="row">
        <div class="col-12 col-md-8 col-lg-8">
        <?php require RUTA_APP . '/vistas/inc/contacto.php'; ?>
        </div>
         <!-- /.col -->
         <div class="col-12 col-md-4 col-lg-4">
         <h4 class="text-center">Publicidad</h4>
          
                    </div>
        </div>
      <!-- /.col -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.Contenido principal -->
  </div>
  <!-- /.envoltorio de contenido -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
