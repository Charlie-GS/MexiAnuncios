<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CRUD Linea 3</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/5a3e42d574.js" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/styleCrud.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>

  </style>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="crudLinea1.php" class="nav-link scrollto " style="background-color: #136022;"><i class="fa-solid fa-1"></i></i><span>Línea 1</span></a></li>
        <li><a href="crudLinea2.php" class="nav-link scrollto" style="background-color: #9b0000;"><i class="fa-solid fa-2"></i></i> <span>Línea 2</span></a></li>
        <li><a href="crudLinea3.php" class="nav-link scrollto active" style="background-color: gray;"><i class="fa-solid fa-3"></i></i> <span>Línea 3</span></a></li>
        <li><a href="crudLinea4.php" class="nav-link scrollto" style="background-color: #848000;"><i class="fa-solid fa-4"></i></i> <span>Línea 4</span></a></li>

      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <main id="main">

  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-top: 30px;">
  <div class="container-fluid">
  <p style="font-size: 20px;"><b>MexiAnuncios</b></p>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <i class="fa-solid fa-user" style="padding-top: 10px;"></i>
      <li class="nav-item dropdown pe-3">
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <?php
            $sql = "SELECT * FROM vendedor";
            $result = mysqli_query($conexion, $sql);
            while($row = mysqli_fetch_assoc($result)){
            ?>
          <span class="d-none d-md-block dropdown-toggle ps-2"><b><?= $row['nombre']; ?> <?= $row['apellido']; ?></b></span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" aria-labelledby="dropdownMenuLink">
          <li class="dropdown-header">
           
            <h6><?= $row['nombre']; ?> <?= $row['apellido']; ?></h6>
            <?php
            }
            ?>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="login.php?cerrar_sesion=1">
              <i class="bi bi-box-arrow-right"></i>
              <span>Cerrar sesión</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>    <!-- =======  Section ======= -->
    <div class="container-xl">
      <div class="table-responsive">
        <div class="table-wrapper">
          <div class="table-title" style="background-color: gray;">
            <div class="row">
              <div class="col-sm-6">
                <h2>Espacios <b>Publicitarios</b></h2>
              </div>
              <div class="col-sm-6">
                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Añadir espacio</span></a>
              </div>
            </div>
          </div>

          <!--Comienza tablas CRUD-->

          <?php
          function tablaEstacion($estacion, $conexion){
          
            $html = '';

            $sql = "SELECT * FROM espacio_public WHERE estacionn_mexi = $estacion";
            $result = mysqli_query($conexion, $sql);

            $sqlEstacion = "SELECT nom_estacion FROM estacion_mexi WHERE id_estacion = $estacion";
            $resultEstacion = mysqli_query($conexion, $sqlEstacion);
            $nombreEstacion = mysqli_fetch_assoc($resultEstacion)['nom_estacion'];

            $html .= '<table class="table table-striped table-hover">';
            $html .= '<thead>';
            $html .= '<span style="font-size: 20px;">ID: ' . $estacion . '</span>';
            $html .= '<h1>' . $nombreEstacion . '</h1>';
            $html .= '<tr>';
            $html .= '<th>ID</th>';
            $html .= '<th>Dimensiones</th>';
            $html .= '<th>Disponibilidad</th>';
            $html .= '<th>Precio/Mensual</th>';
            $html .= '<th>Ubicación</th>';
            $html .= '<th>Acciones</th>';
            $html .= '</tr>';
            $html .= '</thead>';
            $html .= '<tbody>';

            while ($mostrar = mysqli_fetch_array($result)) {
              $html .= '<tr>';
              $html .= '<td>' . $mostrar['id_espacio'] . '</td>';
              $html .= '<td>' . $mostrar['dimensiones'] . '</td>';
              $html .= '<td>' . $mostrar['disponibilidad'] . '</td>';
              $html .= '<td>' . $mostrar['precio'] . '</td>';
              $html .= '<td>' . $mostrar['ubicacion'] . '</td>';
              $html .= '<td>';
              $html .= '<a href="#editEmployeeModal' . $mostrar['id_espacio'] . '" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
              $html .= '<a href="#deleteEmployeeModal' . $mostrar['id_espacio'] . '" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';
              $html .= '</td>';
              $html .= '</tr>';

              $html .= '<div id="editEmployeeModal' . $mostrar['id_espacio'] . '" class="modal fade" role="dialog">';
              $html .= '<div class="modal-dialog">';
              $html .= '<div class="modal-content">';
              $html .= '<form action="update_espacio.php" method="POST">';
              $html .= '<div class="modal-header">';
              $html .= '<h4 class="modal-title">Editar Espacio</h4>';
              $html .= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
              $html .= '</div>';
              $html .= '<div class="modal-body">';
              $html .= '<div class="form-group">';
              $html .= '<label><b>ID: ' . $mostrar['id_espacio'] . '</b></label>';
              $html .= '<input type="hidden" id="id_espacio" name="id_espacio" value="' . $mostrar['id_espacio'] . '" class="form-control">';
              $html .= '</div>';
              $html .= '<div class="form-group">';
              $html .= '<label>Precio:</label>';
              $html .= '<input type="number" id="precio" name="precio" value="' . $mostrar['precio'] . '" class="form-control" required>';
              $html .= '</div>';
              $html .= '</div>';
              $html .= '<div class="modal-footer">';
              $html .= '<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">';
              $html .= '<input type="submit" class="btn btn-info" value="Editar">';
              $html .= '</div>';
              $html .= '</form>';
              $html .= '</div>';
              $html .= '</div>';
              $html .= '</div>';

              $html .= '<div id="deleteEmployeeModal' . $mostrar['id_espacio'] . '" class="modal fade">';
              $html .= '<div class="modal-dialog">';
              $html .= '<div class="modal-content">';
              $html .= '<form action="delete_espacio.php" method="POST">';
              $html .= '<div class="modal-header">';
              $html .= '<h4 class="modal-title">Eliminar espacio</h4>';
              $html .= '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
              $html .= '</div>';
              $html .= '<div class="modal-body">';
              $html .= '<p>Estas seguro de borrar este espacio publicitario?</p>';
              $html .= '<p class="text-warning"><small>Esta acción no se puede revertir.</small></p>';
              $html .= '<input type="hidden" name="id_espacio" value="' . $mostrar['id_espacio'] . '">';
              $html .= '</div>';
              $html .= '<div class="modal-footer">';
              $html .= '<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">';
              $html .= '<input type="submit" class="btn btn-danger" value="Eliminar">';
              $html .= '</div>';
              $html .= '</form>';
              $html .= '</div>';
              $html .= '</div>';
              $html .= '</div>';
            }

            $html .= '</tbody>';
            $html .= '</table>';

            return $html;
          }

          for ($i = 103; $i <= 132; $i++) {
            echo tablaEstacion($i, $conexion);
            echo '<br><br>';
        }
          ?>

        </div>
      </div>
    </div>

    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="insert_espacio.php" method="POST">
            <div class="modal-header">
              <h4 class="modal-title"><b>Añadir espacio</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label><b>Dimensiones:</b></label>
                <select name="dimensiones" class="form-control" required>
                  <option>Selecciona un tamaño</option>
                  <option value="2x2">2x2</option>
                  <option value="3x3">3x3</option>
                  <option value="4x4">4x4</option>
                </select>
              </div>
              <div class="form-group">
                <label><b>Disponibilidad:</b></label>
                <select name="disponibilidad" class="form-control" required>
                  <option>Selecciona una opción</option>
                  <option value="Disponible">Disponible</option>
                  <option value="Ocupado">Ocupado</option>
                  <option value="Mantenimiento">Mantenimiento</option>
                </select>
              </div>
              <div class="form-group">
                <label><b>Precio:</b></label>
                <input type="number" name="precio" class="form-control" required>
              </div>
              <div class="form-group">
                <label><b>Ubicación:</b></label>
                <select name="ubicacion" class="form-control" required>
                  <option>Selecciona una opción</option>
                  <option value="Interior">Interior</option>
                  <option value="Exterior">Exterior</option>
                  <option value="Pasillo">Pasillo</option>
                </select>
              </div>
              <div class="form-group">

                <label><b>Estación:</b></label>
                <select name="id_estacion" class="form-control" required>
                  <option>Selecciona una estación</option>
                  <?php
                  $sql = "SELECT * FROM estacion_mexi WHERE nume_linea = 3";
                  $result = mysqli_query($conexion, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <option value="<?= $row['id_estacion']; ?>"><?= $row['nom_estacion'] ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
              <input type="submit" class="btn btn-success" value="Agregar espacio">
            </div>
          </form>
        </div>
      </div>
    </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>