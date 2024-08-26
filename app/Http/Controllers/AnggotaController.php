<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index(){
        return view('utama.anggota');
    }

    public function user(){
        return view('utama.user.userDashboard');
    }
}
