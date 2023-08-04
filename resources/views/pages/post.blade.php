@extends('layouts.main')

@section('container')

<div class="container px-4">
    <section class="">
        <div class="card shadow border-0 rounded-4 mb-5">
            <div class="card-body p-4">
        <h2>{{ $posts->title }}</h2>

        <p>By. <a href="/authors/{{ $posts->author->username }}"> {{ $posts->author->name}}</a> in <a href="/categories/{{ $posts->category->slug }}">{{ $posts->category->name }}</a> </p>
        {{-- tidak melakukan escaping variabel harus inputannya bebas dari script aneh2 --}}
        {!! $posts->body !!}

        {{-- melakukan escaping variabel --}}
        {{-- {{ $posts->body }} --}}
            </div>
        </div>
    </section>

    <section class="position-relative" style="margin-top: 10vh" >
        <a href="/blogs">Back to blogs</a>
    </section>
</div>
@endsection
