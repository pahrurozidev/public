@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="card-title pb-0 mb-0">{{ $post->title }}</div>
                    <small class="text-secondary">
                        Author by
                        <a class="text-decoration-none text-secondary"
                            href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        in
                        <a class="text-decoration-none text-secondary"
                            href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </small>
                    <img src="https://source.unsplash.com/1100x400/?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}">
                    <div class="card-text">{!! $post->body !!}</div>
                    <a href="/blog" class="badge mt-3 text-white text-decoration-none bg-danger">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>
@endsection
