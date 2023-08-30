@props(['listing'])

<x-card class="bg-dark" style="--bs-bg-opacity: .3">
    <div class="col-md-4 justify-content-center d-flex">
        <img src="{{ $listing->logo ? asset('storage/' . $listing->logo ) :asset('images/background.jpeg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
        <div class="card-body">
            <h4 class="card-title"><a class="text-danger nav-link"
                    href="/listings/{{$listing->id}}">{{$listing->title}}</a></h4>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <p class="card-text">{{$listing->description}}</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</x-card>