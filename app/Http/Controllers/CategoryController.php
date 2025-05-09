<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{

    public function index(){

        $categories = Category::all();

        return view('category.index', compact('categories'));

    }

    public function create() {
        
        return view('category.create');

    }

    public function store(Request $request){

        $category = new Category();

        $category->name=$request->name;
      
        $category->save();
        
        return $category;

    }
    
}
