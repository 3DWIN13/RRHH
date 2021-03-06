<?php
require('librerias/motor.php');
session_start();
/* if (!empty($_SESSION['user_id'])) {
  # code...
  header("Location: servicios.html");
} */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECURSOS HUMANOS</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
    <link rel="stylesheet" href="design.css">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    
    
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
       
        <div class="social-bar">
          <a href="tel:8497635975" class="icon icon-phone" target="_blank"></a>
          <a href="https://www.facebook.com/Empleos-Disponibles-101515074811719/" class="icon icon-facebook2" target="_blank"></a>
          <a href="https://www.youtube.com/channel/UCvGbc_ErQWdAMglwJslgVQA" class="icon icon-play" target="_blank"></a>
          <a href="https://www.instagram.com/totalambitionto/" class="icon icon-instagram" target="_blank"></a>
        </div>
        <a href="https://api.whatsapp.com/send?phone=18296929207&text=Enviar%20mensaje%20a%20la%20empresa%20de%20Recursos%20Humanos%20TOTAL%20AMBITION%20TO%20LEARN." target="_blank"><button id="startChat" class="buttonReady" style="background-color: rgb(187, 26, 26);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                     <g id="chaticon">
                       <path d="M484.5,102h-51v229.5H102v51c0,15.3,10.2,25.5,25.5,25.5H408l102,102V127.5C510,112.2,499.8,102,484.5,102z M382.5,255    V25.5C382.5,10.2,372.3,0,357,0H25.5C10.2,0,0,10.2,0,25.5v357l102-102h255C372.3,280.5,382.5,270.3,382.5,255z" style="fill: rgb(241, 242, 235);"></path>
                     </g>
                   </svg></button></a>       <!-- DIV PRINCIPAL -->
        <div id="primero" class="container">
      <header class="blog-header py-3">
        
        <!-- LOGO -->
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <img src="img/logo.jpg"  height="150" width="300" alt="">
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
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Search" style="width: 250px; height: 30px; border-radius: 10px;">
           
            <a href="Index.html" class="text-mute">INICIO</a>&nbsp;|&nbsp;<a href="contacto.html" class="text-mute">CONTACTOS</a>&nbsp;|&nbsp;<span>LOGIN</span>
            </div>
          </div>
        </div>
      </header>
      <div id="barra" class="nav-scroller py-1 mb-2">
        <nav class="nav nav-pills nav-justified">
          <a class="p-2 text-white" style="margin-right: 1%; font-family: Georgia;" href="Index.html">INICIO</a>
         
          <a class="nav-link dropdown-toggle"  style="margin-right: 1%; color: white; font-family: Georgia;" href="quienes_somos.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            SOBRE NOSOTROS
          </a>
          <div class="dropdown-menu" style="background: #852C84;" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item-354 p-2 text-white" style="font-family: Georgia;" href="quienes_somos.html">¿QUIÉNES SOMOS?</a>
            
              <br></br>
            <a class="dropdown-item-358 p-2 text-white" style="font-family: Georgia;" href="quienes_somos.html">HISTORIA</a>
          <br></br>
            <a class="dropdown-item-359 p-2 text-white"style="font-family: Georgia;"  href="quienes_somos.html">INTERÉS</a>
          </div>
        
          <div>
            <a class="nav-link dropdown-toggle"  style="margin-right: 1%; color : white; font-family: Georgia;" href="servicios.html" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              SERVICIOS
            </a>
          <div class="dropdown-menu" style="background: #852C84;" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item-354 p-2 text-white" style="font-family: Georgia;" href="servicios.html">CAPACITACIONES</a>
            <br></br>
            <a class="dropdown-item-358 p-2 text-white" style="font-family: Georgia;" href="servicios.html">VACANTES</a>
            <br></br>
            <a class="dropdown-item-359 p-2 text-white"style="font-family: Georgia;" href="serivcios.html">ÁREAS DE TRABAJO</a>
          </div>
        </div>
        <a class="p-2 text-white" style="margin-right: 1%; font-family: Georgia;" href="#noticia">NOTICIAS</a>
          <a class="p-2 text-white" style="margin-right: 1%; font-family: Georgia;" target="_blank" href="transparencia.html">TRANSPARENCIA</a>
          <div>
            <a class="nav-link dropdown-toggle"  style="margin-right: 1%; color : white; font-family: Georgia;" href="servicios.html" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              DOCUMENTOS DESCARGABLES
            </a>
          <div class="dropdown-menu" style="background: #852C84;" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item-354 p-2 text-white" style="font-family: Georgia;" target="_blank" href="Manual de usuario.pdf">MANUAL DE USUARIO</a>
           
            <br></br>
            <a class="dropdown-item-358 p-2 text-white" style="font-family: Georgia;"  target="_blank" href="RECOMENDACIONES DEL EQUIPO.pdf">RECOMENDACIONES DEL EQUIPO</a>
           
          </div>
        </div>         
          
          </div>

          <?php
          if (isset($_POST['login'])) {
            # code...

          $enter = Login($_POST['user']);
          if($enter->admin==1 && $enter->pass==$_POST['pass']){
            echo'<script> location.replace("PantallasAdmin/Empleado.php"); </script>';
            
          }else if(count($enter)>0 && $enter->pass == $_POST['pass']) {
            # code...
            $_SESSION['user_id']= $enter->id;
            //echo $_SESSION['user_id'];
            echo'<script> location.replace("PantallaEmpleado.php"); </script>';
          
        }else{
          echo' <div class="alert alert-danger alert-dismissible fade show">
          <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="nc-icon nc-simple-remove"></i>
          </button>
          <span><b> Error - </b> Ingrese los datos correctamente</span>
        </div> ';
        }

          }
          ?>

         <br>
     
       <div class="container login">
         <h3 style="font-family: Georgia; color: #852C84;">Te damos la BIENVENIDA</h3> 
         <img src="img/iconos.svg"  style="margin: -20px -50px; 
         position:relative;
         top:50%; 
         left:55%;" height="45" width="45" alt="">
<p>Para continuar, ingresa tus informaciones.</p>
<form action="#" method="post">
<input class="form-control mr-sm-2" type="text" name="user" id="user" placeholder="Usuario..." aria-label="Search" style="width: 358px; height: 30px; border-radius: 10px;">
<br>
<input class="form-control mr-sm-2" type="password" name="pass" id="pass" placeholder="Contraseña..." aria-label="Search" style="width: 358px; height: 30px; border-radius: 10px;">
<br>
<br>
<br>
<br>
<button class="submit button" name="login" id="login" type="submit">Iniciar sesión</button>
       </div>
      </form>
    </div>
</div>  
  
<style>
  p{
    text-align: center;
  }
  .button {
    width: 130px;
    height: 45px;
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
  align-items: center;
  margin: -20px -50px; 
    position:relative;
    top:50%; 
    left:45%;
    border-radius: 5px;
}
</style>        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>