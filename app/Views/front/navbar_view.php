<?php
  $session = session();
  $nombre = $session->get('InputName');
  $perfil = $session->get('perfil_id');
  ?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url ('principal')?>">
        <img src=<?php echo base_url ('./assets/img/logo.png')?> alt="Logo" width="50" height="50" >
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if(session()->perfil_id == 1):?>
              <div class="btn btn-secondary">ADMIN:  <?php echo session ('inputName'); ?>
            </div>


<!-- NAVBAR PARA ADMINISTRADOR-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
          <a  aria-current="page" href="<?php echo base_url ('principal')?>">Inicio</a>
        </li>
                <li class="nav-item">
          <a aria-current="nav-link" href="<?php echo base_url ('quienes_somos')?>">Quienes somos</a>
        </li>
                <li class="nav-item">
          <a aria-current="nav-link" href="<?php echo base_url ('acerca_de')?>">Acerca de</a>
        </li>
                <li class="nav-item">
          <a  class="btn btn-danger" href="<?php echo base_url ('/logout')?>"tabindex="-1" aria-disabled="true"> Cerrar Sesión</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>
    </div>

 <?php elseif (session()->perfil_id == 2):?>
      <div class="btn btn-secondary">CLIENTE:  <?php echo session ('inputName'); ?>
      </div>
<!-- NAVBAR PARA CLIENTES-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
          <a  aria-current="page" href="<?php echo base_url ('principal')?>">Inicio</a>
        </li>
                      <li class="nav-item">
          <a aria-current="nav-link" href="<?php echo base_url ('horarios')?>">Horarios</a>
        </li>
                             <li class="nav-item">
          <a aria-current="nav-link" href="<?php echo base_url ('aranceles')?>">Aranceles</a>
        </li>
                <li class="nav-item">
          <a aria-current="nav-link" href="<?php echo base_url ('quienes_somos')?>">Quienes somos</a>
        </li>
                <li class="nav-item">
          <a aria-current="nav-link" href="<?php echo base_url ('acerca_de')?>">Acerca de</a>
        </li>
                <li class="nav-item">
          <a class="btn btn-danger" aria-current="nav-link" href="<?php echo base_url ('/logout')?>"tabindex="-1" aria-disabled="true"> Cerrar Sesión</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>
    </div>
<?php else: ?>
    <!-- NAVBAR PARA CLIENTES NO LOGUEADOS-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
          <a  aria-current="page" href="<?php echo base_url ('principal')?>">Inicio</a>
        </li>
                <li class="nav-item">
          <a aria-current="nav-link" href="<?php echo base_url ('quienes_somos')?>">Quienes somos</a>
        </li>
                <li class="nav-item">
          <a aria-current="nav-link" href="<?php echo base_url ('acerca_de')?>">Acerca de</a>
        </li>
                <li class="nav-item">
          <a aria-current="nav-link" href="<?php echo base_url ('registrarse')?>">Registrarse</a>
        </li>
                <li class="nav-item">
          <a  aria-current="nav-link" href="<?php echo base_url ('login')?>">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>
<?php endif; ?>



    </div>
  </div>
</nav>