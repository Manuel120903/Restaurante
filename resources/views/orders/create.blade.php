<form class="row g-3 needs-validation"  action="/admin/orders" novalidate method="POST">>
  @csrf
  <div class="col-2">
    {{-- separador de columnas --}}
</div>
  <div class="col-md-3">
    <label for="validationDefault01" class="form-label">Ingrese nombre del cliente</label>
    <input type="text" class="form-control" id="validationDefault01"  maxlength="50" required>
    <div class="valid-feedback">
      Muy bien
    </div>
    <div class="invalid-feedback">
      Porfavor inserta nombre del cliente
    </div>
  </div>
  
  <div class="col-1">
        {{-- separador de columnas --}}
  </div>
  <div class="col-md-4">
    <label for="validationDefault04" class="form-label">Seleccione una mesa</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value=""> seleccione una mesa</option>
      <option>Mesa 1</option>
      <option>Mesa 2</option>
      <option>Mesa 3</option>
      <option>Mesa 4</option>
    </select>
    <div class="valid-feedback">
      Muy bien
    </div>
    <div class="invalid-feedback">
      Porfavor inserta alguna opción
    </div>
  </div>
  <div class="col-2">
    {{-- separador de columnas --}}
</div>

  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Seleccione el platillo</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value=""> seleccione un platillo</option>
      <option>Ninguna</option>
      <option>Huevos</option>
      <option>Chilaquiles</option>
      <option>Lonche de Jamon</option>

    </select>
    <div class="valid-feedback">
      Muy bien
    </div>
    <div class="invalid-feedback">
      Porfavor inserta alguna opción
    </div>
  </div>
  <div class="col-1">
    {{-- separador de columnas --}}
</div>
  <div class="col-md-4">
    <label for="validationDefault04" class="form-label">Seleccione la bebida</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value=""> seleccione una bebida</option>
      <option>Cafe</option>
      <option>Agua de Sabor</option>
      <option>Refrescos</option>

    </select>
    <div class="valid-feedback">
      Muy bien
    </div>
    <div class="invalid-feedback">
      Porfavor inserta alguina opción
    </div>
  </div>
  <div class="col-1">
    {{-- separador de columnas --}}
  </div>
  <div class="col-2">
    {{-- separador de columnas --}}
  </div>
  <div class="col-md-3">
    <label for="exampleFormControlTextarea1" class="form-label">Descripcion del Cliente</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="col-1">
    {{-- separador de columnas --}}
  </div>
  
  <div class="col-4">
    <label for="formFileSm" class="form-label">Ingrese una foto de la orden</label>
    <input class="form-control form-control-sm" id="formFileSm"  type="file" >
    
  </div>
  <div class="col-8">
    {{-- separador de columnas --}}
</div>
<div class="col-6">
  {{-- separador de columnas --}}
</div>
  <div class="col-5">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Si todo esta bien seleccionado dale a confirmar
      </label>
    </div>
  </div>
  <div class="col-6">
        {{-- separador de columnas --}}
  </div>
  <div class="col-4">
    <button class="btn btn-primary" type="submit">Confirmar</button>
  </div>
  <div class="col-6">
    {{-- separador de columnas --}}
</div>
</form>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>