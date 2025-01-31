<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Http\Request;



class ProductsController extends Controller
{
    public function index(Categories $category=null) {
        $products = $category ? $category->products :   Products::all();
        $categories = Categories::orderBy('name')->get();

        return inertia('Products/Index' , [
            'products' => $products,
            'categories' => $categories,
            'selectedCategory' => $category
        ]);

    }
}
