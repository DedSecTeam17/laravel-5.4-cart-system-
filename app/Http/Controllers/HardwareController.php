<?php

namespace App\Http\Controllers;

use App\HardWare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HardwareController extends Controller
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


        $hardwares=HardWare::orderBy('id','desc')->paginate(6);
        return view('hardware.index')->withHardwares($hardwares);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('hardware.create');
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
        $this->validate($request,
            [

                'cpu'=>'required    ',
                'gpu'=>'required    ',
                'ram'=>'required    ',
                'hd'=>'required    ',
                'ssd'=>'required    ',
                'screen_quality'=>'required    ',

            ]);

        $hardware=new HardWare();

        $hardware->cpu=$request->cpu;
        $hardware->gpu=$request->gpu;
        $hardware->ram=$request->ram;
        $hardware->hd=$request->hd;
        $hardware->ssd=$request->ssd;
        $hardware->screen_quality=$request->screen_quality;


        $hardware->save();


        Session::flash('success','new hardware has been added');


        return redirect()->route('hardware.create');


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
        $hardware=HardWare::find($id);


        return view('hardware.show')->withHardware($hardware);
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
        $hardware=HardWare::find($id);


        return view('hardware.edit')->withHardware($hardware);
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
        $this->validate($request,
            [

                'cpu'=>'required    ',
                'gpu'=>'required    ',
                'ram'=>'required    ',
                'hd'=>'required    ',
                'ssd'=>'required    ',
                'screen_quality'=>'required    ',

            ]);

        $hardware=HardWare::find($id);

        $hardware->cpu=$request->cpu;
        $hardware->gpu=$request->gpu;
        $hardware->ram=$request->ram;
        $hardware->hd=$request->hd;
        $hardware->ssd=$request->ssd;
        $hardware->screen_quality=$request->screen_quality;
        $hardware->save();
        Session::flash('success','new hardware has been added');
        return redirect()->route('hardware.show',$hardware->id);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $hardware=HardWare::find($id);

        $hardware->delete();

        Session::flash('success','Your Item has been deleted ');


        return redirect()->route('hardware.create');
        //
    }
}
