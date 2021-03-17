<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo RUTA_URL?>" class="brand-link">
      <img src="<?php echo RUTA_URL?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Veums Desarrollo Web</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Menú de la barra lateral -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Agregue íconos a los enlaces usando la clase .nav-icon
                con font-awesome o cualquier otra biblioteca de fuentes de iconos -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-paste"></i>
              <p>
              Contenido del Sitio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo RUTA_URL; ?>/paginas/servicios" class="nav-link">
                  <i class="far fa-keyboard nav-icon"></i>
                  <p>Servicios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo RUTA_URL; ?>/paginas/modelosWeb" class="nav-link">
                  <i class="far fa-file-code nav-icon"></i>
                  <p>Modelos de Web</p>
                  <span class="right badge badge-danger">Nuevo</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#contacto" class="nav-link">
              <i class="nav-icon fas fa-at"></i>
              <p>
              Contacto
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.Menú de la barra lateral-->
    </div>
    <!-- /.sidebar -->
  </aside>