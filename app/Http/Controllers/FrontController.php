<?php

namespace App\Http\Controllers;

use App\Category;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->get();

        return view('layouts.front', ['categories' => $categories]);

    }
}
