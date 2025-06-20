<?php
namespace App\Controllers;
Use App\Models\usuarios_model;
Use CodeIgniter\Controller;

class usuarios_controller extends Controller {

    public function __construct(){
    helper(['form', 'url']);
}


 public function create(){

    {   $dato ['titulo']= 'registrarse';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/registrarse');
        echo view('front/footer_view');
    }
}
public function formValidation(){

    $input = $this->validate([
        'inputName'=> 'required|min_length[3]',
        'inputSurname' => 'required|min_length[3]|max_length[25]', 
        'inputUser'=> 'required|min_length[3]', 
        'inputEmail'=> 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.inputEmail]', 
        'inputPassword' => 'required|min_length[3]|max_length[10]', 
    ],
);
$formModel = new usuarios_model ();
if (!$input){
   $data ['titulo']= 'registrarse';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registrarse', ['validation' => $this->validator]);
        echo view('front/footer_view');
} else {
$formModel->save ([
     'inputName'=>$this->request->getVar('inputName'),
     'inputSurname'=>$this->request->getVar('inputSurname'),
     'inputUser'=>$this->request->getVar('inputUser'),
     'inputEmail'=>$this->request->getVar('inputEmail'),
    'inputPassword'=>password_hash ($this->request->getVar('inputPassword'), PASSWORD_DEFAULT)
]);
session ()->setFlashdata ('sucess', 'Usuario registrado con éxito');
return $this->response->redirect ('/login');
}
}


}

