<script src="../js/missing_section_shipment.js"></script>

<div class="container col-12 row m-0 d-flex justify-content-center mb-2">
 <!----------------------------------------------------------------------------> 
<div class="card container col-lg-11 bg-dark mt-2 m-0">
<h4 class="container bg-dark text-left text-light ">Sección C</h4>
</div>
 <!----------------------------------------------------------------------------> 

<div class="col-1 mt-2 " role="group" aria-label="Basic mixed styles example">
<button type="button" class="btn btn-danger" style="display:none"   id="closet_missing_section_shipment"><i class="fa-solid fa-circle-minus"></i></button>
<button type="button" class="btn btn-primary"   id="open_missing_section_shipment"><i class="fa-solid fa-circle-plus"></i></button>
</div>
</div>
<br>
<div class="container row col-12 m-0" id="container_missing_section_shipment" style="display:none">
<h4 class="text-center">Sección de faltantes o robo de carga</h4>
<h6 class="text-center">(Complete en caso de haber faltantes de mercancía)</h6>
<br>


<div class="container card col-12 mb-2">
    <div class="container row">
<div class="mb-3 col-lg-6">
  <label for="exampleFormControlInput1" class="form-label">Lugar donde fue detectada la irregularidad</label>
  <input type="text" class="form-control" id="detected_place"  name="detected_place" placeholder="Lugar donde fue detectada la irregularidad">
</div>
<div class="mb-3 col-lg-6">
  <label for="exampleFormControlInput1" class="form-label">Nombre de la persona que detectó el faltante</label>
  <input type="text" class="form-control" id="name_detecte_missing" name="name_detecte_missing" placeholder="Nombre de la persona que detectó el faltante">
</div>

<div class="mb-3 col-lg-3">
  <label for="exampleFormControlInput1" class="form-label">No. Piezas comprometidas</label>
  <input type="text" class="form-control" id="implicated_pcs" name="implicated_pcs" placeholder="No. Piezas comprometidas">
</div>

<div class="mb-3 col-lg-12">
  <label for="exampleFormControlInput1" class="form-label">Describa como fue comprometida la carga</label>
  <input type="text" class="form-control" id="description_damage" name="description_damage" placeholder="Describa como fue comprometida la carga">
</div>

<div class="mb-3 col-lg-12">
  <label for="exampleFormControlInput1" class="form-label">Nombres de las personas que trabajaron con la carga</label>
  <input type="text" class="form-control" id="names_people_work" name="names_people_work" placeholder="Nombres de las personas que trabajaron con la carga">
</div>
</div>
</div>


<div class="container d-flex justify-content-center">
<label class="form-check-label" for="flexCheckDefault">Anexos</label>
  </div>

  <div class="card mb-2">
    
<div class="container row col-12 mt-4 justify-content-center">

    <div class="container row col-3">
    <div class="form-check">
  <input class="form-check-input" type="checkbox" onchange="validation_1()" value="SI" id="awb_copy" name="awb_copy">
  <label class="form-check-label" for="awb_copy">
    Copia de guía
  </label>
</div>
</div>

<div class="container row col-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" onchange="validation_1()"   value="SI" id="manifest" name="manifest">
  <label class="form-check-label" for="manifest">
   Manifiesto
  </label>
</div>
</div>

<div class="container row col-3">
<div class="form-check">
  <input class="form-check-input" type="checkbox" onchange="validation_1()"  value="" id="photos" name="photos" >
  <label class="form-check-label" for="photos">
    Fotografías
  </label>
</div>
</div>

<div class="container row col-3 mb-4">
<div class="form-check">
  <input class="form-check-input" type="checkbox" onchange="validation_1()"  value="SI" id="others" >
  <label class="form-check-label" for="others">
   Otros
  </label>
</div>
</div>

<div class="mb-3" id="file_awb_copy" onchange="validation_1()" style="display:none">
  <label for="formFile" class="form-label">Copia de guía</label>
  <input class="form-control" type="file" id="file1">
</div>

<div class="mb-3" id="file_manifest" onchange="validation_1()" style="display:none">
  <label for="formFile" class="form-label">Manifiesto</label>
  <input class="form-control" type="file" id="file2">
</div>

<div class="mb-3" id="file_photos" onchange="validation_1()" style="display:none">
  <label for="formFile" class="form-label">Fotografías</label>
  <input class="form-control" type="file" id="file3">
</div>

<div class="mb-3" id="file_others" onchange="validation_1()" style="display:none">
  <label for="formFile" class="form-label">Otros</label>
  <input class="form-control" type="file" id="file4">
</div>

<br>
<div class="container mb-2">
<div class="mb-3 col-lg-12">
  <label for="exampleFormControlInput1" class="form-label">Comentarios</label>
  <textarea type="text" class="form-control" id="comments" name="comments" placeholder="Nombre de las personas que trabajaron con la carga"> </textarea>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="../js/missing_section_shipment.js"></script>

<script src="../js/missing_section_shipment.js"></script>