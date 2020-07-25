<?php

require('../librerias/motor.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="../Index.html" class="simple-text logo-normal">
          RH Company
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="Empleado.php">
              <i class="nc-icon nc-single-02"></i>
              <p>Empleados</p>
            </a>
          </li>
          <li class="active ">
            <a href="#">
              <i class="nc-icon nc-bell-55"></i>
              <p>Reportes</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="nc-icon nc-diamond"></i>
              <p>Capacitaciones</p>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="nc-icon nc-bell-55"></i>
              <p>Pagina Empleados</p>
            </a>
          </li>
         
         
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Control de administrador</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
              </form>
            <ul class="navbar-nav">
              
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <!-- formulario agregar empleados -->
<br><br><br><br>
      <div class="col-md-8">
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Filtrar Reportes</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="#" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-5 pr-1">
                <label for="inputState">Secciona</label>
      <select id="inputState" class="form-control">
        <option selected>Nombre</option>
        <option>Apellido</option>
        <option>Puesto</option>
        
      </select>
                </div>
                <div class="col-md-3 px-1">
                  <div class="form-group">
                    <label>Buscar</label>
                    <input type="text" name="buscar" id="buscar" class="form-control" placeholder="Fulanito.." value="">
                  </div>
                </div>
                <div class="col-md-4 pl-1">
                <div class="update ml-auto mr-auto">
                  <button style="margin-top:23px" type="submit" name="b" id="b" class="btn btn-primary btn-round">Buscar</button>
                </div>
                </div>
              </div>
             
            </form>
          </div>
        </div>
      </div>

 <!-- fin formulario agregar empleados -->


 <div class="content">
        <div class="row">
 
 <?php
 
 $l = MostrarEmpleados();

 foreach ($l as $key) {
   # code...
 ?>
 <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="<?= $key['Fotos'] ?>" alt="" >
              </div>
              <div class="card-body">
                <div class="author">
                  <br><br><br><br>
                  <a href="#">
                    
                    <h5 class="title"><?= $key['Nombres'] ?></h5>
                  </a>
                  <p class="description">
                  <?= $key['Apellidos'] ?>
                  </p>
                </div>
                <p class="description text-center">
                  <?= $key['Puestos'] ?> <br>
                  <?= $key['Telefonos'] ?> <br>
                  <?= $key['Correos'] ?>
                </p>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                      <h5>12<br><small>Files</small></h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <h5>2GB<br><small>Used</small></h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                      <h5>24,6$<br><small>Spent</small></h5>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
<?php } ?>
 </div>
 </div>

<!-- diviciones -->

            <div class="credits ml-auto">
              <span class="copyright">
                
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
