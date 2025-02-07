<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{

    public function home(){
      $products = Category::all()->map(function($category){
        return ["category_name" => $category->name, "category_products" => Product::where('category_id', $category->id)->get()];
      })->toArray();
      return view("welcome",["products" => $products,"categories" => Category::all()]);
    }
}
