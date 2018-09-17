<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Mail\NewOrder;
use Mail;

class CartOrderController extends Controller
{
    public function update()
    {
        $client = auth()->user();
        $cart = $client->cart;
        $cart->order_date = Carbon::now();
        $cart->status = "Pending";
        $cart->save();

        $admins = User::where('admin', true)->get();
        Mail::to($admins)->send(new NewOrder($client, $cart));

        $notification = 'Tu pedido se ha registrado correctamente. Te contactaremos pronto via email!';
        return back()->with(compact('notification'));
    }
}
