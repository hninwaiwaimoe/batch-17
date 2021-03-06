<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class PageController extends Controller
{
    public function mainfun($value=''){

      $items=Item::take(5)->orderBy('id','DESC')->get();
   	return view('main',compact('items'));
   }
   public function brandfun($value=''){
   	return view('brand');
   }
   public function itemdetailfun($value=''){
   	return view('itemdetail');
   }
   public function loginfun($value=''){
   	return view('login');
   }
   public function promotionfun($value=''){
   	return view('promotion');
   }
   public function registerfun($value=''){
   	return view('register');
   }
   public function shoppingcartfun($value=''){
   	return view('shoppingcart');
   }
   
}
