@extends('pages.main')


@section('title','Add new HardWare stuff ')

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
                    {!! Form::open(['route'=>'hardware.store','method'=>'POST','files'=>'true','data-parsley-validate'=>'']) !!}
                    {{Form::label('cpu','Enter cpu name and G:')}}
                    {{Form::text('cpu',  null,['class'=>'form-control','style','required'=>''])}}

                    {{Form::label('gpu','GPU :')}}
                    {{Form::text('gpu',  null,['class'=>'form-control','style','required'=>''  ])}}

                    {{Form::label('ram','RAM:')}}
                    {{Form::text('ram',  null,['class'=>'form-control','style','required'=>''  ])}}

                    {{Form::label('hd','HARD DRIVE:')}}
                    {{Form::text('hd',  null,['class'=>'form-control','style','required'=>''  ])}}

                    {{Form::label('ssd','SSD: ')}}
                    {{Form::text('ssd',  null,['class'=>'form-control','style','required'=>''])}}

                    {{Form::label('screen_quality','Screen quality')}}
                    {{Form::text('screen_quality',  null,['class'=>'form-control','style','required'=>''  ])}}

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