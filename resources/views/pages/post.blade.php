@extends('layouts.app')

@section('container')
    @include('partials.breadcrumbs')
    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                    <article class="blog-details">
                        <div class="post-img">
                            <img src="/build/assets/img/png_20230805_183549_0000.png" alt="" class="img-fluid">
                        </div>
                        <h2 class="title"> {{ $post->title }}</h2>
                        <!-- start meta top -->
                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="/blogs?author={{ $post->author->username }}"> {{ $post->author->name }}</a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="/blogs/{{ $post->slug }}"><time
                                            datetime="{{ $post->created_at }}">{{ $post->created_at->diffForHumans() }}</time></a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="/blogs/{{ $post->slug }}">12 Comments</a></li>
                            </ul>
                        </div>
                        <!-- End meta top -->

                        <div class="content">
                            <p> {{ $post->excerpt }}</p>

                            <blockquote>
                                <p>
                                    {{ $post->slug }}
                                </p>
                            </blockquote>

                            <p> {{ $post->body }}</p>

                            <h3>{{ $post->sub_title }}</h3>
                            <p>
                                {{ $post->sub_body }}
                            </p>
                            <img src="/build/assets/img/logo-mini.svg" class="img-fluid" alt="">

                            <h3>{{ $post->sub_two_title }}</h3>
                            <p>
                                {{ $post->sub_two_body }}
                            </p>


                        </div>
                        <!-- End post content -->


                        <!-- End meta bottom -->
                    </article>

                    <div class="post-author d-flex align-items-center">
                        <img src="../img/why-us-bg-jpg" class="rounded-circle flex-shrink-0" alt="">
                        <div>
                            <h4>Jane Smith</h4>
                            <div class="social-links">
                                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>
                                Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas
                                repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde
                                voluptas.
                            </p>
                        </div>
                    </div>
                    <!-- End post author -->

                    <div class="comments">
                        <h4 class="comments-count">8 Comments</h4>
                        <div id="comment-1" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="../img/blog/comments-1.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan,2022</time>
                                    <p>
                                        Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut
                                        sapiente quis molestiae est qui cum soluta.
                                        Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End comment #1 -->

                        <div id="comment-2" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="../img/blog/comments-2.jpg" alt=""></div>
                                <div>
                                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan,2022</time>
                                    <p>
                                        Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe.
                                        Officiis illo ut beatae.
                                    </p>
                                </div>
                            </div>

                            <div id="comment-reply-1" class="comment comment-reply">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="../img/why-us-bg.jpg" alt=""></div>
                                    <div>
                                        <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan,2022</time>
                                        <p>
                                            Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur
                                            ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut
                                            est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt
                                            qui illum omnis est et dolor recusandae.

                                            Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro
                                            aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur
                                            distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio
                                            laborum minima fugiat.

                                            Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error
                                            dolorum non autem quisquam vero rerum neque.
                                        </p>
                                    </div>
                                </div>

                                <div id="comment-reply-2" class="comment comment-reply">
                                    <div class="d-flex">
                                        <div class="comment-img"><img src="../img/blog/comments-4.jpg" alt=""></div>
                                        <div>
                                            <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i
                                                        class="bi bi-reply-fill"></i> Reply</a></h5>
                                            <time datetime="2020-01-01">01 Jan,2022</time>
                                            <p>
                                                Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores
                                                cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est
                                                commodi est officiis voluptas repellat quisquam possimus. Perferendis id
                                                consectetur necessitatibus.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <!-- End comment reply #2-->

                            </div>
                            <!-- End comment reply #1-->

                        </div>
                        <!-- End comment #2-->
                    </div>
                </div>
                @include('partials.sidebarcategoriest')
            </div>


        </div>
    </section>
@endsection
