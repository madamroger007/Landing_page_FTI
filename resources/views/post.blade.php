@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $posts["title"] }}</h2>
    <h4>{{ $posts["author"] }}</h4>
    <p>{{ $posts["deskripsi"] }}</p>

</article>
<a href="/projects">Back to project</a>

@endsection
