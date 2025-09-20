<aside id="sidebar" class="sidebar break-point-sm has-bg-image">
    <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
 
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <div class="pro-sidebar-logo">
                <img src="{{ asset('favicons/logo.svg') }}" width="30px" alt="OA Tutors Logo"
                    style="border-radius: 5px">
                <h5> <a href="/" style="text-decoration: none; padding-left:10px; margin-top:15px; padding-right:2px; color:white">Learning Hub</a></h5>
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
                                <img src="{{ asset('favicons/ng-flag.png') }}" alt="Nigeria Flag" />
                            </a>
                            <a href="{{ $ukUrl }}" class="{{ $currentLocation === 'ng' ? 'active' : '' }}">
                                <img src="{{ asset('favicons/br-flag.png') }}" alt="UK Flag" />
                            </a>
                            <div class="toggle-slider {{ $currentLocation === 'ng' ? 'left' : 'right' }}">
                            </div>
                        </div>
                    </li>
                    <li class="menu-header"><span> NAVIGATION </span></li>
                    @if (\Illuminate\Support\Str::lower(request('location')) === 'ng')
                        <li class="menu-item sub-menu">
                            <a href="#primary">
                                <span class="menu-icon">
                                    <i class="ri-book-3-line"></i>
                                </span>
                                <span class="menu-title">Primary</span>
                            </a>
                            <div class="sub-menu-list">
                                <ul>
                                    <li class="menu-item"><a href="#primary-1"><span class="menu-title">Primary
                                                1</span></a></li>
                                    <li class="menu-item"><a href="#primary-2"><span class="menu-title">Primary
                                                2</span></a></li>
                                    <li class="menu-item"><a href="#primary-3"><span class="menu-title">Primary
                                                3</span></a></li>
                                    <li class="menu-item"><a href="#primary-4"><span class="menu-title">Primary
                                                4</span></a></li>
                                    <li class="menu-item"><a href="#primary-5"><span class="menu-title">Primary
                                                5</span></a></li>
                                    <li class="menu-item"><a href="#primary-6"><span class="menu-title">Primary
                                                6</span></a></li>
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
                                    <li class="menu-item"><a href="#jss-1"><span class="menu-title">JSS 1</span></a>
                                    </li>
                                    <li class="menu-item"><a href="#jss-2"><span class="menu-title">JSS 2</span></a>
                                    </li>
                                    <li class="menu-item"><a href="#jss-3"><span class="menu-title">JSS 3</span></a>
                                    </li>
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
                                    <li class="menu-item"><a href="#sss-1"><span class="menu-title">SSS 1</span></a>
                                    </li>
                                    <li class="menu-item"><a href="#sss-2"><span class="menu-title">SSS 2</span></a>
                                    </li>
                                    <li class="menu-item"><a href="#sss-3"><span class="menu-title">SSS 3</span></a>
                                    </li>
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
                                        <a href="#ks1"><span class="menu-title">Early Years
                                                Foundation Stage (EYFS)</span></a>
                                        <div class="sub-menu-list">
                                            <ul>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS0.y0.yr0-index') }}"><span
                                                            class="menu-title">Pre-School
                                                            Ideas</span></a></li>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.EYFS.y0.yrR-index') }}"><span
                                                            class="menu-title">Reception</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item sub-menu">
                                        <a href="#ks1">
                                            <span class="menu-title">Key Stage 1 (Years 1-2)</span>
                                        </a>
                                        <div class="sub-menu-list">
                                            <ul>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS1.y1.yr1-index') }}"><span class="menu-title">Year
                                                            1</span></a>
                                                </li>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS1.y2.yr2-index') }}"><span class="menu-title">Year
                                                            2</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item sub-menu">
                                        <a href="#ks2"><span class="menu-title">Key Stage 2
                                                (Years 3-6)</span></a>
                                        <div class="sub-menu-list">
                                            <ul>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS2.y3.yr3-index') }}"><span class="menu-title">Year
                                                            3</span></a>
                                                </li>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS2.y4.yr4-index') }}"><span class="menu-title">Year
                                                            4</span></a>
                                                </li>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS2.y5.yr5-index') }}"><span class="menu-title">Year
                                                            5</span></a>
                                                </li>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS2.y6.yr6-index') }}"><span class="menu-title">Year
                                                            6</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item sub-menu">
                                        <a href="#ks3"><span class="menu-title">Key Stage 3
                                                (Years 7-9)</span></a>
                                        <div class="sub-menu-list">
                                            <ul>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS3.y7.yr7-index') }}"><span class="menu-title">Year
                                                            7</span></a>
                                                </li>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS3.y8.yr8-index') }}"><span class="menu-title">Year
                                                            8</span></a>
                                                </li>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS3.y9.yr9-index') }}"><span class="menu-title">Year
                                                            9</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item sub-menu">
                                        <a href="#ks4"><span class="menu-title">Key Stage 4
                                                (Years 10-11)</span></a>
                                        <div class="sub-menu-list">
                                            <ul>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS4.y10.yr10-index') }}"><span
                                                            class="menu-title">Year 10</span></a>
                                                </li>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS4.y11.yr11-index') }}"><span
                                                            class="menu-title">Year 11</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item sub-menu">
                                        <a href="#ks5"><span class="menu-title">Key Stage 5
                                                (Years 12-13)</span></a>
                                        <div class="sub-menu-list">
                                            <ul>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS5.y12.yr12-index') }}"><span
                                                            class="menu-title">Year 12</span></a>
                                                </li>
                                                <li class="menu-item"><a href="{{ route('br.yeargroups.KS5.y13.yr13-index') }}"><span
                                                            class="menu-title">Year 13</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    @endif

                    <li class="menu-header" style="padding-top: 20px"><span> SITE </span></li>

                    <li class="menu-item">
                        <a href="{{ route('skills.index') }}">
                            <span class="menu-icon"><i class="ri-book-open-line"></i></span>
                            <span class="menu-title">Skills</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/moodle">
                            <span class="menu-icon"><img src="{{ asset('favicons/moodle-icon.png') }}"
                                    alt="Moodle" style="width: 30px; height: 30px; filter: invert(1);"></span>
                            <span class="menu-title">Moodle</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('br/yeargroups/purpose') }}">
                            <span class="menu-icon"><i class="ri-rocket-line"></i></span>
                            <span class="menu-title">Purpose in Motion</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('activities.index') }}">
                            <span class="menu-icon"><i class="ri-gamepad-line"></i></span>
                            <span class="menu-title">Activities</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('blog.index') }}">
                            <span class="menu-icon"><i class="ri-article-line"></i></span>
                            <span class="menu-title">Blog</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('about') }}">
                            <span class="menu-icon"><i class="ri-information-line"></i></span>
                            <span class="menu-title">About</span>
                        </a>
                    </li>

                    <li class="menu-header" style="padding-top: 20px"><span> ACCOUNT </span></li>

                    @if (Auth::check())
                        <li class="menu-item">
                            <a href="{{ route('profile') }}">
                                <span class="menu-icon"><i class="ri-user-line"></i></span>
                                <span class="menu-title">Profile</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('logout') }}">
                                <span class="menu-icon"><i class="ri-logout-box-line"></i></span>
                                <span class="menu-title">Logout</span>
                            </a>
                        </li>
                    @else
                        <li class="menu-item">
                            <a href="{{ route('register') }}">
                                <span class="menu-icon"><i class="ri-user-add-line"></i></span>
                                <span class="menu-title">Sign Up</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('student.login') }}">
                                <span class="menu-icon"><i class="ri-graduation-cap-line"></i></span>
                                <span class="menu-title">Student Login</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('tutor.login') }}">
                                <span class="menu-icon"><i class="ri-teacher-line"></i></span>
                                <span class="menu-title">Tutor Login</span>
                            </a>
                        </li>
                    @endif


                    <li class="menu-header" style="padding-top: 20px"><span> LEGAL </span></li>

                    <li class="menu-item">
                        <a href="{{ url('/legals/safeguarding') }}">
                            <span class="menu-icon"><i class="ri-shield-check-line"></i></span>
                            <span class="menu-title">Safeguarding</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/legals/privacy') }}">
                            <span class="menu-icon"><i class="ri-lock-line"></i></span>
                            <span class="menu-title">Privacy</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/legals/terms') }}">
                            <span class="menu-icon"><i class="ri-file-text-line"></i></span>
                            <span class="menu-title">Terms</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Adding additional sections to the sidebar -->
        <div class="social-icons" style="display: flex; justify-content: center; gap: 10px; margin-top: 20px;">
            <a href="#" aria-label="Facebook" style="color: #3b5998; font-size: 20px;"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Twitter" style="color: #1da1f2; font-size: 20px;"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Instagram" style="color: #e1306c; font-size: 20px;"><i class="fab fa-instagram"></i></a>
        </div>

        <div class="sidebar-footer">
            <div class="footer-box">
                <div>
                    <img class="react-logo" src="{{ asset('favicons/logo.svg') }}" alt="logo" />
                </div>
                <div style="padding: 0 10px">
                    <span style="display: block; margin-bottom: 10px">Product of OA Tutors</span>
                    <div>
                        <a href="https://oatutors.co.uk" target="_blank">Check it out!</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="sidebar-section">
            <h3>Contact</h3>
            <p>Email: support@learninghub.com</p>
            <p>Phone: +123 456 7890</p>
        </div> --}}

        
    </div>
</aside>
