@extends('pages.main')



@section('title','Show Your item')



@section('content')


    <div class="row" style="margin-top: 10%">

        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <div class="jumbotron">
                <h4>Create A new Category</h4>
                <a href="{{route('tags.create')}}" class="btn btn-success">Create new Item</a>

            </div>
            <div class="jumbotron">
                <p><b>Category name :</b>{{$tag->name}}</p>
            </div>
        </div>


        <div class="col-md-2">

        </div>








    </div>




@endsection