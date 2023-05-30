<?php
include '../config/session.php';
include '../config/conexion_bd.php';
$user=$_SESSION[fullname];
$sql= "SELECT * FROM config_user WHERE employee_name='$user'";
$params = array();
$options =  array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$stmt = sqlsrv_query( $conn, $sql , $params, $options );
$i = 0;                           
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
$itemsxpages_user=$row['recordsxpages'];
$itemsxpages1=$row['recordsxpages'];
$i++;
}

$itemsxpages_default=51;

if ($itemsxpages_user==''){
    $itemsxpages=$itemsxpages_default;
$start=($_GET['page']-1)*$itemsxpages;
    $itemsxpages_default=51;
}else{
    $itemsxpages=$itemsxpages_user;
$start=($_GET['page']-1)*$itemsxpages;
}
?>