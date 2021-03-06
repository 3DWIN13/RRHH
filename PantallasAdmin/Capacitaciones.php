<!--
  `Nombres`, `Fechas`, `Duracion`, `Horarios`, `Descripciones`, `Fotos`
-->

<?php

require('../librerias/motor.php');



if (isset($_POST['Guardar'])) {
  # code...
  $e= new stdClass;
 

  $e->Nombres = $_POST['Nombres'];
  $e->Fechas = $_POST['Fechas'];
  $e->Duracion = $_POST['Duracion'];
  $e->Horarios = $_POST['Horarios'];
  $e->Descripciones = $_POST['Descripciones'];

  /* guardamos imagenes */
  $nombreimg=$_FILES['Fotos']['name'];
  $archivo = $_FILES['Fotos']['tmp_name'];

  $ruta = "ImagenesBD/ImagenesCP";

  $ruta = "../".$ruta."/".$nombreimg;

  move_uploaded_file($archivo,$ruta);
  $e->Fotos = $ruta;

  GuardarCapacitaciones($e);

}

if (isset($_POST['borrar'])) {
  # code...
  BorrarCapacitaciones($_POST["borrar"]); 

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
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
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
          <li>
            <a href="Empleado.php">
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
          <li class="active ">
            <a href="#">
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
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              
            </form>
            <ul class="navbar-nav">

             

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
            <h5 class="card-title">Agregar Capasitaciones</h5>
          </div>
          
          <div class="card-body">
            <form method="POST" action="#" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-5 pr-1">
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="Nombres" id="Nombres" class="form-control" placeholder="Nombre del evento"
                      value="">
                  </div>
                </div>
                <div class="col-md-3 px-1">
                  <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" name="Fechas" id="Fechas" class="form-control" placeholder="Fecha de inicio"
                      value="">
                  </div>
                </div>
                <div class="col-md-4 pl-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Duracion</label>
                    <input type="text" required name="Duracion" id="Duracion" class="form-control"
                      placeholder="Duracion del evento">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Horario</label>
                    <input type="text" required class="form-control" name="Horarios" id="Horarios" placeholder="horario de asistensia"
                      value="">
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" name="Fotos" lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar imagen</label>
                  </div>
                </div>
                <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descripcion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="Descripciones" rows="5"></textarea>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" name="Guardar" id="Guardar" class="btn btn-primary btn-round">Agregar
                    Capasitacion</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- fin formulario agregar empleados -->
      <form action="#" method="post">
        <div class="content">
          <div class="col-md-8">

          <?php
          
          $la = MostrarCapacitaciones();
          
          foreach ($la as $key) {
            # code...
          ?>

            <div class="card card-user">
              <div class="card-header">
                <div class="row">
                <h5 style="margin-left: 2%;" class="card-title"><?= $key['Nombres'] ?></h5>
               
              </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5">
                    <img src="<?= $key['Fotos'] ?>" alt="#" width="260" height="165">
                  </div>

                  <div class="col-md-5 px-1 py-4">
                    <div class="form-group">
                      <?= $key['Descripciones'] ?>. <br /> Esta Capasitacion iniciara <?= $key['Fechas']?> y  tendra una duracione de <?= $key['Duracion'] ?> 
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class= "col-md-6">
                  <button class="btn btn-primary" type="submit" name="borrar" id=" borrar"  value="<?= $key['id'] ?>"  style="">x</button>
                  </div>
                  <div class="col-md-6 py-3 px-5">
                  <div style="margin-left:50%" class="form-group">
                   Participantes <strong> <?= $key['Inscritos'] ?> </strong>
                  </div>
                </div>
                </div>





              </div>
            </div>

          <?php } ?>

          </div>
        </div>
    </div>

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
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function () {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>