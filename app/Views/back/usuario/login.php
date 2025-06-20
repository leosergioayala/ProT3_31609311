
<section class="container-fluid mt-5">
  <div class="row g-4 align-items-center menu">
        <div class="col-md-6 text-center">
      <img src="./assets/img/logo.png" alt="instituto Future" class="img-fluid" style="max-height: 450px;">
        </div>
          <div class="col-md-6">
        <h2>Log in</h2>
             <?php if (session()->getFlashdata ('msg')):?>
                <div class="alert alert-warning">
               <?= session()->getFlashdata ('msg')?>
                </div>
              <?php endif?>     
                        <form method= "post" action="<?php echo base_url ('/enviarlogin')?>" class="px-4 py-3">

            <div class="mb-3">
          <label for="User" class="form-label">Usuario</label>
          <input type="text" name= "inputUser" class="form-control" id="inputUser" placeholder="Usuario">
            </div>
              <div class="mb-3">
          <label for="Email" class="form-label">Correo electrónico</label>
          <input type="email" name="inputEmail"  class="form-control" id="inputEmail" placeholder="email@gmail.com">
              </div>

              <div class="mb-3">
          <label for="Password" class="form-label">Contraseña</label>
          <input type="password" name="inputPassword"class="form-control" id="inputPassword" placeholder="Password">
              </div>



              <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="dropdownCheck">
          <label class="form-check-label" for="dropdownCheck">
            Recordarme
          </label>
              </div> 
        <button type="submit" class="btn btn-primary">Sign in </button>
        <a href="<?php echo base_url ('login'); ?>"></a>
          <a href="<?php echo base_url('principal'); ?>" class="btn btn-danger">Cancelar</a>

                  <div class="mb-3">
          <label>¿Nuevo?</label> 
                </div>
  <a href="<?php echo base_url('registrarse'); ?>" class="btn btn-primary">Registrarse aquí</a>
        
        </form> 
</section>
