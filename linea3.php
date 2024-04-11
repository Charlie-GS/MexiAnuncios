<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Línea 3</title>
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
      border: solid 10px gray;
      border-radius: 5px;
      margin-top: 10px;
      background-image: url("assets/img/estacionesln3.jpg");
      background-repeat: no-repeat;
      justify-content: center;
      align-items: center;
    }

    /* Estilos del contenedor principal */
    .container-chimalhuacan {
      width: 40px;
      position: relative;
      margin-left: 550px;
      margin-top: 80px;
    }

    .container-acuitla {
      width: 200px;
      position: relative;
      margin-left: 450px;
      margin-top: -50px;
    }

    .container-refugio {
      width: 200px;
      position: relative;
      margin-left: 330px;
      margin-top: 10px;
    }

    .container-patos {
      width: 200px;
      position: relative;
      margin-left: 220px;
      margin-top: 5px;
    }

    .container-sanpablo {
      width: 50px;
      position: relative;
      margin-left: 100px;
      margin-top: -10px;
    }

    .container-ignacio {
      width: 200px;
      position: relative;
      margin-left: 100px;
      margin-top: 5px;
    }

    .container-santaelena {
      width: 200px;
      position: relative;
      margin-left: 100px;
      margin-top: 10px;
    }

    .container-embarcadero {
      width: 200px;
      position: relative;
      margin-left: 100px;
      margin-top: 10px;
      z-index: 2;
    }

    .container-lapresa {
      width: 200px;
      position: relative;
      margin-left: 110px;
      margin-top: 15px;
      z-index: 2;
    }

    .container-canteros {
      width: 200px;
      position: relative;
      margin-left: 240px;
      margin-top: 10px;
    }

    .container-lasflores2 {
      width: 200px;
      position: relative;
      margin-left: 370px;
      margin-top: 15px;
    }

    .container-guerrero {
      width: 40px;
      position: relative;
      margin-left: 500px;
      margin-top: 20px;
    }

    .container-lastorres {
      width: 200px;
      position: relative;
      margin-left: 400px;
      margin-top: 30px;
    }

    .container-bordo {
      width: 200px;
      position: relative;
      margin-left: 270px;
      margin-top: 10px;
      z-index: 2;
    }

    .container-ranchog {
      width: 200px;
      position: relative;
      margin-left: 200px;
      margin-top: 10px;
      z-index: 2;
    }

    .container-mananitas {
      width: 200px;
      position: relative;
      margin-left: 310px;
      margin-top: 5px;
      z-index: 2;
    }

    .container-rayito {
      width: 200px;
      position: relative;
      margin-left: 440px;
      margin-top: -10px;
    }

    .container-general {
      width: 40px;
      position: relative;
      margin-left: 540px;
      margin-top: 7px;
    }

    .container-castillo {
      width: 200px;
      position: relative;
      margin-left: 440px;
      margin-top: 10px;
    }

    .container-sorjuana {
      width: 200px;
      position: relative;
      margin-left: 325px;
      margin-top: 0px;
    }

    .container-palacio {
      width: 200px;
      position: relative;
      margin-left: 240px;
      margin-top: 0px;
    }

    .container-adolfolopez {
      width: 200px;
      position: relative;
      margin-left: 120px;
      margin-top: 0px;
    }

    .container-lago {
      width: 200px;
      position: relative;
      margin-left: 0px;
      margin-top: 3px;
    }

    .container-neza {
      width: 200px;
      position: relative;
      margin-left: -120px;
      margin-top: 3px;
    }

    .container-virgencitas {
      width: 200px;
      position: relative;
      margin-left: -230px;
      margin-top: 3px;
    }

    .container-vicente {
      width: 200px;
      position: relative;
      margin-left: -350px;
      margin-top: 3px;
    }

    .container-maravillas {
      width: 200px;
      position: relative;
      margin-left: -470px;
      margin-top: 5px;
    }

    .container-barquito {
      width: 200px;
      position: relative;
      margin-left: -580px;
      margin-top: 3px;
    }

    .container-calle6 {
      width: 200px;
      position: relative;
      margin-left: -570px;
      margin-top: 45px;
    }

    .container-pantitlan {
      width: 200px;
      position: relative;
      margin-left: -490px;
      margin-top: 55px;
    }

    /* Estilos del div contenedor */
    .area-hover {
      width: 30px;
      height: 30px;
      background-color: #404040;
      border-radius: 100%;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      color: black;
    }

    /* Estilos de la tarjeta */
    .tarjeta {
      width: 300px;
      height: 200px;
      background-color: #929292;
      border-radius: 10px;
      overflow: hidden;
      position: absolute;
      top: 0;
      left: 100%;
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
  background-color: gray;
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
        <h1 class="d-flex align-items-center" style="color: #861612;">Mexi</h1>
        <h1 class="d-flex align-items-center">Anuncios</h1>     
       </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
        <li style="margin-right: 20px;"><a href="index.html"><b>Inicio</b></a></li>
          <form>
            <select id="opciones" name="opciones" onchange="window.location.href=this.value" style="background-color: gray; color: white; border: 2px white solid; border-radius: 5px;">
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
          <div id="img" style="height: 400px; width: 350px; border: #404040 3px solid; float: left; margin-top: 20px; background-image: url(assets/img/estacion-ojo-agua.jpg);"></div>
          <div id="tabla-modal">
            <?php
            $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = $estacionId";
            $resultado = mysqli_query($conexion, $sql);
            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
              <div id="container-info">
                <table style="background-color: #989898; color: #fff;">
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

    generarModal("modal-chima", 103, "Espacios publicitarios estación Chimalhuacan");
    generarModal("modal-acui", 104, "Espacios publicitarios estación Acuitlapilco");
    generarModal("modal-ref", 105, "Espacios publicitarios estación Refugio");
    generarModal("modal-pato", 106, "Espacios publicitarios estación Los Patos");
    generarModal("modal-san", 107, "Espacios publicitarios estación San Pablo");
    generarModal("modal-igna", 108, "Espacios publicitarios estación Ignacio Manuel Altamirano");
    generarModal("modal-santae", 109, "Espacios publicitarios estación Santa Elena");
    generarModal("modal-emba", 110, "Espacios publicitarios estación Embarcadero");
    generarModal("modal-pres", 111, "Espacios publicitarios estación La Presa");
    generarModal("modal-cant", 112, "Espacios publicitarios estación Canteros");
    generarModal("modal-flore", 113, "Espacios publicitarios estación Las Flores");
    generarModal("modal-guerr", 114, "Espacios publicitarios estación Guerrero Chimalli");
    generarModal("modal-torre", 115, "Espacios publicitarios estación Las Torres");
    generarModal("modal-bordo", 116, "Espacios publicitarios estación Bordo de Xochiaca");
    generarModal("modal-ranc", 117, "Espacios publicitarios estación Rancho Grande");
    generarModal("modal-mana", 118, "Espacios publicitarios estación Las Mañanitas");
    generarModal("modal-gene", 120, "Espacios publicitarios estación General Vicente Villada");
    generarModal("modal-casti", 121, "Espacios publicitarios estación El Castillito");
    generarModal("modal-sor", 122, "Espacios publicitarios estación Sor Juana Inés");
    generarModal("modal-pala", 123, "Espacios publicitarios estación Palacio Municipal");
    generarModal("modal-adol", 124, "Espacios publicitarios estación Adolfo López Mateos");
    generarModal("modal-lago", 125, "Espacios publicitarios estación Lago de Chapala");
    generarModal("modal-neza", 126, "Espacios publicitarios estación Nezahualcóyotl");
    generarModal("modal-vir", 127, "Espacios publicitarios estación Virgencitas");
    generarModal("modal-vice", 128, "Espacios publicitarios estación Vicente Riva Palacio");
    generarModal("modal-mara", 129, "Espacios publicitarios estación Maravillas");
    generarModal("modal-bar", 130, "Espacios publicitarios estación El Barquito");
    generarModal("modal-calle", 131, "Espacios publicitarios estación Calle 6");
    generarModal("modal-panti", 132, "Espacios publicitarios estación Pantitlán");
    ?>

    <center>
      <div id="linea1-p1">

        <div class="container-chimalhuacan">
          <a href="#modal-chima" class="open-modal" data-modal-id="modal-chima">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Chimalhuacán</h2>
                  <p>Lázaro Cárdenas 26, Santo Tomas Chiconautla, 55770 Cdad. de Mexico, Méx.</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!--Segundo div con tarjeta-->
        <div class="container-acuitla">
          <a href="#modal-acui" class="open-modal" data-modal-id="modal-acui">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Acuitlapilco</h2>
                  <p>México Pachuca Avenida Nacional, La Esmeralda, 55748 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!--Tercer Div-->
        <div class="container-refugio">
          <a href="#modal-ref" class="open-modal" data-modal-id="modal-ref">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Refugio</h2>
                  <p>La Fortaleza, 55069 Ecatepec de Morelos, Méx., México
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-patos">
          <a href="#modal-pato" class="open-modal" data-modal-id="modal-pato">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Los Patos</h2>
                  <p>Sta Maria Chiconautla, 55066 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-sanpablo">
          <a href="#modal-san" class="open-modal" data-modal-id="modal-san">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">San Pablo</h2>
                  <p>55069, México Pachuca Avenida Nacional 4, Sta Maria Chiconautla, 55066 Ecatepec de Morelos, Méx</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-ignacio">
          <a href="#modal-igna" class="open-modal" data-modal-id="modal-igna">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Ignacio Manuel Altamirano</h2>
                  <p>Mexibús Insurgentes Manzana 028, Sta Maria Chiconautla, 55066 Ecatepec de Morelos, Méx</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-santaelena">
          <a href="#modal-santae" class="open-modal" data-modal-id="modal-santae">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Santa Elena</h2>
                  <p>Manzana 005, Llano de los Baez, 55065 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-embarcadero">
          <a href="#modal-emba" class="open-modal" data-modal-id="modal-emba">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Embarcadero</h2>
                  <p>Carril Exclusivo MEXIBUS, 19 de Septiembre, 55070 Ecatepec de Morelos, Méx</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-lapresa">
          <a href="#modal-pres" class="open-modal" data-modal-id="modal-pres">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">La Presa</h2>
                  <p>Av. Central M-IL-4, Llano de los Baez, 55055 Ecatepec de Morelos, Méx., México
                    +52 55 5836 1500</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-canteros">
          <a href="#modal-cant" class="open-modal" data-modal-id="modal-cant">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Canteros</h2>
                  <p>Jardines de Morelos, 55070 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-lasflores2">
          <a href="#modal-flore" class="open-modal" data-modal-id="modal-flore">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Las Flores</h2>
                  <p>Jardines de Morelos 5ta, 55070 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-guerrero">
          <a href="#modal-guerr" class="open-modal" data-modal-id="modal-guerr">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Guerrero Chimalli</h2>
                  <p>Jardines de Morelos 5ta, 55070 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-lastorres">
          <a href="#modal-torre" class="open-modal" data-modal-id="modal-torre">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Las Torres</h2>
                  <p>Manzana 032, Las Américas, 55076 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-bordo">
          <a href="#modal-bordo" class="open-modal" data-modal-id="modal-bordo">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Bordo de Xochiaca</h2>
                  <p>Manzana 040, Potrero Chico, 55119 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-ranchog">
          <a href="#modal-ranc" class="open-modal" data-modal-id="modal-ranc">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Rancho Grande</h2>
                  <p>55118 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-mananitas">
          <a href="#modal-mana" class="open-modal" data-modal-id="modal-mana">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Adolfo Lopez Mateos</h2>
                  <p>Esquina Vía Adolfo López Mateos, Carlos Hank González s/n, Alfredo del Mazo, 55118 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="container-general">
          <a href="#modal-gene" class="open-modal" data-modal-id="modal-gene">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">General Vicente Villada </h2>
                  <p>El Charco, 55115 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-castillo">
          <a href="#modal-casti" class="open-modal" data-modal-id="modal-casti">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">El Castillito</h2>
                  <p>Av. Carlos Hank González 3133, Jardines de Cerro Gordo, 55100 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-sorjuana">
          <a href="#modal-sor" class="open-modal" data-modal-id="modal-sor">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Sor Juana Inés de la Cruz</h2>
                  <p>55100 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-palacio">
          <a href="#modal-pala" class="open-modal" data-modal-id="modal-pala">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Palacio Municipal </h2>
                  <p>Rio de Luz, 55100 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-adolfolopez">
          <a href="#modal-adol" class="open-modal" data-modal-id="modal-adol">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Adolfo López Mateos</h2>
                  <p>Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-lago">
          <a href="#modal-lago" class="open-modal" data-modal-id="modal-lago">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Lago de Chapala</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-neza">
          <a href="#modal-neza" class="open-modal" data-modal-id="modal-neza">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Nezahualcóyotl</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-virgencitas">
          <a href="#modal-vir" class="open-modal" data-modal-id="modal-vir">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Virgencitas</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-vicente">
          <a href="#modal-vice" class="open-modal" data-modal-id="modal-vice">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Vicente Riva Palacio</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-maravillas">
          <a href="#modal-mara" class="open-modal" data-modal-id="modal-,mara">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Maravillas</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-barquito">
          <a href="#modal-bar" class="open-modal" data-modal-id="modal-bar">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">El Barquito</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-calle6">
          <a href="#modal-calle" class="open-modal" data-modal-id="modal-calle">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Calle 6</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-pantitlan">
          <a href="#modal-panti" class="open-modal" data-modal-id="modal-panti">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Pantitlán</h2>
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
        <img src="assets/img/mexibus-linea3-info.png" style="width: 200px; height: 200px;" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8">
        <div class="content ps-lg-5">
          <h3>Mexibús 3: Chimalhuacán - Pantitlán</h3>
          <p>
          La línea 3 del Mexibús tiene 18.2 kilómetros de recorrido desde el municipio de Chimalhuacán, Estado de México, hasta el CETRAM Pantitlán
           en la Alcaldía Venustiano Carranza de la Ciudad de México y Circula por las avenidas: del Peñón, Bordo de Xochiaca, Vicente Villada,
            Chimalhuacán y Río Churubusco.  Para brindar el servicio cuenta con 28 estaciones, 2 terminales. La línea comenzó a construirse a
             finales de 2010.  E inició operaciones el 30 de abril de 2013. 
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