<?php

namespace App\Http\Controllers;

use App\Category;
use App\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops=Laptop::orderBy('id', 'desc')->Paginate(10);


        return view('laptops.index')->withLaptops($laptops);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('laptops.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        first we need to validate data

        $this->validate($request,
            [
                'name'=>'required | min:6',
                'weight'=>'required | integer',
                'quantity'=>'required | integer',
                'size'=>'required | integer',
                'price'=>'required | integer',
                'os'=>'required',
                'images'=>'images',
                'category_id'=>'required'
            ]);
        $laptop=new Laptop();

        if ($request->hasFile('image')) {
            $image =$request->file('image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('img/'.$filename);
            Image::make($image)->resize(218,218)->save($location);
            $laptop->image=$filename;
        }
        $laptop->name=$request->name;
        $laptop->weight=$request->weight;
        $laptop->quantity=$request->quantity;
        $laptop->size=$request->size;
        $laptop->color=$request->color;
        $laptop->price=$request->price;
        $laptop->os=$request->os;
        $laptop->category_id=$request->category_id;

        $laptop->save();

        Session::flash('sucess','your  item has been added into data base');

        return redirect()->route('laptops.show',$laptop->id);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laptop=Laptop::find($id);

        return view('laptops.show')->withLaptop($laptop);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laptop=Laptop::find($id);
        return view('laptops.edit')->withLaptop($laptop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'name'=>'required | min:6',
            'weight'=>'required | integer',
            'quantity'=>'required | integer',
            'size'=>'required | integer',
            'price'=>'required | integer',
            'os'=>'required',
            'images'=>'images',
        ]);
        $laptop=Laptop::find($id);

        if ($request->hasFile('image')) {
            $image =$request->file('image');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('img/'.$filename);
            $oldfile=$laptop->image;
            Storage::delete($oldfile);
            Image::make($image)->resize(218,218)->save($location);
            $laptop->image=$filename;
        }
        $laptop->name=$request->name;
        $laptop->weight=$request->weight;
        $laptop->quantity=$request->quantity;
        $laptop->size=$request->size;
        $laptop->color=$request->color;
        $laptop->price=$request->price;
        $laptop->os=$request->os;

        $laptop->save();

        Session::flash('sucess','your  item has been added into data base');

        return redirect()->route('laptops.show',$laptop->id);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laptop=Laptop::find($id);

        Storage::delete($laptop->image);

        $laptop->delete();

        Session::flash('success','item has been deleted');


        return redirect()->route('laptops.index');
        //
    }
}
