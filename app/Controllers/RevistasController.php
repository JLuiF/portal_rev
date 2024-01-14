<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RevistasController extends BaseController
{
    public function index(): string
    {
        
        return view('revistas');
    }
}