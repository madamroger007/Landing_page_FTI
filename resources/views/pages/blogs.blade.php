@extends('layouts.main')

@section('container')
    <!-- Projects Section-->

    <section class="py-5">
        <div class="container px-4 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">{{ $title }}</span></h1>
            </div>
            @foreach ($posts as $post)
                <div class="row gx-5 justify-content-center ">

                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Project Card 1-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5 py-4 px-4">
                            <div class="card-body p-0">
                                <div class="d-flex row flex-wrap align-items-center">
                                    <div class="pe-5 col-md-8 ">
                                        <h2 class="fw-bolder mb-4"> {{ $post->title }}</h2>
                                        <h6>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> In <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </h6>
                                        <p>{{ $post->excerpt }}</p>
                                    </div>
                                    <div class="col-md-4 py-4 ">
                                        <a href="/projects/{{ $post->slug }}">
                                            <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d"
                                                alt="..." style="width:250px; height: 300px; " />

                                        </a>

                                    </div>
                                    <div class="container-lg ps-4 bg-black-md">
                                        <a href="/blogs/{{ $post->slug }}" class="btn btn-primary me-2"
                                            style="font-size: 1rem">Read More</a>
                                        <a class="btn btn-dark " style="font-size: 1rem">Source Code</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>

    <!-- Call to action section-->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="/contact">Contact me</a>
            </div>
        </div>
    </section>
@endsection
