<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function login(Request $request){
        $data = [];
        return view("login", $data);
    }
}
