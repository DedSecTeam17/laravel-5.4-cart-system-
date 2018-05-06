@section('style')

    {!! Html::style('css/colors.css') !!}
    @endsection

@extends('pages.main')


@section('title','Show Your item')



@section('content')
    <div class="row bg-dark" style="margin-top: 2.4%">
        <div class="col-md-9 offset-sm-3 ">
            <div class="row">
                <div class="col-md-3 mt-5">

                    <div class="card">
                        <div class="card-header bg-gradient-warning">

                            <i class="fas fa-laptop" style="font-size: xx-large; color: white">
                                {{$laptops->count()}}

                            </i>

                        </div>
                        <div class="card-body bg-less-darker">
                            <small><strong>View All items</strong></small>
                        </div>

                    </div>

                </div>

                {{----}}


                <div class="col-md-3 mt-5">

                    <div class="card">
                        <div class="card-header bg-gradient-info">
                            <i class="fas fa-th-list " style="font-size: xx-large; color: white">
                                {{$categories->count()}}
                            </i>
                        </div>
                        <div class="card-body bg-less-darker">
                            <small><strong>View All categories</strong></small>


                        </div>
                    </div>

                </div>

                {{----}}

                <div class="col-md-3 mt-5">

                    <div class="card">
                        <div class="card-header bg-gradient-success">
                            <i class="fas fa-tag" style="font-size: xx-large; color: white">
                                {{$tags->count()}}
                            </i>
                        </div>

                        <div class="card-body bg-less-darker">
                            <small><strong>View All tags</strong></small>


                        </div>

                    </div>

                </div>


            </div>
            <div class="row mt-5">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header bg-gradient-warning" style="color: white">
                            <h5>Items</h5>

                        </div>

                        <div class="card-body bg-less-darker">

                            <table class="table table-striped  table-hover table-condensed table-responsive">
                                <thead class="bg-dark" style="color: white">
                                <tr style="color:white">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Weight</th>
                                    <th>Quantity</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>os</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($laptops as $laptop)
                                    <tr style="color:white">
                                        <td>{{$laptop->id}}</td>
                                        <td>{{$laptop->name}}</td>
                                        <td>{{$laptop->weight}}</td>
                                        <td>{{$laptop->quantity}}</td>
                                        <td>{{$laptop->size}}</td>
                                        <td>{{$laptop->color}}</td>
                                        <td>{{$laptop->price}}</td>
                                        <td>{{$laptop->os}}</td>
                                        <td>
                                            <img src="{{asset('img/'.$laptop->image)}}" class="img-thumbnail" width="50"
                                                 height="50">
                                        </td>

                                    </tr>
                                @endforeach


                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>

            </div>
            <div class="row mt-5 ">
                <div class="col-md-9">
                    <div class="card ">
                        <div class="card-header bg-gradient-warning" style="color: white">
                            <h5>Categories</h5>

                        </div>

                        <div class="card-body bg-less-darker">
                            <table class="table table-striped   table-hover table-condensed">
                                <thead>
                                <tr style="color:white">
                                    <th>#</th>
                                    <th>name</th>
                                </tr>
                                </thead>

                                <tbody>


                                @foreach($categories as $category)
                                    <tr style="color:white">
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>


                        </div>

                    </div>

                </div>

            </div>
            <div class="row mt-5">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header bg-gradient-warning" style="color: white">
                            <h5>Tags</h5>

                        </div>

                        <div class="card-body bg-less-darker">

                            <table class="table table-striped   table-hover table-condensed">
                                <thead>
                                <tr style="color:white">
                                    <th>#</th>
                                    <th>name</th>
                                </tr>
                                </thead>

                                <tbody>


                                @foreach($tags as $tag)
                                    <tr style="color:white">
                                        <td>{{$tag->id}}</td>
                                        <td>{{$tag->name}}</td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>





@endsection