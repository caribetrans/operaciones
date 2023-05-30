<?php
include 'session.php';
switch ($_SESSION['access']) {
    case 1:
        $department='IT Soporte';
        break;
    case 2:
        $department='IT Programacion';
        break;
    case 3:
        $department='Mantenimiento';
        break;
    case 4:
        $department='Gestion Humana';
        break;
    case 5:
        $department='Sistema de Tickets';
        break;
}

if ($department=='Tecnologia'){
    $department='IT Soporte';
}


?>