
use Illuminate\Support\Facades\Session;
@if(Session::has('success'))

    <div class="alert alert-success mt-5">
        <strong>Sucess:</strong> {{ Session::get('success')}}
    </div>
@endif

@if(count($errors)>0)

    <div class="alert alert-danger mt-5">
        <strong>Error ocurr:</strong>
        @foreach($errors->all() as $error)
            <ul>
                <li>{{$error}}</li>
            </ul>

        @endforeach

    </div>



@endif