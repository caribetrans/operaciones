<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="public/assets/img/favicon.ico" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones - Inicio</title>

    <?php include 'public/config/head.php';?>
    <script src="js/id.js" type="text/javascript"></script>
    <script src="js/validations.js" type="text/javascript"></script>
    <?php include 'public/config/access_department.php';?>
    <?php include 'public/config/navbar.php';?>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <?php include 'components/loading.php'; ?>
    
</head>
<div class="loader"></div>
<body>
<div class="container justify-content-center">
<h1 class="text-center">Bienvenidos</h1>
<h1 class="text-center">Portal de Operaciones</h1>
</div>
<br>

<?php if ($_GET['menu']==''){ ?>
<div class="container justify-content-center">
<h3 class="text-center">Servicios</h3>
</div>
<?php } ?>

<?php if ($_GET['menu']!==''){ ?>
<div class="container justify-content-center">
<h3 class="text-center text-capitalize"><span class="badge badge-dark"><?php echo $_GET['menu']?></span></h3>
</div>
<?php } ?>


<div class="container col-10 justify-content-center">

  <?php  if ($_GET['menu']==''){ ?>
<?php include 'public/config/home_menu.php';?>
<?php } ?>


<?php  if ($_GET['menu']=='aereo'){ ?>
<?php include 'public/config/menu_aereo.php';?>
<?php } ?>

<?php  if ($_GET['menu']=='maritimo'){ ?>
<?php include 'public/config/menu_maritimo.php';?>
<?php } ?>


<?php  if ($_GET['menu']=='terrestre'){ ?>
<?php include 'public/config/menu_terrestre.php';?>
<?php } ?>



<?php  if ($_GET['menu']=='logistica'){ ?>
<?php include 'public/config/menu_logistica.php';?>
<?php } ?>
</div>

<?php  if ($_GET['menu']=='aereo-seguridad'){ ?>
<?php include 'public/config/menu_aereo_seguridad.php';?>
<?php } ?>
</div>

<br>
<br>
<br>
<br>
<br>
<?php require 'public/config/footer.php'?>
</body>
</html>