@extends('pages.main')



@section('title','Show Your item')



@section('content')


    <div class="row" style="margin-top: 10%">

        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <div class="jumbotron">
                <h4>Create A new Category</h4>
                <a href="{{route('categories.create')}}" class="btn btn-success">Create new Item</a>

            </div>
            <table class="table table-striped table-responsive table-bordered table-hover table-condensed">
                <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>

                <tbody>


                @foreach($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td>
                            <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-xs btn-primary">Edit</a>
                        </td>

                        <td>

                            {!! Form::open(array('route'=>array('tags.destroy',$tag->id),'method'=>'DELETE')) !!}
                            {!!  Form::submit('Delete',array('class'=>'btn btn-xs btn-danger')) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>



        </div>


        <div class="col-md-2">

        </div>




        <div class="text-center">
            {{--{!! $posts->links(); !!}--}}
            {{--//       php artisan vendor:publish --tag=laravel-pagination use for fancy pagination--}}

            {!!$tags->links('vendor.pagination.bootstrap-4') !!}

        </div>



    </div>




@endsection