<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories=Category::orderBy('id','desc')->paginate(6);


        return view('categories.index')->withCategories($categories);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('categories.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required | min:10 '
        ]);

        $category=new Category();

        $category->name=$request->name;

        $category->save();

        Session::flash('success','new category has been added ');



        return redirect()->route('categories.index');



        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {

        $category=Category::find($id);


        return view('categories.show')->withCategory($category);

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

        $categoty=Category::find($id);

        return view('categories.edit')->withCategoty($categoty);
        //
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
        //
        $this->validate($request,[
            'name'=>'required | min:10 '
        ]);

        $category=Category::find($id);

        $category->name=$request->name;

        $category->save();

        Session::flash('success','new category has been updated ');



        return redirect()->route('categories.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);

        try {
            $category->delete();
        } catch (\Exception $e) {
        }

        Session::flash('success','item has been deleted');


        return redirect()->route('categories.index');



        //
    }
}
