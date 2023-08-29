<x-layout class="bg-danger" style="--bs-bg-opacity: .5;">
    <form method="POST" action="/listings" enctype="multipart/form-data" class="row g-3 border rounded-3 m-4 p-3"
        style="--bs-bg-opacity: .8; background-color: #f5e5e5">
        @csrf
        <div class="container text-center">
            <h2 class="">CREATE A GIG</h2>
            <p>create an account to post gig</p>
        </div>

        <div class="row my-3">
            <label for="inputEmail4" class="form-label">User's name</label>
            <input name="name" value="{{old('name')}}" type="text" placeholder="ex: seignor Laravel" class="form-control" id="inputEmail4">
            @error('name')
                <i class="text-danger mt-1">{{$message}}</i>
            @enderror
        </div>

        <div class="row my-2">
            <label for="inputEmail4" class="form-label">Email</label>
            <input name="email" value="{{old('email')}}" type="email" class="form-control" id="inputEmail4">
            
            @error('email')
                <i class="text-danger mt-1">{{$message}}</i>
            @enderror
        </div>
        <div class="row my-2">
            <label for="inputAddress" class="form-label">Password</label>
            <input name="password" value="{{old('password')}}" type="password" class="form-control" id="inputAddress">
            @error('password')
                <i class="text-danger mt-1">{{$message}}</i>
            @enderror
        </div>
        <div class="row my-2">
            <label for="inputAddress2" class="form-label">Confirm password</label>
            <input name="password_confirm" value="{{old('password_confirm')}}" type="password" class="form-control" id="inputAddress2">
            @error('password_confirm')
                <i class="text-danger mt-1">{{$message}}</i>
            @enderror
        </div>
        <div class="row my-2 mx-1 mt-3">
            <button type="submit" class="btn btn-dark mb-2">Sign Up</button>
            <a href="/login" role="button" class="btn btn-outline-secondary">Already have an account ?</a>
        </div>
    </form>
</x-layout>