<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Usuario extends BaseController
{

    public function index()
    {
        $data['title']="Agregar Carrera"; 
        $validation =  \Config\Services::validation();
            if (strtolower($this->request->getMethod()) === 'get'){
                return view('common/head') .
                view('usuario/login') .
                view('common/footer');
            }

            $rules = [
                'nombreU' => 'required',
                'contraseña'=>'required'
            ];

            if (! $this->validate($rules)) {
                return view('common/head') .
                view('usuario/login') .
                view('common/footer');
            }
            else{
                //si pasa las reglas
                $nombreU = $_POST['nombreU'];
                $contraseña = $_POST['contraseña'];
                $userModel = model('UserModel');
                $data['usuario']= $userModel->like('nombreU',$nombreU)
                                ->Like('contraseña',$contraseña)
                                ->findAll();
                if(count($data['usuario'])>0){
                    print "creo la sesión";
                    print $data['usuario'][0]->idU;
                    $session = session();

                    $newdata = [
                        'idU' => $data['usuario'][0]->idU,
                        'nombreU'     => $data['usuario'][0]->nombreU,
                        'logged_in' => true,
                    ];

                    $session->set($newdata);
                    return redirect('admin/bienvenida', 'refresh');

                }
                else{
                    return redirect('usuario/login','refresh');
                }
            }
    }
    public function cerrarSesion(){
        $session =  \Config\Services::session();
        $session = session();
        if ($session->get('logged_in') == TRUE) {
            session_destroy();
            return redirect('usuario/login', 'refresh');
        }
    }
}