<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpananController extends Controller
{
    public function index(){
        return view('utama.simpanan');
    }
}
