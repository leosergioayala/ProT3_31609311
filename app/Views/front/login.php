<section class="container-fluid mt-5">
  <div class="row g-4 align-items-center menu">
        <div class="col-md-6 text-center">
      <img src="./assets/img/logo.png" alt="instituto Future" class="img-fluid" style="max-height: 450px;">
    </div>
        <div class="col-md-6">
      <form class="px-4 py-3">
        <h2>Log in</h2>
                <div class="mb-3">
          <label for="exampleDropdownFormEmail1" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Usuario">
        </div>
        <div class="mb-3">
          <label for="exampleDropdownFormEmail1" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@gmail.com">
        </div>
        <div class="mb-3">
          <label for="exampleDropdownFormPassword1" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="dropdownCheck">
          <label class="form-check-label" for="dropdownCheck">
            Recordarme
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
        <div class="dropdown-divider my-3"></div>
        ¿Nuevo?<a class="dropdown-item" href="<?php echo base_url('registrarse') ?>">Registrarse aquí</a>
      </form>
    </div>
  </div>
</section>

            
