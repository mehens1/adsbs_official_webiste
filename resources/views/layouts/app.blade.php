<!doctype html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $page_title }} | Adamawa State Bureau of Statistics</title>
        <link rel="icon" href="{{ asset('images/adsbs_logo.png') }}" type="image/gif" sizes="16x16">

        <link rel='dns-prefetch' href='//code.jquery.com' />

        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    </head>
    <body class="{{ $page_class }} page tribe-no-js sidebar-primary">

        <header class="section" id="header-primary">
            <div class="header__content">
                    <a class="brand" href="/">
                        <img src="{{ asset('images/adsbs_logo.png') }}" alt="Adamawa State Bureau of Statistics Logo">
                        <h1>Adamawa State<br><strong>Bureau of Statistics</strong></h1>
                    </a>
                    <form method="get" id="searchform" action="#">
                        <input type="text" class="field" name="s" id="s" placeholder="Search" />
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    <div class="mobile-menu-toggle">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>

                <nav class="nav-primary">
                    @include('layouts.navbar')
                </nav>

                <nav class="nav-primary--mobile">
                    @include('layouts.navbar')
                </nav>

                <div class="notices">
                    @foreach ($prices as $price)
                    <div class="notice">
                        <div class="notice__container">
                            <p>
                                {!! $price['description'] !!}
                                @if ($price['hyperlink'])
                                , <strong><a style="color: #ff0000;" href="{{ $price['hyperlink'] }}">Click for more</a></strong>
                                @endif
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </header>

        <div class="wrap container" role="document">
            <div class="content row">
                <main class="main">
                    @yield('content')
                </main>
                @yield('aside')

            </div>
        </div>

        <footer class="section" id="footer-primary">
            <div class="footer__container footer__container--fixed footer__container--padded">
                <div class="footer__content">
                    <div class="column">
                        <nav class="footer-menu footer-menu-primary">
                            <h3>Site info</h3>
                            <ul id="menu-footer-menu" class="nav">
                                <li class="menu-item menu-terms-and-conditions"><a href="{{ route('terms') }}">Terms and Conditions</a></li>
                                <li class="menu-item menu-privacy-policy"><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
                                <li class="menu-item menu-site-map"><a href="{{ route('siteMap') }}">Site Map</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="column">
                        <nav class="footer-menu footer-menu-secondary">
                            <h3>Stay connected</h3>
                            <ul id="menu-footer-menu-secondary" class="nav">
                                <li class="menu-item menu-faqs"><a href="{{ route('faqs') }}">FAQs</a></li>
                                <li class="menu-item menu-careers"><a href="{{ route('careers') }}">Careers</a></li>
                                <li class="menu-item menu-contact-us"><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li class="menu-item menu-related-links"><a href="{{ route('relatedLinks') }}">Related Links</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="column"></div>
                    <div class="column">
                        <nav class="footer-menu social-media">
                            <h3>Social media</h3>
                            <p>Follow us on</p>
                            <ul id="menu-social-media" class="nav">
                                <li class="menu-item menu-facebook"><a href="#" target="_blank">Facebook</a></li>
                                <li class="menu-item menu-twitter"><a href="#" target="_blank">Twitter</a></li>
                                <li class="menu-item menu-instagram"><a href="#" target="_blank">Instagram</a></li>
                            </ul>
                        </nav>

                        <div class="partners">
                            <div class="partners__container">
                                <h3>Our partners</h3>
                                <div class="partners">
                                    <div class="partner">
                                        <a href="https://www.nigerianstat.gov.ng/" target="_blank"><img src="{{ asset('images/partners/nbs_logo.jpg') }}"></a>
                                    </div>
                                    <div class="partner">
                                        <a href="https://www.worldbank.org/en/home" target="_blank"><img src="{{ asset('images/partners/World-Bank-Logo-300x122.jpeg') }}"></a>
                                    </div>
                                    <div class="partner">
                                        <a href="https://www.spotlightinitiative.org/" target="_blank"><img src="{{ asset('images/partners/sportlight_logo.svg') }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtBST3BARkcPmJ0k0j12GLcpJshcTUhdE"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <!-- <script>(window.jQuery && jQuery.noConflict()) || document.write('<script src="/wp/wp-includes/js/jquery/jquery.js"><\/script>')</script> -->
        <script src=" {{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/Chart.js') }}"></script>
        <script src="{{ asset('js/wdt.highcharts.js') }}"></script>
        <script src="{{ asset('js/wdt.chartJS.js') }}"></script>
        <script src="https://code.highcharts.com/highcharts.js?ver=4.9.4"></script>
        <script src="https://code.highcharts.com/highcharts-3d.js?ver=4.9.4"></script>
        <script src="https://code.highcharts.com/modules/exporting.js?ver=4.9.4"></script>

        @yield('pageJs')
    </body>
</html>
