<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStore;
use App\Http\Requests\ProductUpdate;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::paginate();
        return $product;
    }

    public function store(ProductStore $request)
    {
        Product::create($request->only('name', 'price'));
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function update(ProductUpdate $request, Product $product)
    {

        $product->update($request->only('name', 'price'));
    }

    public function destroy(Product $product)
    {
       $product->delete();
    }
}
