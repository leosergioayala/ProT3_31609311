<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <h2 class="text-center mb-4"><?= $titulo ?></h2>
      <?php if(session()->getFlashdata('success')): ?>
        <div class="alert alert-success text-center">
          <?= session()->getFlashdata('success') ?>
        </div>
      <?php endif; ?>

      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($usuarios as $u): ?>
          <tr>
            <td><?= esc($u['inputName']) ?></td>
            <td><?= esc($u['inputSurname']) ?></td>
            <td><?= esc($u['inputUser']) ?></td>
            <td><?= esc($u['inputEmail']) ?></td>
            <td>
              <a href="<?= base_url('usuarios/edit/' . $u['id_usuario']) ?>" class="btn btn-sm btn-primary">Editar</a>
              <a href="<?= base_url('usuarios/delete/' . $u['id_usuario']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar?')">Eliminar</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

