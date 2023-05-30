<!---------------------------NAVBAR------------------------------------->
<?php
include 'config/session.php';
include 'config/access_depto.php';
include 'access_depto.php';
include 'rutes.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href=<?php echo $main_rute ?>>Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        < <li class="nav-item dropdown">
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

      

    </div>
    <form class="btn-group my-2 my-lg-0 m-1" method="get" action="/operaciones/config/logout.php">
      <button type="submit"  class="btn btn-danger ml-2"> <?php if ($_SESSION['fullname']!==''){ echo "$_SESSION[fullname]";}?> <?php if ($_SESSION['fullname']==''){ echo "Visitante";}?> <span><i class="fas fa-user-circle ml-2 fa-lg"></span></i><span class="ml-1"> <i class="fas fa-sign-out-alt fa-lg"></i></span></button>
    </form>
  </div>
</nav>

<div class="mt-2 m-2">
<img src="/operaciones/public/assets/img/caribetranslogo.png" href="http://operaciones/index.com">

</div>
