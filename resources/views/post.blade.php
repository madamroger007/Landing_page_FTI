@extends('layouts.main')

@section('container')
<article>

    <h2>{{ $post["title"] }}</h2>
    <h4>{{ $post["author"] }}</h4>
    <p>{{ $post["deskripsi"] }}</p>


</article>
@endsection
