<?php
$date=date_default_timezone_set('America/Caracas');
$t_date_time=date ('Y-m-d H:i:s');

$day = date("l");
switch ($day) {
    case "Sunday":
        $day;
        $dia="Domingo";
           //echo "Domingo";
    break;
    case "Monday":
        $day;
        $dia="Lunes";
           //echo "Lunes";
    break;
    case "Tuesday":
        $day;
        $dia="Martes";
           //echo "Martes";
    break;
    case "Wednesday":
        $day;
        $dia="Miércoles";
           //echo "Miércoles";
    break;
    case "Thursday":
        $day;
        $dia="Jueves";
           //echo "Jueves";
    break;
    case "Friday":
        $day;
        $dia="Viernes";
           //echo "Viernes";
    break;
    case "Saturday":
        $day;
        $dia="Sábado";
           //echo "Sábado";
    break;
}
?>