<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Línea Ojo de Agua - AIFA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5a3e42d574.js" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    #container-estaciones {
      width: 750px;
      height: 630px;
      border: solid 10px green;
      border-radius: 5px;
      margin-top: 10px;
      background-image: url('assets/img/lineaaifa.png');
      background-repeat: no-repeat;
      justify-content: center;
      align-items: center;
    }

    /* Estilos del contenedor principal */
    .terminalojo {
      width: 200px;
      position: relative;
      margin-left: -100px;
      margin-top: 100px;
    }

    .container-hacienda {
      width: 200px;
      position: relative;
      margin-left: px;
      margin-top: -80px;
    }

    .container-combustibles {
      width: 200px;
      position: relative;
      margin-left: 10px;
      margin-top: -70px;
    }

    .container-glorieta {
      width: 200px;
      position: relative;
      margin-left: 140px;
      margin-top: 35px;
    }

    .container-tecamac {
      width: 200px;
      position: relative;
      margin-left: 175px;
      margin-top: 105px;
    }

    .container-francisco {
      width: 200px;
      position: relative;
      margin-left: 100px;
      margin-top: 100px;
    }

    .container-ozumbilla {
      width: 200px;
      position: relative;
      margin-left: 0px;
      margin-top: 30px;
    }

    .container-loma {
      width: 200px;
      position: relative;
      margin-left: -80px;
      margin-top: 20px;
    }

    .container-terminalojo {
      width: 200px;
      position: relative;
      margin-left: -120px;
      margin-top: 80px;
    }

    .area-hover {
      width: 30px;
      height: 30px;
      background-color: #008314;
      border-radius: 100%;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      color: black;
    }

    .tarjeta {
      width: 300px;
      height: 200px;
      background-color: #008314;
      border-radius: 10px;
      overflow: hidden;
      position: absolute;
      top: 0;
      right: 100%;
      transition: transform 0.3s ease;
      transform: translateX(100%);
      display: none;
    }

    .area-hover:hover .tarjeta {
      transform: translateX(0);
      display: block;
    }

    .contenido {
      padding: 20px;
      color: white;
    }

    .titulo {
      margin-top: 0;
    }

    .modalDialog {
      position: fixed;
      font-family: Arial, Helvetica, sans-serif;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgb(0, 0, 0, 0.5);
      z-index: 99999;
      opacity: 0;
      -webkit-transition: opacity 400ms ease-in;
      -moz-transition: opacity 400ms ease-in;
      transition: opacity 200ms ease-in;
      pointer-events: none;
    }

    .modalDialog:target {
      opacity: 1;
      pointer-events: auto;
    }

    .modalDialog>div {
      width: 1000px;
      height: 700px;
      position: relative;
      margin: 40px auto;
      margin-top: 20px;
      border-radius: 10px;
      background: #eaeaea;
      transition: opacity 400ms ease-in;
    }

    .close {
      background: #ff0000;
      color: #FFFFFF;
      line-height: 25px;
      position: absolute;
      right: -12px;
      text-align: center;
      top: -10px;
      width: 30px;
      font-weight: bold;
      -webkit-border-radius: 12px;
      -moz-border-radius: 12px;
      border-radius: 12px;
      -moz-box-shadow: 1px 1px 3px #000;
      -webkit-box-shadow: 1px 1px 3px #000;
      box-shadow: 1px 1px 3px #000;
    }

    .close:hover {
      background: #8d0000;
    }

    #modal-container {
      align-items: center;
      justify-content: center;
      text-align: center;
      border: 2px black solid;
      height: 500px;
      width: 1000px;
    }

    #btnClose-ojoagua {
      border: #000 0px solid;
      border-radius: 100px;
      width: 30px;
    }
    #btnClose-esme {
      border: #000 0px solid;
      border-radius: 100px;
      width: 30px;
    }

    #tabla-modal {
      height: 200px;
      width: 620px;
      right: 100%;
      position: absolute;
      right: 10px;
      margin-top: 20px;
    }
    td{
      border-bottom: #000 2px solid;
    }
    .btn-close-modal {
      border: red;
    }
    .breadcrumbs {
  padding: 10px 0 60px 0;
  min-height: 20vh;
  position: relative;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
.breadcrumbs:before {
  content: "";
  background-color: #008314;
  position: absolute;
  inset: 0;
}
  </style>
</head>

<body class="page-about">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center" style="color: #861612;">Mexi</h1><h1 class="d-flex align-items-center">Anuncios</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
        <li style="margin-right: 20px;"><a href="index.html"><b>Inicio</b></a></li>
          <form>
            <select id="opciones" name="opciones" onchange="window.location.href=this.value" style="background-color: #008c09; color: white; border: 2px white solid; border-radius: 5px;">
              <option value="">Ir a otra línea</option>
              <option value="linea1.php">Línea 1</option>
              <option value="linea2.php">Línea 2</option>
              <option value="linea3.php">Línea 3</option>
              <option value="linea4.php">Línea 4</option>
            </select>
          </form>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-color: red;">
      <div class="container position-relative d-flex flex-column align-items-center">


      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <br>
    <center>
      <h1 style="font-size: 35px; color: #000;"><b>Escoge la estación que desees</b></h1>
      <p style="font-size: 20px"><b>Puedes visualizar los espacios disponibles haciendo click en cada estación.</b></p>    
    </center>
    <br>
    <!--Modal-->

    <div id="modal-terminal" class="modalDialog">
      <div id="modal-container">
        <button id="btnClose-ojoagua" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 style="margin-top: 5px;"><b>Espacios publicitarios estación Terminal Pasajeros</b></h3>
        <div id="img" style="height: 400px; width: 350px; border: #821831 3px solid; float: left; margin-top: 20px; background-image: url(assets/img/estacion-ojo-agua.jpg);"></div>
        <div id="tabla-modal">

          <?php
          $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = 169";
          $resultado = mysqli_query($conexion, $sql);
          if(mysqli_num_rows($resultado) <= 0){
            echo "<h2>Por el momento no hay espacios publicitarios en esta estación</h2>";
          }else{
          while ($row = mysqli_fetch_assoc($resultado)) {
          ?>
            <div id="container-info">
              <table style="background-color: #703f4b; color: #fff;">
                <td>Numero de espacio: <b><?= $row['id_espacio']; ?></b></td>
                <td>Disponibilidad <b><?= $row['disponibilidad'] ?></b>
                  <?php
                  if ($row['disponibilidad'] == 'Disponible') {
                    echo '<i class="fas fa-check-circle" style="color: green;"></i>';
                  } else if ($row['disponibilidad'] == 'Mantenimiento') {
                    echo '<i class="fas fa-check-circle" style="color: #ddd200;"></i>';
                  } else {
                    echo '<i class="fas fa-check-circle" style="color: red;"></i>';
                  }
                  ?>
                </td>

                <td>Precio Mensual <b>$<?= $row['precio'] ?></b></td>
                <td>Dimensiones <b><?= $row['dimensiones'] ?></b></td>
                <td>Ubicación <b><?= $row['ubicacion'] ?></b></td>

              </table>
            </div>

          <?php
          }
        
          ?>
          <div style="margin-top: 5px;"><i class="fa-solid fa-exclamation"><p> Puedes rentar un espacio disponible contactando al vendedor</p></i></div>
          <?php
          $sql = "SELECT * FROM vendedor";
          $resultado = mysqli_query($conexion, $sql);
          while($row = mysqli_fetch_assoc($resultado)){
          ?>
          <table>
            <tr><td><i class="fa-solid fa-user"></i> Nombre: <?= $row['nombre']?> <?= $row['apellido']?></td></tr>
            <tr><td><i class="fa-solid fa-envelope"></i> Correo: <?= $row['correo']?></td></tr>
            <tr><td><i class="fa-solid fa-phone"></i> Teléfono: <?= $row['telefono']?></td></tr>
            <tr>
                  <td><i class="fa-solid fa-location-dot"></i> Ubicación: <?= $row['ubicacion']; ?></td>
                </tr>
          </table>
          <?php
          }
        }
          ?>
        </div>
      </div>
    </div>

    <div id="modal-hacienda" class="modalDialog">
      <div id="modal-container">
        <button id="btnClose-esme" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 style="margin-top: 5px;"><b>Espacios publicitarios estación Hacienda</b></h3>
        <div id="img" style="height: 400px; width: 350px; border: #821831 3px solid; float: left; margin-top: 20px; background-image: url(assets/img/estacion-ojo-agua.jpg);"></div>
        <div id="tabla-modal">

          <?php
          $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = 168";
          $resultado = mysqli_query($conexion, $sql);
          if(mysqli_num_rows($resultado) <= 0){
            echo "<h2>Por el momento no hay espacios publicitarios en esta estación</h2>";
          }else{
          while ($row = mysqli_fetch_assoc($resultado)) {
          ?>
            <div id="container-info">
              <table style="background-color: #703f4b; color: #fff;">
                <td>Numero de espacio: <b><?= $row['id_espacio']; ?></b></td>
                <td>Disponibilidad <b><?= $row['disponibilidad'] ?></b>
                  <?php
                  if ($row['disponibilidad'] == 'Disponible') {
                    echo '<i class="fas fa-check-circle" style="color: green;"></i>';
                  } else if ($row['disponibilidad'] == 'Mantenimiento') {
                    echo '<i class="fas fa-check-circle" style="color: #ddd200;"></i>';
                  } else {
                    echo '<i class="fas fa-check-circle" style="color: red;"></i>';
                  }
                  ?>
                </td>

                <td>Precio Mensual <b>$<?= $row['precio'] ?></b></td>
                <td>Dimensiones <b><?= $row['dimensiones'] ?></b></td>
                <td>Ubicación <b><?= $row['ubicacion'] ?></b></td>

              </table>
            </div>

          <?php
          }
          ?>
          <div style="margin-top: 5px;"><i class="fa-solid fa-exclamation"><p> Puedes rentar un espacio disponible contactando al vendedor</p></i></div>
          <?php
          $sql = "SELECT * FROM vendedor";
          $resultado = mysqli_query($conexion, $sql);
          while($row = mysqli_fetch_assoc($resultado)){
          ?>
          <table>
            <tr><td><i class="fa-solid fa-user"></i> Nombre: <?= $row['nombre']?> <?= $row['apellido']?></td></tr>
            <tr><td><i class="fa-solid fa-envelope"></i> Correo: <?= $row['correo']?></td></tr>
            <tr><td><i class="fa-solid fa-phone"></i> Teléfono: <?= $row['telefono']?></td></tr>
          </table>
          <?php
          }
        }
          ?>
        </div>
      </div>
    </div>

    <div id="modal-combustibles" class="modalDialog">
      <div id="modal-container">
        <button id="btnClose-cuauN" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 style="margin-top: 5px;"><b>Espacios publicitarios estación Combustibles</b></h3>
        <div id="img" style="height: 400px; width: 350px; border: #821831 3px solid; float: left; margin-top: 20px; background-image: url(assets/img/estacion-ojo-agua.jpg);"></div>
        <div id="tabla-modal">

          <?php
          $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = 167";
          $resultado = mysqli_query($conexion, $sql);
          if(mysqli_num_rows($resultado) <= 0){
            echo "<h2>Por el momento no hay espacios publicitarios en esta estación</h2>";
          }else{
          while ($row = mysqli_fetch_assoc($resultado)) {
          ?>
            <div id="container-info">
              <table style="background-color: #703f4b; color: #fff;">
                <td>Numero de espacio: <b><?= $row['id_espacio']; ?></b></td>
                <td>Disponibilidad <b><?= $row['disponibilidad'] ?></b>
                  <?php
                  if ($row['disponibilidad'] == 'Disponible') {
                    echo '<i class="fas fa-check-circle" style="color: green;"></i>';
                  } else if ($row['disponibilidad'] == 'Mantenimiento') {
                    echo '<i class="fas fa-check-circle" style="color: #ddd200;"></i>';
                  } else {
                    echo '<i class="fas fa-check-circle" style="color: red;"></i>';
                  }
                  ?>
                </td>

                <td>Precio Mensual <b>$<?= $row['precio'] ?></b></td>
                <td>Dimensiones <b><?= $row['dimensiones'] ?></b></td>
                <td>Ubicación <b><?= $row['ubicacion'] ?></b></td>

              </table>
            </div>

          <?php
          }
          ?>
          <div style="margin-top: 5px;"><i class="fa-solid fa-exclamation"><p> Puedes rentar un espacio disponible contactando al vendedor</p></i></div>
          <?php
          $sql = "SELECT * FROM vendedor";
          $resultado = mysqli_query($conexion, $sql);
          while($row = mysqli_fetch_assoc($resultado)){
          ?>
          <table>
            <tr><td><i class="fa-solid fa-user"></i> Nombre: <?= $row['nombre']?> <?= $row['apellido']?></td></tr>
            <tr><td><i class="fa-solid fa-envelope"></i> Correo: <?= $row['correo']?></td></tr>
            <tr><td><i class="fa-solid fa-phone"></i> Teléfono: <?= $row['telefono']?></td></tr>
          </table>
          <?php
          }
        }
          ?>
        </div>
      </div>
    </div>

    <div id="modal-glorieta" class="modalDialog">
      <div id="modal-container">
        <button id="btnClose-cuauS" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 style="margin-top: 5px;"><b>Espacios publicitarios estación Glorieta Militar</b></h3>
        <div id="img" style="height: 400px; width: 350px; border: #821831 3px solid; float: left; margin-top: 20px; background-image: url(assets/img/estacion-ojo-agua.jpg);"></div>
        <div id="tabla-modal">

          <?php
          $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = 166";
          $resultado = mysqli_query($conexion, $sql);
          if(mysqli_num_rows($resultado) <= 0){
            echo "<h2>Por el momento no hay espacios publicitarios en esta estación</h2>";
          }else{
          while ($row = mysqli_fetch_assoc($resultado)) {
          ?>
            <div id="container-info">
              <table style="background-color: #703f4b; color: #fff;">
                <td>Numero de espacio: <b><?= $row['id_espacio']; ?></b></td>
                <td>Disponibilidad <b><?= $row['disponibilidad'] ?></b>
                  <?php
                  if ($row['disponibilidad'] == 'Disponible') {
                    echo '<i class="fas fa-check-circle" style="color: green;"></i>';
                  } else if ($row['disponibilidad'] == 'Mantenimiento') {
                    echo '<i class="fas fa-check-circle" style="color: #ddd200;"></i>';
                  } else {
                    echo '<i class="fas fa-check-circle" style="color: red;"></i>';
                  }
                  ?>
                </td>

                <td>Precio Mensual <b>$<?= $row['precio'] ?></b></td>
                <td>Dimensiones <b><?= $row['dimensiones'] ?></b></td>
                <td>Ubicación <b><?= $row['ubicacion'] ?></b></td>

              </table>
            </div>

          <?php
          }
          ?>
          <div style="margin-top: 5px;"><i class="fa-solid fa-exclamation"><p> Puedes rentar un espacio disponible contactando al vendedor</p></i></div>
          <?php
          $sql = "SELECT * FROM vendedor";
          $resultado = mysqli_query($conexion, $sql);
          while($row = mysqli_fetch_assoc($resultado)){
          ?>
          <table>
            <tr><td><i class="fa-solid fa-user"></i> Nombre: <?= $row['nombre']?> <?= $row['apellido']?></td></tr>
            <tr><td><i class="fa-solid fa-envelope"></i> Correo: <?= $row['correo']?></td></tr>
            <tr><td><i class="fa-solid fa-phone"></i> Teléfono: <?= $row['telefono']?></td></tr>
          </table>
          <?php
          }
        }
          ?>
        </div>
      </div>
    </div>

    <div id="modal-tecamac" class="modalDialog">
      <div id="modal-container">
        <button id="btnClose-hid" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 style="margin-top: 5px;"><b>Espacios publicitarios estación Tecámac</b></h3>
        <div id="img" style="height: 400px; width: 350px; border: #821831 3px solid; float: left; margin-top: 20px; background-image: url(assets/img/estacion-ojo-agua.jpg);"></div>
        <div id="tabla-modal">

          <?php
          $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = 165";
          $resultado = mysqli_query($conexion, $sql);
          if(mysqli_num_rows($resultado) <= 0){
            echo "<h2>Por el momento no hay espacios publicitarios en esta estación</h2>";
          }else{
          while ($row = mysqli_fetch_assoc($resultado)) {
          ?>
            <div id="container-info">
              <table style="background-color: #703f4b; color: #fff;">
                <td>Numero de espacio: <b><?= $row['id_espacio']; ?></b></td>
                <td>Disponibilidad <b><?= $row['disponibilidad'] ?></b>
                  <?php
                  if ($row['disponibilidad'] == 'Disponible') {
                    echo '<i class="fas fa-check-circle" style="color: green;"></i>';
                  } else if ($row['disponibilidad'] == 'Mantenimiento') {
                    echo '<i class="fas fa-check-circle" style="color: #ddd200;"></i>';
                  } else {
                    echo '<i class="fas fa-check-circle" style="color: red;"></i>';
                  }
                  ?>
                </td>

                <td>Precio Mensual <b>$<?= $row['precio'] ?></b></td>
                <td>Dimensiones <b><?= $row['dimensiones'] ?></b></td>
                <td>Ubicación <b><?= $row['ubicacion'] ?></b></td>

              </table>
            </div>

          <?php
          }
          ?>
          <div style="margin-top: 5px;"><i class="fa-solid fa-exclamation"><p> Puedes rentar un espacio disponible contactando al vendedor</p></i></div>
          <?php
          $sql = "SELECT * FROM vendedor";
          $resultado = mysqli_query($conexion, $sql);
          while($row = mysqli_fetch_assoc($resultado)){
          ?>
          <table>
            <tr><td><i class="fa-solid fa-user"></i> Nombre: <?= $row['nombre']?> <?= $row['apellido']?></td></tr>
            <tr><td><i class="fa-solid fa-envelope"></i> Correo: <?= $row['correo']?></td></tr>
            <tr><td><i class="fa-solid fa-phone"></i> Teléfono: <?= $row['telefono']?></td></tr>
          </table>
          <?php
          }
        }
          ?>
        </div>
      </div>
    </div>

    <div id="modal-francisco" class="modalDialog">
      <div id="modal-container">
        <button id="btnClose-ins" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 style="margin-top: 5px;"><b>Espacios publicitarios estación San Francisco</b></h3>
        <div id="img" style="height: 400px; width: 350px; border: #821831 3px solid; float: left; margin-top: 20px; background-image: url(assets/img/estacion-ojo-agua.jpg);"></div>
        <div id="tabla-modal">

          <?php
          $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = 164";
          $resultado = mysqli_query($conexion, $sql);
          if(mysqli_num_rows($resultado) <= 0){
            echo "<h2>Por el momento no hay espacios publicitarios en esta estación</h2>";
          }else{
          while ($row = mysqli_fetch_assoc($resultado)) {
          ?>
            <div id="container-info">
              <table style="background-color: #703f4b; color: #fff;">
                <td>Numero de espacio: <b><?= $row['id_espacio']; ?></b></td>
                <td>Disponibilidad <b><?= $row['disponibilidad'] ?></b>
                  <?php
                  if ($row['disponibilidad'] == 'Disponible') {
                    echo '<i class="fas fa-check-circle" style="color: green;"></i>';
                  } else if ($row['disponibilidad'] == 'Mantenimiento') {
                    echo '<i class="fas fa-check-circle" style="color: #ddd200;"></i>';
                  } else {
                    echo '<i class="fas fa-check-circle" style="color: red;"></i>';
                  }
                  ?>
                </td>

                <td>Precio Mensual <b>$<?= $row['precio'] ?></b></td>
                <td>Dimensiones <b><?= $row['dimensiones'] ?></b></td>
                <td>Ubicación <b><?= $row['ubicacion'] ?></b></td>

              </table>
            </div>

          <?php
          }
          ?>
          <div style="margin-top: 5px;"><i class="fa-solid fa-exclamation"><p> Puedes rentar un espacio disponible contactando al vendedor</p></i></div>
          <?php
          $sql = "SELECT * FROM vendedor";
          $resultado = mysqli_query($conexion, $sql);
          while($row = mysqli_fetch_assoc($resultado)){
          ?>
          <table>
            <tr><td><i class="fa-solid fa-user"></i> Nombre: <?= $row['nombre']?> <?= $row['apellido']?></td></tr>
            <tr><td><i class="fa-solid fa-envelope"></i> Correo: <?= $row['correo']?></td></tr>
            <tr><td><i class="fa-solid fa-phone"></i> Teléfono: <?= $row['telefono']?></td></tr>
          </table>
          <?php
          }
        }
          ?>
        </div>
      </div>
    </div>

    <div id="modal-ozumbilla" class="modalDialog">
      <div id="modal-container">
        <button id="btnClose-abas" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 style="margin-top: 5px;"><b>Espacios publicitarios estación Ozumbilla</b></h3>
        <div id="img" style="height: 400px; width: 350px; border: #821831 3px solid; float: left; margin-top: 20px; background-image: url(assets/img/estacion-ojo-agua.jpg);"></div>
        <div id="tabla-modal">

          <?php
          $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = 163";
          $resultado = mysqli_query($conexion, $sql);
          if(mysqli_num_rows($resultado) <= 0){
            echo "<h2>Por el momento no hay espacios publicitarios en esta estación</h2>";
          }else{
          while ($row = mysqli_fetch_assoc($resultado)) {
          ?>
            <div id="container-info">
              <table style="background-color: #703f4b; color: #fff;">
                <td>Numero de espacio: <b><?= $row['id_espacio']; ?></b></td>
                <td>Disponibilidad <b><?= $row['disponibilidad'] ?></b>
                  <?php
                  if ($row['disponibilidad'] == 'Disponible') {
                    echo '<i class="fas fa-check-circle" style="color: green;"></i>';
                  } else if ($row['disponibilidad'] == 'Mantenimiento') {
                    echo '<i class="fas fa-check-circle" style="color: #ddd200;"></i>';
                  } else {
                    echo '<i class="fas fa-check-circle" style="color: red;"></i>';
                  }
                  ?>
                </td>

                <td>Precio Mensual <b>$<?= $row['precio'] ?></b></td>
                <td>Dimensiones <b><?= $row['dimensiones'] ?></b></td>
                <td>Ubicación <b><?= $row['ubicacion'] ?></b></td>

              </table>
            </div>

          <?php
          }
          ?>
          <div style="margin-top: 5px;"><i class="fa-solid fa-exclamation"><p> Puedes rentar un espacio disponible contactando al vendedor</p></i></div>
          <?php
          $sql = "SELECT * FROM vendedor";
          $resultado = mysqli_query($conexion, $sql);
          while($row = mysqli_fetch_assoc($resultado)){
          ?>
          <table>
            <tr><td><i class="fa-solid fa-user"></i> Nombre: <?= $row['nombre']?> <?= $row['apellido']?></td></tr>
            <tr><td><i class="fa-solid fa-envelope"></i> Correo: <?= $row['correo']?></td></tr>
            <tr><td><i class="fa-solid fa-phone"></i> Teléfono: <?= $row['telefono']?></td></tr>
          </table>
          <?php
          }
        }
          ?>
        </div>
      </div>
    </div>

    <div id="modal-loma" class="modalDialog">
      <div id="modal-container">
        <button id="btnClose-sept" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 style="margin-top: 5px;"><b>Espacios publicitarios estación Loma Bonita</b></h3>
        <div id="img" style="height: 400px; width: 350px; border: #821831 3px solid; float: left; margin-top: 20px; background-image: url(assets/img/estacion-ojo-agua.jpg);"></div>
        <div id="tabla-modal">

          <?php
          $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = 162";
          $resultado = mysqli_query($conexion, $sql);
          if(mysqli_num_rows($resultado) <= 0){
            echo "<h2>Por el momento no hay espacios publicitarios en esta estación</h2>";
          }else{
          while ($row = mysqli_fetch_assoc($resultado)) {
          ?>
            <div id="container-info">
              <table style="background-color: #703f4b; color: #fff;">
                <td>Numero de espacio: <b><?= $row['id_espacio']; ?></b></td>
                <td>Disponibilidad <b><?= $row['disponibilidad'] ?></b>
                  <?php
                  if ($row['disponibilidad'] == 'Disponible') {
                    echo '<i class="fas fa-check-circle" style="color: green;"></i>';
                  } else if ($row['disponibilidad'] == 'Mantenimiento') {
                    echo '<i class="fas fa-check-circle" style="color: #ddd200;"></i>';
                  } else {
                    echo '<i class="fas fa-check-circle" style="color: red;"></i>';
                  }
                  ?>
                </td>

                <td>Precio Mensual <b>$<?= $row['precio'] ?></b></td>
                <td>Dimensiones <b><?= $row['dimensiones'] ?></b></td>
                <td>Ubicación <b><?= $row['ubicacion'] ?></b></td>

              </table>
            </div>

          <?php
          }
          ?>
          <div style="margin-top: 5px;"><i class="fa-solid fa-exclamation"><p> Puedes rentar un espacio disponible contactando al vendedor</p></i></div>
          <?php
          $sql = "SELECT * FROM vendedor";
          $resultado = mysqli_query($conexion, $sql);
          while($row = mysqli_fetch_assoc($resultado)){
          ?>
          <table>
            <tr><td><i class="fa-solid fa-user"></i> Nombre: <?= $row['nombre']?> <?= $row['apellido']?></td></tr>
            <tr><td><i class="fa-solid fa-envelope"></i> Correo: <?= $row['correo']?></td></tr>
            <tr><td><i class="fa-solid fa-phone"></i> Teléfono: <?= $row['telefono']?></td></tr>
          </table>
          <?php
          }
        }
          ?>
        </div>
      </div>
    </div>

    <div id="modal-ojoagua" class="modalDialog">
      <div id="modal-container">
        <button id="btnClose-palom" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 style="margin-top: 5px;"><b>Espacios publicitarios estación Ojo de Agua</b></h3>
        <div id="img" style="height: 400px; width: 350px; border: #821831 3px solid; float: left; margin-top: 20px; background-image: url(assets/img/estacion-ojo-agua.jpg);"></div>
        <div id="tabla-modal">

          <?php
          $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = 1";
          $resultado = mysqli_query($conexion, $sql);
          if(mysqli_num_rows($resultado) <= 0){
            echo "<h2>Por el momento no hay espacios publicitarios en esta estación</h2>";
          }else{
          while ($row = mysqli_fetch_assoc($resultado)) {
          ?>
            <div id="container-info">
              <table style="background-color: #703f4b; color: #fff;">
                <td>Numero de espacio: <b><?= $row['id_espacio']; ?></b></td>
                <td>Disponibilidad <b><?= $row['disponibilidad'] ?></b>
                  <?php
                  if ($row['disponibilidad'] == 'Disponible') {
                    echo '<i class="fas fa-check-circle" style="color: green;"></i>';
                  } else if ($row['disponibilidad'] == 'Mantenimiento') {
                    echo '<i class="fas fa-check-circle" style="color: #ddd200;"></i>';
                  } else {
                    echo '<i class="fas fa-check-circle" style="color: red;"></i>';
                  }
                  ?>
                </td>

                <td>Precio Mensual <b>$<?= $row['precio'] ?></b></td>
                <td>Dimensiones <b><?= $row['dimensiones'] ?></b></td>
                <td>Ubicación <b><?= $row['ubicacion'] ?></b></td>

              </table>
            </div>

          <?php
          }
        }
          ?>
          <div style="margin-top: 5px;"><i class="fa-solid fa-exclamation"><p> Puedes rentar un espacio disponible contactando al vendedor</p></i></div>
          <?php
          $sql = "SELECT * FROM vendedor";
          $resultado = mysqli_query($conexion, $sql);
          while($row = mysqli_fetch_assoc($resultado)){
          ?>
          <table>
            <tr><td><i class="fa-solid fa-user"></i> Nombre: <?= $row['nombre']?> <?= $row['apellido']?></td></tr>
            <tr><td><i class="fa-solid fa-envelope"></i> Correo: <?= $row['correo']?></td></tr>
            <tr><td><i class="fa-solid fa-phone"></i> Teléfono: <?= $row['telefono']?></td></tr>
          </table>
          <?php
          }
          ?>
        </div>
      </div>
    </div>

    

    <center>
      <div id="container-estaciones">

        <div class="terminalojo">
          <a href="#modal-terminal" id="open-modal-terminal">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo" id="testText">Terminal Pasajeros</h2>
                  <p style="text-align: left;">Lázaro Cárdenas 26, Santo Tomas Chiconautla, 55770 Cdad. de Mexico, Méx.</br>
                  Concurrencia: <b>Alta</b></p>
                </div>
              </div>
            </div>
          </a>
        </div>


        <!--Segundo div con tarjeta-->
        <div class="container-hacienda">
        <a href="#modal-hacienda" id="open-modal-hacienda">
          <div class="area-hover">
            <div class="tarjeta">
              <div class="contenido">
                <h2 class="titulo">Hacienda</h2>
                <p>México Pachuca Avenida Nacional, La Esmeralda, 55748 Ecatepec de Morelos, Méx.</p>
              </div>
            </div>
          </div>
        </div>

        <!--Tercer Div-->
        <div class="container-combustibles">
        <a href="#modal-combustibles" id="open-modal-combustibles">
          <div class="area-hover">
            <div class="tarjeta">
              <div class="contenido">
                <h2 class="titulo">Combustibles</h2>
                <p>La Fortaleza, 55069 Ecatepec de Morelos, Méx., México
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="container-glorieta">
        <a href="#modal-glorieta" id="open-modal-glorieta">
          <div class="area-hover">
            <div class="tarjeta">
              <div class="contenido">
                <h2 class="titulo">Glorieta Militar</h2>
                <p>Sta Maria Chiconautla, 55066 Ecatepec de Morelos, Méx., México</p>
              </div>
            </div>
          </div>
        </div>

        <div class="container-tecamac">
        <a href="#modal-tecamac" id="open-modal-tecamac">
          <div class="area-hover">
            <div class="tarjeta">
              <div class="contenido">
                <h2 class="titulo">Tecámac</h2>
                <p>55069, México Pachuca Avenida Nacional 4, Sta Maria Chiconautla, 55066 Ecatepec de Morelos, Méx</p>
              </div>
            </div>
          </div>
        </div>

        <div class="container-francisco">
        <a href="#modal-francisco" id="open-modal-francisco">
          <div class="area-hover">
            <div class="tarjeta">
              <div class="contenido">
                <h2 class="titulo">San Francisco</h2>
                <p>Mexibús Insurgentes Manzana 028, Sta Maria Chiconautla, 55066 Ecatepec de Morelos, Méx</p>
              </div>
            </div>
          </div>
        </div>

        <div class="container-ozumbilla">
        <a href="#modal-ozumbilla" id="open-modal-ozumbilla">
          <div class="area-hover">
            <div class="tarjeta">
              <div class="contenido">
                <h2 class="titulo">Ozumbilla</h2>
                <p>Manzana 005, Llano de los Baez, 55065 Ecatepec de Morelos, Méx., México</p>
              </div>
            </div>
          </div>
        </div>

        <div class="container-loma">
        <a href="#modal-loma" id="open-modal-loma">
          <div class="area-hover">
            <div class="tarjeta">
              <div class="contenido">
                <h2 class="titulo">Loma Bonita</h2>
                <p>Carril Exclusivo MEXIBUS, 19 de Septiembre, 55070 Ecatepec de Morelos, Méx</p>
              </div>
            </div>
          </div>
        </div>

        <div class="container-terminalojo">
        <a href="#modal-ojoagua" id="open-modal-ojoagua">
          <div class="area-hover">
            <div class="tarjeta">
              <div class="contenido">
                <h2 class="titulo">Terminal Ojo de Agua</h2>
                <p>Av. Central M-IL-4, Llano de los Baez, 55055 Ecatepec de Morelos, Méx.
                  +52 55 5836 1500</p>
              </div>
            </div>
          </div>
        </div>

        

      </div><!--Se cierra primera parte de lineas-->

    </center>


    <section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row gy-4" data-aos="fade-up">
      <div class="col-lg-4">
        <img src="assets/img/mexibus-linea1-info.png" style="width: 200px; height: 200px;" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8">
        <div class="content ps-lg-5">
          <h3>Mexibús 1: Ciudad Azteca - Ojo de Agua</h3>
          <p>
          La línea tiene una longitud de 16.8 kilómetros en su recorrido desde Ciudad Azteca en Ecatepec de Morelos a Ojo de Agua en Tecámac,
           circula por Avenida Central y existen dos servicios: el ordinario en donde el autobús realiza parada en todas las estaciones y el express 
           realizando únicamente paradas en ciertas estaciones así como en estaciones consideradas como terminales o conexión con la 
           línea de Mexibús II: estación de transferencia modal (ETRAM) de Ciudad Azteca conocida como Terminal Multimodal Azteca Bicentenario con una 
           afluencia estimada de 135 mil usuarios al día.
          </p>

        </div>
      </div>
    </div>
  </div>
</section><!-- End About Section -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    document.getElementById('open-modal-terminal').addEventListener('click', () => {
      document.getElementById('modal-terminal').style.display = 'block';
    });
    document.getElementById('btnClose-ojoagua').addEventListener('click', () => {
      document.getElementById('modal-terminal').style.display = 'none';
    });

    document.getElementById('open-modal-hacienda').addEventListener('click', () => {
      document.getElementById('modal-hacienda').style.display = 'block';
    });
    document.getElementById('btnClose-esme').addEventListener('click', () => {
      document.getElementById('modal-hacienda').style.display = 'none';
    });

    document.getElementById('open-modal-combustibles').addEventListener('click', () => {
      document.getElementById('modal-combustibles').style.display = 'block';
    });
    document.getElementById('btnClose-cuauN').addEventListener('click', () => {
      document.getElementById('modal-combustibles').style.display = 'none';
    });

    document.getElementById('open-modal-glorieta').addEventListener('click', () => {
      document.getElementById('modal-glorieta').style.display = 'block';
    });
    document.getElementById('btnClose-cuauS').addEventListener('click', () => {
      document.getElementById('modal-glorieta').style.display = 'none';
    });

    document.getElementById('open-modal-tecamac').addEventListener('click', () => {
      document.getElementById('modal-tecamac').style.display = 'block';
    });
    document.getElementById('btnClose-hid').addEventListener('click', () => {
      document.getElementById('modal-tecamac').style.display = 'none';
    });

    document.getElementById('open-modal-francisco').addEventListener('click', () => {
      document.getElementById('modal-francisco').style.display = 'block';
    });
    document.getElementById('btnClose-ins').addEventListener('click', () => {
      document.getElementById('modal-francisco').style.display = 'none';
    });

    document.getElementById('open-modal-ozumbilla').addEventListener('click', () => {
      document.getElementById('modal-ozumbilla').style.display = 'block';
    });
    document.getElementById('btnClose-abas').addEventListener('click', () => {
      document.getElementById('modal-ozumbilla').style.display = 'none';
    });

    document.getElementById('open-modal-loma').addEventListener('click', () => {
      document.getElementById('modal-loma').style.display = 'block';
    });
    document.getElementById('btnClose-sept').addEventListener('click', () => {
      document.getElementById('modal-loma').style.display = 'none';
    });

    document.getElementById('open-modal-ojoagua').addEventListener('click', () => {
      document.getElementById('modal-ojoagua').style.display = 'block';
    });
    document.getElementById('btnClose-palom').addEventListener('click', () => {
      document.getElementById('modal-ojoagua').style.display = 'none';
    });
  </script>
</body>

</html>