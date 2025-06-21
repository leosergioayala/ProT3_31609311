<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\usuarios_model;

class login_controller extends BaseController 
{
    public function index()
    {
        helper(['form', 'url']);
        $data ['titulo'] = 'login';

        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuarios_model();

        $email = $this->request->getVar('inputEmail');
        $password = $this->request->getVar('inputPassword');

        $data = $model->where('inputEmail', $email)->first();

        if ($data) {
            $inputPassword = $data['inputPassword'];
            $ba = $data['Baja'];

            if ($ba == 'SI') {
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to(base_url('/login_controller'));

            }

                $verify_inputPassword = password_verify($password, $inputPassword );
                if($verify_inputPassword){
                $ses_data = [
                    'id_usuario'    => $data['id_usuario'],
                    'inputName'     => $data['inputName'],
                    'inputSurname'  => $data['inputSurname'],
                    'inputEmail'    => $data['inputEmail'],
                    'inputUser'     => $data['inputUser'],
                    'perfil_id'     => $data['perfil_id'],
                    'logged_in'     => TRUE
                ];

                $session->set($ses_data);
                $session->setFlashdata('msg', '¡Bienvenido!');
                return redirect()->to('/panel');
            } else {
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/login_controller');
            }

        } else {
            $session->setFlashdata('msg', 'Email incorrecto o inexistente');
            return redirect()->to('/login_controller');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('principal');
    }
}



