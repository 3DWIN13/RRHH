<?php

require('librerias/motor.php');

if (isset($_POST['ins'])) {
    # code...
    $e = new stdClass();
//echo $_POST['ins'];
$porciones = explode(",",$_POST['ins']);
    //$e->Inscrision = 
    $inscritos= $porciones[1]+1;
    $id = $porciones[0];
    
    $e->Inscritos = $inscritos;
    $e->id= $id;
    
    Inscrision($e);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECURSOS HUMANOS</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="fuente.css">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>

<body>

    <div id="primero" class="container">
        <header class="blog-header py-3">

            <!-- LOGO -->
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <img src="img/logo.jpg" height="150" width="300" alt="">
                    <!-- NOMBRE EMPRESA-->
                </div>

                <!-- ESCUDO -->
                <div class="col-4 text-center">
                    <!--  <a class="blog-header-logo text-dark" href="#">Large</a> -->
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">

                    <!--BARRA DE NAVEGACION -->
                    <div class="form-group">
                        <img src="img/escudo.svg" alt="" height="60" width="250">
                        <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Search"
                            style="width: 250px; height: 30px; border-radius: 10px;">

                        <a href="Index.html" class="text-mute">INICIO</a>&nbsp;|&nbsp;<a href="contacto.html"
                            class="text-mute">CONTACTOS</a>&nbsp;|&nbsp;<a href="login.php" class="text-mute">LOGIN</a>
                    </div>
                </div>
            </div>

        </header>

        <div id="barra" class="nav-scroller py-1 mb-2">
            <nav class="nav nav-pills nav-justified">
                <a class="p-2 text-white" style="margin-right: 1%; font-family: Georgia;" href="Index.html">INICIO</a>

                <a class="nav-link dropdown-toggle" style="margin-right: 1%; color: white; font-family: Georgia;"
                    href="quienes_somos.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    SOBRE NOSOTROS
                </a>
                <div class="dropdown-menu" style="background: #852C84;" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item-354 p-2 text-white" style="font-family: Georgia;"
                        href="quienes_somos.html">¿QUIÉNES
                        SOMOS?</a>

                    <br></br>
                    <a class="dropdown-item-358 p-2 text-white" style="font-family: Georgia;"
                        href="quienes_somos.html">HISTORIA</a>
                    <br></br>
                    <a class="dropdown-item-359 p-2 text-white" style="font-family: Georgia;"
                        href="quienes_somos.html">INTERÉS</a>
                </div>

                <div>
                    <a class="nav-link dropdown-toggle" style="margin-right: 1%; color : white; font-family: Georgia;"
                        href="servicios.html" id="" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        SERVICIOS
                    </a>
                    <div class="dropdown-menu" style="background: #852C84;" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item-354 p-2 text-white" style="font-family: Georgia;"
                            href="servicios.html">CAPACITACIONES</a>
                        <br></br>
                        <a class="dropdown-item-358 p-2 text-white" style="font-family: Georgia;"
                            href="servicios.html">VACANTES</a>
                        <br></br>
                        <a class="dropdown-item-359 p-2 text-white" style="font-family: Georgia;"
                            href="servicios.html">ÁREAS DE
                            TRABAJO</a>
                    </div>
                </div>
                <a class="p-2 text-white" style="margin-right: 1%; font-family: Georgia;" href="#noticia">NOTICIAS</a>
                <a class="p-2 text-white" style="margin-right: 1%; font-family: Georgia;" target="_blank"
                    href="transparencia.html">TRANSPARENCIA</a>
                <div>
                    <a class="nav-link dropdown-toggle" style="margin-right: 1%; color : white; font-family: Georgia;"
                        href="servicios.html" id="" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        DOCUMENTOS DESCARGABLES
                    </a>
                    <div class="dropdown-menu" style="background: #852C84;" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item-354 p-2 text-white" style="font-family: Georgia;" target="_blank"
                            href="Manual de usuario.pdf">MANUAL DE USUARIO</a>

                        <br></br>
                        <a class="dropdown-item-358 p-2 text-white" style="font-family: Georgia;" target="_blank"
                            href="RECOMENDACIONES DEL EQUIPO.pdf">RECOMENDACIONES DEL EQUIPO</a>

                    </div>
                </div>

        </div>
        <br>
        <h2 class="blog-post-title">Capasitaciones Disponibles</h2>
  <br>
  

  
        <form action="#" method="post">
        <div class= "row">
        
           <?php
           $le = MostrarCapacitaciones();

           foreach ($le as $key) {
               # code...

           
           
           ?> 
           
            <div class="col-md-6">



                <div class="card card-user">
                    <div class="card-header">
                        <div class="row">
                            <h5 style="margin-left: 2%;" class="card-title"><?= $key['Nombres'] ?></h5>
                
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="<?php $trimmed = ltrim($key['Fotos'], " ../"); echo $trimmed;?>" alt="#" width="183" height="165">
                            </div>

                            <div class="col-md-5 px-1 py-4">
                                <div class="form-group">
                                    <?= $key['Descripciones'] ?>. <br /> Esta Capasitacion iniciara <?= $key['Fechas']?>
                                    y tendra una duracione de <?= $key['Duracion'] ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div style="margin-left:80%" class="form-group">
                                
                                <button type="submit" class="btn btn-info" name="ins" value="<?= $key['id'].','.$key['Inscritos'] ?>" >Inscribir</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- modal      
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Estas Inscrito</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <img style="margin-left:25%" src="check.gif" alt="" width="250" heigth="250">
                    </div>
                    <div class="modal-footer">
                      <button type="submit" id="ins" name="ins" class="btn btn-secondary" value="" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>    -->  
            <?php } ?>
        
            
           </div>
        </form>
        </div>
      
        

</body>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                      crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                      crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
                      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
                      crossorigin="anonymous"></script>
</html>