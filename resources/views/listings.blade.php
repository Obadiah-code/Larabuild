@extends('layout')


@section('content')
@include('partials._hero')

<h1 class="mb-3">{{$heading}}</h1>

@unless ( count($listings) != 0)
    <p class="text-info">No listings found</p>
@else
    @include('partials._search')
    @foreach ($listings as $listing)
    <div class="card mb-3 col-12">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset('images/background.jpeg')}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title"><a class="text-danger nav-link" href="/listings/{{$listing['id']}}">{{$listing['title']}}</a></h4>
                    <p class="card-text">{{$listing['description']}}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endunless
@endsection