<?php

namespace App\Models;

use CodeIgniter\Model;

class RepModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'repartidor';
    protected $primaryKey       = 'idRepartidor';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['idU', 'nombre', 'apellidos', 'edad', 'cumpleaños', 'curp', 'genero', 'telefono', 'foto', 'email', 'licencia', 'idCarro', 'idRuta'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
