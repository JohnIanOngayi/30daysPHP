<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $allCategories = DB::table(table: 'categories')->get();
        return view(view: 'home', mergeData: ['categories' => $allCategories]);
    }
}
