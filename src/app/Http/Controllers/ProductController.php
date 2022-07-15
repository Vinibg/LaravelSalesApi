<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function findAll()
    {
        $products = Product::All();

        return $products;
    }

    public function create(Request $request)
    {
        try {
            $name = $request->name;
            $price = $request->price;
            $description = $request->description;

            $product = Product::create([
                "name"=> $name,
                "price"=>$price,
                "description"=>$description
            ]);

            return $product;
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update($product_id, Request $request)
    {
        try {
            $name = $request->name;
            $price = $request->price;
            $description = $request->description;

            $product = Product::where('id', $product_id)->first();
            
            $product->update([
                "name"=> $name,
                "price"=>$price,
                "description"=>$description
            ]);

            return $product;

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function delete($product_id)
    {
        try {
            $product = Product::where('id', $product_id)->first();
            $product->delete();

            return $product;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
