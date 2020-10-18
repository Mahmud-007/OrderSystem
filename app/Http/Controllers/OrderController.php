<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    
    public function items(){
        $items=Order::get();
        return view('items', [
            'items'=>$items,
        ]);
    }

    public function details($id){
        $item= Order::findOrFail($id);
        return view('details',[
            'item'=>$item,
            ]);
    }

    public function create(){
        return view('create');
    }

    public function store(){

        $item= new Order();

        $item->table_no=request('table_no');
        $item->name=request('name');
        $item->price=request('price');

        $item->save();

        return redirect('/')->with('msg','The order has taken to the Kitchen and added to the dashboard. Get ready to serve.');
    }

    public function remove($id){
        $item= Order:: findOrFail($id);
        $item->delete();

        return redirect('/menu'); 
    }
}
