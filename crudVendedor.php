<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CRUD Vendedor</title>
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
body {
    margin: 0;
    font-family: Arial, sans-serif;
  }

  .navbar2 {
    overflow: hidden;
    background-color: #a0a0a0;
  }
  .navbar2 a {
    float: right;
    display: block;
    color: #435D7D;
    text-align: center;
    padding: 30px 30px;
    text-decoration: none;
  }
  .navbar2 a:hover {
    background-color: #aaaaaa;
    color: black;
  }

  .profile-img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
  }
  .dropdown-toggle::after {
    display: none;
  }
  .dropdown-item {
    display: flex;
    align-items: center;
  }
  .dropdown-item i {
    margin-right: 10px;
  }
  .dropdown-divider {
    margin: 0.5rem 0;
    border-color: rgba(0,0,0,.1);
  }

  </style>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-top: 30px; background-color: #f8f9fa !important;">
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
</nav>


  <main id="main">

    <!-- =======  Section ======= -->
    <div class="container-xl">
      <div class="table-responsive">
        <div class="table-wrapper">
          <div class="table-title">
            <div class="row">
              <div class="col-sm-6">
                <h2>Administrar <b>Clientes</b></h2>
              </div>
              <div class="col-sm-6">
                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Nueva renta</span></a>
                <a href="reporte.php" class="btn btn-success"><i class="fa-solid fa-file"></i><span>Descargar reporte</span></a>
              </div>
            </div>
          </div>

          <!--Tabla Ojo de Agua-->
          <table class="table table-striped table-hover">
            <thead>
              <span style="font-size: 20px;"></span>
              <tr>
                <th>ID Cliente</th>
                <th>Nombre/Razon Social</th>
                <th>Apellidos</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Linea</th>
                <th>Estacion</th>
                <th>Num. Espacio</th>
                <th>Fecha inicio</th>
                <th>Fecha Fin</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $sql = "SELECT * FROM clientes";
              $result = mysqli_query($conexion, $sql);

              while ($mostrar = mysqli_fetch_array($result)) {
              ?>
                <tr>
                  <td><?php echo $mostrar['id_cliente'] ?></td>
                  <td><?php echo $mostrar['nombre_razon'] ?></td>
                  <td><?php echo $mostrar['apellidos'] ?></td>
                  <td><?php echo $mostrar['correo'] ?></td>
                  <td><?php echo $mostrar['telefono'] ?></td>
                  <td><?php echo $mostrar['linea'] ?></td>
                  <td><?php echo $mostrar['estacion'] ?></td>
                  <td><?php echo $mostrar['num_espacio'] ?></td>
                  <td><?php echo $mostrar['fecha_inicio'] ?></td>
                  <td><?php echo $mostrar['fecha_fin'] ?></td>
                  <td>
                    <a href="#deleteEmployeeModal<?= $mostrar['id_cliente']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                  </td>
                </tr>

                <div id="deleteEmployeeModal<?= $mostrar['id_cliente']; ?>" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form action="delete_client.php" method="POST">
                        <div class="modal-header">
                          <h4 class="modal-title">Eliminar cliente</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <p>Estás seguro de eliminar este registro?</p>
                          <p class="text-warning"><small>Esta acción no se puede revertir.</small></p>
                          <input type="hidden" name="id_cliente" value="<?= $mostrar['id_cliente'] ?>">
                        </div>
                        <div class="modal-footer">
                          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                          <input type="submit" class="btn btn-danger" value="Eliminar">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
              <tr>

              </tr>
            </tbody>
          </table>
          <br><br>

        </div>
      </div>
    </div>

    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="insert_cliente.php" method="POST">
            <div class="modal-header">
              <h4 class="modal-title"><b>Registrar cliente</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label><b>Nombre/Razón Social:</b></label>
                <input type="text" name="nombre" class="form-control" required>
              </div>
              <div class="form-group">
                <label><b>Apellidos:</b></label>
                <input type="text" name="apellidos" class="form-control" required>
              </div>
              <div class="form-group">
                <label><b>Correo:</b></label>
                <input type="text" name="correo" class="form-control" required>
              </div>
              <div class="form-group">
                <label><b>Telefono:</b></label>
                <input type="number" name="telefono" class="form-control" required>
              </div>
              <div class="form-group">
                <label><b>Línea:</b></label>
                <select name="linea" id="linea" class="form-control" required>
                  <option value="">Selecciona una línea</option>
                  <?php
                  $sql = "SELECT * FROM linea_mexi";
                  $result = mysqli_query($conexion, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                    <option value="<?= $row['num_linea']; ?>"><?= $row['num_linea']; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label><b>Estación:</b></label>
                <select name="estacion" id="estacion" class="form-control" required>
                  <option value="">Selecciona una estación</option>

                </select>
              </div>
              <div class="form-group">
                <label><b>Espacio:</b></label>
                <select name="espacios" id="espacio" class="form-control" required>
                  <option value="">Selecciona un espacio</option>

                </select>
              </div>

              <div class="form-group">
                <label><b>Fecha Inicio:</b></label>
                <input type="date" name="fecha_inicio" class="form-control" required>
              </div>
              <div class="form-group">
                <label><b>Fecha Fin:</b></label>
                <input type="date" name="fecha_fin" class="form-control" required>
              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
              <input type="submit" class="btn btn-success" value="Agregar cliente">
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
  <script>
  $(document).ready(function () {
    $('#linea').change(function () {
        var linea = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'getEstacion.php',
            data: {linea: linea},
            success: function (response) {
                var jsonData = JSON.parse(response);
                $('#estacion').html('');
                $('#espacio').html('');
                for (var i = 0; i < jsonData.estaciones.length; i++) {
                    $('#estacion').append('<option value="' + jsonData.estaciones[i].id_estacion + '">' + jsonData.estaciones[i].nom_estacion + '</option>');
                }
            }
        });
    });

    $('#estacion').change(function () {
        var estacion = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'getEspacio.php',
            data: {estacion: estacion},
            success: function (response) {
                var jsonData = JSON.parse(response);
                $('#espacio').html('');
                for (var j = 0; j < jsonData.espacios.length; j++) {
                    $('#espacio').append('<option value="' + jsonData.espacios[j].id_espacio + '">' + jsonData.espacios[j].id_espacio + '</option>');
                }
            }
        });
    });
});

</script>

</body>

</html>