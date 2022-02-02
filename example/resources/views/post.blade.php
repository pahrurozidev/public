@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title mb-0">{{ $post->title }}</h5>
                        <small class="text-muted" style="font-size: .8em">
                            Author by
                            <a href="/blog?author=/{{ $post->author->username }}"
                                class="text-decoration-none text-secondary">{{ $post->author->name }}</a>
                            in
                            <a href="/blog?category={{ $post->category->slug }}"
                                class="text-decoration-none text-secondary">{{ $post->category->name }}</a>
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                            class="card-img-top my-4" alt="{{ $post->category->name }}">
                        <p class="card-text">{!! $post->body !!}</p>
                        <a href="/blog" class="badge bg-danger text-decoration-none text-white">Back to Post</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
