<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public  function getIndex(){


        return view("pages.welcome");
    }

    public  function  getHelps(){
        return view("pages.helps");
    }
    public  function  getContact(){
        return view("pages.contact");
    }





}
