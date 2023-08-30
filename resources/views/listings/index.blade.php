<x-layout>
    @auth
        
    @else
        @include('partials._hero')
    @endauth

    <h1 class="mb-3">Lasted Listings</h1>

    @unless ( count($listings) != 0)
    <p class="text-info">No listings found</p>
    @else
    @include('partials._search')
    @foreach ($listings as $listing)
        <x-listing-card :listing="$listing" />
    @endforeach
    @endunless

    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>
</x-layout>