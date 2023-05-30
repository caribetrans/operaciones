<header>
<link rel="icon" type="image/png" href="../img/favicon.ico" />
<script src="../assets/sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="../assets/sweetalert/dist/sweetalert2.all.js"></script>
<script src="../assets/sweetalert/dist/sweetalert2.js"></script>
<link rel="stylesheet" href="../assets/ssweetalert/dist/sweetalert.min.css" />
<script src="../assets/sweetalert/dist/sweetalert2.min.js  "></script>
</header>
<?php
// initialize session
session_start();
$url=$_GET['url'];
if(!isset($_SESSION['user'])) {
	
// user is not logged in, do something like redirect to login.php
header("Location: ../index.php");
die();
}
if ($url==''){
	$url='http://10.1.70.64/operaciones/index.php';
	$url1='http://10.1.70.64/operaciones/';
}else{
	$url=$_GET['url'];
}

if($_SESSION['access'] == 1) {
	// another example...
	// user is logged in but not a manager, let's stop him
	echo '<script>
	swal({
		title: "¡Bienvend@!",
		text: "'."".$_SESSION['user'].'" ,
		icon: "success",
		type: "success"
	}).then(function() {
		window.location = "'.$url.'";
	});
	</script>';
}
elseif($_SESSION['access'] == 2) {
	// another example...
	// user is logged in but not a manager, let's stop him
	echo '<script>
	swal({
		title: "¡Bienvend@!",
		text: "'."".$_SESSION['user'].'" ,
		icon: "success",
		type: "success"
	}).then(function() {
		window.location = "'.$url.'";
	});
	</script>';
}
elseif($_SESSION['access'] == 3) {
	// another example...
	// user is logged in but not a manager, let's stop him
	echo '<script>
	swal({
		title: "¡Bienvend@!",
		text: "'."".$_SESSION['user'].'" ,
		icon: "success",
		type: "success"
	}).then(function() {
		window.location = "'.$url.'";
	});
	</script>';
}

elseif($_SESSION['access'] == 4) {
	// another example...
	// user is logged in but not a manager, let's stop him
	echo '<script>
	swal({
		title: "¡Bienvend@!",
		text: "'."".$_SESSION['user'].'" ,
		icon: "success",
		type: "success"
	}).then(function() {
		window.location = "'.$url.'";
	});
	</script>';
}elseif($_SESSION['access'] == 6) {
	// another example...
	// user is logged in but not a manager, let's stop him
	echo '<script>
	swal({
		title: "¡Bienvend@!",
		text: "'."".$_SESSION['user'].'" ,
		icon: "success",
		type: "success"
	}).then(function() {
		window.location = "'.$url.'";
	});
	</script>';
}else{
	echo '<script>
	swal({
		title: "¡Acceso denegado",
		text: "Por favor, verifique el usuario y contraseña" ,
		icon: "warning", 
		type: "warning"
	}).then(function() {
		window.history.go(-1)
	});
	</script>';
die();
}
?>
