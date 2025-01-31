<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Categories::orderBy('name')->get();

        return inertia('Categories/Index', [
            'categories' => $categories,
        ]);
    }
}
