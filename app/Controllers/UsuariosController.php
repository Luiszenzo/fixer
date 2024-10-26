<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class UsuariosController extends BaseController
{
    public function index()
    {
        $model = new UsuariosModel();
        $data['usuarios'] = $model->findAll(); // Obtener todos los usuarios

        return view('usuarios', $data); // Cargar la vista
    }

    public function crear()
    {
        // Aquí puedes manejar la lógica para crear un nuevo usuario
        $model = new UsuariosModel();
        
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'contraseña' => password_hash($this->request->getPost('contraseña'), PASSWORD_DEFAULT), // Hashea la contraseña
            'rol' => $this->request->getPost('rol'),
        ];

        $model->insert($data);
        return redirect()->to('/usuarios'); // Redirige a la lista de usuarios
    }
}
