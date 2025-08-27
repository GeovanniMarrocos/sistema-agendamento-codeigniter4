<?php

namespace App\Controllers\Super;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UnitsController extends BaseController
{

    /**
     *  Renderiza a view para gerenciar as unidades
     * 
     * 
     * @return RenderInterface
     */
    public function index()
    {


        $data = [
            'title' => 'Unidades',
        ];

        return view('Back/Units/index', $data);

      
    }
}
