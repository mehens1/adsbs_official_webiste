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
                    <div class="notice">
                        <div class="notice__container">
                            <p>
                                <strong>2023 Key Indicators:</strong> Projected Population: <strong>
                                    <span style="color: red;">10.4M</span>
                                </strong>, Inflation:
                                <strong><span style="color: red;">24.97%</span></strong>, Annual School Census:
                                <strong><span style="color: red;">2.7M</span></strong>
                            </p>
                        </div>
                    </div>
                    <div class="notice">
                        <div class="notice__container">
                            <p><b>Market Price watch(**/Sold Loose): Adamawa North </b><span style="color: blue;"><span
                                        style="color: #0000ff;"><b style="color: #0000ff;">(August Second Week 2023</b><b
                                            style="color: #0000ff;">):</b></span></span> Rice Imported (High Quality): <span
                                    style="color: #ff0000;"><b>N1600</b></span>, Rice, Agric (Low Quality): <strong><span
                                        style="color: red;">N1600</span></strong>, Rice Local:<strong><span
                                        style="color: red;">N1300</span></strong>, Beans (White, Black Eye):<span
                                    style="color: #ff0000;"><b>N850</b></span>, Irish Potato (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N2000</b></span>, Tomato Fresh (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N1000</b></span>, Onion (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N1200</b></span>, Pepper Fresh (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N2500</b></span>,Maize (White):<span
                                    style="color: #ff0000;"><b>N800</b></span>, Sorghum(White)<span
                                    style="color: #ff0000;"><b>N800</b></span>, Millet(Gero or Maiwa): <strong><span
                                        style="color: red;">N700</span></strong>, <strong><a style="color: #ff0000;"
                                        href="#">Click
                                        for more</a></strong></p>
                        </div>
                    </div>
                    <div class="notice">
                        <div class="notice__container">
                            <p><b>Market Price watch(**/Sold Loose): Adamawa South </b><span style="color: blue;"><span
                                        style="color: #0000ff;"><b>(<b style="color: #0000ff;">August Second Week
                                                2023</b></b></span><span style="color: #0000ff;"><b>):</b></span></span>
                                Rice Imported (High Quality): <span style="color: #ff0000;"><b>N1700</b></span>, Rice, Agric
                                (Low Quality): <strong><span style="color: red;">N1500</span></strong>, Rice
                                Local:<strong><span style="color: red;">N1250</span></strong>, Beans (White, Black
                                Eye):<span style="color: #ff0000;"><b>N900</b></span>, Irish Potato (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N2000</b></span>, Tomato Fresh (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N800</b></span>, Onion (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N1000</b></span>, Pepper Fresh (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N2000</b></span>,Maize (White):<span
                                    style="color: #ff0000;"><b>N800</b></span>, Sorghum(White)<span
                                    style="color: #ff0000;"><b>N800</b></span>, Millet(Gero or Maiwa): <strong><span
                                        style="color: red;">N700</span></strong>, <strong><a style="color: #ff0000;"
                                        href="#">Click
                                        for more</a></strong>
                                <!--more-->
                            </p>
                        </div>
                    </div>
                    <div class="notice">
                        <div class="notice__container">
                            <p><b>Market Price watch(**/Sold Loose): Zaria </b><span style="color: blue;"><span
                                        style="color: #0000ff;"><b>(<b style="color: #0000ff;">August Second Week
                                                2023</b></b></span><span style="color: #0000ff;"><b>):</b></span></span>
                                Rice Imported (High Quality): <span style="color: #ff0000;"><b>N1600</b></span>, Rice, Agric
                                (Low Quality): <strong><span style="color: red;">N1500</span></strong>, Rice
                                Local:<strong><span style="color: red;">N1200</span></strong>, Beans (White, Black
                                Eye):<span style="color: #ff0000;"><b>N850</b></span>, Irish Potato (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N1700</b></span>, Tomato Fresh (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N800</b></span>, Onion (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N1200</b></span>, Pepper Fresh (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N1500</b></span>,Maize (White):<span
                                    style="color: #ff0000;"><b>N800</b></span>, Sorghum(White)<span
                                    style="color: #ff0000;"><b>N800</b></span>, Millet(Gero or Maiwa): <strong><span
                                        style="color: red;">N800</span></strong>, <strong><a style="color: #ff0000;"
                                        href="#">Click
                                        for more</a></strong></p>
                        </div>
                    </div>
                    <div class="notice">
                        <div class="notice__container">
                            <p><b>Market Price watch(**/Sold Loose): Jemma&#8217;a </b><span style="color: blue;"><span
                                        style="color: #0000ff;"><b>(<b style="color: #0000ff;">August Second Week
                                                2023</b></b></span><span style="color: #0000ff;"><b>):</b></span></span>
                                Rice Imported (High Quality): <span style="color: #ff0000;"><b>N1500</b></span>, Rice, Agric
                                (Low Quality): <strong><span style="color: red;">N1400</span></strong>, Rice
                                Local:<strong><span style="color: red;">N1300</span></strong>, Beans (White, Black
                                Eye):<span style="color: #ff0000;"><b>N850</b></span>, Irish Potato (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N1700</b></span>, Tomato Fresh (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N1300</b></span>, Onion (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N1500</b></span>, Pepper Fresh (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N1600</b></span>,Maize (White):<span
                                    style="color: #ff0000;"><b>N800</b></span>, Sorghum(White)<span
                                    style="color: #ff0000;"><b>N700</b></span>, Millet(Gero or Maiwa): <strong><span
                                        style="color: red;">N800</span></strong>, <strong><a style="color: #ff0000;"
                                        href="#">Click
                                        for more</a></strong></p>
                        </div>
                    </div>
                    <div class="notice">
                        <div class="notice__container">
                            <p><b>Market Price watch(**/Sold Loose): State Average </b><span style="color: blue;"><span
                                        style="color: #0000ff;"><b>(<b style="color: #0000ff;">August Second Week
                                                2023</b></b></span><span style="color: #0000ff;"><b>):</b></span></span>
                                Rice Imported (High Quality): <span style="color: #ff0000;"><b>N1621.74</b></span>, Rice,
                                Agric (Low Quality): <strong><span style="color: red;">N1478.26</span></strong>, Rice
                                Local:<strong><span style="color: red;">N1197.83</span></strong>, Beans (White, Black
                                Eye):<span style="color: #ff0000;"><b>N834.78</b></span>, Irish Potato (4 Litre
                                Rubber):<span style="color: #ff0000;"><b>N1815.22</b></span>, Tomato Fresh (4 Litre
                                Rubber):<span style="color: #ff0000;"><b>N1032.61</b></span>, Onion (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N1265.22</b></span>, Pepper Fresh (4 Litre Rubber):<span
                                    style="color: #ff0000;"><b>N1750.00</b></span>,Maize (White):<span
                                    style="color: #ff0000;"><b>N745.65</b></span>, Sorghum(White)<span
                                    style="color: #ff0000;"><b>N757.39</b></span>, Millet(Gero or Maiwa): <strong><span
                                        style="color: red;">N760.87</span></strong>, <strong><a style="color: #ff0000;"
                                        href="#">Click
                                        for more</a></strong></p>
                        </div>
                    </div>
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
