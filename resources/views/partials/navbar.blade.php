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
                  <li class="nav-item "><a class="nav-link {{ $title == 'Home' ? 'active' : '' }}"
                          href="/">Home</a>
                  </li>
                  <li class="nav-item"><a class="nav-link {{ $title == 'About' ? 'active' : '' }}"
                          href="/about">About</a></li>
                  <li class="nav-item"><a class="nav-link {{ $title == 'Team' ? 'active' : '' }}"
                          href="/team">Team</a></li>
                  <li class="nav-item"><a class="nav-link {{ $title == 'All Blogs' ? 'active' : '' }}"
                          href="/blogs">Blog</a></li>

                  <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                              class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="#">Dropdown 1</a></li>
                          <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                      class="bi bi-chevron-down dropdown-indicator"></i></a>
                              <ul>
                                  <li><a href="#">Deep Dropdown 1</a></li>
                                  <li><a href="#">Deep Dropdown 2</a></li>
                                  <li><a href="#">Deep Dropdown 3</a></li>
                                  <li><a href="#">Deep Dropdown 4</a></li>
                                  <li><a href="#">Deep Dropdown 5</a></li>
                              </ul>
                          </li>
                          <li><a href="#">Dropdown 2</a></li>
                          <li><a href="#">Dropdown 3</a></li>
                          <li><a href="#">Dropdown 4</a></li>
                      </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link {{ $title == 'Contact' ? 'active' : '' }}"
                          href="/contact">Contact</a></li>
              </ul>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->
