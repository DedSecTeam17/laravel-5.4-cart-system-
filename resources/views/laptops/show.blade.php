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
                    <li> {{'CPU :'.$laptop->hardware->cpu}}</li>
                    <li> {{'GPU :'.$laptop->hardware->gpu}}</li>
                    <li> {{'RAM :'.$laptop->hardware->ram}}</li>
                    <li> {{'HD  :'.$laptop->hardware->hd}}</li>
                    <li> {{'SSD :'.$laptop->hardware->ssd}}</li>
                    <li> {{'Screen quality :'.$laptop->hardware->screen_quality}}</li>
                </ul>


                {{Form::open(['route'=>'carts.store','method'=>'POST'])}}
                {{Form::submit('Add to Cart',['class'=>'btn btn-success btn-lg btn-block'])}}
                <div class="input-group mt-5">
                    <select class="custom-select  from-control" name="quantity" >
                       @for($i=0; $i<10; $i++)
                            <option value="{{$i}}">
                                {{$i}}
                            </option>

                           @endfor
                    </select>
                    {{--hidden data--}}
                    <input type="hidden" name="laptop_id" value="{{$laptop->id}}">
                    <input type="hidden" name="category_id" value="{{$laptop->category->id}}">
                    <input type="hidden" name="hardware_id" value="{{$laptop->hardware->id}}">
                </div><br>
                {{Form::close()}}

            </div>
        </div>
    </div>
@endsection