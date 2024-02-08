<ul id="menu-main-menu" class="nav">
    <li class="@if ($page_class == 'home') active @endif menu-item menu-home"><a href="{{ route('home') }}">Home</a>
    </li>
    <li class="@if ($page_class == 'blog') active @endif menu-item menu-news"><a href="{{ route('news') }}">News</a>
    </li>
    <li
        class="@if ($page_class == 'publications') active @endif archive post-type-archive post-type-archive-publication tribe-no-js sidebar-primary menu-item menu-item-has-children menu-publications">
        <a href="{{ route('publications') }}">Publications</a>
        <ul class="sub-menu">
            <li class="menu-item menu-statistical-publications"><a href="#">Statistical Publications</a>
            </li>
            <li class="menu-item menu-internal-publications"><a href="#">Internal Publications</a></li>
            <li class="menu-item menu-e-library"><a href="#">E-Library</a></li>
        </ul>
    </li>
    <li class="@if ($page_class == 'domains') active @endif menu-item menu-item-has-children menu-domains"><a
            href="{{ route('domains') }}">Domains</a>
        <ul class="sub-menu">
            <li class="menu-item menu-demography"><a href="{{ route('domainSubpages', 'demography') }}">Demography</a>
            </li>
            <li class="menu-item menu-health"><a href="{{ route('domainSubpages', 'health') }}">Health</a></li>
            <li class="menu-item menu-education"><a href="{{ route('domainSubpages', 'education') }}">Education</a></li>
            <li class="menu-item menu-economy"><a href="{{ route('domainSubpages', 'economy') }}">Economy</a></li>
            <li class="menu-item menu-agriculture"><a
                    href="{{ route('domainSubpages', 'agriculture') }}">Agriculture</a></li>
            <li class="menu-item menu-transport"><a href="{{ route('domainSubpages', 'transport') }}">Transport</a></li>
            <li class="menu-item menu-foreign-trade"><a href="{{ route('domainSubpages', 'foreign-trade') }}">Foreign
                    Trade</a></li>
            <li class="menu-item menu-tourism"><a href="{{ route('domainSubpages', 'tourism') }}">Tourism</a></li>
        </ul>
    </li>
    <li class="@if ($page_class == 'platforms') active @endif menu-item menu-item-has-children menu-platforms"><a
            href="#">Platforms</a>
        <ul class="sub-menu">
            <li class="menu-item menu-health-facility-analytics"><a href="#">Health Facility
                    Analytics</a></li>
            <li class="menu-item menu-iss-platform-for-health"><a href="#">ISS Platform for Health</a>
            </li>
            <li class="menu-item menu-general-household-survey"><a href="#">General Household Survey</a>
            </li>
        </ul>
    </li>
    <li class="menu-item menu-infographics"><a href="#">Infographics</a></li>
    <li class="@if ($page_class == 'about') active @endif menu-item menu-item-has-children menu-about-us"><a
            href="#">About Us</a>
        <ul class="sub-menu">
            <li class="menu-item menu-about-us"><a href="{{ route('about') }}">About Us</a></li>
            <li class="menu-item menu-sgs-message"><a href="{{ route('sgsMessage') }}">SGs Message</a></li>
            <li class="menu-item menu-organizational-chart"><a href="{{ route('organizationalChart') }}">Organizational
                    Chart</a></li>
            <li class="menu-item menu-corporate-plan"><a href="#">Corporate Plan</a></li>
        </ul>
    </li>
    <li class="@if ($page_class == 'contact') active @endif menu-item menu-contact-us"><a
            href="{{ route('contact') }}">Contact Us</a></li>
    <li class="cta menu-item menu-ghs-report"><a href="#">GHS Report</a></li>
</ul>
