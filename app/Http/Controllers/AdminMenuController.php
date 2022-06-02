<?php

namespace App\Http\Controllers;

use App\Models\CartProduct;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin-menu-list", ['menus' => Product::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin-menu-add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:png,jpg,jpeg|image|max:2056'
        ]);

        $imageName = "";
        if ($request->hasFile("image")) {
            $imageName = time().'_'.$request->image->getClientOriginalName();
            $uploadedImage = $request->file("image");
            $uploadedImage->move(public_path().'/images/', $imageName);
        }

        $validated['image'] = $imageName;

        Product::create($validated);

        return redirect()->route("adminMenuList")
                    ->with("status", "success")
                    ->with("msg", "Menu has been added!");
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
        // dd(Product::where('id', $id)->get());
        return view("admin-menu-edit", ['menu' => Product::where('id', $id)->first()]);
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
        $curProduct = Product::where('id', $id);

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:png,jpg,jpeg|image|max:2056'
        ]);

        $imageName = "";
        if ($request->hasFile("image")) {
            $imageName = time().'_'.$request->image->getClientOriginalName();
            $uploadedImage = $request->file("image");
            $uploadedImage->move(public_path().'/images/', $imageName);
            $validated['image'] = $imageName;
        } else {
            $validated['image'] = $curProduct->first()->image;
        }

        $curProduct->update($validated);

        return redirect()->route("adminMenuList")
                    ->with("status", "success")
                    ->with("msg", "Menu has been edited!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CartProduct::where('product_id', $id)->delete();
        $order_products = OrderProduct::where('product_id', $id)->get();
        
        foreach ($order_products as $order_product) {
            if($order_product->order->order_product->count() == 1) {
                $order_product->order->delete();
            }
        }
        $order_products->delete();

        Product::where('id', $id)->first()->delete();

        return redirect()->route("adminMenuList")
                    ->with("status", "success")
                    ->with("msg", "Menu has been deleted!");
    }
}
