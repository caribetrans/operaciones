

<div class="container col-12 row justify-content-center">
<div class="card m-1" style="width: 18rem;">
<div class="container ">
<img src="public/assets/img/certool.png" class="card-img-top mt-4" style="width: 16rem;" alt="...">
</div>

  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Sistema Certool</h5>
    <a target="_blank" href=<?php echo $certool_rute?> class="btn btn-secondary d-flex justify-content-center  mt-4">Acceder</a>
  </div>
</div>

<div class="card m-1" style="width: 18rem;">
<div class="container d-flex justify-content-center">
  <img src="public/assets/img/soportetecnico.png" style="width: 7.8rem;"  class="card-img-top mt-2" alt="...">
  </div>

  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Soporte a usuario</h5>
    <a target="_blank" href=<?php echo $cttickets_rute?> class="btn btn-secondary d-flex justify-content-center mt-4">Acceder</a>
  </div>
</div>

<div class="card m-1" style="width: 18rem;">
<div class="container d-flex justify-content-center">
  <img src="public/assets/img/agenda7.png" style="width: 5.5rem; text-align:center;" class="card-img-top mt-2" alt="...">
  </div>

  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Directorio de contactos</h5>
    <a target="_blank" href=<?php echo $telephone_library_rute?>  class="btn btn-secondary d-flex justify-content-center  mt-4">Acceder</a>
  </div>
</div>

<div class="card m-1" style="width: 18rem;">
<div class="container d-flex justify-content-center">
  <img src="public/assets/img/correo.png" style="width: 7.2rem; text-align:center;" class="card-img-top mt-2" alt="...">
  </div>

  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Correo electrónico</h5>
    <a target="_blank" href=<?php echo $email_account_rute?> class="btn btn-secondary d-flex justify-content-center  mt-4">Acceder</a>
  </div>
</div>

<div class="card m-1" style="width: 18rem;">
<div class="container d-flex justify-content-center">
  <img src="public/assets/img/conexionremota.png" style="width: 5.2rem; text-align:center;" class="card-img-top mt-2" alt="...">
  </div>

  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Conexión remota</h5>
    <a target="_blank" href=<?php echo $remote_conexion_rute?> class="btn btn-secondary d-flex justify-content-center  mt-4">Acceder</a>
  </div>
</div>


<div class="card m-1" style="width: 18rem;">
<div class="container d-flex justify-content-center">
  <img src="public/assets/img/aduanas.jpeg" style="width: 13rem; text-align:center;" class="card-img-top mt-2" alt="...">
  </div>

  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Siga</h5>
    <a target="_blank" href=<?php echo $siga?> class="btn btn-secondary d-flex justify-content-center  mt-4">Acceder</a>
  </div>
</div>

<div class="card m-1" style="width: 18rem;">
<div class="container d-flex justify-content-center">
  <img src="public/assets/img/caribetranslogo.png" style="width: 5.5rem; text-align:center;" class="card-img-top mt-2" alt="...">
  </div>

  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">SAP Bridge</h5>
    <a target="_blank" href=<?php echo $sapbrigde?> class="btn btn-secondary d-flex justify-content-center  mt-4">Acceder</a>
  </div>
</div>


<div class="card m-1" style="width: 18rem;">
<div class="container d-flex justify-content-center">
  <img src="public/assets/img/manualconexion.png" style="width: 5.3rem; text-align:center;" class="card-img-top mt-2" alt="...">
  </div>

  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Manual conexión remota</h5>
    <a target="_blank" href=<?php echo $manual_remote_conexion_rute?> class="btn btn-secondary d-flex justify-content-center  mt-4">Acceder</a>
  </div>
</div>


<div class="card m-1" style="width: 18rem;">
<div class="container d-flex justify-content-center">
  <img src="public/assets/img/warehouse-receipt.png" style="width: 5.3rem; text-align:center;" class="card-img-top mt-2" alt="...">
  </div>

  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Recibo de Bodega</h5>
    <a target="_blank" href=<?php echo $recibodebodega?> class="btn btn-secondary d-flex justify-content-center  mt-4">Acceder</a>
  </div>
</div>


<div class="card m-1" style="width: 18rem;">
<div class="container d-flex justify-content-center">
  <img src="public/assets/img/operaciones4.png" style="width: 7.5rem; text-align:center;" class="card-img-top mt-2" alt="...">
  </div>

  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Operaciones</h5>
    <a target="_blank" href=<?php echo $operaciones?>  class="btn btn-secondary d-flex justify-content-center  mt-4">Acceder</a>
  </div>
</div>

<?php if ($_SESSION['access']==1){ ?>
<div class="card m-1" style="width: 18rem;">
<div class="container d-flex justify-content-center">
  <img src="public/assets/img/kaspersky.png" style="width: 4.5rem; text-align:center;" class="card-img-top mt-2" alt="...">
  </div>


  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Kaspersky</h5>
    <a target="_blank" href=<?php echo $kaspersky?>  class="btn btn-secondary d-flex justify-content-center  mt-4">Descargar</a>
  </div>

</div>


<div class="card m-1" style="width: 18rem;">
<div class="container d-flex justify-content-center">
  <img src="public/assets/img/anydesk-client.png" style="width: 5.6rem; text-align:center;" class="card-img-top mt-3" alt="...">
  </div>

  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Windows</h5>
    <a target="_blank" href=<?php echo $anydeskclient_download?>  class="btn btn-secondary d-flex justify-content-center  mt-3">Descargar</a>
  </div>
</div>

<div class="card m-1" style="width: 18rem;">
<div class="container d-flex justify-content-center">
  <img src="public/assets/img/anydesk-client.png" style="width: 6rem; text-align:center;" class="card-img-top mt-2" alt="...">
  </div>

  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Mac OS</h5>
    <a target="_blank" href=<?php echo $anydeskclient_download_mac?>  class="btn btn-secondary d-flex justify-content-center  mt-3">Descargar</a>
  </div>
</div>
<?php } ?>



</div>

</div>
</div>