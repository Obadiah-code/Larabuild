@extends('layout')


@section('content')
@include('partials._hero')

<h1 class="mb-3">{{$heading}}</h1>

@unless ( count($listings) != 0)
    <p class="text-info">No listings found</p>
@else
    @include('partials._search')
    @foreach ($listings as $listing)
        <x-listing-card :listing="$listing" />
    @endforeach
@endunless
@endsection