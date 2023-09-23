<form class="row g-3  needs-validation"  action="/admin/users" novalidate method="POST">
  @csrf
    <div class="col-2">
          {{-- separador de columnas --}}
    </div>
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Ingrese un nombre</label>
      <input type="text" class="form-control" id="validationDefault01"  maxlength="50" required>
      <div class="valid-feedback">
        Muy bien
      </div>
      <div class="invalid-feedback">
        Porfavor inserta un nombre de usuario
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationDefault02" class="form-label">Ingrese un numero de telefono</label>
      <input type="number" class="form-control" id="validationDefault02" maxlength="10" required>
      <div class="valid-feedback">
        Muy bien
      </div>
      <div class="invalid-feedback">
        Porfavor inserta un numero de telefono
      </div>
    </div>
    <div class="col-3">
              {{-- separador de columnas --}}
    </div>
    <div class="col-md-3">
      <label for="validationDefaultUsername" class="form-label">Ingrese un correo</label>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2">@</span>
        <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    
    <div class="col-md-3">
      <label for="validationDefault03" class="form-label">Ingrese una contraseña</label>
      <input type="password" class="form-control" id="validationDefault03" required>
      <div class="valid-feedback">
        Muy bien
      </div>
      <div class="invalid-feedback">
        Porfavor inserta una contraseña
      </div>
    </div>
    <div class="col-4">
          {{-- separador de columnas --}}
    </div>
    <div class="col-md-3">
      <label for="validationDefault04" class="form-label">Ingrese una categoria</label>
      <select class="form-select" id="validationDefault04" required>
        <option selected disabled value="">Escoje...</option>
        <option>Cocinero</option>
        <option>Mesero</option>
        <option>Caja</option>
      </select>
    </div>
    <div class="col-3">
      <label for="formFileSm" class="form-label">Ingrese una foto del usuario</label>
      <input class="form-control form-control-sm" id="formFileSm"  type="file" required>
      <div class="valid-feedback">
        Muy bien
      </div>
      <div class="invalid-feedback">
        Porfavor inserte una imagen
      </div>
    </div>
    <div class="col-5">
      {{-- separador de columnas --}}
    </div>
    <div class="col-5">
      {{-- <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div> --}}
    </div>
    <div class="col-6">
          {{-- separador de columnas --}}
    </div>
    
    <div class="col-4">
      <button class="btn btn-success" type="submit">Guardar</button>
    </div>
    <div class="col-6">
      {{-- separador de columnas --}}
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