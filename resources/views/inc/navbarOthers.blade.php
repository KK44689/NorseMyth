<div id="NavOthers">
    <nav class="navbar navbar-custom navbar-expand-md navbar-dark  mb-4 fixed-top">
        <a id="brandGods" class="navbar-brand navbar-brand-custom" href="/NorseMyth/public/">NORSEMYTH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class='d-flex col-7'>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/NorseMyth/public/posts">Gods & Goddesses<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="others_nav_links" href="/NorseMyth/public/others">Other Creatures</a>
                    </li>
                    {{-- id="others_nav" --}}
                </ul>
            </div>
            <div class='col-5 pt-2 pb-2'>
                <form class="d-flex" type="get" action="{{ url('/searchOther') }}">
                    <input class="form-control me-2" type="search" name="query" placeholder="Search Creature"
                        aria-label="Search">
                    <div id="SearchButton">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</div>
