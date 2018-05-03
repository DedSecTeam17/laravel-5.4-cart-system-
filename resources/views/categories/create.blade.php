@extends('pages.main')


@section('title','Add new laptops Me')

@section('style')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')





    <div class="row" style="margin-top: 10%">


        <div class="col-md-6 offset-md-3">

            <div class="card">
                <div class="card-header">
                    {!! Form::open(['route'=>'categories.store','method'=>'POST','files'=>'true','data-parsley-validate'=>'']) !!}
                    {{Form::label('name','Category name')}}
                    {{Form::text('name',  null,['class'=>'form-control','style','required'=>'','minlength'=>"6"])}}
                    {{Form::submit('Add',array('class'=>'btn btn-success btn-lg btn-block mt-5'))}}

                    {!! Form::close() !!}
                </div>




            </div>
        </div>
        <div class="col-md-2">

        </div>


    </div>



@endsection


@section('js')
    {!! Html::script('js/parsley.min.js')  !!}
@endsection