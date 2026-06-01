<?php

namespace App\Http\Controllers;

class MaintenanceController extends Controller
{
    public function register()
    {
        return view('maintenance.maintenance_register');
    }

    public function list()
    {
        return view('maintenance.maintenance_list');
    }
}
