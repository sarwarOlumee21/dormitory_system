<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractsController extends Controller
{
    //
    public function ContractsRegister()
    {
        return view('contracts.contracts_register');
    }

    public function ContractsList()
    {
        return view('contracts.contracts_list');
    }
}