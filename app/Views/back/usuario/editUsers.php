<section>
  <?php $validation = \Config\Services::validation(); ?>
  <form id="editForm" class="row g-3 menu" method="post" action="<?= base_url('usuarios/update/' . $usuario['id_usuario']) ?>">
    <?= csrf_field(); ?>

    <?php if (!empty(session()->getFlashdata('fail'))): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
    <?php endif ?>
    <?php if (!empty(session()->getFlashdata('success'))): ?>
      <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
    <?php endif ?>

    <div class="col-12">
      <h2>Editar Usuario</h2>

      <label for="inputName" class="form-label">Nombre</label>
      <input name="inputName" type="text" class="form-control" id="inputName" value="<?= esc($usuario['inputName']) ?>">
      <?php if ($validation->getError('inputName')): ?>
        <div class="alert alert-danger mt-2">Nombre inválido</div>
      <?php endif; ?>
    </div>

    <div class="col-12">
      <label for="inputSurname" class="form-label">Apellido</label>
      <input name="inputSurname" type="text" class="form-control" id="inputSurname" value="<?= esc($usuario['inputSurname']) ?>">
      <?php if ($validation->getError('inputSurname')): ?>
        <div class="alert alert-danger mt-2">Apellido inválido</div>
      <?php endif; ?>
    </div>

    <div class="col-12">
      <label for="inputUser" class="form-label">Usuario</label>
      <input name="inputUser" type="text" class="form-control" id="inputUser" value="<?= esc($usuario['inputUser']) ?>">
      <?php if ($validation->getError('inputUser')): ?>
        <div class="alert alert-danger mt-2">Usuario inválido</div>
      <?php endif; ?>
    </div>

    <div class="col-md-6">
      <label for="inputEmail" class="form-label">Email</label>
      <input name="inputEmail" type="email" class="form-control" id="inputEmail" value="<?= esc($usuario['inputEmail']) ?>">
      <?php if ($validation->getError('inputEmail')): ?>
        <div class="alert alert-danger mt-2">Email inválido</div>
      <?php endif; ?>
    </div>

    <div class="col-md-6">
      <label for="inputPassword" class="form-label">Contraseña (opcional)</label>
      <input name="inputPassword" type="password" class="form-control" id="inputPassword" placeholder="Dejar en blanco si no se cambia">
      <?php if ($validation->getError('inputPassword')): ?>
        <div class="alert alert-danger mt-2">Contraseña inválida</div>
      <?php endif; ?>
    </div>

    <div class="col-md-6">
      <label for="inputCity" class="form-label">Ciudad</label>
      <input name="inputCity" type="text" class="form-control" id="inputCity" value="<?= esc($usuario['inputCity']) ?>">
      <?php if ($validation->getError('inputCity')): ?>
        <div class="alert alert-danger mt-2">Ciudad inválida</div>
      <?php endif; ?>
    </div>

    <div class="col-md-6">
      <label for="inputZip" class="form-label">Código Postal</label>
      <input name="inputZip" type="text" class="form-control" id="inputZip" value="<?= esc($usuario['inputZip']) ?>">
      <?php if ($validation->getError('inputZip')): ?>
        <div class="alert alert-danger mt-2">Código postal inválido</div>
      <?php endif; ?>
    </div>

    <div class="col-12 text-center">
      <button type="submit" class="btn btn-primary">Actualizar</button>
      <button type="button" class="btn btn-danger" onclick="document.querySelector('#editForm').reset();">Cancelar</button>
    </div>
  </form>
</section>
