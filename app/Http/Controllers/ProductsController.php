<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show($id)
    {
        return "Mostrar detalle del producto $id";
    }
}
