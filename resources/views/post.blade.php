@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $posts->title }}</h2>
        <h4>{{ $posts->author }}</h4>

        <p>By. Adam setiadi in <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a> </p>
        {{-- tidak melakukan escaping variabel harus inputannya bebas dari script aneh2 --}}
        {!! $posts->body !!}

        {{-- melakukan escaping variabel --}}
        {{-- {{ $posts->body }} --}}

    </article>
    <a href="/projects">Back to project</a>
@endsection
