<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AcademicoController extends BaseController
{
    public function index(): string
    {
        
        return view('academico');
    }
}