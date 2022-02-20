<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Orders;

class OrdersController extends Controller
{
    public function index(User $user)
    {
        # code...
        $users = auth()->user()->pluck('id');

        $orders = Orders::whereIn('id', $users)->with('user')->latest()->paginate(6);
        
        return view('orders', compact('orders'));
    }

    // public function create()
    // {
    //     return view('orders.create');
    // }

    public function store()
    {
         $data = request()->validate([
            'user_id' => 'required',
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'total' => 'required',
        ]);

        auth()->user()->posts()->create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'total' => $request->total,
        ]);

        return redirect('/dashboard');
    }
}
