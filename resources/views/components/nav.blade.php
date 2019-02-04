<nav class="navbar navbar-expand-md bg-second">
    <a class="navbar-brand text-a700" href="{{ route('home') }}">Robotikk.org</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-a700" href="{{ route('home') }}">Home</a>
            </li>
            <li class="navbar-nav mr-auto">
                <a class="nav-link text-a700" href="{{ route('discord') }}">Discord</a>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2 btn-outline-a700 bg-main" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-a700 bg-second my-2 my-sm-0" type="submit">Go</button>
        </form>
    </div>
</nav>
