<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'produk' => 'Kemeja Merah'],
            ['id' => 2, 'produk' => 'Rok Merah Muda'],
            ['id' => 3, 'produk' => 'Gaun Dansa'],
        ];

        return view('list_product', compact('data'));
    }
}