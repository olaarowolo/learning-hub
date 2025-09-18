<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pro Sidebar</title>
    {{-- Remix Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    {{-- Use Vite to compile and include assets --}}
    @vite(['resources/css/side-nav.scss', 'resources/js/side-nav.js'])
  </head>
  <body>
    <div class="layout has-sidebar fixed-sidebar fixed-header">
      <aside id="sidebar" class="sidebar break-point-sm has-bg-image">
        <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
        <div class="image-wrapper">
          <img src="assets/images/sidebar-bg.jpg" alt="sidebar background" />
        </div>
        <div class="sidebar-layout">
          <div class="sidebar-header">
            <div class="pro-sidebar-logo">
              <div>          <img src="{{ asset('favicons/logo.svg') }}" width="35px" alt="OA Tutors Logo" style="border-radius: 5px" >
              </div>
              <h5>Learning Hub</h5>
            </div>
          </div>
          <div class="sidebar-content">
            <nav class="menu">
              <ul>
                <li class="menu-header"><span> NAVIGATION </span></li>
                @if(\Illuminate\Support\Str::lower(request('location')) === 'ng')
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-book-3-line"></i>
                    </span>
                    <span class="menu-title">Primary</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item"><a href="#"><span class="menu-title">Primary 1</span></a></li>
                      <li class="menu-item"><a href="#"><span class="menu-title">Primary 2</span></a></li>
                      <li class="menu-item"><a href="#"><span class="menu-title">Primary 3</span></a></li>
                      <li class="menu-item"><a href="#"><span class="menu-title">Primary 4</span></a></li>
                      <li class="menu-item"><a href="#"><span class="menu-title">Primary 5</span></a></li>
                      <li class="menu-item"><a href="#"><span class="menu-title">Primary 6</span></a></li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-book-3-line"></i>
                    </span>
                    <span class="menu-title">Junior Secondary School (JSS)</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item"><a href="#"><span class="menu-title">JSS 1</span></a></li>
                      <li class="menu-item"><a href="#"><span class="menu-title">JSS 2</span></a></li>
                      <li class="menu-item"><a href="#"><span class="menu-title">JSS 3</span></a></li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-book-3-line"></i>
                    </span>
                    <span class="menu-title">Senior Secondary School (SSS)</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item"><a href="#"><span class="menu-title">SSS 1</span></a></li>
                      <li class="menu-item"><a href="#"><span class="menu-title">SSS 2</span></a></li>
                      <li class="menu-item"><a href="#"><span class="menu-title">SSS 3</span></a></li>
                    </ul>
                  </div>
                </li>
                @else
                <li class="menu-item sub-menu">
                  <a href="#">
                    <span class="menu-icon">
                      <i class="ri-book-3-line"></i>
                    </span>
                    <span class="menu-title">Key Stages</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item sub-menu">
                        <a href="#">
                          <span class="menu-title">Key Stage 1 (Years 1-2)</span>
                        </a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 1</span></a></li>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 2</span></a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#"><span class="menu-title">Key Stage 2 (Years 3-6)</span></a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 3</span></a></li>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 4</span></a></li>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 5</span></a></li>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 6</span></a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#"><span class="menu-title">Key Stage 3 (Years 7-9)</span></a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 7</span></a></li>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 8</span></a></li>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 9</span></a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#"><span class="menu-title">Key Stage 4 (Years 10-11)</span></a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 10</span></a></li>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 11</span></a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#"><span class="menu-title">Key Stage 5 (Years 12-13)</span></a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 12</span></a></li>
                            <li class="menu-item"><a href="#"><span class="menu-title">Year 13</span></a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                @endif

                <li class="menu-header" style="padding-top: 20px"><span> SITE </span></li>

                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon"><i class="ri-rocket-line"></i></span>
                    <span class="menu-title">Purpose in Motion</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon"><i class="ri-gamepad-line"></i></span>
                    <span class="menu-title">Activities</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon"><i class="ri-article-line"></i></span>
                    <span class="menu-title">Blog</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/preview-side-nav">
                    <span class="menu-icon"><i class="ri-information-line"></i></span>
                    <span class="menu-title">About</span>
                  </a>
                </li>

                <li class="menu-header" style="padding-top: 20px"><span> LEGAL </span></li>

                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon"><i class="ri-shield-check-line"></i></span>
                    <span class="menu-title">Safeguarding</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon"><i class="ri-lock-line"></i></span>
                    <span class="menu-title">Privacy</span>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#">
                    <span class="menu-icon"><i class="ri-file-text-line"></i></span>
                    <span class="menu-title">Terms</span>
                  </a>
                </li>

              </ul>
            </nav>
          </div>
          <div class="sidebar-footer">
            <div class="footer-box">
              <div>
                <img
                  class="react-logo"
                  src="{{ asset('favicons/logo.svg') }}"
                  alt="logo"
                />

              </div>
              <div style="padding: 0 10px">
                <span style="display: block; margin-bottom: 10px"
                  >Product of OA Tutors
                </span>

                <div>
                  <a href="https://oatutors.co.uk" target="_blank"
                    >Check it out!</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <div id="overlay" class="overlay"></div>


      <main class="content">
        <div>
            <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm">
              <i class="ri-menu-line ri-xl"></i>
            </a>
            <h1 style="margin-bottom: 0">Pro Sidebar</h1>
            <span style="display: inline-block">
              Responsive layout with advanced sidebar menu built with SCSS and vanilla Javascript
            </span>
            <br />
            <span>
              Full Code and documentation available on
              <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank"
                >Github</a
              >
            </span>
            <div style="margin-top: 10px">
              <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank">
                <img
                  alt="GitHub stars"
                  src="https://img.shields.io/github/stars/azouaoui-med/pro-sidebar-template?style=social"
                />
              </a>
              <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank">
                <img
                  alt="GitHub forks"
                  src="https://img.shields.io/github/forks/azouaoui-med/pro-sidebar-template?style=social"
                />
              </a>
            </div>
          </div>
          <div>
            <h2>Features</h2>
            <ul>
              <li>Fully responsive</li>
              <li>Collapsable sidebar</li>
              <li>Multi level menu</li>
              <li>RTL support</li>
              <li>Customizable</li>
            </ul>
          </div>
          <div>
            <h2>Resources</h2>
            <ul>
              <li>
                <a target="_blank" href="https://github.com/azouaoui-med/css-pro-layout">
                  Css Pro Layout</a
                >
              </li>
              <li>
                <a target="_blank" href="https://github.com/popperjs/popper-core"> Popper Core</a>
              </li>
              <li>
                <a target="_blank" href="https://remixicon.com/"> Remix Icons</a>
              </li>
            </ul>
          </div>
          <footer class="footer">
            <small style="margin-bottom: 20px; display: inline-block">
              © 2025 made with
              <span style="color: red; font-size: 18px">&#10084;</span> by -
              <a target="_blank" href="https://azouaoui.netlify.app"> Mohamed Azouaoui </a>
            </small>
            <br />
            <div class="social-links">
              <a href="https://github.com/azouaoui-med" target="_blank">
                <i class="ri-github-fill ri-xl"></i>
              </a>
              <a href="https://twitter.com/azouaoui_med" target="_blank">
                <i class="ri-twitter-fill ri-xl"></i>
              </a>
              <a href="https://codepen.io/azouaoui-med" target="_blank">
                <i class="ri-codepen-fill ri-xl"></i>
              </a>
              <a href="https://www.linkedin.com/in/mohamed-azouaoui/" target="_blank">
                <i class="ri-linkedin-box-fill ri-xl"></i>
              </a>
            </div>
          </footer>
        </div>
      </main>
        <div class="overlay"></div>
      </div>
    </div>
