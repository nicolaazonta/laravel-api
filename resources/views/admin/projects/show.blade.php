@extends('layouts.admin')

@section('content')
    <div class="card">
        <img class="card-img-top" src="{{$project->cover_image}}" alt="">
        <div class="card-body">
            <h4 class="card-title">{{$project->name}}</h4>
            <p class="card-text">{{$project->description}}</p>
        </div>
    </div>
@endsection