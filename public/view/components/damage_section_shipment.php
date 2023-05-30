<script src="../js/damage_section_shipment.js"></script>
<div class="card container col-12 row m-0 d-flex justify-content-center">
<div class="container col-12 row d-flex justify-content-center">
<div class="card container col-lg-11 bg-dark mt-2  mb-2">
<h4 class="container bg-dark text-left mb-0 text-light ">Sección B</h4>
</div>

<div class="col-1 mt-2 mb-2" role="group" aria-label="Basic mixed styles example">
<button type="button" class="btn btn-danger" style="display:none"  id="closet_damage_section_shipment"><i class="fa-solid fa-circle-minus"></i></button>
<button type="button" class="btn btn-success"   id="open_damage_section_shipment"><i class="fa-solid fa-circle-plus"></i></button>
</div>
</div>

<div class="container row col-12 m-0" id="container_damage_section_shipment" style="display:none">
<h4 class="text-center">Sección de daños</h4>
<h6 class="text-center">(Complete en caso de daños a la carga)</h6>
<br>

<div class="container card col-12 mb-2">
    <div class="container row">
<div class="mb-3 col-lg-6">
  <label for="exampleFormControlInput1" class="form-label">Lugar donde se detectó la irregularidad</label>
  <input type="text" class="form-control" id="irregularity_place" name="irregularity_place" placeholder="Lugar donde se detectó la irregularidad">
</div>
<div class="mb-3 col-lg-6">
  <label for="exampleFormControlInput1" class="form-label">Nombre de la persona que detectó el daño</label>
  <input type="text" class="form-control" id="name_found_irregularity" name="name_found_irregularity" placeholder="Nombre de la persona que detectó el daño">
</div>
</div>
</div>
<div class="container card col-12 mb-2">
    <div class="container row">
<div class="mb-3 col-lg-2">
  <label for="exampleFormControlInput1" class="form-label">Tipo de embarque</label>
  <select class="form-select" id="packing_type" name="packing_type" aria-label="Default select example">
  <option selected></option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>

<div class="mb-3 col-lg-3">
  <label for="exampleFormControlInput1" class="form-label">Condición del empaque</label>
  <select class="form-select" id="packing_condition" name="packing_condition" aria-label="Default select example">
  <option selected></option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>
<div class="mb-3 col-lg-3">
  <label for="exampleFormControlInput1" class="form-label">Daño exteriores (empaque)</label>
  <select class="form-select" name="exterior_damage" name="exterior_damage" aria-label="Default select example">
  <option selected></option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>

<div class="mb-3 col-lg-3">
  <label for="exampleFormControlInput1" class="form-label">Daño interior (contenido)</label>
  <select class="form-select" id="interior_damage" name="interior_damage" aria-label="Default select example">
  <option selected></option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>

<div class="mb-3 col-lg-12">
  <label for="exampleFormControlInput1" class="form-label">Daños causados por</label>
  <textarea type="text" class="form-control" id="reason_damage" name="reason_damage"  placeholder="Tipo de irregularidad"> </textarea>
</div>

<div class="mb-3 col-lg-3">
  <label for="exampleFormControlInput1" class="form-label">Recuperable?</label>
  <select class="form-select" aria-label="Default select example" name="recoverable" name="recoverable">
  <option selected></option>
  <option value="1">SI</option>
  <option value="2">NO</option>
</select>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="../js/damage_section_shipment.js"></script>