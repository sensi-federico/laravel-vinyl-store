@extends('layout.app')

@section('content')

<div class="container text-center">
    <div class="row row-cols-3">
        @foreach($vinyls as $vinyl)
        <div class="col text-start">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{$vinyl['cover']}}" class="img-fluid rounded-start" alt="Card title">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$vinyl['title']}}</h5>
                            <h6 class="card-subtitle text-muted mb-2">{{$vinyl['artist']}}</h6>
                            <p class="text-muted m-0">{{$vinyl['genre']}}</p>
                            <p class="text-muted m-0">{{$vinyl['duration']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <a name="" id="" class="btn btn-danger my-4" href="" role="button">View more</a>
</div>

@endsection