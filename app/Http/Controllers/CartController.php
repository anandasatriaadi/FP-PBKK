<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("user-cart", [
            "carts" => CartProduct::where('user_id', Auth::user()->id)->get()
        ]);
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
    public function store($id)
    {
        $result = CartProduct::where('user_id', Auth::user()->id)->where('product_id',$id)->first();
        if($result == null) {
            CartProduct::create([
                'user_id' => Auth::user()->id,
                'product_id' => $id,
                'jumlah' => 1,
            ]);
        } else {
            CartProduct::where('user_id', Auth::user()->id)->where('product_id',$id)->update([
                'jumlah' => $result->jumlah + 1
            ]);
        }

        return redirect()->route("userMenu")->with("status", "success")->with("msg", "Item been added to your cart!");
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
