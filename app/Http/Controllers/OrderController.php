<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("staff-order", ["orders" => Order::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ======== Create order based on cart_product of user ========
        $carts = CartProduct::where('user_id', Auth::user()->id)->get();
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'total_price' => 0
        ]);

        dump($order);
        $totalPrice = 0;
        foreach ($carts as $cart) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $cart->product->id,
                'jumlah' => $cart->jumlah,
            ]);
            $totalPrice += $cart->jumlah * $cart->product->price;
            // CartProduct::where('user_id', Auth::user()->id)->where('product_id', $cart->product->id)->get()->delete();
        }
        CartProduct::where('user_id', Auth::user()->id)->delete();

        $order->update([
            'total_price' => $totalPrice
        ]);

        // ======== Clear cart_product of user ========
        

        // ======== Redirect user to orders page ========
        return "";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
