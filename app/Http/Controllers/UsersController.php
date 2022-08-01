<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller {

    public function listarUsuarios() {
        $users=User::all();
        return view('usuarios.listar',['users'=>$users]);
    }

    public function ranking() {
        $users=DB::table('users')->orderBy('points')->paginate(30);
        return view('usuarios.ranking',['users'=>$users]);
    }
    
}
