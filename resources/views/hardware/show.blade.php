@extends('pages.main')



@section('title','Show Your item')



@section('content')


    <div class="row" style="margin-top: 10%">

        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <div class="jumbotron">
                <h4>Create A new Category</h4>
                <a href="{{route('hardware.create')}}" class="btn btn-success">Create new Item</a>

            </div>
            <div class="jumbotron">
                <div class="list-group">
                    <li class="list-group-item">#  :{{$hardware->id}}</li>
                    <li class="list-group-item">CPU:{{$hardware->cpu}}</li>
                    <li class="list-group-item">GPU:{{$hardware->gpu}}</li>
                    <li class="list-group-item">RAM:{{$hardware->ram}}</li>
                    <li class="list-group-item">HD :{{$hardware->hd}}</li>
                    <li class="list-group-item">SSD:{{$hardware->ssd}}</li>
                    <li class="list-group-item">SQ :{{$hardware->screen_quality}}</li>
                </div>

            </div>
        </div>


        <div class="col-md-2">
        </div>
    </div>




@endsection