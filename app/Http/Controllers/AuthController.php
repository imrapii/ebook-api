<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120180,
            'Nama' => 'Rafi Amrullah Al-Baihaqi Gunawan',
            'Phone' => '083193557360',
            'Class' => 'XII RPL 6'
        ];
    }
}
