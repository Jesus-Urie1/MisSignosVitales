<?php

session_start();

if (empty($_SESSION["usuario"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

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
</head>

<body class="">
   <!-- DASHBOARD -->
  <div class="wrapper ">
    <div class="sidebar" data-color="red">
      <div class="logo">
        <a class="simple-text logo-mini">
          <i><img src="../assets/img/care-white.png"></i>
        </a>
        <a href="index.php" class="simple-text logo-normal">
          DASHBOARD
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./index.php">
              <i class="now-ui-icons business_chart-bar-32 "></i>
              <p>Home</p>
            </a>
          </li>
          <li class="active ">
            <a href="./pulso.php">
              <i class="now-ui-icons media-2_sound-wave"></i>
              <p>Pulso</p>
            </a>
          </li>
          <li>
            <a href="./oxigenacion.php">
              <i class="now-ui-icons sport_user-run"></i>
              <p>Oxigenacion</p>
            </a>
          </li>
          <li>
            <a href="./temperatura.php">
              <i class="now-ui-icons emoticons_satisfied"></i>
              <p>Temperatura</p>
            </a>
          </li>
          <li>
            <a href="./perfil.php">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Perfil</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand">Pulso</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
        <iframe width="100%" height="100%" frameborder="0" src="https://stem.ubidots.com/app/dashboards/public/widget/-cnPQAbib6ED4ZPKyScQmFeo10g3yQBa9i4sYhkJ0D4?datePicker=true&embed=true"></iframe></div>
        <iframe width="100%" height="657" frameborder="0" src="https://stem.ubidots.com/app/dashboards/public/widget/Wfsa9ao5UiemDx62hwy7hqwaHuO-1c7mg1j4NH3Ulw8?datePicker=true&embed=true"></iframe> 
    </div>
  </div>
</body>
</html>