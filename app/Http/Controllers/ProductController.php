<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use DB;
class ProductController extends Controller
{
    protected $rules = [
        'product_name'        => 'required|max:100',
        'product_description' => 'required|max:255',
        'product_quantity' => 'required|integer|min:0',
        'product_price' => 'required|numeric|min:0'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.list', compact('products', $products));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.manage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Basic validation rules
        $this->validate($request, $this->rules);
        // No _token for now, mass assignment section
        $input = $request->except(['_token', 'product_id']);

        $product = new Product($input);
        // Set the indicated state based on the rules given
        $product->product_isactive = $this->_setProductSate($product);
        $product->save();

        return redirect()->route('product.index');
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
    public function edit(Product $product)
    {
        return view('products.manage', compact('product', $product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product              $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // Get all the input data, but some fields that are nor required for this operation
        $input = $request->except(['_token', 'product_id']);
        // Basic validation rules
        $this->validate($request, $this->rules);

        // val assignment
        $product->product_name        = $input['product_name'];
        $product->product_description = $input['product_description'];
        $product->product_price       = $input['product_price'];
        $product->product_quantity    = $input['product_quantity'];
        $product->product_isactive    = $this->_setProductSate($product);

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }

    /**
     * Sets the proper state based on the quantity and price
     * of each product. Typehinted and injected.
     *
     * @param Product $product
     * @return boolean
     */
    private function _setProductSate(Product $product) {
        return ($product->product_price == 0 || $product->product_quantity == 0) ? false : true;
    }
}
