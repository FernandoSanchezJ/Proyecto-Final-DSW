<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrarInicio()
{   
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Muestra la página de inicio
        return
        view('common/head') .
        view('admin/barraNav') .
        view('admin/bienvenida') .
        view('common/footer');
    }
}

public function mostrarRepartidores()
{ 
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene todos los repartidores
        $repartidoresModel = model('RepModel');
        $data ['repartidores'] = $repartidoresModel->findAll();
        // Muestra la página de repartidores
        return
        view('common/head') .
        view('admin/barraNav') .
        view('admin/mostrarR', $data) .
        view('common/footer');
    }
}

public function agregar(){ 
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene todos los carros y rutas
        helper(['form', 'url']);
        $carroModel = model('CarroModel');
        $rutaModel = model('RutaModel');
        $data['carros'] =$carroModel->findAll();
        $data['rutas'] =$rutaModel->findAll();
        // Muestra la página para agregar un repartidor
        return 
        view('common/head') .
        view('admin/barraNav') .
        view('admin/agregar_rep', $data) .
        view('common/footer');
    }
}

public function insert()
{
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Inserta un nuevo repartidor en la base de datos
        $repartidoresModel = model('RepModel');
        $validation = \Config\Services::validation();
        // Valida los datos del repartidor
        $validation->setRules([
            'nombre' => 'required',
            'apellidos' => 'required',
            'edad' => 'required|numeric',
            'cumpleaños' => 'required',
            'genero' => 'required',
            'curp' => 'required|max_length[18]',
            'telefono' => 'required|numeric|min_length[10]',
            'email' => 'required|valid_email',
            'licencia' => 'required|max_length[10]',
        ]);
        // Si la validación no es exitosa, redirige al usuario a la página anterior
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        // Si la validación es exitosa, inserta los datos en la base de datos
        $data = array(
            "nombre" => $_POST['nombre'],
            "apellidos" => $_POST['apellidos'],
            "edad" => $_POST['edad'],
            "cumpleaños" => $_POST['cumpleaños'],
            "genero" => $_POST['genero'],
            "curp" => $_POST['curp'],
            "genero" => $_POST['genero'],
            "telefono" => $_POST['telefono'],
            "email" => $_POST['email'],
            "licencia" => $_POST['licencia'],
        );
        $repartidoresModel ->insert($data);
        // Redirige al usuario a la página 'admin/agregar_carro'
        return redirect('admin/agregar_carro');
    }
} 

public function delete($idRepartidor){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Elimina un repartidor de la base de datos
        $repartidoresModel = model('RepModel');
        $repartidoresModel->delete($idRepartidor);
        // Redirige al usuario a la página 'admin/mostrarR'
        return redirect('admin/mostrarR','refresh');
    }
}

public function editar($idRepartidor){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene los datos del repartidor
        $repartidorModel = model('RepModel');
        $data['repartidores'] = $repartidorModel->find($idRepartidor);
        // Muestra la página para editar un repartidor
        return 
        view('common/head') .
        view('admin/barraNav') .
        view('admin/editar_rep', $data) .
        view('common/footer');
    }
}

    
public function update()
{
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Actualiza los datos de un repartidor en la base de datos
        $repartidorModel = model('RepModel');
        $validation = \Config\Services::validation(); // Instancia de la clase de validación
        // Definir reglas de validación
        $validation->setRules([
            'nombre' => 'required',
            'apellidos' => 'required',
            'edad' => 'required|numeric',
            'cumpleaños' => 'required',
            'genero' => 'required',
            'curp' => 'required|max_length[18]',
            'telefono' => 'required|numeric|min_length[10]',
            'email' => 'required|valid_email',
            'licencia' => 'required|max_length[10]',
        ]);
        // Ejecutar la validación
        if (!$validation->withRequest($this->request)->run()) {
            // En caso de fallo de validación, volver a la página de editar con errores
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        // Si la validación es exitosa, actualiza los datos en la base de datos
        $data = [
            "nombre" => $_POST['nombre'],
            "apellidos" => $_POST['apellidos'],
            "edad" => $_POST['edad'],
            "cumpleaños" => $_POST['cumpleaños'],
            "genero" => $_POST['genero'],
            "curp" => $_POST['curp'],
            "genero" => $_POST['genero'],
            "telefono" => $_POST['telefono'],
            "email" => $_POST['email'],
            "licencia" => $_POST['licencia']
        ];
        $repartidorModel ->update($_POST['idRepartidor'], $data);
        // Redirige al usuario a la página 'admin/mostrarR'
        return redirect('admin/mostrarR','refresh');
    }
}
    
/* Mostrar Paquetes */
public function mostrarPaquetes()
{
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene todos los paquetes y comparativas
        $paquetesModel = model('PaquetesModel');
        $data1['paquetes'] = $paquetesModel->findAll();
        $comparativaModel = model('ComparativaModel');
        $data1['comparativas'] = $comparativaModel->findAll();
        // Muestra la página de paquetes
        return
        view('common/head') .
        view('admin/barraNav') .
        view('admin/mostrarP', $data1) .
        view('common/footer');
    }
}  
    
