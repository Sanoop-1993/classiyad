<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\MultiImg;
use Image;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('backend.product.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');

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
            'name' => 'required|unique:products|max:255'
        ]);

        $image= $request->file('feature_image')->store('public/product');
        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'mrp_price' => $request->mrp_price,
            'selling_price' => $request->selling_price,
            'feature_image'=> $image,
            
        ]);
        return redirect()->route('product.index')->with('success','Product Created Successfully');;

    }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product= Product::find($id);

        return view('backend.product.edit',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product= Product::find($id);

        return view('backend.product.edit',compact('product'));
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
        $product = Product::find($id);

        if($request->hasFile('feature_image'))
        {
            Storage::delete($product->image);
            $image=$request->file('feature_image')->store('public/product');

            Product::update([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'mrp_price' => $request->mrp_price,
                'selling_price' => $request->selling_price,
                'feature_image'=> $image,
                
            ]);

            

        }
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'mrp_price' => $request->mrp_price,
            'selling_price' => $request->selling_price
          
            
        ]);
        return redirect()->route('product.index')->with('success','Product Updated Successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prorduct = Product::find($id)->delete();

      

        return redirect()->route('product.index')->with('message','Product Deleted Successfully');
    }
}
