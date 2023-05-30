<?php
//$usuario="root";
$usuario="sa";
$pass="C.trans0102";
$servidor="10.1.70.33";
//$servidor="10.2.10.54";
//$servidor="SVR-HPINSIGH\SQLEXPRESS";
//$basededatos="recibo_bodega_db";
//$basededatos="cttickets";
$basededatos="employees";
$info=array ('Database'=>$basededatos, 'UID'=>$usuario, 'PWD'=>$pass);
$conn=sqlsrv_connect($servidor,$info);
//if($conn){
//echo"Conexion exitosa";
//}else {
  // echo "Error de conexion";
 // die (print_r(sqlsrv_errors(),true));
//}

