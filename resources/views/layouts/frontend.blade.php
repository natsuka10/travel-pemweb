<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!--=============== BOXICONS ===============-->
        <link
            href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
            rel="stylesheet"
        />

        <!--=============== Font Awesome ===============-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <!--=============== SWIPER CSS ===============-->
        <link
            rel="stylesheet"
            href="{{ asset('frontend/assets/libraries/swiper-bundle.min.css') }}"
        />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
        @stack('style-alt')
        <title>Beautiful Malang</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a class="navbar-brand" href="{{ route('homepage') }}"><img src="https://www.pikpng.com/pngl/b/141-1417435_beautiful-malang-png-clipart.png" alt="logo" style="width: 100px;"></a>

                <div class="nav__menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('homepage') }}" class="nav__link {{ request()->is('/') ? ' active-link' : '' }}">
                                <i class="bx bx-home-alt"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('travel_package.index') }}" class="nav__link {{ request()->is('travel-packages') || request()->is('travel-packages/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-building-house"></i>
                                <span>Destinasi Wisata</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('blog.index') }}" class="nav__link {{ request()->is('blogs') || request()->is('blogs/*')  ? ' active-link' : '' }}">
                                <i class="bx bx-award"></i>
                                <span>Rekomendasi Wisata</span>
                            </a>
                        </li>
<<<<<<< HEAD
                    </ul>
                </div>
=======
                        <a target="_blank" href="/login" class="button nav__button">Login</a>
                        <li class="nav__item">

                        </li>
                        {{-- <li class="nav__item">
                            <a href="{{ route('contact') }}" class="nav__link {{ request()->is('contact') ? ' active-link' : '' }}">
                                <i class="bx bx-phone"></i>
                                <span>Contact</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>

                <!-- theme -->
                {{-- <i class="bx bx-moon change-theme" id="theme-button"></i> --}}
>>>>>>> d0f6549fa91589d91373fadb5c463303da5927df
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            @yield('content')
        </main>
        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="{{ route('homepage') }}" class="footer__logo">
                        <img src="https://www.pikpng.com/pngl/b/141-1417435_beautiful-malang-png-clipart.png" alt="logo" style="width: 100px;">
                    </a>
                    <p class="footer__description">
                        Nikmati berbagai destinasi wisata di <br>
                        Malang Raya.
                    </p>
                </div>

                <div class="footer__content">
                    <div>
                        <h3 class="footer__title">Navigation</h3>

                        <ul class="footer__links">
                            <li>
                                <a href="/travel-package" class="footer__link">Destinasi Wisata</a>
                            </li>
                            <li>
                                <a href="/blogs" class="footer__link">Rekomendasi Wisata</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="footer__title">Follow us</h3>

                        <ul class="footer__social">
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-facebook-circle"></i>
                            </a>
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-instagram-alt"></i>
                            </a>
                            <a href="#" class="footer__social-link">
                                <i class="bx bxl-pinterest"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__info container">
                <span class="footer__copy">
                    &#169;All rigths reserved
                </span>
                <div class="footer__privacy">
                    <span class="footer__copy">Made With Laravel</span>
                </div>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="bx bx-chevrons-up"></i>
        </a>

        <!--=============== SCROLLREVEAL ===============-->
        <script src="{{ asset('frontend/assets/libraries/scrollreveal.min.js') }}"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="{{ asset('frontend/assets/libraries/swiper-bundle.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
        @stack('script-alt')
    </body>
</html>
