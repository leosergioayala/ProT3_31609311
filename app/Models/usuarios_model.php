<?php
namespace App\Models;
use CodeIgniter\Model;

Class usuarios_model extends Model
{
protected $table = 'usuarios';
protected $primaryKey = 'id_usuario';
protected $allowedFields = ['inputName',
                             'inputSurname',
                             'inputUser',
                             'inputEmail',
                             'inputPassword',
                             'inputCity',
                             'inputZip',
                             'perfil_id',
                             'Baja']; 
}