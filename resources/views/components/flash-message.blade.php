@if (session()->has('message'))
    <div class="justify-content-center fixed-top">
        <p class="text-success">{{message('message')}}</p>
    </div>
@endif