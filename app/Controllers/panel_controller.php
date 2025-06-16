<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PanelController extends BaseController
{
    public function index()
    {
        // Muestra el panel principal
        return view('panel/index');
    }

    public function perfil()
    {
        // Muestra la vista del perfil del usuario
        return view('panel/perfil');
    }

    public function configuracion()
    {
        // Muestra la vista de configuración del panel
        return view('panel/configuracion');
    }
}
#a verificarrrrr