<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validacionController extends Controller
{
    public function store()
    {
        request ()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'phone' => 'required',
        ],);
    }
}