/* Agregar paquete */
public function agregarPaquete(){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene todos los clientes
        helper(['form', 'url']);
        $clienteModel = model('ClienteModel');
        $data1['clientes'] =$clienteModel->findAll();
        // Muestra la página para agregar un paquete
        return 
        view('common/head') .
        view('admin/barraNav') .
        view('admin/agregar_paq', $data1) .
        view('common/footer');
    }
}
    
public function insertPaquetes()
{
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Inserta un nuevo paquete en la base de datos
        $validation = \Config\Services::validation();
        // Define las reglas de validación para el campo idML
        $validation->setRules([
            'idML' => 'required|numeric',
        ]);
        // Si la validación no es exitosa, redirige al usuario a la página anterior
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        // Si la validación es exitosa, inserta los datos en la base de datos
        $paquetesModel = model('PaquetesModel');
        $data1 = array(
            "idML" => $_POST['idML']
        );
        $paquetesModel ->insert($data1);
        // Redirige al usuario a la página 'admin/mostrarP'
        return redirect('admin/mostrarP','refresh');
    }
} 

public function deleteP($idPk){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Elimina un paquete de la base de datos
        $paquetesModel = model('PaquetesModel');
        $paquetesModel->delete($idPk);
        // Redirige al usuario a la página 'admin/mostrarP'
        return redirect('admin/mostrarP','refresh');
    }
}

public function editarP($idPk){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene los datos del paquete
        $paquetesModel = model('PaquetesModel');
        $data1['paquetes'] = $paquetesModel->find($idPk);
        // Muestra la página para editar un paquete
        return 
        view('common/head') .
        view('admin/barraNav') .
        view('admin/editar_paq', $data1) .
        view('common/footer');
    }
}

public function updateP()
{
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Actualiza los datos de un paquete en la base de datos
        $validation = \Config\Services::validation();
        // Define las reglas de validación para el campo idML
        $validation->setRules([
            'idML' => 'required|numeric',
        ]);
        // Si la validación no es exitosa, redirige al usuario a la página anterior
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        // Si la validación es exitosa, actualiza los datos en la base de datos
        $paquetesModel = model('PaquetesModel');
        $data1 = [
            "idML" => $_POST['idML']
        ];
        $paquetesModel ->update($_POST['idPk'], $data1);
        // Redirige al usuario a la página 'admin/mostrarP'
        return redirect('admin/mostrarP','refresh');
    }
}

// Carro

public function mostrarCarro()
{
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene todos los carros y repartidores
        $carroModel = model('CarroModel');
        $data2['carros'] = $carroModel->findAll();
        $repartidoresModel = model('RepModel');
        $data2['repartidores'] = $repartidoresModel->findAll();
        // Muestra la página de carros
        return
        view('common/head') .
        view('admin/barraNav') .
        view('admin/mostrar_carro', $data2) .
        view('common/footer');
    }
}

public function agregarCarro(){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene todas las rutas y clientes
        helper(['form', 'url']);
        $rutaModel = model('RutaModel');
        $clienteModel = model('ClienteModel');
        $data2['rutas'] =$rutaModel->findAll();
        $data2['clientes'] =$clienteModel->findAll();
        // Muestra la página para agregar un carro
        return 
        view('common/head') .
        view('admin/barraNav') .
        view('admin/agregar_carro', $data2) .
        view('common/footer');
    }
}

public function insertCarro(){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Inserta un nuevo carro en la base de datos
        $validation = \Config\Services::validation();
        // Define las reglas de validación para los campos del carro
        $validation->setRules([
            'marca' => 'required',
            'modelo' => 'required',
            'color' => 'required',
            'matricula' => 'required',
            'año' => 'required|numeric'
        ]);
        // Si la validación no es exitosa, redirige al usuario a la página anterior
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        // Si la validación es exitosa, inserta los datos en la base de datos
        $carroModel = model('CarroModel');
        $data2 = array(
            "marca" => $_POST['marca'],
            "modelo" => $_POST['modelo'],
            "color" => $_POST['color'],
            "matricula" => $_POST['matricula'],
            "año" => $_POST['año']
        );
        $carroModel ->insert($data2);
        // Redirige al usuario a la página 'admin/mostrarR'
        return redirect('admin/mostrarR','refresh');
    }
}


public function editarCarro($idCarro){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene los datos del carro
        $carroModel = model('CarroModel');
        $data2['carros'] = $carroModel->find($idCarro);
        // Muestra la página para editar un carro
        return 
        view('common/head') .
        view('admin/barraNav') .
        view('admin/editar_carro', $data2) .
        view('common/footer');
    }
}

