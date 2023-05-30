<?php
include 'count_tickets_months.php';
$month_number=$month;
switch ($month_number) {
    case 1:
        $months="Enero";
        $last_month="Diciembre"; 
        //echo "Enero";
        break;
    case 2:
        $months="Febrero";
        $last_month="Enero"; 
        //echo "Febrero";
        break;
    case 3:
        $months="Marzo";
        $last_month="Febrero"; 
        //echo "Marzo";
        break;
    case 4:
        $months="Abril";
        $last_month="Marzo"; 
       //echo "Abril";
        break;
    case 5:
        $months="Mayo";
        $last_month="Abril"; 
        //echo "Mayo";
        break;
    case 6:
        $months="Junio";
        $last_month="Mayo"; 
        //echo "Junio";
        break;
    case 7:
        $months="Julio";
        $last_month="Junio"; 
        //echo "Julio";
        break;
    case 8:
        $months="Agosto";
        $last_month="Julio"; 
        //echo "Agosto";
        break;
    case 9:
        $months="Septiembre";
        $last_month="Agosto"; 
        //echo "Septiembre";
        break;
    case 10:
        $months="Octubre";
        $last_month="Septiembre"; 
        //echo "Octubre";
        break;
    case 11:
        $months="Noviembre";
        $last_month="Octubre"; 
        //echo "Noviembre";
        break;
    case 12:
        $months="Diciembre";
        $last_month="Noviembre"; 
        //echo "Diciembre";
        break;
}
?>

