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
         <li >
           <a href="./index.php">
             <i class="now-ui-icons business_chart-bar-32 "></i>
             <p>Home</p>
           </a>
         </li>
         <li>
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
         <li class="active ">
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
            <a class="navbar-brand">Perfil</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Tu Perfil</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nombre(s)</label>
                        <input type="text" class="form-control" placeholder="Company" value="Mike">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="Andrew Smith">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Enfermedad</label>
                        <input type="text" class="form-control"  placeholder="Company" value="Hipertencion Arterial">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Sexo</label>
                        <input type="text" class="form-control" placeholder="Sexo" value="Hombre">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" placeholder="Email" value="mike_andrew@gmail.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Edad</label>
                        <input type="text" class="form-control" placeholder="Edad" value="25 años">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Peso</label>
                        <input type="text" class="form-control" placeholder="Peso" value="82 kg">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Estatura</label>
                        <input type="text" class="form-control" placeholder="Estatura" value="175 cm">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Direccion</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="author">
                <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                <h5 class="title">Mike Andrew</h5>
                <a class="btn btn-danger btn-round" href="logout.php">Cerrar sesión</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>