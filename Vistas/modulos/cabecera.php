<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ACI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Con</b>Ingles</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
       
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <?php
               if($_SESSION["foto"] == ""){
                 echo '<img >';
               }else {
                 echo '<img'.$_SESSION["foto"].'>';
               }
              
              ?>
              <img src="http://localhost/ConInglesAlumnos/vistas/img/defecto.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION["nombre"]; echo""; echo $_SESSION["apellido"]; ?></span>
            </a>
            <ul class="dropdown-menu">
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">

                <?php 
                  echo ' <a href="http://localhost/ConInglesAlumnos/perfil-'.$_SESSION["rol"].'" class="btn btn-primary btn-flat">Perfil</a>';
                
                ?>
                 
                </div>
                <div class="pull-right">
                  <a href="salir" class="btn btn-danger btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          </ul>
      </div>
    </nav>
  </header>
