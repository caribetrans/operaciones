<script src="/operaciones/js/id.js" type="text/javascript"></script>
<script src="/operaciones/assets/autocomplete/autocomplete.js"></script>
<!------------------------PAGINACION------------------------------->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-md-center">
    <li class="page-item
    <?php echo $_GET['page']<=1 ? 'disabled' : ''?>">
    <a class="page-link" 
    href="<?php echo $rute?>?page=<?php echo $_GET['page']-1?>&order=<?php echo $_GET['order']?>&view=<?php echo $_GET['view']?>&find=<?php echo $_GET['find']?>">
    Anterior
    </a>
    </li>
    <?php for ($i1=0; $i1<$pages; $i1++): ?>
    <li class="page-item <?php echo $_GET['page']==$i1+1 ? 'active' : ''?>">
    <a class="page-link" href="<?php  echo $rute?>?page=<?php echo $i1+1 ?>&order=<?php echo $_GET['order']?>&view=<?php echo $_GET['view']?>&find=<?php echo $_GET['find']?>">
    <?php echo $i1+1 ?>
    </a>
    </li>
<?php endfor?>
    <li class="page-item
    <?php echo $_GET['page']>=$pages  ? 'disabled' : ''?>">
        <a class="page-link"  href="<?php echo $rute?>?page=<?php echo $_GET['page']+1?>&order=<?php echo $_GET['order']?>&view=<?php echo $_GET['view']?>&find=<?php echo $_GET['find']?>">Siguiente</a></li>
  </ul>
</nav>
<!------------------------------------------------------------------------------------------------------------------------------------------>