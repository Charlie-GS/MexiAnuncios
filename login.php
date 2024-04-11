<?php
include 'database.php';

session_start();

if (isset($_GET['cerrar_sesion'])) {
  session_unset();

  session_destroy();
}

if (isset($_SESSION['tipo_rol'])) {
  switch ($_SESSION['tipo_rol']) {
    case 1:
      header('Location: crudLinea1.php');
      break;

    case 2:
      header('Location: crudVendedor.php');
      break;
    default:
  }
}

if (isset($_POST['correo']) && isset($_POST['contrasena'])) {
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  $db = new Database();
  $query = $db->connect()->prepare('SELECT * FROM usuarios WHERE correo = :correo AND contrasena = :contrasena');
  $query->execute(['correo' => $correo, 'contrasena' => $contrasena]);

  $row = $query->fetch(PDO::FETCH_NUM);
  if ($row == true) {
    $rol = $row[3];
    $_SESSION['tipo_rol'] = $rol;

    switch ($_SESSION['tipo_rol']) {
      case 1:
        header('location: crudLinea1.php');
        break;
      case 2:
        header('Location: crudVendedor.php');
        break;
      default:
    }
  } else {
    $mensaje_error = "<b>El usuario no existe</b>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login Admin</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-contact">

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
          <li><a href="index.html" style="color: red;">Inicio</a></li>

        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">



                <div class="card mb-3">

                  <div class="card-body">

                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Iniciar Sesión</h5>
                      <p class="text-center small">Ingresa tu correo y tu contraseña</p>
                    </div>

                    <form method="POST" class="row g-3 needs-validation" novalidate>
                      <div id="mensaje-error" class="text-danger text-center mb-3"><?php echo isset($mensaje_error) ? $mensaje_error : ''; ?></div>
                      <div class="col-12">
                        <label for="yourUsername" class="form-label">Correo</label>
                        <div class="input-group has-validation">
                          <input type="text" name="correo" class="form-control" id="yourUsername" required>
                          <div class="invalid-feedback">Porfavor introduce tu correo.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Contraseña</label>
                        <div class="input-group">
                          <input type="password" name="contrasena" class="form-control" id="yourPassword" required>
                          <div class="invalid-feedback">Por favor introduce tu contraseña!</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="showPassword">
                          <label class="form-check-label" for="showPassword">
                            Mostrar Contraseña
                          </label>
                        </div>
                      </div>


                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit" style="background-color: #831205;">Iniciar sesión</button>
                      </div>
                      <div class="col-12">
                      </div>
                    </form>

                  </div>
                </div>



              </div>
            </div>
          </div>

        </section>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

  



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
    document.getElementById('showPassword').addEventListener('change', function () {
        var passwordInput = document.getElementById('yourPassword');
        if (this.checked) {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
</script>


</body>

</html>