<form class="row g-3">
    <div class="col-2">
          {{-- separador de columnas --}}
    </div>
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">First name</label>
      <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
    </div>
    <div class="col-md-4">
      <label for="validationDefault02" class="form-label">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
    </div>
    <div class="col-3">
              {{-- separador de columnas --}}
    </div>
    <div class="col-md-3">
      <label for="validationDefaultUsername" class="form-label">Username</label>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2">@</span>
        <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    
    <div class="col-md-3">
      <label for="validationDefault03" class="form-label">City</label>
      <input type="text" class="form-control" id="validationDefault03" required>
    </div>
    <div class="col-4">
          {{-- separador de columnas --}}
    </div>
    <div class="col-md-3">
      <label for="validationDefault04" class="form-label">State</label>
      <select class="form-select" id="validationDefault04" required>
        <option selected disabled value="">Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-3">
      <label for="validationDefault05" class="form-label">Zip</label>
      <input type="text" class="form-control" id="validationDefault05" required>
    </div>
    <div class="col-5">
      {{-- separador de columnas --}}
    </div>
    <div class="col-5">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
    </div>
    <div class="col-6">
          {{-- separador de columnas --}}
    </div>
    <div class="col-4">
      <button class="btn btn-dark" type="submit">Submit form</button>
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