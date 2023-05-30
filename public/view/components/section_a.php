<script src="../js/shipment_section_information.js"></script>

 <div class="container col-12 row m-0 d-flex justify-content-center">
 <!----------------------------------------------------------------------------> 
<div class="card container col-lg-11 bg-dark mt-2 m-0">
<h4 class="container bg-dark text-left text-light "><?php echo $title_information_section ?> </h4>
</div>
 <!----------------------------------------------------------------------------> 

<div class="col-1 mt-2 " role="group" aria-label="Basic mixed styles example">
<button type="button" class="btn btn-danger"  id="closet_section_information"><i class="fa-solid fa-circle-minus"></i></button>
<button type="button" class="btn btn-primary"   id="open_section_information"><i class="fa-solid fa-circle-plus"></i></button>
</div>
</div>

<br>
<div class="container row col-12 m-0" id="container_section_information" style="display:none">
<h4 class="text-center">Información de la carga</h4>
<br>


<div class="container card col-12 mb-2">
    <div class="container row d-flex justify-content-center m-0">
<div class="mb-3 col-lg-4">
  <label for="exampleFormControlInput1" class="form-label">Número de guía</label>
  <input type="text" class="form-control" autofocus="autofocus" required id="airbill_number"name="airbill_number" placeholder="Número de guía" >
</div>
<div class="mb-3 col-lg-8">
  <label for="exampleFormControlInput1" class="form-label">Embarcador o consignatario</label>
  <input type="text" class="form-control" required id="client" name="client" placeholder="Embarcador o consignatario">
</div>
</div>
</div>
<div class="container card col-12 mb-2 ">
    <div class="container row d-flex justify-content-center m-0">
<div class="mb-3 col-lg-2">
  <label for="exampleFormControlInput1" class="form-label">Origen</label>
  <input type="text" class="form-control" required id="origin" name="origin" placeholder="Origen">
</div>
<div class="mb-3 col-lg-2">
  <label for="exampleFormControlInput1" class="form-label">Fecha de llegada</label>
  <input type="date" class="form-control" required id="arrival_date" name="arrival_date" placeholder="Fecha de llegada">
</div>

<div class="mb-3 col-lg-2">
  <label for="exampleFormControlInput1" class="form-label">No.Vuelo</label>
  <input type="text" class="form-control" required id="flight_number" name="flight_number" placeholder="No. Vuelo">
</div>

<div class="mb-3 col-lg-2">
  <label for="exampleFormControlInput1" class="form-label">Peso</label>
  <input type="text" class="form-control" required id="weight_awb" name="weight_awb" placeholder="Peso según AWB">
</div>

<div class="mb-3 col-lg-2">
  <label for="exampleFormControlInput1" class="form-label">No. Piezas</label>
  <input type="text" class="form-control" required id="pcs_awb" name="pcs_awb" placeholder="No. Piezas según AWB">
</div>
<div class="mb-3 col-lg-2">
  <label for="exampleFormControlInput1" class="form-label">No. Piezas recibidas</label>
  <input type="text" class="form-control" required id="received_pcs" name="received_pcs" placeholder="No. Piezas recibidas">
</div>

<div class="mb-3 col-lg-3">
  <label for="exampleFormControlInput1"  class="form-label">Tipo de irregularidad</label>
  <select class="form-control" required id="irregularity_type" name="irregularity_type" aria-label="Default select example" title="Seleccione" placeholder="Seleccione" oninvalid="this.setCustomValidity('Por favor, completar este campo')" oninput="setCustomValidity('')">
  <option selected></option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>

<div class="mb-3 col-lg-9">
  <label for="exampleFormControlInput1" class="form-label">Contenido según guía</label>
  <input type="text" class="form-control" required id="contents_awb" name="contents_awb" placeholder="Contenido según guía">
</div>
</div>
</div>
</div>

<script src="../js/shipment_section_information.js"></script>