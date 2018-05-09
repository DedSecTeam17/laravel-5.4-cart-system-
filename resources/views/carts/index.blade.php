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
    <hr>
    <div class="row" style="margin-top: 10%; ">

        <div class="col-md-12">

            <table class="table table-striped table-responsive table-bordered table-hover table-condensed">
                <thead class="bg-dark" style="color: white">
                <tr>
                    <th>#</th>
                    <th>cpu</th>
                    <th>gpu</th>
                    <th>ram</th>
                    <th>hd</th>
                    <th>ssd</th>
                    <th>screen quality</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>

                <tbody>


                @foreach(   $hardwares as    $hardware)
                    <tr>
                        <td>  {{   $hardware->id}}  </td>
                        <td>{{   $hardware->cpu}}</td>
                        <td>{{   $hardware->gpu}}</td>
                        <td>{{   $hardware->ram}}</td>
                        <td>{{   $hardware->hd}}</td>
                        <td>{{   $hardware->ssd}}</td>
                        <td>{{   $hardware->screen_quality}}</td>
                        <td>{{   $hardware->created_at}}</td>
                        <td>{{   $hardware->updated_at}}</td>
                    </tr>
                @endforeach


                </tbody>
            </table>

        </div>

        <div class="text-center">
            {{--{!! $posts->links(); !!}--}}
            {{--//       php artisan vendor:publish --tag=laravel-pagination use for fancy pagination--}}

            {{--{!!$hardwares->links('vendor.pagination.bootstrap-4') !!}--}}

        </div>

    </div>
















@endsection


@section('js')



@endsection



