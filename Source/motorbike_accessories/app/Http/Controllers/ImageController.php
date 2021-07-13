<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::orderBy('id','DESC')->paginate(5);
        $products = Product::all();
        return view('backend.images_product.list',compact('images','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.images_product.create');
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
            $image = new Image();
            
            $image->album_name = $request->input('album_name');

            if ($request->hasFile('image_a')) {
                $image_a = $request->file('image_a');
                $path = $image_a->store('images', 'public');
                $image->image_a = $path;
            }
            if ($request->hasFile('image_b')) {
                $image_b = $request->file('image_b');
                $path = $image_b->store('images', 'public');
                $image->image_b = $path;
            }
            if ($request->hasFile('image_c')) {
                $image_c = $request->file('image_c');
                $path = $image_c->store('images', 'public');
                $image->image_c = $path;
            }
            if ($request->hasFile('image_d')) {
                $image_d = $request->file('image_d');
                $path = $image_d->store('images', 'public');
                $image->image_d = $path;
            }
            
            $image->save();
            Session::flash('success', 'Add success!');
            return redirect()->route('product-image.create');
        } catch (Exception $e) {
            Session::flash('error', 'Add fail!');
            return redirect()->route('product-image.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::findOrFail($id);
        return view('backend.images_product.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $image = Image::findOrFail($id);
            $image->album_name = $request->input('album_name');

            if ($request->hasFile('image_a')) {
                $currentImg = $image->image_a;
                // if ($currentImg) {
                //     Storage::delete('/public/' . $currentImg);
                // }

                $image_a = $request->file('image_b');
                $path = $image_a->store('images', 'public');
                $image->image_a = $path;
            }
            if ($request->hasFile('image_b')) {
                $currentImg = $image->image_b;
                // if ($currentImg) {
                //     Storage::delete('/public/' . $currentImg);
                // }

                $image_b= $request->file('image_b');
                $path = $image_b->store('images', 'public');
                $image->image_b = $path;
            }
            if ($request->hasFile('image_c')) {
                $currentImg = $image->image_c;
                // if ($currentImg) {
                //     Storage::delete('/public/' . $currentImg);
                // }

                $image_c = $request->file('image_c');
                $path = $image_c->store('images', 'public');
                $image->image_c = $path;
            }
            if ($request->hasFile('image_d')) {
                $currentImg = $image->image_d;
                if ($currentImg) {
                    Storage::delete('/public/' . $currentImg);
                }

                $image_d = $request->file('image_d');
                $path = $image_d->store('images', 'public');
                $image->image_d = $path;
            }

            $image->save();
            Session::flash('success', 'Update success!');
            return redirect()->route('product-image.list', $id);

        } catch (Exception $e) {
            Session::flash('error', 'Update fail!');
            return redirect()->route('product-image.list');
        }
    }


    public function delete($id)
    {
        $image = Image::findOrFail($id);
        return view('backend.images_product.delete',compact('image'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $image = Image::findOrFail($id);

            $image_a = $image->image_a;
            $image_b = $image->image_b;
            $image_c = $image->image_c;

            $image_d = $image->image_d;

    
            if($image_a && $image_b && $image_c && $image_d)
            {
                Storage::delete('/public/storage/'. $image_a);
                Storage::delete('/public/storage/'. $image_b);
                Storage::delete('/public/storage/'. $image_c);
                Storage::delete('/public/storage/'. $image_d);
            }
            // if($image_b)
            // {
            //     Storage::delete('/public/storage/'. $image_b);
            // }
            // if($image_c)
            // {
            //     Storage::delete('/public/storage/'. $image_c);
            // }
            // if($image_d)
            // {
            //     Storage::delete('/public/storage/'. $image_d);
            // }
    
            $image->delete();
    
            //dung session de dua ra thong bao
            Session::flash('success', 'Delete success !');
            //xoa xong quay ve trang danh sach task
            return redirect()->route('product-image.list');
        }
        catch(Exception $e)
        {
            Session::flash('error', 'Delete faile !');
            //xoa xong quay ve trang danh sach task
            return redirect()->route('product-image.list');
        }
    }

    public function search(Request $request)
    {
        try
        {
            $keyword = $request->input('keyword');
            $images = Image::where('album_name','LIKE','%'.$keyword.'%')->paginate(10);

            Session::flash('success', 'Search success!');
            return view('backend.images_product.search',compact('images'));
        }catch(Exception $e)
        {
            Session::flash('error', 'Not result');
            return redirect()->route('product-line.list');
        }
        
    }
}
