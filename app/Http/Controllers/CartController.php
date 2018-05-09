<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\HardWare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\Object_;

class CartController extends Controller
{
    private $i=0;
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
        //
        $username=Auth::user()->name;
        $carts=Cart::all()->where('user_name',$username);

        $hardwares[]=new HardWare();
        $categories[]= new Category();

        $hard=new HardWare();
        $category=new Category();
//        hardware area
        foreach ($carts as  $cart){
            $hardwares[$this->i++]=$hard::find($cart->hardware_id);
            $categories[$this->i++]=$category::find($cart->category_id);
        }
//        reset counter
        $this->i=0;




// categories




        return view('carts.index')->withHardwares($hardwares)->withCategories($categories)->withCarts($carts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
                'quantity'=>'required',
                'laptop_id'=>'unique:carts,laptops_id'
            ]);
        $cart_item=new Cart();
        $cart_item->laptops_id=$request->laptop_id;
        $cart_item->category_id=$request->category_id;
        $cart_item->hardware_id=$request->hardware_id;
        $cart_item->user_name=$request->user_name;
//        default values
        $cart_item->quantity=$request->quantity;


        $cart_item->save();

        return redirect()->route('carts.index');

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
    public function edit($id)
    {
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
