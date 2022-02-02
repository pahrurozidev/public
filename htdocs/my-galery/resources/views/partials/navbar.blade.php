<nav class="mx-0 navbar navbar-dark">
    <div class="container p-0">
        <a class="navbar-brand" href="#">MY Galery</a>
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item me-4">
                <a class="nav-link reg active" href="/signup">Sign up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link reg active" href="/signin">Sign in</a>
            </li>
        </ul>
    </div>
    <div class="container main-jumbo shadow pt-3 px-3 body">
        <div class="jumbotron">
            <div class="menu ps-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-filter-left" viewBox="0 0 16 16">
                    <path
                        d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                </svg>
            </div>
            <div class="picture d-flex flex-column align-items-center" style="margin-left: -1.4em !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-camera-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                    <path
                        d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" />
                </svg>
                <h6 class="mt-2" style="letter-spacing: .2em">GET PICTURE</h6>
                <p>Get free photos every days</p>
                <button type="button" class="text-white bg-dark border border-0 py-1 px-4">Subscribe</button>
            </div>
            <div class="search">
                {{-- search --}}
            </div>
        </div>
    </div>
</nav>

<style>
    .opacityInput {
        opacity: 1 !important;
    }

    .opacityTombol {
        border-bottom: .2em solid rgba(0, 0, 0, .2);
    }

</style>

<div class="container form-search" style="margin-top: -4.6em;">
    <div class="row justify-content-end d-flex flex-row">
        <div class="col-lg-3">
            <form action="/" method="GET">
                <div class="input-group mb-3" onclick="search()">
                    <input type="text" class="form-control input-search rounded-0" placeholder="search of.."
                        name="search" style="opacity: 0;" autocomplete="off">
                    <button class="btn border-1 tombolSearch rounded-0" type="submit" id="button-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function search() {
        const formControl = document.querySelector('.form-control');
        const tombolSearch = document.querySelector('.tombolSearch');

        formControl.classList.toggle('opacityInput');
        tombolSearch.classList.toggle('opacityTombol');

        formControl.style.transition = .6 + 's';
        formControl.style.borderTop = 0;
        formControl.style.borderRight = 0;
        formControl.style.borderLeft = 0;
    }
</script>
