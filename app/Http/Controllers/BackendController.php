<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class BackendController extends Controller
{
    public function dashboardfun($value=''){
   	return view('backend.dashboard');
   }
   public function orderlistfun($value=''){
     $orders = Order::all();
      return view('backend.orderlist',compact('orders'));

   }
       public function orderdetail($id)
    {
       $orderdetail = Order::find($id);

       return view('backend.orderdetail',compact('orderdetail'));
    }
}
