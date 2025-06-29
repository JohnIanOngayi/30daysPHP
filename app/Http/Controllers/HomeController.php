<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $allCategories = DB::table(table: 'categories')->get();
        $allCategories = Category::all();
        return view(view: 'home', mergeData: ['categories' => $allCategories]);
    }
}
