<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
      return view("product.index",["products" => Product::all()]);
    }

    public function create(){
      return view("product.form",["categories" => Category::all(), "product"=> new Product()]);
    }

    public function store(Request $request){
      $data = $request->validate([
        'name' => ['required'],
        'description' => ['required'],
        'image' => ['required','image'],
        'price' => ['required'],
        'category_id' => ['required','exists:categories,id']
      ]);
      $data['image'] = $data['image']->store('product','public');
      Product::create($data);
      return redirect(url('product'));
    }

    public function edit(Product $product){  
      return view("product.form",["categories" => Category::all(), "product" => $product]);
    }

    public function update(Product $product,Request $request){ 
      $data = $request->validate([
        'name' => ['required'],
        'description' => ['required'],
        'image' => ['image'],
        'price' => ['required'],
        'category_id' => ['required','exists:categories,id']
      ]);

      if(isset($data['image'])){
        $data['image'] = $data['image']->store('product','public');
        Storage::disk('public')->delete($product->image);
      }
      
      $product->update($data);
      return to_route('product.index')->with('success','le produit a ete mis a jour');
    }

    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->image);
        $product->delete();
        return to_route('product.index')->with('success','le produit a ete supprimer');

    }


}
