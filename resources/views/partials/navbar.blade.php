  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="/" class="logo d-flex align-items-center">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <!-- <img src="assets/img/logo.png" alt=""> -->
              <h1 class="d-flex align-items-center">IF21</h1>
          </a>

          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

          <nav id="navbar" class="navbar">
              <ul>
                  <li class="nav-item "><a class="nav-link {{ $active == 'Home' ? 'active' : '' }}"
                          href="/">Home</a>
                  </li>
                  <li class="nav-item"><a class="nav-link {{ $active == 'About' ? 'active' : '' }}"
                          href="/about">About</a></li>
                  <li class="nav-item"><a class="nav-link {{ $active == 'Team' ? 'active' : '' }}"
                          href="/team">Team</a></li>
                  <li class="nav-item"><a class="nav-link {{ $active == 'Gallery' ? 'active' : '' }}"
                          href="/gallery">Gallery</a></li>

                  <li class="dropdown "><a href="/blogs"
                          class="{{ $active == 'All Blogs' ? 'active' : '' }}"><span>Blog</span> <i
                              class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="/blogs" class="{{ $active == 'All Blogs' ? 'active' : '' }}">All Blog</a></li>
                          <li class="dropdown {{ $active == 'Category' ? 'active' : '' }}"><a
                                  href="/categories"><span>Categories</span> <i
                                      class="bi bi-chevron-down dropdown-indicator"></i></a>
                              <ul>
                                  <li><a href="/blogs?category=web programming">Web Programming</a></li>
                                  <li><a href="/blogs?category=personal">Personal</a></li>
                              </ul>
                          </li>

                      </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link {{ $title == 'Contact' ? 'active' : '' }}"
                          href="/contact">Contact</a></li>
                  @auth

                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                              aria-expanded="false">
                              Hi, {{ auth()->user()->name }}
                          </a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item justify-content-start" href="/dashboard"><i
                                          class="bi bi-columns-gap me-2 fs-4 "></i>My Dashboard</a></li>
                              <li><a class="dropdown-item justify-content-start" href="#">Course</a></li>
                              <li>
                                  <hr class="dropdown-divider">
                              </li>
                              <li>
                                  <form action="/logout" method="post">
                                    @csrf
                                      <button type="submit" class="dropdown-item justify-content-start"><i
                                              class="bi bi-box-arrow-right me-2 fs-4 "></i>Logout</button>
                                  </form>

                          </ul>
                      </li>
                  @else
                      <li class="nav-item ">
                          <a href="/login"
                              class="nav-link justify-content-start {{ $active == 'login' ? 'active' : '' }}"><i
                                  class="bi bi-box-arrow-in-right me-2 fs-4"></i>Login</a>
                      </li>
                  @endauth
              </ul>

          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->
