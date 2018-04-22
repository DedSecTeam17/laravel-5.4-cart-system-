@extends('pages.main')


@section('title','Show Your item')

@section('style')

    <style>

        .checked {
            color: gold;

        }

    </style>

@endsection



@section('content')
    @foreach($laptops as $laptop)
        <hr>
        <div class="row" style="margin-top: 10%">
            <div class="col-md-2">

            </div>


            <div class="col-md-2">
                <div>
                    <img src="{{asset('img/'.$laptop->image)}}" class="fluid-img img-thumbnail">
                </div>
            </div>
            <div class="col-md-4">
                <a id="{{$laptop->id}}" href="{{route('laptops.show',$laptop->id)}}" onmouseenter="mouse_enter('{{$laptop->id}}')"
                   onmouseleave="moues_leave('{{$laptop->id}}')">
                    <b>   {{$laptop->name}}</b></a>


                <small>by HP</small>

                <p>{{$laptop->price.'$'}}<span>(86 used & new offers)</span></p>
                <small>Price may vary by color</small>
                <img src="{{asset('img/'.$laptop->image)}}" class="img-thumbnail" width="50" height="70">
                <div class="badge badge-dark">
                    <p>{{$laptop->category->name}}</p>

                </div>
            </div>
            <div class="col-md-4">
                <div id="rate_stars" class="ml-3">
                    <span id="{{$laptop->id.'1'}}" class="fa fa-star "
                          onclick="getId('{{$laptop->id.'1'}}',1,1)"></span>
                    <span id="{{$laptop->id.'2'}}" class="fa fa-star "
                          onclick="getId('{{$laptop->id.'2'}}',2,2)"></span>
                    <span id="{{$laptop->id.'3'}}" class="fa fa-star "
                          onclick="getId('{{$laptop->id.'3'}}',3,3)"></span>
                    <span id="{{$laptop->id.'4'}}" class="fa fa-star" onclick="getId('{{$laptop->id.'4'}}',4,4)"></span>
                    <span id="{{$laptop->id.'5'}}" class="fa fa-star" onclick="getId('{{$laptop->id.'5'}}',5,5)"></span>

                </div>
                <ul class="list-group">
                    <li class="list-group-item">{{$laptop->hardware->cpu}}</li>
                    <li class="list-group-item">{{$laptop->hardware->gpu}}</li>
                    <li class="list-group-item">{{$laptop->hardware->ram}}</li>
                    <li class="list-group-item">{{$laptop->hardware->hd}}</li>
                    <li class="list-group-item">{{$laptop->hardware->ssd}}</li>
                    <li class="list-group-item">{{$laptop->hardware->screen_quality}}</li>



                </ul>

            </div>
            <hr>
        </div>
        <button type="button" class="btn btn-dark btn-xs" data-toggle="modal" data-target="#pop">pop</button>
        <div class="modal fade" id="pop">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">

                    </div>

                </div>

            </div>

        </div>







    @endforeach








@endsection


@section('js')

    <script>

        $(document).ready(function () {
            var switchy1 = true;
            var switchy2 = true;


            // for (var z=1; z<=5; z++) {
            //     switch_item(z, z, z,getId());
            // }


        });


        // function switch_item(id, numloo1, numloo2,lapid) {
        //     var switchy = true;
        //     $("#" + id + "star"+lapid).click(function () {
        //
        //         if (switchy) {
        //             for (var i = 1; i <= numloo1; i++) {
        //                 $("#" + i + "star"+lapid).addClass('checked');
        //             }
        //             switchy = false;
        //
        //         } else {
        //             for (var j = 1; j <= numloo2; j++) {
        //                 $("#" + j + "star"+lapid).removeClass('checked');
        //             }
        //             switchy = true;
        //         }
        //     });
        // }

        var switchy = true;

        function getId(id, numloo1, numloo2) {
            if (switchy) {
                for (var i = 1; i <= numloo1; i++) {
                    $("#" + id).addClass('checked');
                    switchy = false;
                }


            } else {
                for (var j = 1; j <= numloo2; j++) {
                    $("#" + id).removeClass('checked');
                    switchy = true;
                }
            }
        }


        function mouse_enter($id) {
            $("#" + $id).css('color', 'orange');
        }

        function moues_leave($id) {
            $("#" + $id).css('color', 'blue');


        }


    </script>

@endsection



