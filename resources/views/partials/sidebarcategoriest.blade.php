<div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

    <div class="sidebar ps-lg-4">

        <div class="sidebar-item search-form">
            <h3 class="sidebar-title">Search</h3>
            <form action="/blogs" class="mt-3">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{request('author')}}">
                @endif
                <input type="text" name="search" value="{{request('search')}}">
                <button type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End sidebar search formn-->

        <div class="sidebar-item categories">
            <h3 class="sidebar-title">Categories</h3>
            <ul class="mt-3">
                <li><a href="/blogs?category=web programming">Web Programming</a></li>
                <li><a href="/blogs?category=personal">Personal</a></li>
            </ul>
        </div>
        <!-- End sidebar categories-->

        <div class="sidebar-item recent-posts">
            <h3 class="sidebar-title">Recent Posts</h3>

            <div class="mt-3">
                @foreach ($posts as $index => $posts)
                @if ($index < $limit)
                <div class="post-item mt-3">
                    <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                    <div>
                        <h4><a href="/blogs/{{ $post->slug }}"> {{ $posts->title }}</a></h4>
                        <time datetime="2020-01-01">Jan 1, 2020</time>
                    </div>
                </div>
                <!-- End recent post item-->
                @endif
                @endforeach
            

                

            </div>

        </div>
        <!-- End sidebar recent posts-->

        <div class="sidebar-item tags">
            <h3 class="sidebar-title">Tags</h3>
            <ul class="mt-3">
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Office</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
            </ul>
        </div>
        <!-- End sidebar tags-->

    </div>
    <!-- End Blog Sidebar -->

</div>
