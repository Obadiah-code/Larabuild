<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <form class="d-flex col-12" method="GET" action="/">
            <input name="name" value="{{ isset($_GET['name'])? $_GET['name']: "" }}" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</nav>