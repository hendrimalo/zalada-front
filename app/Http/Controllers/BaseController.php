<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $products = apiGetAllProducts();
        return view('index', [
            'data' => json_encode($products)
        ]);
    }
}
