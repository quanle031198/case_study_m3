<?php

namespace App\Http\Controllers;

use App\Models\Productline;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productlines = Productline::orderBy('id', 'DESC')->paginate(5);
        // $productlines = Productline::all();
        return view('backend.productline.list', compact('productlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.productline.create');
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
            $productline = new Productline();
            $productline->name = $request->input('name');


            if ($request->hasFile('productline_img')) {
                $productline_img = $request->file('productline_img');
                $path = $productline_img->store('images', 'public');
                $productline->productline_img = $path;
            }
            $productline->description = $request->input('description');
            $productline->save();
            Session::flash('success', 'Add success!');
            return redirect()->route('product-line.create');
        } catch (Exception $e) {
            Session::flash('error', 'Add fail!');
            return redirect()->route('product-line.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productline  $productline
     * @return \Illuminate\Http\Response
     */
    public function show(Productline $productline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productline  $productline
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productline = Productline::findOrFail($id);
        return view('backend.productline.edit', compact('productline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productline  $productline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $productline = Productline::findOrFail($id);
            $productline->name = $request->input('name');

            if ($request->hasFile('productline_img')) {
                $currentImg = $productline->productline_img;
                if ($currentImg) {
                    Storage::delete('/public/' . $currentImg);
                }

                $productline_img = $request->file('productline_img');
                $path = $productline_img->store('images', 'public');
                $productline->productline_img = $path;
            }

            $productline->description = $request->input('description');
            $productline->save();
            Session::flash('success', 'Update success!');
            return redirect()->route('product-line.list', $id);

        } catch (Exception $e) {
            Session::flash('error', 'Update fail!');
            return redirect()->route('product-line.list');
        }
    }

    public function delete($id)
    {
        $productline = Productline::findOrFail($id);
        return view('backend.productline.delete',compact('productline'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productline  $productline
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $productline = Productline::findOrFail($id);
            $productline_img = $productline->productline_img;

            if($productline_img)
            {
                Storage::delete('/public/'. $productline_img);
            }

            $productline->delete();

            //dung session de dua ra thong bao
            Session::flash('success', 'Delete success !');
            //xoa xong quay ve trang danh sach task
            return redirect()->route('product-line.list');
        }
        catch(Exception $e)
        {
            Session::flash('error', 'Delete faile !');
            //xoa xong quay ve trang danh sach task
            return redirect()->route('product-line.list');
        }
    }

    public function search(Request $request)
    {
        try
        {
            $keyword = $request->input('keyword');

            $productlines = Productline::where('name','LIKE','%'.$keyword.'%')->paginate(10);
            Session::flash('success', 'Search success!');
            return view('backend.productline.search',compact('productlines'));
        }catch(Exception $e)
        {
            Session::flash('error', 'Not result');
            return view('backend.productline.list');
        }

    }
}
