@extends('layouts.main')

@include('partials.navbar')

@section('content')

    <div class="row pt-4 mx-0">
        <div class="col-md-12 shadow">
            <ul class="nav d-flex justify-content-center">
                <li class="nav-item category @if (request('category') == null) silver
                    @endif">
                    <a class="nav-link text-dark active" aria-current="page" href="/">All Category</a>
                </li>
                <li class="nav-item category @if (request('category') == 'family') silver
                    @endif">
                    <a class="nav-link text-dark active" aria-current="page"
                        href="/?category={{ $categories[0]->slug }}">{{ $categories[0]->name }}</a>
                </li>
                <li class="nav-item category @if (request('category') == 'plant') silver
                    @endif">
                    <a class="nav-link text-dark active" aria-current="page"
                        href="/?category={{ $categories[1]->slug }}">{{ $categories[1]->name }}</a>
                </li>
                <li class="nav-item category @if (request('category') == 'animals') silver
                    @endif">
                    <a class="nav-link text-dark active" aria-current="page"
                        href="/?category={{ $categories[2]->slug }}">{{ $categories[2]->name }}</a>
                </li>
                <li class="nav-item category @if (request('category') == 'food') silver
                    @endif">
                    <a class="nav-link text-dark active" aria-current="page"
                        href="/?category={{ $categories[3]->slug }}">{{ $categories[3]->name }}</a>
                </li>
                <li class="nav-item category @if (request('category') == 'sport') silver
                    @endif">
                    <a class="nav-link text-dark active" aria-current="page"
                        href="/?category={{ $categories[4]->slug }}">{{ $categories[4]->name }}</a>
                </li>
            </ul>
        </div>
    </div>

    @if ($posts->count())
        <div class="row pt-4 home">
            @foreach ($posts as $post)
                <div class="col-sm-3" style="margin-bottom: 2em">
                    <div class="card shadow rounded" style="cursor: pointer">
                        <div class="user">
                            <div class="sub-user">
                                <img src="https://source.unsplash.com/40x40/?{{ $post->name }}" alt="" width="40"
                                    height="40" class="rounded-circle border border-2">
                                <small class="mt-2 text-center" style="width: 18em;">{{ $post->user->name }}</small>
                            </div>
                        </div>
                        {{-- img --}}
                        <img src="https://source.unsplash.com/300x250/?{{ $post->name }}" class=" image rounded-top"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop" />
                        <div class="card-body">
                            <div class="button mx-2" style="z-index: 999">
                                <div class="favorite">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-star" viewBox="0 0 16 16">
                                        <path
                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                    </svg>
                                </div>
                                <div class="add">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black"
                                        class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                    </svg>
                                </div>
                                <div class="download">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black"
                                        class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- modal --}}
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close bg-white position-absolute" style="top: -2em; right: 0"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        {{-- carousel --}}
                        <div id="carouselExampleControls" class="carousel slide p-0 m-0" data-bs-ride="carousel">
                            <div class="carousel-inner p-0 m-0">

                                <div class="carousel-item active m-0">
                                    <img src="https://source.unsplash.com/500x400/?{{ $posts[0]->name }}"
                                        class="d-block m-0 w-100" alt="...">
                                    <div class="row text-content text-white position-absolute p-3"
                                        style="bottom: 0; background: rgba(0, 0, 0, .4)">
                                        <div class="col-md-12">
                                            <h4 class="mb-0">Pantai Kerakat</h4>
                                            <small style="font-size: .7em;">Jln. Komala Sari Dusun Bagek Gaet, Desa
                                                Pohgading Timur</small>
                                        </div>
                                        <div class="col-md-12 mt-1">
                                            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sed iste,
                                                in nam
                                                rerum ex dolore facilis distinctio doloremque. Harum.</small>
                                        </div>
                                    </div>
                                </div>

                                @foreach ($posts as $post)
                                    <div class="carousel-item">
                                        <img src="https://source.unsplash.com/500x400/?{{ $post->name }}"
                                            class="d-block w-100" alt="...">
                                        <div class="row text-content text-white position-absolute p-3"
                                            style="bottom: 0; background: rgba(0, 0, 0, .4)">
                                            <div class="col-md-12">
                                                <h4 class="mb-0">Pantai Kerakat</h4>
                                                <small style="font-size: .7em;">Jln. Komala Sari Dusun Bagek Gaet, Desa
                                                    Pohgading Timur</small>
                                            </div>
                                            <div class="col-md-12 mt-1">
                                                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sed
                                                    iste,
                                                    in nam
                                                    rerum ex dolore facilis distinctio doloremque. Harum.</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        {{-- carousel --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- modal --}}

        {{-- link pagination --}}
        <div class="d-flex justify-content-end pagination">
            {{ $posts->links() }}
        </div>

    @else
        <h6 class="text-center pt-5">Post tidak ditemukan!</h6>
    @endif

@endsection
