<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'TenSP' => 'required',
            'image' => 'required',
            'Gia' => 'required',
        ]);

        $fileName = time().'.'.$request->image->extension();  
        
        // dd($fileName);

        $request->image->move(public_path('uploads'), $fileName);

        $Product=new Product();
        $Product->TenSP = $request->TenSP;
        $Product->Gia = $request->Gia;
        $Product->image = $fileName;
        $Product->save();

        // Post::create($request->all());

        return redirect()->route('products.index')->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
      return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'TenSP' => 'required',
            'Gia' => 'required',
        ]);
        // dd($id);
        

        $Product= Product::findOrFail($id);
        $Product->TenSP = $request->TenSP;
        $Product->Gia = $request->Gia;
        if($request->hasFile('image')){
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads'), $fileName);
            $Product->image = $fileName;
        }
      
        $Product->save();

        return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
      $product->delete();

       return redirect()->route('products.index')
                       ->with('success','product deleted successfully');
    }
    
    
}