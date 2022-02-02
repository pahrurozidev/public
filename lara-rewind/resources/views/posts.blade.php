@extends('layouts.main')

@section('container')

    @if ($posts->count())

        <h4 class="text-center">{{ $post != 'All Post' ? "All Post $post" : 'All Posts' }}</h4>

        {{-- search --}}
        <div class="row justify-content-center mt-4 mb-5">
            <div class="col-md-6">
                <form action="/blog">
                    <div class="input-group">

                        {{-- category --}}
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif

                        {{-- author --}}
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif

                        <input type="text" class="form-control" name="search" placeholder="search.."
                            value="{{ request('search') }}">
                        <button class="btn btn-danger" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- search --}}

        <div class="row text-center mt-4">
            <div class="col-md mb-4">
                <div class="card">
                    <img src="https://source.unsplash.com/1100x400/?{{ $posts[0]->category->name }}" class="card-img-top"
                        alt="{{ $posts[0]->category->name }}">
                    <a class="text-decoration-none text-white position-absolute px-3 py-2"
                        style="background: rgba(0, 0, 0, .5)"
                        href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                    <div class="card-body">
                        <h5 class="card-title mb-0">{{ $posts[0]->title }}</h5>
                        <small class="text-secondary">
                            Author by
                            <a class="text-secondary text-decoration-none"
                                href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                        <p class="card-text mt-2">{{ $posts[0]->excerpt }}</p>
                        <a href="/posts/{{ $posts[0]->slug }}" class="badge bg-danger text-decoration-none">Read more</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}">
                        <a class="text-decoration-none text-white position-absolute px-3 py-2"
                            style="background: rgba(0, 0, 0, .5)"
                            href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                        <div class="card-body">
                            <div class="card-title mb-0 pb-0">{{ $post->title }}</div>
                            <small class="text-secondary">
                                Author by
                                <a href="/blog?author={{ $post->author->username }}"
                                    class="text-secondary text-decoration-none">{{ $post->author->name }}</a>
                                {{ $post->created_at->diffForHumans() }}
                            </small>
                            <div class="card-text mt-2">{{ $post->excerpt }}</div>
                            <a href="/posts/{{ $post->slug }}" class="badge bg-danger mt-3 text-decoration-none">Read
                                more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>

    @else
        <h4 class="text-secondary text-center">Posts not Found!</h4>
    @endif
@endsection
