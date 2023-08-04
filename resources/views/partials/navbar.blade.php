<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 ">
    <div class="container px-5">
        <a class="navbar-brand" href="/">FTI 2021</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder ">
                <li class="nav-item "><a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link {{ $title == 'About' ? 'active' : '' }}"
                        href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link {{ $title == 'Team' ? 'active' : '' }}"
                        href="/team">Team</a></li>
                <li class="nav-item"><a class="nav-link {{ $title == 'All Blogs' ? 'active' : '' }}"
                        href="/blogs">Blog</a></li>
                <li class="nav-item"><a class="nav-link {{ $title == 'Contact' ? 'active' : '' }}"
                        href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link {{ $title == 'Other' ? 'active' : '' }}"
                        href="/other">Other</a></li>
            </ul>
        </div>
    </div>
</nav>
