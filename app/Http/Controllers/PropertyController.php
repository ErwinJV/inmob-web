<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
   public function index(Request $request)
   {
      
     return view('welcome');
       
   }

   public function category(Category $category)
   {
        
     return view('property.category', compact('category'));
       
   }

   public function detail(Property $property)
   {
    return view('property.detail', compact('property'));

   

     
   }
}
