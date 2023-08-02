@extends('layouts.main')

@section('container')
    <article>
        <h1>Categori {{ $category }}</h1>1


       @foreach ($posts as $post )
        <article>
            <h2>
                <a href="/post/{{ $post-> }}">
                    {{ $post->title }}
                </a>
            </h2>
            <p>
                {{ $post }}
            </p>
        </article>
       @endforeach

    </article>
    <a href="/projects">Back to project</a>
@endsection
