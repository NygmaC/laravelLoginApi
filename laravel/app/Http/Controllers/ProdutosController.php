<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {
        return response()->json([
            ['id' => 1, 'nome' => 'produto1']
        ]);
    }
}
