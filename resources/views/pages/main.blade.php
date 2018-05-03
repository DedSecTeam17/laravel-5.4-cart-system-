<html>
<head>
    @include('partial._header')
</head>
<body
>
{{--navigation bar area --}}
<div class="container-fluid">
    @include('partial._nav')
    @include('partial._sidebar');


    @include('partial._message')
    @yield('content')

</div>

@include('partial.js')
@include('partial._footer')

</body>
</html>