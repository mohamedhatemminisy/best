<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mediator;
use App\Models\Order;
use App\Models\Page;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * 
     * show all orderss
     */
    public function index()
    {
        $contact = Order::all();
       return view('admin.order.index',compact('contact'));
    }
    /**
     * 
     * show single order
     */

    public function show($id)
    {
       
        $general = Order::findorfail($id);
        $mediator_name = Mediator::select('name')->where('code','16771')->first();
         return view('admin.order.show',compact('general','mediator_name'));

    }
}
