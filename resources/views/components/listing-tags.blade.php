@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv)
@endphp

<div class="container my-3">
    <div class="row">
    @foreach ($tags as $tag)
        <button type="button" class="btn btn-dark col mx-2 my-1">{{$tag}}</button>
    @endforeach
    </div>
</div>