<x-layout>
    @auth
        
    @else
        @include('partials._hero')
    @endauth

    <h1 class="mb-3">Lasted Listings</h1>
    @include('partials._search')

    @unless ( count($listings) != 0)
    <div class="container">
        <div class='card mb-3 col-12 text-center py-2 text-center' style='background-color: #f0d8d8;  font-weight: 800;'>
            <div class="row-lg g-0">
                No listings Found <i class="fa-solid fa-face-frown fa-beat"></i>
            </div>
        </div>
    </div>
    @else
    @foreach ($listings as $listing)
        <x-listing-card :listing="$listing" />
    @endforeach
    @endunless

    <div class="mt-6 p-4">
        {{--$listings->links()--}}
    </div>
</x-layout>