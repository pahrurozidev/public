@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="mb-4">{{ $title }}</h2>
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/blog?category={{ $category->slug }}" class="text-decoration-none">
                        <img src="https://source.unsplash.com/1200x400/?{{ $category->name }}" class="card-img-top"
                            alt="{{ $category->name }}">
                        <p class="d-flex justify-content-center align-items-center p-3  text-white" style="background: rgba(0, 0, 0, .3)">
                            {{ $category->name }}
                        </p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
