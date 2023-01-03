@extends('layout.app')

@section('content')
<div class="container">
    <div class="form-create d-flex justify-content-center">
        <form action="{{route('vinyls.update', $vinyl->id)}}" method="get" class="d-flex flex-column">
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="TITLE: MAX 255chars" value="{{$vinyl->title}}">
            <label for="title">Artist</label>
            <input type="text" name="artist" id="artist" placeholder="ARTIST: MAX 255chars" value="{{$vinyl->artist}}">
            <label for="title">Cover</label>
            <input type="text" name="cover" id="cover" placeholder="Http://bib3reufbeicecemnoucbie.xiwvcyireci.xeivcyeb-wburbe.com" value="{{$vinyl->cover}}">
            <label for="title">Duration</label>
            <input type="text" name="duration" id="duration" placeholder="DURATION: 123:56 (max 6 chars)" value="{{$vinyl->duration}}">
            <label for="title">Genre</label>
            <input type="text" name="genre" id="genre" placeholder="GENRE: MAX 255chars" value="{{$vinyl->genre}}">
            <label for="title">Language</label>
            <input type="text" name="language" id="language" placeholder="LANGUAGE: en (max 2 chars)" value="{{$vinyl->language}}">

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection