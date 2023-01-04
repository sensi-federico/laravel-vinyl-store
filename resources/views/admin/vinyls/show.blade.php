@extends('layout.app')

@section('content')



<div class="p-5 mb-4 jumbo">
    <div class="container-fluid py-5 jumbo-single">
        <img class="cover" src="{{$vinyl->cover}}" alt="" width="400px">
    </div>
</div>

<div class="info d-flex justify-content-center align-items-center">
    <div class="info-content">
        <div class="title d-flex align-items-center">
            <h1 class="pe-2">Title:</h1>
            <h2 class="m-0">{{$vinyl->title}}</h2>
        </div>
        <div class="artist d-flex align-items-center">
            <h1 class="pe-2">Artist:</h1>
            <h2 class="m-0">{{$vinyl->artist}}</h2>
        </div>
        <div class="duration d-flex align-items-center">
            <h1 class="pe-2">Duration:</h1>
            <h2 class="m-0">{{$vinyl->duration}} min</h2>
        </div>
        <div class="genre d-flex align-items-center">
            <h1 class="pe-2">Genre:</h1>
            <h2 class="m-0">{{$vinyl->genre}}</h2>
        </div>
        <div class="language d-flex align-items-center">
            <h1 class="pe-2">Language:</h1>
            <h2 class="m-0">{{$vinyl->language}}</h2>
        </div>
    </div>
    <div class="track-list">
        <ol class="text-white">
            @for($i = 0; $i < 10; $i++) <li>
                <h6>Lorem ipsum</h6>
                </li>
                @endfor
        </ol>
    </div>
</div>

@endsection