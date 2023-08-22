@extends('layout')

@section('content')



<div class="card mb-3">
    <img src="{{asset('images/background.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title text-center">{{$listing['title']}}</h5>
        <p class="card-text">{{$listing['description']}}</p>
        <p class="card-text"><small class="text-muted">Last updated {{$listing['update_at']}} mins ago</small></p>
        <div class="g">
            <a href="{{$listing['website']}}" target="_blank" class="my-3 row col-12 mx-3 btn btn-danger">Contact the
                Employer</button>
                <a role="button" href="{{$listing['website']}}" class="my-3 row col-12 mx-3 btn btn-danger"> visit web
                    site</a>
        </div>
    </div>
</div>

@endsection