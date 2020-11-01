<?php

namespace App\Http\Controllers;

use App\Product;

class ProductsController extends Controller {
    public function getAllProducts() {
        $products = Product::all();
        return response()->json(["success" => true, "data" => $products], 200);
    }
}