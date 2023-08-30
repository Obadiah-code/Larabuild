<x-layout class="bg-danger" style="--bs-bg-opacity: .5;">
    <form method="POST" action="/users/login" enctype="multipart/form-data" class="row g-3 border rounded-3 m-4 p-3"
        style="--bs-bg-opacity: .8; background-color: #f5e5e5">
        @csrf
        <div class="container text-center">
            <h2 class="">CREATE A GIG</h2>
            <p>login into your account to post gig</p>
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
        <div class="row my-2 mx-1 mt-3">
            <button type="submit" class="btn btn-dark mb-2">Sign In</button>
            <a href="/register" role="button" class="btn btn-outline-secondary">Don't have a account ?</a>
        </div>
    </form>
</x-layout>