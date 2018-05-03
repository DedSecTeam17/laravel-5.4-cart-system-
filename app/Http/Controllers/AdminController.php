<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 4/24/2018
 * Time: 10:45 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Laptop;
use App\Tag;

class AdminController extends  Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public  function adminPanel(){



//        all categories  CRUD path

        $categories=Category::orderBy('id','desc')->limit(5)->get();



//        all laptops item   CRUD path
        $laptops=Laptop::orderBy('id','desc')->limit(5)->get();



//        all tags   CRUD path

        $tags=Tag::orderBy('id','desc')->limit(5)->get();



        return view('admin.index')->withLaptops($laptops)->withTags($tags)->withCategories($categories);
    }
}