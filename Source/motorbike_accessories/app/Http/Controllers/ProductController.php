<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use App\Models\Productline;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id','DESC')->paginate(5);
        return view('backend.product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productlines = Productline::all();
        $albumImages = Image::all();
        return view('backend.product.create',compact('productlines','albumImages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $product = new Product();
            $product->name = $request->input('name');

            $product->product_vendor = $request->input('product_vendor');

            $product->product_description = $request->input('product_description');

            $product->quantity_stock = $request->input('quantity_stock');

            $product->price = $request->input('price');

            $product->productline_id = $request->input('productline_id');

            $product->image_id = $request->input('image_id');
            $product->save();

            Session::flash('success', 'Add success!');
            return redirect()->route('product.create');

        } catch (Exception $e) {

            Session::flash('error', 'Add fail!');
            return redirect()->route('product.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
         $productlines = Productline::all();
        $albumImages = Image::all();
        return view('backend.product.edit',compact('product','productlines','albumImages'));
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
        try {
            $product = Product::findOrFail($id);
            $product->name = $request->input('name');
            $product->product_vendor = $request->input('product_vendor');
            $product->product_description = $request->input('product_description');
            $product->quantity_stock = $request->input('quantity_stock');
            $product->price = $request->input('price');
            $product->productline_id = $request->input('productline_id');
            $product->image_id = $request->input('image_id');

            $product->save();
            Session::flash('success', 'Update success!');
            return redirect()->route('product.list', $id);

        } catch (Exception $e) {

            Session::flash('error', 'Update fail!');
            return redirect()->route('product.list');
        }
    }


    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $productlines = Productline::all();
        $albumImages = Image::all();
        return view('backend.product.delete',compact('product','productlines','albumImages'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $product = Product::findOrFail($id);

            $product->delete();

            //dung session de dua ra thong bao
            Session::flash('success', 'Delete success !');
            //xoa xong quay ve trang danh sach task
            return redirect()->route('product.list');
        }
        catch(Exception $e)
        {
            Session::flash('error', 'Delete faile !');
            //xoa xong quay ve trang danh sach task
            return redirect()->route('product.list');
        }
    }

    public function detail($id){
        $product = Product::findOrFail($id);
        return view('backend.product.detail',compact('product'));
    }

    public function search(Request $request)
    {
        try
        {
            $keyword = $request->input('keyword');

            $products = Product::where('name','LIKE','%'.$keyword.'%')->paginate(10);

            Session::flash('success', 'Search success!');
            return view('backend.product.search',compact('products'));
        }catch(Exception $e)
        {
            Session::flash('error', 'Not result');
            return view('backend.product.list');
        }

    }
}
