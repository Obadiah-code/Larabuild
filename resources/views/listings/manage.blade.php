<x-layout>
    <div class="container text-center">
        <h2 class="">MANAGE A GIG</h2>
    </div>
    @unless ( $listings->isempty())
    @include('partials._search')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listings as $listing)
            <tr>
                <td>
                    {{$listing->title}}
                </td>
                <td>
                    <a role="button" href="/listings/{{$listing->id}}/edit"
                        class="my-1 row-lg col-12 mx-1 btn btn-primary" style="--bs-bg-opacity: .8">
                        <i class="fa-solid fa-pencil"></i> edit
                    </a>
                </td>
                <td>
                    <form method="POST" action="/listings/{{$listing->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="my-1 row-lg col-12 mx-1 btn btn-secondary" style="--bs-bg-opacity: .8">
                            <i class="fa-solid fa-trash"></i> Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <div class="container">
                <div class='card mb-3 col-12 text-center py-2 text-center' style='background-color: #f0d8d8;  font-weight: 800;'>
                    <div class="row-lg g-0">
                        No listings Found <i class="fa-solid fa-face-frown fa-beat"></i>
                    </div>
                </div>
            </div>
            @endunless
        </tbody>
    </table>

</x-layout>