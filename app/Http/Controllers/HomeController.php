<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function home(){
      return view("welcome",["products" => Product::all()]);
    }
}
