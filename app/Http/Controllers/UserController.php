<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function get()
    {
        $users = User::take(100)
        ->get();
        
        return response()->json($users);
    }
}
