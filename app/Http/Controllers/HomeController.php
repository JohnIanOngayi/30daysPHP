<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $allCategories = DB::table(table: 'categories')->get();
        $allCategories = Category::all();
        $allPosts = Post::orderBy('id', 'desc')->get();
        return view(view: 'home',
            mergeData: [
                'categories' => $allCategories,
                'posts' => $allPosts
            ]);
    }
}
