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
        <img src="<?php echo RUTA_URL?>/dist/img/banner3.jpg" class="img-fluid " alt="...">
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
          <div class="col-lg-6 col-12 col-md-6">
            <!-- caja pequeña -->
            <div class="card servicio">
              <div class="card-header text-center">
                <h3><i class="fas fa-palette" style="color:#ff8000; font-weight:50px;"></i> Diseñamos tu Web</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p class="h5">Diseñamos tu sitio web de acuerdo al modelo que tú elijas, para tener una correcta integración y optimización de una WEB. Te presentamos como se verá en pantalla, optimizamos tu sitio web para que sea Responsivo, con esto nos aseguramos que se vea correctamente en cualquier dispositivo.</p>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-12 col-md-6">
            <!-- caja pequeña -->
            <div class="card ">
              <div class="card-header text-center">
                <h3 class=""><i class="fas fa-laptop-code" style="color:#ff8000; font-weight:50px;"></i> Desarrollamos tu Web</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p class="h5">A partir del un diseño que tú hayas escogido, nos encargaremos de plasmarlo en código para que cualquier navegador pueda leerlo. <br>
              Optimizaremos para que sea visible en dispositivos Móviles y Tablets</p>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-12 col-md-6">
            <!-- caja pequeña -->
            <div class="card ">
              <div class="card-header text-center">
                <h3 class=""><i class="fas fa-arrow-alt-circle-up" style="color:#ff8000; font-weight:50px;"></i> Posicionamiento SEO</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p class="h5">Posicionamiento Web. Consigue que tu web esté en los primeros resultados de búsqueda de Google con tu palabra clave. <br>
              Analizamos tu sitio web usando todas las herramientas que existen en el mercado, así sabremos lo que le hace falta y aplicaremos los cambios, así te posicionaran mejor los buscadores y la gente te podrá encontrar fácilmente. Llevando mucho más trafico a tu sitio web</p>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-12 col-md-6">
            <!-- caja pequeña -->
            <div class="card ">
              <div class="card-header ">
                <h3 class=""><i class="fas fa-money-bill-wave" style="color:#ff8000; font-weight:50px;"></i> Campañas de publicidad</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <p class="h5">Hacemos campañas de publicidad usando las herramientas que nos brindan Google y Facebook, para que solo se muestre nuestro anuncio a personas que han buscado o están buscando algo relacionado con nuestro sitio web.<br>
              De esta forma optimizamos que el 90% de las personas que visitan el sitio hagan una conversión (compra, suscripción, etc.)
            </p>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- ./col -->
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
  <!-- Main Footer -->
  <?php require RUTA_APP . '/vistas/inc/footer.php'; ?>
