@extends('pages.main')



@section('title','Show Your item')



@section('content')


    <div class="row" style="margin-top: 10%">
        <div class="col-md-4">
                    <div>
                        <img src="{{asset('img/'.$laptop->image)}}" class="fluid-img img-thumbnail" >
                    </div>
        </div>
        <div class="col-md-4">
            <p>{{$laptop->name}}</p>
            <small>by HP</small>

            <p>{{$laptop->price.'$'}}<span>(86 used & new offers)</span></p>
            <small>Price may vary by color</small>
            <img src="{{asset('img/'.$laptop->image)}}" class="img-thumbnail" width="50" height="70">
        </div>
        <div class="col-md-4 mt-5">

            <div class="jumbotron">
                <ul>
                    <li>Display Size:15.6 inches</li>
                    <li> Computer Memory Size:4 GB</li>
                    <li> Hard Disk Size:500.0 GB</li>
                    <li> Operating System:{{$laptop->os}}</li>
                    <li> Processor Count:</li>
                </ul>

            </div>


        </div>


    </div>




@endsection