<?php
namespace App\Models;
use CodeIgniter\Model;

Class usuarios_model extends Model
{
protected $table = 'usuarios';
protected $primaryKey = 'id_usuario'; //identificador de la tabla
protected $allowedFields = ['inputName', 'inputSurname', 'inputUser', '	inputEmail', 'inputPassword', 'inputCity', 'inputZip', 'perfil_id','Baja']; //todos los campos de la tabla
}