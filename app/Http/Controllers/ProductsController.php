<?php

namespace App\Http\Controllers;

use App\Product;
use Validator;

class ProductsController extends Controller {
    public function getAllProducts() {
        $products = Product::all();
        return response()->json(["success" => true, "data" => $products], 200);
    }

    public function getSingleProduct($id) {

    }

    public function insert(Request $request) {
        $validator = Validator::make($request->all(), [

        ]);
    }

    public function update() {
        
    }

    public function delete() {
        
    }
}