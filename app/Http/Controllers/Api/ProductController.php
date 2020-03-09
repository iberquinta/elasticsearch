<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        return response(Product::all()->toJson());
    }

    public function search($query, Product\ProductsRepository $productsRepository)
    {
        return $productsRepository->search($query);
    }
}
