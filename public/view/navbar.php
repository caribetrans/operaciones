<?php include './public/config/rutes.php';?>
<link rel="icon" type="image/png" href="/public/assets/img/favicon.ico" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


<link href="./public/css/navbar.css" rel="stylesheet" type="text/css">
<script src="https://kit.fontawesome.com/58ee136694.js" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Compiled and minified CSS -->

  <div class="container-fluid">
  <a class="navbar-brand" href=<?php echo $main_rute ?>>Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Seguridad</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="" data-bs-toggle="dropdown" aria-expanded="false">Aéreo</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"  href=<?php echo $reporteIrregularidades?>><i class="fa-solid fa-cart-shopping"></i> Reporte de irregularidades</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href=""><i class="fa-solid fa-user-plus fa-lg"></i> Marítima</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="" data-bs-toggle="dropdown" aria-expanded="false">3</a>
                            <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"></a></li>
                                    <li><a class="dropdown-item" href="#"></a></li>
                                </ul>
                                </ul>
                            </li>

                            <li><hr class="dropdown-divider"></li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="" data-bs-toggle="dropdown" aria-expanded="false">Marítima</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"  href=<?php echo $purchase_request?>><i class="fa-solid fa-cart-shopping"></i> Productos & Servicios</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href=""><i class="fa-solid fa-user-plus fa-lg"></i> Marítima</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="" data-bs-toggle="dropdown" aria-expanded="false">3</a>
                            <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"></a></li>
                                    <li><a class="dropdown-item" href="#"></a></li>
                                </ul>
                                </ul>
                            </li>

                            
          </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Control
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item"  href=<?php echo $employees_rute ?>><i class="fa-solid fa-address-card fa-lg"></i> Empleados</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item"  href=<?php echo $new_employees_requests ?>><i class="fa-solid fa-address-card fa-lg"></i> Solicitudes reclutamiento</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0 m-1" method="get" action="/portalcaribetrans/config/logout.php">
      <button type="submit"  class="btn btn-danger ml-2"> <?php if ($_SESSION['fullname']!==''){ echo "$_SESSION[fullname]";}?> <?php if ($_SESSION['fullname']==''){ echo "Visitante";}?> <span><i class="fas fa-user-circle ml-2 fa-lg"></span></i><span class="ml-1"> <i class="fas fa-sign-out-alt fa-lg"></i></span></button>
    </form>
    </div>
  </div>
</nav>

<div class="mt-2 m-2">
<img src="/cttickets/img/caribetranslogo.png"  href="http:/cttickets/index.com">
</div>
