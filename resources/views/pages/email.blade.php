@extends('pages.main')
<div class="card">
    <div class="card-header">
        <h1>You received new Message !!! </h1>
    </div>
    <div class="card-body">
<p>{{$name}}</p>
    </div>
    <div class="card-footer">
        <p>{{$email}}</p>

    </div>

</div>