public function updateC(){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Actualiza los datos de un carro en la base de datos
        $validation = \Config\Services::validation();
        // Define las reglas de validación para los campos del carro
        $validation->setRules([
            'marca' => 'required',
            'modelo' => 'required',
            'color' => 'required',
            'matricula' => 'required',
            'año' => 'required|numeric'
        ]);
        // Si la validación no es exitosa, redirige al usuario a la página anterior
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        // Si la validación es exitosa, actualiza los datos en la base de datos
        $carroModel = model('CarroModel');
        $data2 = [
            "marca" => $_POST['marca'],
            "modelo" => $_POST['modelo'],
            "color" => $_POST['color'],
            "matricula" => $_POST['matricula'],
            "año" => $_POST['año']
        ];
        $carroModel ->update($_POST['idCarro'], $data2);
        // Redirige al usuario a la página 'admin/mostrarCarro'
        return redirect('admin/mostrarCarro','refresh');
    }
}

public function deleteC($idCarro){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Elimina un carro de la base de datos
        $carrosModel = model('CarroModel');
        $carrosModel->delete($idCarro);
        // Redirige al usuario a la página 'admin/mostrarCarro'
        return redirect('admin/mostrarCarro','refresh');
    }
}

// PNR
public function mostrarPNR()
{
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene todos los PNR y comparativas
        $db = db_connect();
        $sql = "SELECT PNR.*, tipoPNR.*, repartidor.*
        FROM PNR, tipoPNR, repartidor 
        where PNR.idT = tipoPNR.idT 
        and PNR.idRepartidor = repartidor.idRepartidor";
        $query = $db->query($sql); 
        $data3['pnrs'] = $query->getResult();
        $comparativaModel = model('ComparativaModel');
        $data3['comparativas'] =$comparativaModel->findAll();
        // Muestra la página de PNR
        return
        view('common/head') .
        view('admin/barraNav') .
        view('admin/mostrar_PNR', $data3) .
        view('common/footer');
    }
}

public function agregarPNR(){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene todos los tipos de PNR, comparativas y repartidores
        helper(['form', 'url']);
        $tipopnrModel = model('TipoPnrModel');
        $comparativaModel = model('ComparativaModel');
        $repartidoresModel = model('RepModel');
        $data3['repartidores'] = $repartidoresModel->findAll();
        $data3['tipos'] =$tipopnrModel->findAll();
        $data3['comparativas'] =$comparativaModel->findAll();
        // Muestra la página para agregar un PNR
        return 
        view('common/head') .
        view('admin/barraNav') .
        view('admin/crear_PNR', $data3) .
        view('common/footer');
    }
}


public function insertPNR(){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Inserta un nuevo PNR en la base de datos
        $pnrModel = model('PnrModel');
        $data3 = array(
            "idRepartidor" => $_POST['repartidor'],
            "idComparativa" => $_POST['idCodigo'],
            "idT" => $_POST['tipoPNR'],
            "descripcion" => $_POST['descripcion'],
        );
        $pnrModel ->insert($data3);
        // Redirige al usuario a la página 'admin/mostrarPNR'
        return redirect('admin/mostrarPNR','refresh');
    }
}

// Salidas

public function mostrarSalidas()
{
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene todas las rutas
        $salidaModel = model('SalidaModel');
        $data4['rutas'] = $salidaModel->findAll();
        // Muestra la página de salidas
        return
        view('common/head') .
        view('admin/barraNav') .
        view('admin/mostrarSalidas', $data4) .
        view('common/footer');
    }
}

public function salidas()
{
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        // Obtiene todas las salidas y repartidores
        $db = db_connect();
        $sql = "SELECT ruta.*, infoPaquetes.*
        FROM ruta, infoPaquetes 
        where ruta.idRuta = infoPaquetes.idRuta";
        $query = $db->query($sql); 
        $data4['salidas'] = $query->getResult();
        $repartidoresModel = model('RepModel');
        $data4['salidas'] = $repartidoresModel->findAll();
        // Muestra la página de salidas
        return
        view('common/head') .
        view('admin/barraNav') .
        view('admin/salidas', $data4) .
        view('common/footer');
    }
}

public function insertSalida(){
    $session = session();
    // Verifica si el usuario ha iniciado sesión
    if($session->get('logged_in')==TRUE){
        return redirect('/', 'refresh');
    }
        // Inserta una nueva salida en la base de datos
        $salidaModel = model('SalidaModel');
        $repartidores = $_POST['nombre'];
        $rutas = $_POST['ruta'];
        for ($i = 0; $i < count($repartidores); $i++) {
            $data4 = array(
                "repartidor" => $repartidores[$i],
                "ruta" => $rutas[$i]
            );
            $salidaModel->insert($data4);
        // Redirige al usuario a la página 'admin/salidas'
        return redirect('admin/salidas');
    }
}

// Vista Vistitas

public function mostrarVs()
{   
        // Muestra la página de inicio
        return
        view('common/head') .
        view('admin/barraNav_Vis') .
        view('admin/bienvenida_Vis') .
        view('common/footer');
}

public function mostrarRV()
{                  
    $repartidoresModel = model('RepModel');
    $data ['repartidores'] = $repartidoresModel->findAll();
    // Muestra la página de repartidores
    return
    view('common/head') .
    view('admin/barraNav') .
    view('admin/mostrarR_Vis', $data) .
    view('common/footer');
}
}