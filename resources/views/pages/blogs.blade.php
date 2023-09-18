@extends('layouts.app')

@section('container')
    @include('partials.breadcrumbs')

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-5 posts-list">
                        <!--  post list item -->
                        @foreach ($posts as $post)
                            <div class="col-lg-6">
                                <article class="d-flex flex-column">

                                    <div class="post-img">
                                        <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                                    </div>

                                    <h2 class="title">
                                        <a href="/blogs/{{ $post->slug }}"> {{ $post->title }}</a>
                                    </h2>

                                    <div class="meta-top">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                    href="/blogs?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                            </li>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                    href="/blogs/{{ $post->slug }}"><time datetime="{{ $post->created_at }}">{{ $post->created_at->diffForHumans() }}</time></a></li>
                                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                                    href="/blogs/{{ $post->slug }}">12 Comments</a></li>
                                            <li><a
                                                    href="/blogs?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content">
                                        <p>
                                            {{ $post->excerpt }}
                                        </p>
                                    </div>

                                    <div class="read-more mt-auto align-self-end">
                                        <a href="/blogs/{{ $post->slug }}">Read More <i class="bi bi-arrow-right"></i></a>
                                    </div>

                                </article>
                            </div>
                        @endforeach
                        <!-- End post list item -->
                    </div>
                    <!-- End blog posts list -->


                    <!--  blog pagination -->
                    <div class="mt-5">

                        {{ $posts->links() }}

                    </div>
                    <!-- End blog pagination -->
                </div>

                @include('partials.sidebarcategoriest')
            </div>

        </div>
    </section>
    <!-- End Blog Section -->
@endsection
