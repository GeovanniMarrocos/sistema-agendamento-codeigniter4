<?php

namespace App\Controllers\Super;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Home',
            'user' => 'Geovanni'
        ];

        return view('Back/Home/index', $data);
    }
}
