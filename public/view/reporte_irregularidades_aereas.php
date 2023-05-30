<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico" />
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/navbar.css" rel="stylesheet" type="text/css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RI - Aéreo</title>
</head>
<body>
<?php include '../config/navbar.php';?>
<?php include '../config/head.php';?>

<form class="needs-validation" autocomplete="off" action="" method="POST"  id="form_reporte_irregularidades_carga">



<br>
<div class="container col-8">

<div class="card mb-1">
<h4 class="text-center">Departamento de Seguridad</h4>
<h2 class="text-center">Reporte de irregularidades con la carga</h2>
</div>
    
<div class="card">
<?php $title_information_section="Sección A";?>
<?php include "./components/section_a.php" ?>
</div>
<br>

<div class="card">
<?php $damage_section_shipment="Sección B";?>
<?php include "./components/section_b.php" ?>
</div>
<br>

<div class="card">
<?php $missing_section_shipment="Sección C";?>
<?php include "./components/section_c.php" ?>
</div>

<br>

<?php include "./components/buttons.php" ?>


</div>

</body>
</html>
<?php include 'footer.php';?>

