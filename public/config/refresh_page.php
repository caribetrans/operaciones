
<?php
$agent_name=$_SESSION['fullname'];
$username=$_SESSION['user'];
include 'conexion_bd.php';
$sql= "SELECT * FROM config_user WHERE employee_name='$agent_name' ORDER BY employee_name ASC";
$params = array();
$options =  array("Scrollable" => SQLSRV_CURSOR_KEYSET);
$stmt = sqlsrv_query( $conn, $sql , $params, $options );
$i = 0;                           
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    $update_frequency=$row['update_frequency'];
$i++;
}
?>
<input type="hidden" value="<?php echo $update_frequency?>" id="refresh" name="refresh">
<script type="text/javascript">
    values= document.getElementById("refresh");
    setTimeout(function () { 
      location.reload();
    }, 60 * 5000);
</script>