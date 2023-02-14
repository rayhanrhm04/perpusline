<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): View|Factory
    {
        return view('backEnd.category.index');
    }
}
