<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 ">
    <div class="container px-5">
        <a class="navbar-brand" href="/"><img src="../img/adam.png" alt="adam" width="90" height="25"></a>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder ">
                <li class="nav-item "><a class="nav-link {{ $title == 'Home' ? 'active' : '' }}"
                        href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ $title == 'Resume' ? 'active' : '' }}"
                        href="/resume">Resume</a></li>
                <li class="nav-item"><a class="nav-link {{ $title == 'Projects' ? 'active' : '' }}"
                        href="/projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link {{ $title == 'Contact' ? 'active' : '' }}"
                        href="/contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link {{ $title == 'Other' ? 'active' : '' }}"
                        href="/other">Other</a></li>
            </ul>
        </div>
    </div>
</nav>
