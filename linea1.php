<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- A-FRAME -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Línea 1</title>
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

  <!-- Librerias 360 -->



  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/styleLinea1.css" rel="stylesheet">

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
      height: 970px;
      border: solid 2px white;
      margin-top: 10px;
      background-image: url('assets/img/bg-linea1.png');
      background-repeat: no-repeat;
      justify-content: center;
      align-items: center;
    }

    .btn-close-modal {
      border: red;
    }

    .navbar a:hover,
    .navbar .active,
    .navbar .active:focus,
    .navbar li:hover>a {
      color: 0000;
    }

    .area-hover {
      width: 30px;
      height: 30px;
      background-color: #008c09 !important;
      border-radius: 100%;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      color: black;
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
      background-color: rgb(12, 96, 0, 0.7);
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
            <select id="opciones" name="opciones" onchange="window.location.href=this.value" style="background-color: #008c09; color: white; border: 2px white solid; border-radius: 5px;">
              <option value="">Ir a otra línea</option>
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
    <div class="breadcrumbs d-flex align-items-center" style="background-color: green">
      <div class="container position-relative d-flex flex-column align-items-center">


      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    

    <br>

    <center>
      <h1 style="font-size: 35px; color: #000;"><b>Escoge la estación que desees</b></h1>
      <p style="font-size: 20px"><b>Puedes visualizar los espacios disponibles haciendo click en cada estación.</b></p>
      <hr style="width: 400px; border: 3px green solid;">
      <p style="font-size: 20px; color: green;"><b>Línea 1</b></p>
    </center>
    <br>
    <!--Modal-->

    <?php
    function generarModal($modalId, $estacionId, $titulo)
    {
      global $conexion;
    ?>
      <div id="<?= $modalId ?>" class="modalDialog">
        <div id="modal-container">
          <button type="button" class="close btn-close-modal" data-dismiss="modal" aria-hidden="true" data-modal-id="<?= $modalId ?>">&times;</button>
          <h3 style="margin-top: 5px;"><b><?= $titulo ?></b></h3>
          <div id="img" style="height: 400px; width: 350px; border: #C7DE9A 3px solid; float: left; margin-top: 20px; background-image: url(assets/img/estacion-ojo-agua.jpg);"></div>
          <div id="tabla-modal">
            <?php
            $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = $estacionId";
            $resultado = mysqli_query($conexion, $sql);
            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
              <div id="container-info">
                <table style="background-color: #C7DE9A; color: 0000;">
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

    generarModal("modal-ojoagua", 1, "Espacios publicitarios estación Ojo de Agua");
    generarModal("modal-esme", 2, "Espacios publicitarios estación Esmeralda");
    generarModal("modal-cuauN", 4, "Espacios publicitarios estación Cuauhtemoc Norte");
    generarModal("modal-cuauS", 9, "Espacios publicitarios estación Cuauhtemoc Sur");
    generarModal("modal-hid", 10, "Espacios publicitarios estación Hidalgo");
    generarModal("modal-ins", 11, "Espacios publicitarios estación Insurgentes");
    generarModal("modal-abas", 12, "Espacios publicitarios estación Central de abastos");
    generarModal("modal-sept", 13, "Espacios publicitarios estación 19 de septiembre");
    generarModal("modal-palom", 14, "Espacios publicitarios estación Palomas");
    generarModal("modal-jard", 15, "Espacios publicitarios estación Jardines de Morelos");
    generarModal("modal-hos", 16, "Espacios publicitarios estación Hospital");
    generarModal("modal-may", 17, "Espacios publicitarios estación 1ro. de Mayo");
    generarModal("modal-ame", 18, "Espacios publicitarios estación Las Americas");
    generarModal("modal-valle", 19, "Espacios publicitarios estación Valle Ecatepec");
    generarModal("modal-voca", 20, "Espacios publicitarios estación Vocacional 3");
    generarModal("modal-adolf", 21, "Espacios publicitarios estación Adolfo Lopez Mateos");
    generarModal("modal-zod", 22, "Espacios publicitarios estación Zodiaco");
    generarModal("modal-torr", 23, "Espacios publicitarios estación A. Torres");
    generarModal("modal-uni", 24, "Espacios publicitarios estación UNITEC");
    generarModal("modal-ind", 25, "Espacios publicitarios estación Industrial");
    generarModal("modal-jos", 26, "Espacios publicitarios estación Josefa Ortiz");
    generarModal("modal-quin", 27, "Espacios publicitarios estación Quinto Sol");
    generarModal("modal-ciud", 28, "Espacios publicitarios estación Ciudad Azteca");
    ?>

    <center>
      <div id="linea1-p1">

        <div class="container-ojo-agua">
          <a href="#modal-ojoagua" class="open-modal" data-modal-id="modal-ojoagua">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo" id="testText">Terminal Ojo agua</h2>
                  <p style="text-align: left;">Lázaro Cárdenas 26, Santo Tomas Chiconautla, 55770 Cdad. de Mexico, Méx.</br>
                    Concurrencia: <b>Alta</b></p>
                </div>
              </div>
            </div>
          </a>
        </div>


        <!--Segundo div con tarjeta-->
        <div class="container-esmeralda">
          <a href="#modal-esme" class="open-modal" data-modal-id="modal-esme">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Esmeralda</h2>
                  <p>México Pachuca Avenida Nacional, La Esmeralda, 55748 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <!--Tercer Div-->
        <div class="container-cuautemocN">
          <a href="#modal-cuauN" class="open-modal" data-modal-id="modal-cuauN">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Cuauhtemoc Norte</h2>
                  <p>La Fortaleza, 55069 Ecatepec de Morelos, Méx., México
                  </p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-cuautemocS">
          <a href="#modal-cuauS" class="open-modal" data-modal-id="modal-cuauS">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Cuauhtemoc Sur</h2>
                  <p>Sta Maria Chiconautla, 55066 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-hidalgo">
          <a href="#modal-hid" class="open-modal" data-modal-id="modal-hid">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Hidalgo</h2>
                  <p>55069, México Pachuca Avenida Nacional 4, Sta Maria Chiconautla, 55066 Ecatepec de Morelos, Méx</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-insurgentes">
          <a href="#modal-ins" class="open-modal" data-modal-id="modal-ins">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Insurgentes</h2>
                  <p>Mexibús Insurgentes Manzana 028, Sta Maria Chiconautla, 55066 Ecatepec de Morelos, Méx</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-abastos">
          <a href="#modal-abas" class="open-modal" data-modal-id="modal-abas">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Central de abastos</h2>
                  <p>Manzana 005, Llano de los Baez, 55065 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-septiembre">
          <a href="#modal-sept" class="open-modal" data-modal-id="modal-sept">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">19 de septiembre</h2>
                  <p>Carril Exclusivo MEXIBUS, 19 de Septiembre, 55070 Ecatepec de Morelos, Méx</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-palomas">
          <a href="#modal-palom" class="open-modal" data-modal-id="modal-palom">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Palomas</h2>
                  <p>Av. Central M-IL-4, Llano de los Baez, 55055 Ecatepec de Morelos, Méx.
                    +52 55 5836 1500</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-jardines">
          <a href="#modal-jard" class="open-modal" data-modal-id="modal-jard">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Jardines de Morelos</h2>
                  <p>Jardines de Morelos, 55070 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-hospital">
          <a href="#modal-hos" class="open-modal" data-modal-id="modal-hos">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Hospital</h2>
                  <p>Jardines de Morelos 5ta, 55070 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-1mayo">
          <a href="#modal-may" class="open-modal" data-modal-id="modal-may">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">1ro. de Mayo</h2>
                  <p>Jardines de Morelos 5ta, 55070 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-americas">
          <a href="#modal-ame" class="open-modal" data-modal-id="modal-ame">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Las Americas</h2>
                  <p>Manzana 032, Las Américas, 55076 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-valleEca">
          <a href="#modal-valle" class="open-modal" data-modal-id="modal-valle">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Valle Ecatepec</h2>
                  <p>Manzana 040, Potrero Chico, 55119 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-voca3">
          <a href="#modal-voca" class="open-modal" data-modal-id="modal-voca">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Vocacional 3</h2>
                  <p>55118 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-adolfo">
          <a href="#modal-adolf" class="open-modal" data-modal-id="modal-adolf">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Adolfo Lopez Mateos</h2>
                  <p>Esquina Vía Adolfo López Mateos, Carlos Hank González s/n, Alfredo del Mazo, 55118 Ecatepec de
                    Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-zodiaco">
          <a href="#modal-zod" class="open-modal" data-modal-id="modal-zod">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Zodiaco</h2>
                  <p>Esquina Escorpión, Av. Carlos Hank González s/n, Alfredo del Mazo, 55118 Ecatepec de Morelos, Méx</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-atorres">
          <a href="#modal-torr" class="open-modal" data-modal-id="modal-torr">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">A. Torres</h2>
                  <p>El Charco, 55115 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-unitec">
          <a href="#modal-uni" class="open-modal" data-modal-id="modal-uni">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">UNITEC</h2>
                  <p>Av. Carlos Hank González 3133, Jardines de Cerro Gordo, 55100 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-industrial">
          <a href="#modal-ind" class="open-modal" data-modal-id="modal-ind">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Industrial</h2>
                  <p>55100 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-josefa">
          <a href="#modal-jos" class="open-modal" data-modal-id="modal-jos">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Josefa Ortiz</h2>
                  <p>Rio de Luz, 55100 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-quintosol">
          <a href="#modal-quin" class="open-modal" data-modal-id="modal-quin">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Quinto Sol</h2>
                  <p>Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx., México</p>
                </div>
              </div>
            </div>
        </div>

        <div class="container-cazteca">
          <a href="#modal-ciud" class="open-modal" data-modal-id="modal-ciud">
            <div class="area-hover">
              <div class="tarjeta">
                <div class="contenido">
                  <h2 class="titulo">Ciudad Azteca</h2>
                  <p>55120, Cd Azteca 3ra Secc, 55120 Ecatepec de Morelos, Méx.</p>
                </div>
              </div>
            </div>
          </a>
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