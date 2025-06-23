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
session ()->setFlashdata ('success', 'Usuario registrado con éxito');
return redirect()->to(base_url('login'));
}
}


public function index() {
    $model = new usuarios_model();
    $data['usuarios'] = $model->findAll();
    $data['titulo'] = 'Lista de Usuarios';

    echo view('front/head_view', $data);
    echo view('front/navbar_view');
    echo view('back/usuario/listUsers', $data);
    echo view('front/footer_view');
}


public function edit($id) {
    $model = new usuarios_model();
    $data['usuario'] = $model->find($id);
    $data['titulo'] = 'Editar Usuario';

    echo view('front/head_view', $data);
    echo view('front/navbar_view');
    echo view('back/usuario/editUsers', $data);
    echo view('front/footer_view');
}
public function update($id) {
    $model = new usuarios_model();

    $data = [
        'inputName' => $this->request->getPost('inputName'),
        'inputSurname' => $this->request->getPost('inputSurname'),
        'inputUser' => $this->request->getPost('inputUser'),
        'inputEmail' => $this->request->getPost('inputEmail'),
    ];

    // Si se cargó nueva contraseña, se actualiza
    if ($this->request->getPost('inputPassword')) {
        $data['inputPassword'] = password_hash($this->request->getPost('inputPassword'), PASSWORD_DEFAULT);
    }

    $model->update($id, $data);
    session()->setFlashdata('success', 'Usuario actualizado con éxito');
    return redirect()->to(base_url('usuarios'));
}
public function delete($id) {
    $model = new usuarios_model();
    $model->delete($id);
    session()->setFlashdata('success', 'Usuario eliminado correctamente');
    return redirect()->to(base_url('usuarios'));
}




}

