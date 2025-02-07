<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index(){
    return view("category.index",["categories" => Category::all()]);
  }

  public function create(){
      return view("category.form",["category" => new Category()]);
    }
    
    public function store(Request $request){
      $data = $request->validate([
        'name' => ['required']
      ]);
      Category::create($request->all());
      return redirect(url('category'));
    }

    public function edit(Category $category){
        return view("category.form",["category" => $category]);
      }
    
    public function update(Request $request, Category $category){
      $data = $request->validate([
        'name' => ['required']
      ]);
      $category->update($data);
      return redirect(url('category'));
    }

    public function destroy(Category $category)
    {
      Product::where('category_id', $category->id)->delete();
      $category->delete();
      return to_route('category.index')->with('success','la categorie a ete supprimer ainsi que tout les produits qui lui etaient liees');
    }
}
