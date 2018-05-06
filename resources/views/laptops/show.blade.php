@extends('pages.main')


@section('title','Show Your item')


@section('style')
    {!! Html::style('css/colors.css') !!}
@endsection
@section('content')
<div class="card m-5 bg-dark " style="color: white">
    <div class="card-header">
        <div class="row" style="margin-top: 10%">
            <div class="col-md-2">
                <div>
                    <img src="{{asset('img/'.$laptop->image)}}" class="fluid-img img-thumbnail">
                </div>
            </div>
            <div class="col-md-2">
                <p>{{$laptop->name}}</p>
                <small>by HP</small>

                <p>{{$laptop->price.'$'}}<span>(86 used & new offers)</span></p>
                <small>Price may vary by color</small>
                <img src="{{asset('img/'.$laptop->image)}}" class="img-thumbnail" width="50" height="70">
            </div>
            <div class="col-md-4 ">
                <div class="jumbotron" style="color: #101010">
                    <ul>
                        <li> {{'CPU :'.$laptop->hardware->cpu}}</li>
                        <li> {{'GPU :'.$laptop->hardware->gpu}}</li>
                        <li> {{'RAM :'.$laptop->hardware->ram}}</li>
                        <li> {{'HD  :'.$laptop->hardware->hd}}</li>
                        <li> {{'SSD :'.$laptop->hardware->ssd}}</li>
                        <li> {{'Screen quality :'.$laptop->hardware->screen_quality}}</li>
                    </ul>


                    {{Form::open(['route'=>'carts.store','method'=>'POST'])}}

                    {{--<div class="input-group mt-5">--}}
                    {{--<select class="custom-select  from-control" name="quantity" >--}}
                    {{--@for($i=0; $i<10; $i++)--}}
                    {{--<option value="{{$i}}">--}}
                    {{--{{$i}}--}}
                    {{--</option>--}}

                    {{--@endfor--}}
                    {{--</select>--}}
                    <div id="quantity">


                        <div class="alert alert-info">Choose Your quantity:</div>
                        <br>
                        <button @click="add({{$laptop->quantity}})" type="button" :class="'btn btn-xs btn-info'"><i
                                    class="fas fa-plus"></i></button>
                        <button @click="remove(0)" type="button" :class="'btn btn-xs btn-warning'"><i
                                    class="fas fa-minus"></i></button>
                        <br>
                        <p class="badge badge-dark" :style="{color:'white'}">@{{ number}}</p>

                        <input type="hidden" name="quantity" v-model="number">
                    </div>
                    {{--hidden data--}}
                    <input type="hidden" name="laptop_id" value="{{$laptop->id}}">
                    <input type="hidden" name="category_id" value="{{$laptop->category->id}}">
                    <input type="hidden" name="hardware_id" value="{{$laptop->hardware->id}}">
                    {{Form::submit('Add to Cart',['class'=>'btn btn-success btn-lg btn-block'])}}
                    {{Form::close()}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">


                <div class="card" style="color: white">


                    <div class="card-header bg-dark">
                        <div class="row">
                            @foreach($laptop->comments as $comment )
                                <div class="col-md-12 mt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-inline">
                                                        <i class="fas fa-user-circle " style="color: #101010; font-size: xx-large"></i>
                                                        <p style="color: #101010" class="ml-3"><b>{{$comment->user_id}}</b> </p>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p style="color: #101010" class="ml-5">{{$comment->comment}}</p>

                                                </div>

                                            </div>



                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        {{Form::open(['route'=>'comments.store','method'=>'POST'])}}

                        <div class="form-group">
                            <label for="comment">Comment</label>
                            <textarea style="color: white" id="comment" class="form-control bg-dark"
                                      name="comment"></textarea>
                        </div>
                        <input type="hidden" name="post_id" value="{{$laptop->id}}">
                        <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                        <button type="submit" class="btn bg-gradient-success btn-lg btn-block">comment</button>
                        {{Form::close()}}
                    </div>

                </div>


            </div>

        </div>
    </div>

</div>



@endsection



@section('js')

    <script>
        var app = new Vue({
            el: '#quantity',
            data: {
                number: 0
            },
            methods: {
                add: function (max) {
                    if (this.number <= max) {
                        this.number++

                    }

                },
                remove: function (min) {
                    if (this.number > min) {
                        this.number--;
                    }

                }
            }
        });


    </script>

@endsection