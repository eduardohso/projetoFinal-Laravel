<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller {

    public function listarUsuarios() {
        $users=User::find();
        dd($user);
    }
    
}
