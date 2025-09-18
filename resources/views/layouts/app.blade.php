<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>

    @yield('meta')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- App Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/breadcrumb.css') }}">

    {{-- Remix Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/css/side-nav.scss', 'resources/js/app.js', 'resources/js/side-nav.js'])

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    @media (max-width: 576px) {
      .year-grid {
        grid-template-columns: 1fr 1fr;
        gap: 0.75rem;
      }
      .year-card {
        padding: 1rem 0.5rem;
        min-height: 60px;
        border-radius: 8px;
      }
      .year-card h2 {
        font-size: 1rem;
      }
    }
    @media (min-width: 577px) {
      .sidebar-toggler {
        display: none;
      }
    }

    /* Switch Toggle Styles */
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: #2196F3;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
      transform: translateX(26px);
    }

    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }
    </style>
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
                <li style="padding: 10px 15px;">
                  @php
                    $currentLocation = strtolower(request('location', 'uk'));
                    $currentUrl = url()->current();
                    $queryParams = request()->query();
                    $queryParams['location'] = 'ng';
                    $ngUrl = $currentUrl . '?' . http_build_query($queryParams);
                    $queryParams['location'] = 'uk';
                    $ukUrl = $currentUrl . '?' . http_build_query($queryParams);
                  @endphp
                  <div class="toggle-switch">
                    <a href="{{ $ngUrl }}" class="{{ $currentLocation === 'ng' ? '' : 'active' }}">
                      <img src="https://static.vecteezy.com/system/resources/previews/015/309/678/non_2x/nigeria-waving-flag-realistic-transparent-background-free-png.png" alt="Nigeria Flag" />
                    </a>
                    <a href="{{ $ukUrl }}" class="{{ $currentLocation === 'ng' ? 'active' : '' }}">
                      <img src="https://images.emojiterra.com/google/android-10/512px/1f1ec-1f1e7.png" alt="UK Flag" />
                    </a>
                    <div class="toggle-slider {{ $currentLocation === 'ng' ? 'left' : 'right' }}"></div>
                  </div>
                </li>
                <li class="menu-header"><span> NAVIGATION </span></li>
                @if(\Illuminate\Support\Str::lower(request('location')) === 'ng')
                <li class="menu-item sub-menu">
                  <a href="#primary">
                    <span class="menu-icon">
                      <i class="ri-book-3-line"></i>
                    </span>
                    <span class="menu-title">Primary</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item"><a href="#primary-1"><span class="menu-title">Primary 1</span></a></li>
                      <li class="menu-item"><a href="#primary-2"><span class="menu-title">Primary 2</span></a></li>
                      <li class="menu-item"><a href="#primary-3"><span class="menu-title">Primary 3</span></a></li>
                      <li class="menu-item"><a href="#primary-4"><span class="menu-title">Primary 4</span></a></li>
                      <li class="menu-item"><a href="#primary-5"><span class="menu-title">Primary 5</span></a></li>
                      <li class="menu-item"><a href="#primary-6"><span class="menu-title">Primary 6</span></a></li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#jss">
                    <span class="menu-icon">
                      <i class="ri-book-3-line"></i>
                    </span>
                    <span class="menu-title">Junior Secondary School (JSS)</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item"><a href="#jss-1"><span class="menu-title">JSS 1</span></a></li>
                      <li class="menu-item"><a href="#jss-2"><span class="menu-title">JSS 2</span></a></li>
                      <li class="menu-item"><a href="#jss-3"><span class="menu-title">JSS 3</span></a></li>
                    </ul>
                  </div>
                </li>
                <li class="menu-item sub-menu">
                  <a href="#sss">
                    <span class="menu-icon">
                      <i class="ri-book-3-line"></i>
                    </span>
                    <span class="menu-title">Senior Secondary School (SSS)</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item"><a href="#sss-1"><span class="menu-title">SSS 1</span></a></li>
                      <li class="menu-item"><a href="#sss-2"><span class="menu-title">SSS 2</span></a></li>
                      <li class="menu-item"><a href="#sss-3"><span class="menu-title">SSS 3</span></a></li>
                    </ul>
                  </div>
                </li>
                @else
                <li class="menu-item sub-menu">
                  <a href="#ks1">
                    <span class="menu-icon">
                      <i class="ri-book-3-line"></i>
                    </span>
                    <span class="menu-title">Key Stages</span>
                  </a>
                  <div class="sub-menu-list">
                    <ul>
                      <li class="menu-item sub-menu">
                        <a href="#ks1"><span class="menu-title">Early Years Foundation Stage (EYFS)</span></a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item"><a href="#pre-school"><span class="menu-title">Pre-School Ideas</span></a></li>
                            <li class="menu-item"><a href="#reception"><span class="menu-title">Reception</span></a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#ks1">
                          <span class="menu-title">Key Stage 1 (Years 1-2)</span>
                        </a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item"><a href="#year-1"><span class="menu-title">Year 1</span></a></li>
                            <li class="menu-item"><a href="#year-2"><span class="menu-title">Year 2</span></a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#ks2"><span class="menu-title">Key Stage 2 (Years 3-6)</span></a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item"><a href="#year-3"><span class="menu-title">Year 3</span></a></li>
                            <li class="menu-item"><a href="#year-4"><span class="menu-title">Year 4</span></a></li>
                            <li class="menu-item"><a href="#year-5"><span class="menu-title">Year 5</span></a></li>
                            <li class="menu-item"><a href="#year-6"><span class="menu-title">Year 6</span></a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#ks3"><span class="menu-title">Key Stage 3 (Years 7-9)</span></a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item"><a href="#year-7"><span class="menu-title">Year 7</span></a></li>
                            <li class="menu-item"><a href="#year-8"><span class="menu-title">Year 8</span></a></li>
                            <li class="menu-item"><a href="#year-9"><span class="menu-title">Year 9</span></a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#ks4"><span class="menu-title">Key Stage 4 (Years 10-11)</span></a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item"><a href="#year-10"><span class="menu-title">Year 10</span></a></li>
                            <li class="menu-item"><a href="#year-11"><span class="menu-title">Year 11</span></a></li>
                          </ul>
                        </div>
                      </li>
                      <li class="menu-item sub-menu">
                        <a href="#ks5"><span class="menu-title">Key Stage 5 (Years 12-13)</span></a>
                        <div class="sub-menu-list">
                          <ul>
                            <li class="menu-item"><a href="#year-12"><span class="menu-title">Year 12</span></a></li>
                            <li class="menu-item"><a href="#year-13"><span class="menu-title">Year 13</span></a></li>
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
        <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm">
          <i class="ri-menu-line ri-xl"></i>
        </a>
        @yield('content')
      </main>
    </div>
</body>
</html>
