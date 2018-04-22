@extends('pages.main')


@section('title','Add new laptops Me')

@section('style')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')





    <div class="row" style="margin-top: 10%">

        <div class="col-md-2">

        </div>
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">

                          {!! Form::model($categoty,['route'=>['categories.update',$categoty->id],'method'=>'PUT','files'=>'true','data-parsley-validate'=>'']) !!}
                    {{Form::label('name','Category name')}}
                    {{Form::text('name',  null,['class'=>'form-control','style','required'=>'','minlength'=>"6"])}}
                    {{Form::submit('Update',array('class'=>'btn btn-primary btn-lg btn-block mt-5'))}}

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