<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Repartidor extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrarInicio()
    {   
        $session = session();
        if($session->get('logged_in')!=TRUE){

            return
            view('common/head') .
            view('rep/menu') .
            view('rep/bienvenida') .
            view('common/footer');
        }
    }
}

