@extends('layouts.main')

@section('content')
    @if ($posts->count())
        <div class="row pt-4 home">
            @foreach ($posts as $post)
                <div class="col-sm-3" style="margin-bottom: 2em">
                    <div class="card shadow rounded" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                        style="cursor: pointer">
                        <div class="user">
                            <div class="sub-user">
                                <img src="https://source.unsplash.com/40x40/?{{ $post->name }}" alt="" width="40"
                                    height="40" class="rounded-circle border border-2">
                                <small class="mt-2 text-center" style="width: 18em;">{{ $post->user->name }}</small>
                            </div>
                        </div>
                        <img src="https://source.unsplash.com/300x250/?{{ $post->name }}" class=" image rounded" />
                        <div class="button mx-3" style="z-index: 999">
                            <div class="favorite">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                                    class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                            </div>
                            <div class="add">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                                    class="bi bi-plus-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg>
                            </div>
                            <div class="download">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                                    class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                                </svg>
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
