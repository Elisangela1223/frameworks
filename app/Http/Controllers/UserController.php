<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Exibe apenas um item
    public function show() {}

    // Exibe a listagem de itens
    public function index() {
        return view('user.index', [ User::all() ]);
    }

    // Criar um novo item
    public function create() {}

    // Atualizar um item
    public function update() {}
}
