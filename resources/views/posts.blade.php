@extends('layouts.main')
@section('container')
    <article>
        <h2 class="mb-5">{{ $post->judul }}</h2>
        {{-- <h5>{{ $post["author"] }}</h5> --}}
        {!! $post->body !!}
        <a href="/blog">back to post</a>
    </article>
@endsection



