<?php

namespace App\Http\Controllers;

use App\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{


    public function getIndex()
    {


        return view("pages.welcome");
    }

    public function getHelps()
    {
        return view("pages.helps");
    }

    public function getContact()
    {
        return view("pages.contact");
    }

    public function getAllItem()
    {
        $laptops = Laptop::all();

        return view('pages.itemshelf')->withLaptops($laptops);
    }

    public function send(Request $request)
    {
        $this->validate($request,[
            'name'=>'required | min:6 '
            ,'email'=>'required | email'
            ,'message'=>'required | min:10 | max:255'
        ]);

        $data=array
        (
            'email'=>$request->email,
            'name'=>$request->name,
            'message'=>$request->message

        );
        Mail::send('pages.email',$data,function ($message) use ($data){
            $message->from($data['email']);
            $message->to('mohamedelamin14.me@gmail.com');
            $message->subject($data['name']);
        });
        Session::flash('success','your mail has been send');
        return redirect('/');
    }


}
