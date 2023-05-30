<header>
<script src="../scss/sweetalert/sweetalert2.all.min.js"></script>
<script src="../scss/sweetalert/sweetalert2.all.js"></script>
<script src="../scss/sweetalert/sweetalert2.js"></script>
<link rel="stylesheet" href="./scss/sweetalert/sweetalert2.min.css" />
</header>
<?php


session_start();
if(!isset($_SESSION['user'])) {
	// user is not logged in, do something like redirect to login.php
    header("Location:/operaciones/components/login/index.php");
	die();
}
if($_SESSION['access'] ==2){
	// another example...
	// user is logged in but not a manager, let's stop him
	echo '<script>
    swal({
        title: "¡Acceso denegado!",
        text: "Usted no tiene permisos para acceder a este sitio.",
        icon: "warning",
        type: "warning"
    }).then(function() {
        window.history.go(-1)
    });
</script>';
die();
return false;
}elseif($_SESSION['access'] ==3){
	// another example...
	// user is logged in but not a manager, let's stop him
	echo '<script>
    swal({
        title: "¡Acceso denegado!",
        text: "Usted no tiene permisos para acceder a este sitio.",
        icon: "warning",
        type: "warning"
    }).then(function() {
        window.history.go(-1)
    });
</script>';
die();
return false;
}



?>