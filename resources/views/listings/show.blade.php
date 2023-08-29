<x-layout>


    <div class="card mb-3">
        <img src="{{ $listing->logo ? asset('storage/' . $listing->logo ) :asset('images/background.jpeg')}}" class="card-img-top" style="max-height: 28rem" alt="...">
        <div class="card-body bg-danger" style="--bs-bg-opacity: .2;">
            <h5 class="card-title text-center">{{$listing['title']}}</h5>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <p class="card-text">{{$listing['description']}}</p>
            <p class="card-text"><small class="text-muted">Last updated {{$listing['update_at']}} mins ago</small></p>
            <div class="g-0">
                <a href="mailto:{{$listing['email']}}" class="my-3 row col-12 mx-3 btn btn-danger">Contact the
                    Employer</button>
                    <a role="button" href="{{$listing['website']}}" target="_blank"
                        class="my-3 row col-12 mx-3 btn btn-dark" style="--bs-bg-opacity: .8"> visit web
                        site</a>
            </div>
        </div>
    </div>
</x-layout>