@extends('pages.main')


@section('title','Add new laptops Me')

@section('style')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}@endsection

@section('content')




    <div class="row" style="margin-top: 10%">

        <div class="col-md-2">

        </div>
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    {!! Form::model($laptop,['route'=>['laptops.update',$laptop->id],'method'=>'PUT','files'=>'true','data-parsley-validate'=>'']) !!}
                    {{Form::label('name','Laptop name')}}
                    {{Form::text('name',  null,['class'=>'form-control','style','required'=>'','minlength'=>"10"])}}

                    {{Form::label('weight','Weight')}}
                    {{Form::text('weight',  null,['class'=>'form-control','style','required'=>'','data-parsley-type'=>'number'])}}

                    {{Form::label('quantity','Quantity')}}
                    {{Form::text('quantity',  null,['class'=>'form-control','style','required'=>'','data-parsley-type'=>'number'])}}

                    {{Form::label('size','Size')}}
                    {{Form::text('size',  null,['class'=>'form-control','style','required'=>'','data-parsley-type'=>'number'])}}

                    {{Form::label('color','Color ')}}
                    {{Form::text('color',  null,['class'=>'form-control','style','required'=>''])}}

                    {{Form::label('price','Price')}}
                    {{Form::text('price',  null,['class'=>'form-control','style','required'=>'','data-parsley-type'=>'number'])}}

                    {{Form::label('os','OS')}}
                    {{Form::text('os',  null,['class'=>'form-control','style','required'=>''])}}

                    <div class="input-group mt-5">
                        <select class="custom-select  from-control" name="category_id" >
                            @foreach($categories as  $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div><br>

                    <div class="input-group mt-5">
                        <select class="custom-select  from-control" name="hardware_id" >
                            @foreach($hardwares as  $hardware)
                                <option value="{{$hardware->id}}">
                                    {{$hardware->cpu}},
                                    {{$hardware->gpu}},
                                    {{$hardware->ram}},
                                    {{$hardware->hd}},
                                    {{$hardware->ssd}},
                                    {{$hardware->screen_quality}}

                                </option>

                            @endforeach
                        </select>
                    </div><br>



                    {{Form::label('tags','Tags :')}}

                    <div class="input-group mb-3">
                        <select class="custom-select select2_mult from-control" name="tags[]" multiple="multiple">
                            @foreach($tags as  $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach

                        </select>
                    </div><br>

































                    {{Form::label('image','Choose Your laptop Image')}}
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

@section("js")

    {!! Html::script('js/parsley.min.js')  !!}
    {!! Html::script('js/select2.min.js')  !!}

    <script>
        $(".select2_mult").select2();
        $(".select2_mult").select2().val({!!   json_encode(($laptop->tag->pluck('id')))   !!}).trigger('change');

    </script>
@endsection