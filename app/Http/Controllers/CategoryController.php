<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id')->get();

        return view('bookings.categories.index', compact([
            'categories'
        ]));
    }
}
