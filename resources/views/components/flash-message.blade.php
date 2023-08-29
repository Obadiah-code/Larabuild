@if (session()->has('message'))
    <div id="elem-top-45" class="justify-content-center fixed-top text-center bg-dark mt-1 mx-3 rounded border" style="--bs-bg-opacity: .3;">
        <p class="text-success mt-1">{{session('message')}}</p>
    </div>
    <script>
        setTimeout(() => {
            document.getElementById('elem-top-45').style.display='none';
        }, 3000);
    </script>
@endif