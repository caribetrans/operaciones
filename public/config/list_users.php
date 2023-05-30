<?php
include '../components/navbar.php';
header('Content-Type: text/html; charset=UTF-8');
$ldap_servidor='10.2.20.6';
$ldap_usuario='dcastillo@company.caribetrans.local';
$ldap_contrasena='Caribe.20';
//$ldap_dn = "OU=Domain Controllers,DC=dominio,DC=local";
$ldap_dn='OU=Aila,DC=company,DC=caribetrans,DC=local';
/*
* Conectamos con el servidor y nos autenticamos
*/
$ldap_conexion=ldap_connect('ldap://' . $ldap_servidor) or die('Error: no
se ha podido conectar con el Directorio Activo.');
ldap_set_option($ldap_conexion, LDAP_OPT_PROTOCOL_VERSION, 3);
$bind=@ldap_bind($ldap_conexion, $ldap_usuario, $ldap_contrasena) or
die('Error: no se ha podido abrir sesión en el Directorio Activo: '.
ldap_error($ldap_conexion));


/*
* Buscamos los usuarios
*/
$SEARCH_STRING="*";
$atributos=array('displayname','userprincipalname', 'mail');
$filtro='(&(objectclass=User)(!(objectclass=Computer)))';
$res=ldap_search($ldap_conexion, $ldap_dn, $filtro/*, $atributos*/);
$num_entradas=ldap_count_entries($ldap_conexion, $res);
$entradas=ldap_get_entries($ldap_conexion, $res);
sort($entradas,SORT_LOCALE_STRING);
//sort ($entradas);

echo '<p>La búsqueda ha devuelto <strong>' . $num_entradas . '</strong>
entrada(s):</p>';

?>
<table class="table table-responsive  col-12 table-bordered table-hover" >
    <thead >
    <tr class="table-secondary justify-content-center">
    <th scope="col">Nombre y apellido</th>
    <th scope="col">Nombre principal</th>
    <th scope="col">Correo electrónico</th>

    </tr>
  </thead>
  <tbody>
  <?php
  
foreach($entradas as $i){
  
foreach($atributos as $j){
 
?>
<td id="cell" ><?php echo ($i[$j][0]); ?></td>
<?php
}
?>
  </tr>
  <?php } ?>
     </tbody>
</table>
<?php
/*
* Cerramos la conexión
*/
//ldap_unbind($ldap_conexion);
ldap_close($ldap_conexion);


?>
