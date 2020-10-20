<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['products'] = Product::simplePaginate(10); 
        return view('admin.products.index', $arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product();

        $products->name = $request->name;
        $products->quantity = $request->quantity;
        $products->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User $User
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::findOrFail($id);

        return view('admin.products.show' , compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product $Product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);

        return view('admin.products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $products->name = $request->name;
        $products->quantity = $request->quantity;
        $products->updated_at = $request->updated_at;
        $products->save();
        return redirect()->route('/products/' . $products->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Product::destroy($id);
        return redirect()->route('products.index');
    }
}
