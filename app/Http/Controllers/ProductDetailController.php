<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function show($id)
    {
        return "Mostrar detalle del producto $id";
    }
}
