<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Orders;
use App\Models\Products;

class PagesController extends Controller
{
    public function users()
    {
         $users = User::all();
        
        return view('admin.pages.users', compact('users'));
    }


    public function products()
    {
         $products = Products::all();
        
        return view('admin.pages.products', compact('products'));
    }

    public function orders()
    {       
         $orders = Orders::all();
        
        return view('admin.pages.orders', compact('orders'));
    }
}
