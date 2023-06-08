<?php

namespace App\Http\Controllers;

use App\Models\DaftarProduct;
use Illuminate\Http\Request;

class DaftarProductController extends Controller
{
    public function index()
    {
        $data = DaftarProduct::all();
        return view('products.daftar-product.daftar-product',["title" => "Daftar-Product", "data" => $data]);
    }
}
