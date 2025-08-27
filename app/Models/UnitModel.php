<?php

namespace App\Models;

use App\Entities\Unit;
use CodeIgniter\Model;

class UnitModel extends Model
{
    protected $table            = 'units';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = Unit::class;
    protected $useSoftDeletes   = false; // Vamos excluir o registro
    protected $protectFields    = true;
    protected $allowedFields    = [
      
      // Colunas que podem ser manipuladas dentro do banco de dados
     
        'name',
        'email',
        'phone',
        'coordenator',
        'address',
        'services',
        'starttime',
        'endtime',
        'servicetime',
        'active',

    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

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
