<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function RoomRegister()
    {
        return view('rooms.room_register');
    }
    public function RoomList()
    {
        return view('rooms.room_list');
    }
}
