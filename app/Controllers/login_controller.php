<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Moldels\usuarios_model;

class login_controller extends BaseController 
{
    public function index ()
    {
            helper(['form', 'url']);
        $dato ['titulo']= 'login';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

 public function auth ()
    {
   $session = session ();
   $model = new usuarios_model ();

   $email = $this->request->getVar ('inputEmail');
   $password = $this->request->getVar ('inputPassword');

   $data = $model -> where ('inputEmail', $email )->first(); 
   if ($data){
    $pass = $data ['inputPassword'];
        $ba = $data ['baja'];
        if ($ba == 'SI' ){
            $session-> setFlashdata ('msg', 'usuario dado de baja');
            return redirect ()->to ('/login_controller');
        }
$verify_pass = password_verify ($password, $pass);
if ($verify_pass){
    $ses_data = [
        'id_usuario' => $data ['id_usuario'],
        'nombre'=> $data ['inputName'],
        'apellido'=> $data ['inputSurname'],
        'email'=> $data ['inputEmail'],
        'usuario'=> $data ['inputUser'],
        'perfil_id'=> $data ['perfil_id'],
        'logged_in'=>  TRUE
    ];
$session-> set ($ses_data);

session ()->setFlashdata ('msg', 'Bienvenido!!');
return redirect ()->to ('/panel');
}else{
    $session ()->setFlashdata ('msg', 'Contraseña Incorrecta');
return redirect ()->to ('/login_controller');
}else{
        $session ()->setFlashdata ('msg', 'Email incorrecto o inexistente');
return redirect ()->to ('/login_controller');
   }
    }

    public function logout ()
    {
        $session = session ();
        $session -> destroy ();
return redirect ()->to ('/');
    }
}

    }

    }



