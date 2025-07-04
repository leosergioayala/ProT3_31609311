    <section>
  <?php $validation = \Config\Services::validation(); ?>
      <form id="myform"class="row g-3 menu" method="post" action="<?php echo base_url('/enviar-form') ?>" >
          <?= csrf_field(); ?>
<?php if (!empty (session()->getFlashdata('fail'))):?>
<div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
<?php endif ?>
<?php if (!empty (session()->getFlashdata('success'))):?>
<div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
<?php endif ?>
<div class="col-12">
            <h2>Registrarse</h2>

    <label for="inputName" class="form-label">Nombre</label>
    <input name="inputName" type="text" class="form-control" id="inputName" placeholder="Nombre">

<?php if ($validation->getError('inputName')): ?>
  <div class="alert alert-danger mt-2">
    <?php $error = $validation->getError('inputName'); ?> Nombre inválido
  </div>
<?php endif; ?>
 </div>

  <div class="col-12">
    <label for="inputSurname" class="form-label">Apellido</label>
    <input name="inputSurname"type="text" class="form-control" id="inputSurname" placeholder="Apellido">
  <?php if ($validation->getError('inputSurname')): ?>
  <div class="alert alert-danger mt-2">
    <?php $error = $validation->getError('inputSurname'); ?> Apellido inválido
  </div>
<?php endif; ?>
</div>
    <div class="col-12">
    <label for="inputUser" class="form-label">Usuario</label>
    <input name="inputUser"type="text" class="form-control" id="inputUser" placeholder="Usuario (Puede contener números y signos)">
  <?php if ($validation->getError('inputUser')): ?>
  <div class="alert alert-danger mt-2">
    <?php $error = $validation->getError('inputUser'); ?> Usuario inválido
  </div>
<?php endif; ?>
</div>
  <div class="col-md-6 ">
    <label for="inputEmail" class="form-label">Email</label>
    <input name="inputEmail"type="email" class="form-control" id="inputEmail" placeholder="example@gmail.com">
 <?php if ($validation->getError('inputEmail')): ?>
  <div class="alert alert-danger mt-2">
    <?php $error = $validation->getError('inputEmail'); ?> Email inválida
  </div>
<?php endif; ?>
</div>
  <div class="col-md-6">
    <label for="inputPassword" class="form-label">Password</label>
    <input name="inputPassword"type="password" class="form-control" id="inputPassword" placeholder="contraseña (mínimo 5 caracteres)">
<?php if ($validation->getError('inputPassword')): ?>
  <div class="alert alert-danger mt-2">
    <?php $error = $validation->getError('inputPassword', ); ?>contraseña inválida
  </div>
<?php endif; ?>
 </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Ciudad</label>
    <input name="inputCity"type="text" class="form-control" id="inputCity">
<?php if ($validation->getError('inputCity')): ?>
  <div class="alert alert-danger mt-2">
    <?php $error = $validation->getError('inputCity'); ?>
  </div>
<?php endif; ?>
</div>
  <div class="col-md-6">
    <label for="inputZip" class="form-label">Código Postal</label>
    <input name="inputZip"type="text" class="form-control" id="inputZip">
<?php if ($validation->getError('inputZip')): ?>
  <div class="alert alert-danger mt-2">
    <?php $error = $validation->getError('inputZip'); ?>
  </div>
<?php endif; ?>
</div>
  <div class="col-12">
  </div>
    <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrarse</button>
<button type="button" class="btn btn-danger" onclick="document.querySelector('#myform').reset();">Cancelar</button>
  </div>
</form>    
</section>

            
