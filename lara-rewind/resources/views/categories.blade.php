@extends('layouts.main')

@section('container')
    <h2>Posts Categories</h2>

    <div class="row mt-3">
        @foreach ($categories as $category)
            <div class="col-md-4">
                <img src="https://source.unsplash.com/300x200/?{{ $category->name }}" alt="{{ $category->name }}">
                <a href="/blog?=category{{ $category->slug }}"
                    class="text-decoration-none text-white d-flex justify-content-center align-items-center">
                    <div class="card-title position-absolute  px-5 py-3 rounded-3 fs-5"
                        style="background: rgba(0, 0, 0, .5)">{{ $category->name }}</div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
