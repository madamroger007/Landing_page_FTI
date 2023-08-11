@extends('layouts.main')

@section('container')
    @include('partials.breadcrumbs')
    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                    <article class="blog-details">
                        <div class="post-img">
                            <img src="../img/or_fti.jpg" alt="" class="img-fluid">
                        </div>
                        <h2 class="title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h2>
                        <!-- start meta top -->
                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="/authors/{{ $post->author->username }}"> {{ $post->author->name }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog-details.html">12 Comments</a></li>
                            </ul>
                        </div>
                        <!-- End meta top -->

                        <div class="content">
                            <p> {{ $post->body }}</p>



                            <blockquote>
                                <p>
                                    Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos
                                    aliquam doloribus minus autem quos.
                                </p>
                            </blockquote>

                            <p>
                                Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore
                                provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est
                                suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                                Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit
                                quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                                Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem
                                magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                            </p>

                            <h3>Et quae iure vel ut odit alias.</h3>
                            <p>
                                Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum
                                atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem
                                laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt
                                aliquid qui.
                                Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut
                                ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem
                                omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint
                                consequatur quidem ea.
                                Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum
                                quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                            </p>
                            <img src="../img/why-us-bg.jpg" class="img-fluid" alt="">

                            <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                            <p>
                                Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda
                                quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur
                                sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum
                                dolores vel.
                                Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis
                                quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum
                                ut a quam vitae.
                            </p>
                            <p>
                                Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas
                                incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                            </p>

                        </div>
                        <!-- End post content -->

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">Business</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
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
