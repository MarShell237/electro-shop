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

    public function filterCategory(Category $category){
      $products = [["category_name" => $category->name, "category_products" => Product::where('category_id', $category->id)->get()]]; 
      return view("welcome",["products" => $products,"categories" => Category::all()]);
    }

    public function filter(Request $request){
      $request->validate(['searchValue'=>['string','nullable']]);
      $query = Product::query();
      if($request->has('searchValue')){
        $query = $query->where('name', 'like' ,"%{$request->input('searchValue')}%");
      }
      $products = Category::all()->map(function($category) use ($query){
        return ["category_name" => $category->name, "category_products" => $query->where('category_id', $category->id)->get()];
      })->toArray();
      // dd($products);
      return view('welcome',[
          'products'=>$products,
          'categories'=>Category::all(),
      ]);
  }
}
