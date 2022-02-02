@extends('layouts.main')

@section('container')
    @if ($posts->count())
        {{-- hero --}}
        <h2 class="mb-4 text-center">All Post {{ $page != 'All Post' ? $page : 'All Post' }}</h2>
        {{-- form search --}}
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/blog">
                    <div class="input-group mb-3">

                        {{-- input hidden --}}
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif

                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        {{-- input hidden --}}

                        <input type="text" class="form-control" name="search" placeholder="search.."
                            value="{{ request('search') }}">
                        <button class="btn btn-danger" type="submit">Search</button>
                    </div>

                </form>
            </div>
        </div>
        {{-- form search --}}

        <div class="card mb-3 text-center">
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <p class="position-absolute px-3 py-2" style="background: rgba(0, 0, 0, .7)">
                <a href="/blog?category={{ $posts[0]->category->slug }}"
                    class="text-decoration-none text-white">{{ $posts[0]->category->name }}</a>
            </p>
            <div class="card-body">
                <h5 class="card-title mb-0">{{ $posts[0]->title }}</h5>
                <small class="text-muted" style="font-size: .8em">
                    Author by
                    <a href="/blog?author={{ $posts[0]->author->username }}"
                        class="text-decoration-none text-secondary">{{ $posts[0]->author->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="badge bg-danger text-decoration-none text-white">Read
                    more</a>
            </div>
        </div>
        {{-- hero --}}

        {{-- main --}}
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4">
                        <div class="card mb-3 text-center">
                            <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}"
                                class="card-img-top" alt="{{ $post->category->name }}">
                            <p class="position-absolute px-3 py-2" style="background: rgba(0, 0, 0, .7)">
                                <a href="/blog?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-white">{{ $post->category->name }}</a>
                            </p>
                            <div class="card-body">
                                <h5 class="card-title mb-0">{{ $post->title }}</h5>
                                <small class="text-muted" style="font-size: .8em">
                                    Author by
                                    <a href="/blog?author={{ $post->author->username }}"
                                        class="text-decoration-none text-secondary">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}"
                                    class="badge bg-danger text-decoration-none text-white">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- main --}}

        {{-- link pagination --}}
        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>

    @else
        <div class="text-center fs-4">Posts not found!</div>
    @endif
@endsection
