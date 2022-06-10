<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/care.png">
    <link rel="icon" type="image/png" href="../assets/img/care.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Mis signos Vitales
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="../SweetAlert/dist/sweetalert2.min.css">
    <script src="../SweetAlert/dist/sweetalert2.all.min.js"></script>
  </head>
<body>
    <div class="d-flex justify-content-center m-5 p-5">
        <form action="login_b.php" method="post">
            <div align="center"><img width="100px" height="100px" src="../assets/img/care.png"></div>
            <h4 class="title">MIS SIGNOS VITALES</h4>
            <input name="usuario" type="text" placeholder="Email" class="form-control" required>
            <br>
            <input name="contraseña" type="password" placeholder="Contraseña" class="form-control" required>
            <br>
            <?php if(!empty($error)): ?>
            <div class="h5">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            <div align="center"><button class="btn btn-danger btn-round btn-lg" type="submit">Iniciar Sesion</button></div>
        </form>
    </div>
</body>
</html>