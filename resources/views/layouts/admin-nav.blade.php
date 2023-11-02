  <section class="u-clearfix u-gradient u-section-1" id="sec-e640">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
          <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
              <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-align-right u-text u-text-body-alt-color u-text-1">@yield('m_name')</h1>
                  <nav class="u-align-left u-menu u-menu-hamburger u-offcanvas u-menu-1" data-responsive-from="XL">
                      <div class="menu-collapse">
                          <a class="u-button-style u-file-icon u-nav-link u-text-white u-file-icon-1" href="#">
                              <img src="{{ img_path('151917-928baf56.png') }}" alt="">
                          </a>
                      </div>
                      <div class="u-custom-menu u-nav-container">
                          <ul class="u-nav u-unstyled">
                              <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                      href="{{ url('/sagar/projects') }}">Projects</a>
                              </li>
                              <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                      href="{{ url('/sagar/categories') }}">Categories</a>
                              </li>
                              <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                      href="{{ url('/sagar/blog') }}">Blogs</a>
                              </li>
                              <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                      href="{{ url('/sagar/project_requests') }}l">Project Requests</a>
                              </li>
                              <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                      href="{{ url('/sagar/contacts') }}">Contacts</a>
                              </li>
                              <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                      href="{{ url('/sagar/resume') }}">Resume / CV</a>
                              </li>
                              <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                      href="{{ url('/sagar/logout') }}">Log
                                      Out</a>
                              </li>
                          </ul>
                      </div>
                      <div class="u-custom-menu u-nav-container-collapse">
                          <div
                              class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                              <div class="u-inner-container-layout u-sidenav-overflow">
                                  <div class="u-menu-close"></div>
                                  <ul class="u-align-left u-nav u-popupmenu-items u-spacing-5 u-unstyled u-nav-2">
                                      <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                              href="{{ url('/sagar/projects') }}">Projects</a>
                                      </li>
                                      <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                              href="{{ url('/sagar/categories') }}">Categories</a>
                                      </li>
                                      <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                              href="{{ url('/sagar/blog') }}">Blogs</a>
                                      </li>
                                      <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                              href="{{ url('/sagar/project_requests') }}">Project Requests</a>
                                      </li>
                                      <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                              href="{{ url('/sagar/contact') }}">Contacts</a>
                                      </li>
                                      <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                              href="{{ url('/sagar/resume') }}">Resume / CV</a>
                                      </li>
                                      <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                              href="{{ url('/sagar/logout') }}">Log
                                              Out</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                      </div>
                  </nav>
              </div>
          </div>
      </div>
  </section>
