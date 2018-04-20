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
                    {!! Form::model($laptop,['route'=>['laptops.update',$laptop->id],'method'=>'PUT','files'=>'true','data-parsley-validate'=>'']) !!}
                    {{Form::label('name','laptop name')}}
                    {{Form::text('name',  null,['class'=>'form-control','style','required'=>'','minlength'=>"10"])}}

                    {{Form::label('weight','weight')}}
                    {{Form::text('weight',  null,['class'=>'form-control','style','required'=>'','data-parsley-type'=>'number'])}}

                    {{Form::label('quantity','quantity')}}
                    {{Form::text('quantity',  null,['class'=>'form-control','style','required'=>'','data-parsley-type'=>'number'])}}

                    {{Form::label('size','size')}}
                    {{Form::text('size',  null,['class'=>'form-control','style','required'=>'','data-parsley-type'=>'number'])}}

                    {{Form::label('color','color ')}}
                    {{Form::text('color',  null,['class'=>'form-control','style','required'=>''])}}

                    {{Form::label('price','price')}}
                    {{Form::text('price',  null,['class'=>'form-control','style','required'=>'','data-parsley-type'=>'number'])}}

                    {{Form::label('os','OS')}}
                    {{Form::text('os',  null,['class'=>'form-control','style','required'=>''])}}

                    {{Form::label('image','Choose Your laptop image')}}
                    {{Form::file('image')}}
                    {{Form::submit('Add',array('class'=>'btn btn-success btn-lg btn-block mt-5'))}}
                    {!! Form::close() !!}
                </div>
                <div class="card-footer">
                    {!!  Form::open( array('route' => array('laptops.destroy', $laptop->id), 'files' => true, 'method' => 'DELETE')) !!}
                    {!! Form::submit('Delete',["class"=>"btn btn-danger btn-block mt-3"]) !!}

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