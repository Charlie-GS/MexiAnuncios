<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Línea 4</title>
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
    #linea1-p1 {
      width: 750px;
      height: 1300px;
      border: solid 2px white;
      border-radius: 5px;
      margin-top: 10px;
      background-image: url("assets/img/estacionesln4.jpg");
      background-repeat: no-repeat;
      justify-content: center;
      align-items: center;
    }

    .container-umb {
      width: 40px;
      position: relative;
      margin-left: 100px;
      margin-top: 140px;
    }

    .container-bosques {
      width: 40px;
      position: relative;
      margin-left: 200px;
      margin-top: -30px;
    }

    .container-lasflores3 {
      width: 40px;
      position: relative;
      margin-left: 270px;
      margin-top: -30px;
    }

    .container-margarito {
      width: 40px;
      position: relative;
      margin-left: 340px;
      margin-top: -30px;
      z-index: 2;
    }

    .container-revolucion {
      width: 30px;
      position: relative;
      margin-left: 410px;
      margin-top: -30px;
      z-index: 2;
    }

    .container-ejido {
      width: 30px;
      position: relative;
      margin-left: 495px;
      margin-top: -33px;
      z-index: 2;
    }

    .container-santotomas {
      width: 40px;
      position: relative;
      margin-left: 550px;
      margin-top: -30px;
      z-index: 2;
    }

    .container-central {
      width: 200px;
      position: relative;
      margin-left: 520px;
      margin-top: 10px;
      z-index: 2;
    }

    .container-izcalli {
      width: 200px;
      position: relative;
      margin-left: 415px;
      margin-top: 15px;
      z-index: 2;
    }

    .container-puentefierro2 {
      width: 200px;
      position: relative;
      margin-left: 280px;
      margin-top: 10px;
    }

    .container-sancristobal {
      width: 200px;
      position: relative;
      margin-left: 200px;
      margin-top: 3px;
    }

    .container-viga {
      width: 200px;
      position: relative;
      margin-left: 190px;
      margin-top: 5px;
    }

    .container-laureles {
      width: 200px;
      position: relative;
      margin-left: 190px;
      margin-top: 5px;
    }

    .container-laredo {
      width: 200px;
      position: relative;
      margin-left: 190px;
      margin-top: 5px;
    }

    .container-siervo {
      width: 200px;
      position: relative;
      margin-left: 190px;
      margin-top: 10px;
    }

    .container-tulpe {
      width: 200px;
      position: relative;
      margin-left: 190px;
      margin-top: 15px;
    }

    .container-5aparicion {
      width: 200px;
      position: relative;
      margin-left: 130px;
      margin-top: 10px;
    }

    .container-industrial2 {
      width: 200px;
      position: relative;
      margin-left: 60px;
      margin-top: 5px;
    }

    .container-clinica93 {
      width: 200px;
      position: relative;
      margin-left: -10px;
      margin-top: 0px;
    }

    .container-servicios {
      width: 200px;
      position: relative;
      margin-left: -70px;
      margin-top: 0px;
    }

    .container-cerrogordo {
      width: 200px;
      position: relative;
      margin-left: -120px;
      margin-top: 0px;
    }

    .container-santaclara {
      width: 200px;
      position: relative;
      margin-left: -180px;
      margin-top: 0px;
    }

    .container-5febrero {
      width: 200px;
      position: relative;
      margin-left: -240px;
      margin-top: 0px;
    }

    .container-monumento {
      width: 200px;
      position: relative;
      margin-left: -300px;
      margin-top: 0px;
    }

    .container-viamorelos {
      width: 200px;
      position: relative;
      margin-left: -370px;
      margin-top: 3px;
    }

    .container-clinica76 {
      width: 200px;
      position: relative;
      margin-left: -400px;
      margin-top: 3px;
    }

    .container-carrera {
      width: 40px;
      position: relative;
      margin-left: -470px;
      margin-top: -30px;
    }

    .container-periferico {
      width: 40px;
      position: relative;
      margin-left: -530px;
      margin-top: 3px;
    }

    .container-indios {
      width: 40px;
      position: relative;
      margin-left: -600px;
      margin-top: 35px;
    }

    /* Estilos del div contenedor */
    .area-hover {
      width: 30px;
      height: 30px;
      background-color: #b18a00;
      border-radius: 100%;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      color: black;
    }

    /* Estilos de la tarjeta */
    .tarjeta {
      width: 300px;
      height: 200px;
      background-color: #b18a00;
      border-radius: 10px;
      overflow: hidden;
      position: absolute;
      top: 0;
      right: 100%;
      transition: transform 0.3s ease;
      transform: translateX(100%);
      display: none;
    }

    /* Estilos de la tarjeta cuando se muestra */
    .area-hover:hover .tarjeta {
      transform: translateX(0);
      display: block;
    }

    /* Estilos del contenido dentro de la tarjeta */
    .contenido {
      padding: 20px;
      color: white;
    }

    /* Estilos del título */
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

    td {
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
  background-color: #b27600;
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
        <h1 class="d-flex align-items-center" style="color: #861612;  -webkit-text-stroke-color: white; -webkit-text-stroke-width: 0.4px;">Mexi</h1>
        <h1 class="d-flex align-items-center" style=" -webkit-text-stroke-color: white; -webkit-text-stroke-width: 0.4px;">Anuncios</h1>     
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
        <li style="margin-right: 20px;"><a href="index.html"><b>Inicio</b></a></li>
          <form>
            <select id="opciones" name="opciones" onchange="window.location.href=this.value" style="background-color: #b27600; color: white; border: 2px white solid; border-radius: 5px;">
              <option value="">Líneas</option>
              <option value="linea2.php">Línea 2</option>
              <option value="linea3.php">Línea 3</option>
              <option value="linea4.php">Línea 4</option>
              <option value="lineaAIFA.php">Línea AIFA</option>
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

    <?php
    function generarModal($modalId, $estacionId, $titulo){
      global $conexion;
    ?>
      <div id="<?= $modalId ?>" class="modalDialog">
        <div id="modal-container">
          <button type="button" class="close btn-close-modal" data-dismiss="modal" aria-hidden="true" data-modal-id="<?= $modalId ?>">&times;</button>
          <h3 style="margin-top: 5px;"><b><?= $titulo ?></b></h3>
          <div id="img" style="height: 400px; width: 350px; border: #F49D30 3px solid; float: left; margin-top: 20px; background-image: url(assets/img/estacion-ojo-agua.jpg);"></div>
          <div id="tabla-modal">
            <?php
            $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = $estacionId";
            $resultado = mysqli_query($conexion, $sql);
            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
              <div id="container-info">
                <table style="background-color: #F49D30; color: 0000;">
                  <td>Numero del espacio: <b><?= $row['id_espacio']; ?></b></td>
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
            <div style="margin-top: 5px;"><i class="fa-solid fa-exclamation">
                <p> Puedes rentar un espacio disponible contactando al vendedor</p>
              </i></div>
            <?php
            $sql = "SELECT * FROM vendedor";
            $resultado = mysqli_query($conexion, $sql);
            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
              <table>
                <tr>
                  <td><i class="fa-solid fa-user"></i> Nombre: <?= $row['nombre'] ?> <?= $row['apellido'] ?></td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-envelope"></i> Correo: <?= $row['correo'] ?></td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-phone"></i> Teléfono: <?= $row['telefono'] ?></td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-location-dot"></i> Ubicación: <?= $row['ubicacion']; ?></td>
                </tr>
              </table>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    <?php
    }

    generarModal("modal-umb", 133, "Espacios publicitarios estación Terminal UMB");
    generarModal("modal-bos", 134, "Espacios publicitarios estación Bosques");
    generarModal("modal-flor", 135, "Espacios publicitarios estación Las Flores");
    generarModal("modal-mar", 136, "Espacios publicitarios estación Margarito F. Ayala");
    generarModal("modal-rev", 137, "Espacios publicitarios estación Revolución");
    generarModal("modal-eji", 138, "Espacios publicitarios estación Ejido Santo Tomás");
    generarModal("modal-santo", 139, "Espacios publicitarios estación Santo Tomas Chiconautla");
    generarModal("modal-cent", 140, "Espacios publicitarios estación Central de Abastos");
    generarModal("modal-izc", 141, "Espacios publicitarios estación Izcalli Palomas");
    generarModal("modal-puen", 142, "Espacios publicitarios estación Puente de Fierro");
    generarModal("modal-sanc", 143, "Espacios publicitarios estación San Cristóbal");
    generarModal("modal-vig", 144, "Espacios publicitarios estación La Viga");
    generarModal("modal-laur", 145, "Espacios publicitarios estación Laureles");
    generarModal("modal-nuev", 146, "Espacios publicitarios estación Nuevo Laredo");
    generarModal("modal-sierv", 147, "Espacios publicitarios estación Siervo de la Nación");
    generarModal("modal-tulp", 148, "Espacios publicitarios estación Tulpetlac");
    generarModal("modal-apar", 149, "Espacios publicitarios estación La 5ª Aparición");
    generarModal("modal-indu", 150, "Espacios publicitarios estación Industrial");
    generarModal("modal-clin", 151, "Espacios publicitarios estación Clínica 93");
    generarModal("modal-serv", 152, "Espacios publicitarios estación Servicios Administrativos");
    generarModal("modal-cerr", 153, "Espacios publicitarios estación Cerro Gordo");
    generarModal("modal-santa", 154, "Espacios publicitarios estación Santa Clara");
    generarModal("modal-feb", 155, "Espacios publicitarios estación 5 de Febrero");
    generarModal("modal-monu", 156, "Espacios publicitarios estación Monumento a Morelos");
    generarModal("modal-via", 157, "Espacios publicitarios estación Vía Morelos");
    generarModal("modal-clini", 158, "Espacios publicitarios estación Clínica 76");
    generarModal("modal-mart", 159, "Espacios publicitarios estación Martin Carrera");
    generarModal("modal-per", 160, "Espacios publicitarios estación Periférico");
    generarModal("modal-ind", 161, "Espacios publicitarios estación Indios Verdes");

    ?>

    <center>
      <div id="linea1-p1">

        <div class="container-umb">
          <a href="#modal-umb" class="open-modal" data-modal-id="modal-umb">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Terminal UMB</h2>
                  <p>Lázaro Cárdenas 26, Santo Tomas Chiconautla, 55770 Cdad. de Mexico, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <!--Segundo div con tarjeta-->
        <div class="container-bosques">
          <a href="#modal-bos" class="open-modal" data-modal-id="modal-bos">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Bosques</h2>
                  <p>México Pachuca Avenida Nacional, La Esmeralda, 55748 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <!--Tercer Div-->
        <div class="container-lasflores3">
          <a href="#modal-flor" class="open-modal" data-modal-id="modal-flor">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Las Flores</h2>
                  <p>La Fortaleza, 55069 Ecatepec de Morelos, Méx., México
                  </p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-margarito">
          <a href="#modal-mar" class="open-modal" data-modal-id="modal-mar">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Margarito F. Ayala</h2>
                  <p>Sta Maria Chiconautla, 55066 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-revolucion">
          <a href="#modal-rev" class="open-modal" data-modal-id="modal-rev">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Revolución</h2>
                  <p>55069, México Pachuca Avenida Nacional 4, Sta Maria Chiconautla, 55066 Ecatepec de Morelos, Méx</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-ejido">
          <a href="#modal-eji" class="open-modal" data-modal-id="modal-eji">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Ejido Santo Tomás</h2>
                  <p>Mexibús Insurgentes Manzana 028, Sta Maria Chiconautla, 55066 Ecatepec de Morelos, Méx</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-santotomas">
          <a href="#modal-santo" class="open-modal" data-modal-id="modal-santo">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Santo Tomas Chiconautla</h2>
                  <p>Manzana 005, Llano de los Baez, 55065 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-central">
          <a href="#modal-cent" class="open-modal" data-modal-id="modal-cent">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Central de Abastos</h2>
                  <p>Carril Exclusivo MEXIBUS, 19 de Septiembre, 55070 Ecatepec de Morelos, Méx</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-izcalli">
          <a href="#modal-izc" class="open-modal" data-modal-id="modal-izc">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Izcalli Palomas</h2>
                  <p>Av. Central M-IL-4, Llano de los Baez, 55055 Ecatepec de Morelos, Méx.
                    +52 55 5836 1500</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-puentefierro2">
          <a href="#modal-puen" class="open-modal" data-modal-id="modal-puen">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Puente de Fierro</h2>
                  <p>Jardines de Morelos, 55070 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-sancristobal">
          <a href="#modal-sanc" class="open-modal" data-modal-id="modal-sanc">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">San Cristóbal</h2>
                  <p>Jardines de Morelos 5ta, 55070 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-viga">
          <a href="#modal-vig" class="open-modal" data-modal-id="modal-vig">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">La Viga</h2>
                  <p>Jardines de Morelos 5ta, 55070 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-laureles">
          <a href="#modal-laur" class="open-modal" data-modal-id="modal-laur">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Laureles</h2>
                  <p>Manzana 032, Las Américas, 55076 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-laredo">
          <a href="#modal-nuev" class="open-modal" data-modal-id="modal-nuev">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Nuevo Laredo </h2>
                  <p>Manzana 040, Potrero Chico, 55119 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-siervo">
          <a href="#modal-sierv" class="open-modal" data-modal-id="modal-sierv">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Siervo de la Nación</h2>
                  <p>55118 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-tulpe">
          <a href="#modal-tulp" class="open-modal" data-modal-id="modal-tulp">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Tulpetlac</h2>
                  <p>Esquina Vía Adolfo López Mateos, Carlos Hank González s/n, Alfredo del Mazo, 55118 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-5aparicion">
          <a href="#modal-apar" class="open-modal" data-modal-id="modal-apar">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">La 5ª Aparición</h2>
                  <p>Esquina Escorpión, Av. Carlos Hank González s/n, Alfredo del Mazo, 55118 Ecatepec de Morelos, Méx</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-industrial2">
          <a href="#modal-indu" class="open-modal" data-modal-id="modal-indu">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Industrial </h2>
                  <p>El Charco, 55115 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-clinica93">
          <a href="#modal-clin" class="open-modal" data-modal-id="modal-clin">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Clínica 93</h2>
                  <p>Av. Carlos Hank González 3133, Jardines de Cerro Gordo, 55100 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-servicios">
          <a href="#modal-serv" class="open-modal" data-modal-id="modal-serv">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Servicios Administrativos</h2>
                  <p>55100 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-cerrogordo">
          <a href="#modal-cerr" class="open-modal" data-modal-id="modal-cerr">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Cerro Gordo </h2>
                  <p>Rio de Luz, 55100 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-santaclara">
          <a href="#modal-santa" class="open-modal" data-modal-id="modal-santa">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Santa Clara</h2>
                  <p>Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-5febrero">
          <a href="#modal-feb" class="open-modal" data-modal-id="modal-feb">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">5 de Febrero</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-monumento">
          <a href="#modal-monu" class="open-modal" data-modal-id="modal-monu">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Monumento a Morelos</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-viamorelos">
          <a href="#modal-via" class="open-modal" data-modal-id="modal-via">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Vía Morelos</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-clinica76">
          <a href="#modal-clini" class="open-modal" data-modal-id="modal-clini">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Clínica 76</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-carrera">
          <a href="#modal-mart" class="open-modal" data-modal-id="modal-mart">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Martin Carrera</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-periferico">
          <a href="#modal-per" class="open-modal" data-modal-id="modal-per">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Periférico</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-indios">
          <a href="#modal-ind" class="open-modal" data-modal-id="modal-ind">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Indios Verdes</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

      </div><!--Se cierra primera parte de lineas-->

      <!--Inicia segunda parte-->
    </center>

    <section id="about" class="about">
  <div class="container" data-aos="fade-up">
    <div class="row gy-4" data-aos="fade-up">
      <div class="col-lg-4">
        <img src="assets/img/mexibus-linea4-info.png" style="width: 200px; height: 200px;" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8">
        <div class="content ps-lg-5">
          <h3>Mexibús 4: UMB - Indios Verdes</h3>
          <p>
          La línea 4 tendrá 22.3 kilómetros en el recorrido desde el fraccionamiento "Los Héroes Tecámac", en el municipio de Tecámac,
           Estado de México al CETRAM Indios Verdes, en la Alcaldía Gustavo A. Madero, Ciudad de México circulando por la Avenida de los Insurgentes,
            Autopista México-Pachuca, Vía Morelos, Avenida Nacional y Vialidad Mexiquense; y para brindar el servicio contará con 30 estaciones y 71 autobuses. 
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
    document.querySelectorAll('.open-modal').forEach((element) => {
      element.addEventListener('click', () => {
        const modalId = element.dataset.modalId;
        document.getElementById(modalId).style.display = 'block';
      });
    });

    document.querySelectorAll('.btn-close-modal').forEach((element) => {
      element.addEventListener('click', () => {
        const modalId = element.dataset.modalId;
        document.getElementById(modalId).style.display = 'none';
      });
    });
  </script>

</body>

</html>