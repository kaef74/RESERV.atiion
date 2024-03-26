<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index()
    {
        $subcategories = Subcategory::orderBy('id')->get();

        return view('crm.subcategories.index', compact([
            'subcategories'
        ]));
    }
}
