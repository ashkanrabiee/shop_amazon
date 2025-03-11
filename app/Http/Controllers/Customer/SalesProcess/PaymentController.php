<?php

namespace App\Http\Controllers\Customer\SalesProcess;

use App\Models\Market\Order;
use Illuminate\Http\Request;
use App\Models\Market\CartItem;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    

    public function payment()
    {
        $user = Auth::user();
        $cartItems = CartItem::where('user_id', $user->id)->get();
        $order = Order::where('user_id', Auth::user()->id)->where('order_status', 0)->first();
        return view('customer.sales-process.payment', compact('cartItems', 'order'));
    }











}
