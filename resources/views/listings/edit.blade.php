<x-layout class="bg-danger" style="--bs-bg-opacity: .5;">
    <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data" class="row g-3 border rounded-3 m-4 p-3"
        style="--bs-bg-opacity: .8; background-color: #f5e5e5">
        @csrf
        @method('PUT')
        <div class="container text-center">
            <h2 class="">EDIT A GIG</h2>
            <p>Edit: {{$listing->title}}</p>
        </div>

        <div class="row my-3">
            <label for="inputEmail4" class="form-label">Job Title</label>
            <input name="title" value="{{$listing->title}}" type="text" placeholder="ex: seignor Laravel" class="form-control" id="inputEmail4">
            @error('title')
                <i class="text-danger mt-1">{{$message}}</i>
            @enderror
        </div>

        <div class="row my-2">
            <label for="inputEmail4" class="form-label">Company Name</label>
            <input name="company" value="{{$listing->company}}" type="text" class="form-control" id="inputEmail4">
            
            @error('company')
                <i class="text-danger mt-1">{{$message}}</i>
            @enderror
        </div>
        <div class="row my-2">
            <label for="inputAddress" class="form-label">Job Location</label>
            <input name="location" value="{{$listing->location}}" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            @error('location')
                <i class="text-danger mt-1">{{$message}}</i>
            @enderror
        </div>
        <div class="row my-2">
            <label for="inputAddress2" class="form-label">Website/Application Url</label>
            <input name="website" value="{{$listing->website}}" type="url" class="form-control" id="inputAddress2" placeholder="">
            @error('website')
                <i class="text-danger mt-1">{{$message}}</i>
            @enderror
        </div>
        <div class="row my-2">
            <label for="inputCity" class="form-label">Tags(comma separeted)</label>
            <input name="tags" value="{{$listing->tags}}" type="text" class="form-control" placeholder="Apartment, studio, or floor"
                id="inputCity">
            @error('tags')
                <i class="text-danger mt-1">{{$message}}</i>
            @enderror
        </div>
        <div class="row my-2">
            <label for="inputCity" class="form-label">Email</label>
            <input name="email" value="{{$listing->email}}" type="text" class="form-control" placeholder="name@title.com"
                id="inputCity">
            @error('email')
                <i class="text-danger mt-1">{{$message}}</i>
            @enderror    
        </div>
        <div class="input-group mb-3">
            <input name="logo" type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
            <img src="{{ $listing->logo ? asset('storage/' . $listing->logo ) :asset('images/background.jpeg')}}" alt="...">
            @error('logo')
                <i class="text-danger mt-1">{{$message}}</i>
            @enderror
        </div>
        <div class="my-2">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$listing->description}}</textarea>
            @error('description')
                <i class="text-danger mt-1">{{$message}}</i>
            @enderror
        </div>

        <div class="row my-2 mx-1">
            <button type="submit" class="btn btn-dark mb-2">Update</button>
            <a href="/" role="button" class="btn btn-outline-secondary">Back</a>
        </div>
    </form>
</x-layout>