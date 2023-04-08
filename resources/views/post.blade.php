@extends('layouts.main')

@section('container')
    @foreach ($post as $post)
        <article class="mb-5">
            <h2>
                <a href="/post/{{ $post->slug }}">{{ $post->judul }}</a>
            </h2>
            {{-- <h5>By : {{ $post['author'] }}</h5> --}}
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
