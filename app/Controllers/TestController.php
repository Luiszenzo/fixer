<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\EjercicioModel;

class TestController extends BaseController
{
    public function index()
    {
        // Crear una instancia del modelo
        $model = new EjercicioModel();
        
        // Obtener todos los ejercicios
        $data['ejercicios'] = $model->findAll();

        // Cargar la vista y pasarle los datos
        return view('new_test', $data);
    }

    public function index2()
    {
        // Crear una instancia del modelo
        $model = new EjercicioModel();
        
        // Obtener todos los ejercicios
        $data['ejercicios'] = $model->findAll();

        // Cargar la vista y pasarle los datos
        return view('ejercicios', $data);
    }

    public function upload()
    {
        $model = new EjercicioModel();

        $descripcion = $this->request->getPost('descripcion');
        $tema = $this->request->getPost('tema');
        $id_profesor = $this->request->getPost('id_profesor');
        $file = $this->request->getFile('ejercicios');
        
        if ($file && $file->isValid() && $file->getExtension() === 'pdf') 
        {
            try 
            {
                $fileName = $file->getRandomName(); 
                $file->move('uploads', $fileName); 
                
                $data = [
                    'descripcion' => $descripcion,
                    'tema' => $tema,
                    'id_profesor' => $id_profesor,
                    'ejercicio' => $fileName
                ];

                if ($model->insert($data)) 
                {
                    return $this->response->setJSON(['success' => true, 'message' => 'Archivo subido y datos guardados correctamente.']);
                } 
                else 
                {
                    return $this->response->setJSON(['success' => false, 'message' => 'Error al guardar los datos en la base de datos.']);
                }
            } 
            catch (\Exception $e) 
            {
                return $this->response->setJSON(['success' => false, 'message' => 'Excepción: ' . $e->getMessage()]);
            }
        }

        return $this->response->setJSON(['success' => false, 'message' => 'Archivo no válido o error al subir el archivo.']);
    }

    public function verPDF($id_ejercicio)
    {
        $model = new EjercicioModel();
        $ejercicio = $model->find($id_ejercicio);

        if ($ejercicio && !empty($ejercicio['ejercicio'])) {
            $pdfUrl = base_url('uploads/ejercicios/' . $ejercicio['ejercicio']); // Ruta al archivo PDF
            return $this->response->setJSON(['success' => true, 'pdfUrl' => $pdfUrl]);
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Archivo PDF no disponible.']);
        }
    }
}
