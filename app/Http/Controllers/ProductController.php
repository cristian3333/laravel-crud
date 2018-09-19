<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DataTables;


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
       // $products = Product::get() ; 
       return view('products.index') ; 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create') ; 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product= new Product();
        $product->product_name= $request['product_name'];
        $product->price= $request['price'];
        $product->quantity= $request['quantity'];
        $product->save();
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        $product = Product::findOrFail($product) ; 
        return view('products.show' , compact('product')) ; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $product = Product::findOrFail($product) ;
        return view('products.edit' , compact('product')) ; 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        $data = $request->all(); 
        Product::find($product)->update($data);
        return redirect('/products');
    }



    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($product)
    {
        $product = Product::findOrFail($product) ;
        return view('products.delete' , compact('product')) ; 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $product = Product::findOrFail($product) ;
        $product->delete();
        return redirect('/products');
    }
    function getdata()
    {
     $products = Product::select('id',  'product_name', 'price' , 'quantity');
     return DataTables::of($products)
     ->addColumn('actions', '<a href="show/{{$id}}">Show</a> | <a href="edit/{{$id}}">Edit</a> | <a href="delete/{{$id}}">Delete</a> <span class="glyphicon glyphicon-asterisk"></span> ')
     ->rawColumns(['actions', 'action'])
     ->make(true);
    }
}
