<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidentController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function ResidentRegister()
    {
        return view('resident.resident_register');
    }
    public function ResidentList()
    {
        return view('resident.resident_list');
    }
}
