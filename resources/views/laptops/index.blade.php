@extends('pages.main')


@section('title','SHOW All Item for user')

@section('style')

    <style>

        .checked {
            color: gold;

        }

    </style>

@endsection



@section('content')
        <hr>
        <div class="row" style="margin-top: 10%; ">

            <div class="col-md-12">

                <table class="table table-striped table-responsive table-bordered table-hover table-condensed">
                    <thead class="bg-dark" style="color: white">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Weight</th>
                        <th>Quantity</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>os</th>
                        <th>created at</th>
                        <th>updated at</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>

                    <tbody>


                    @foreach($laptops as $laptop)
                        <tr>
                            <td>{{$laptop->id}}</td>
                            <td>{{$laptop->name}}</td>
                            <td>{{$laptop->weight}}</td>
                            <td>{{$laptop->quantity}}</td>
                            <td>{{$laptop->size}}</td>
                            <td>{{$laptop->color}}</td>
                            <td>{{$laptop->price}}</td>
                            <td>{{$laptop->os}}</td>
                            <td>
                                <img src="{{asset('img/'.$laptop->image)}}" class="img-thumbnail" width="50" height="50">



                            </td>
                            <td>{{$laptop->created_at}}</td>
                            <td>{{$laptop->updated_at}}</td>
                            <td>
                                {!! Form::model($laptop,['route'=>['laptops.edit',$laptop->id],'files'=>'true','method'=>'GET']) !!}
                                {!! Form::submit('UPDATE',['class'=>'btn btn-xs btn-info']) !!}
                                {!! Form::close() !!}

                            </td>
                            <td>
                                {!! Form::open(['route'=>['laptops.destroy',$laptop->id],'files'=>'true','method'=>'DELETE']) !!}
                                {!! Form::submit('DELETE',['class'=>'btn btn-xs btn-danger']) !!}
                                {!! Form::close() !!}

                            </td>





                        </tr>
                    @endforeach


                    </tbody>
                </table>

            </div>

            <div class="text-center">
                {{--{!! $posts->links(); !!}--}}
                {{--//       php artisan vendor:publish --tag=laravel-pagination use for fancy pagination--}}

                {!!$laptops->links('vendor.pagination.bootstrap-4') !!}

            </div>


        </div>
















@endsection


@section('js')



@endsection



