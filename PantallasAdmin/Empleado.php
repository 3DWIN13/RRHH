<!--
  
-->

<?php

require('../librerias/motor.php');



if (isset($_POST['Guardar'])) {
  # code...
  $e= new stdClass;
 

  $e->Nombres = $_POST['Nombres'];
  $e->Apellidos = $_POST['Apellidos'];
  $e->Telefonos = $_POST['Telefonos'];
  $e->Correos = $_POST['Correos'];
  $e->Puestos = $_POST['Puestos'];

  /* guardamos imagenes */
  $nombreimg=$_FILES['Fotos']['name'];
  $archivo = $_FILES['Fotos']['tmp_name'];

  $ruta = "ImagenesBD";

  $ruta = "../".$ruta."/".$nombreimg;

  move_uploaded_file($archivo,$ruta);
  $e->Fotos = $ruta;

  GuardarEmpleados($e);

  $parte1 = substr($_POST['Apellidos'], 0, 1);
  $parte2 = $_POST['Nombres'];
  $user = $parte2.$parte1;
  $pass = $user;

  $a = new stdClass;
  $a->user=$user;
  $a->pass = $pass;
  $a->admin = 0;

  GuardarDatosEntradas($a);
}

if (isset($_POST['delete'])) {
  # code...
  BorrarEmpleados($_POST["delete"]); 


  $parte1 = substr($_POST['apellido'], 0, 1);
  $parte2 = $_POST['nombre'];
  $user = $parte2.$parte1;

  BorrarDatosEntradas($user);
}

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
          <li class="active ">
            <a href="#">
              <i class="nc-icon nc-single-02"></i>
              <p>Empleados</p>
            </a>
          </li>
          <li>
            <a href="Reportes.php">
              <i class="nc-icon nc-bell-55"></i>
              <p>Reportes</p>
            </a>
          </li>
          <li>
            <a href="Capacitaciones.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Capacitaciones</p>
            </a>
          </li>
          <li>
            <a href="../PantallaEmpleado.php">
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
            <h5 class="card-title">Agregar Empleado</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="#" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-5 pr-1">
                  <div class="form-group">
                    <label>Puesto</label>
                    <input type="text"  name="Puestos" id="Puestos" class="form-control"  placeholder="Desarrollador" value="">
                  </div>
                </div>
                <div class="col-md-3 px-1">
                  <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" name="Telefonos" id="Telefonos" class="form-control" placeholder="809-646-6546" value="">
                  </div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="email" required name="Correos" id="Correos" class="form-control" placeholder="example@tal.com">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" required class="form-control" name="Nombres" id="Nombres" placeholder="Name" value="">
                  </div>
                </div>
                <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" required class="form-control" name="Apellidos" id="Apellidos" placeholder="Last Name" value="">
                  </div>
                </div>
              </div>
              
              
              <div class="custom-file">
                <input type="file"  class="custom-file-input" id="customFileLang" name="Fotos"  lang="es">
                <label class="custom-file-label"  for="customFileLang">Seleccionar imagen</label>
              </div>
                
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" name="Guardar" id="Guardar" class="btn btn-primary btn-round">Agregar Empleado</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

 <!-- fin formulario agregar empleados -->
<form action="#" method="post">
      <div class="content">
        <div class="row">
        <?php
        $eso = MostrarEmpleados();

foreach ($eso as $key) {
  # code...
        ?>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <img src="<?= $key['Fotos'] ?>" alt="">
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category"><?= $key['Nombres'] ?></p>
                      <p class="card-title"><?= $key['Apellidos'] ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-address-card"></i>
                  <?= $key['Correos'] ?>
                  <button class="btn btn-link" type="submit" name="delete" id="delete" value="<?= $key['id'] ?>" style="margin-left: 20px" ><i class="fa fa-trash-o"></i></button>
                </div>
               <input type="hidden" name="nombre" id="nombre" value="<?= $key['Nombres'] ?>">
               <input type="hidden" name="apellido" id="apellido" value="<?= $key['Apellidos'] ?>">
              </div>
            </div>
          </div>
<?php } ?>        
</form>
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
