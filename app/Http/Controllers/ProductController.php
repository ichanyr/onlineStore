<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of Products";
        if (request('search')) {
            $viewData["products"] = Product::where('name', 'like', '%' . request('search') . '%')->get();
        } else {
            $viewData["products"] = Product::all();
        }
        
       
        return view('product.index')->with("viewData", $viewData);
    }


    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = strtoupper($product->getName())." - Online Store";
        $viewData["subtitle"] =  strtoupper($product->getName())." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}