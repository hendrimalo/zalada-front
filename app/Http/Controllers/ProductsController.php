<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create(Request $request)
    {
        $createdProduct = apiCreateProduct($request);
        if(json_encode($createdProduct["http_code"] != "200")) {
            return redirect()->route('user.index')
              ->with('failed', json_encode($createdProduct["message"]));
        }

        return redirect()->route('user.index')
          ->with('success', json_encode($createdProduct["message"]));
    }

    public function getById($params)
    {
        $product = apiGetProductsById($params);
        return view('products.detail', [
            'data' => json_encode($product["data"])
        ]);
    }

    public function deleteById($params)
    {
        $product = apiDeleteProductById($params);
        return view('index', [
            'data' => json_encode($product["message"])
        ]);   
    }

    public function updateById($params, $request)
    {

    }
}
