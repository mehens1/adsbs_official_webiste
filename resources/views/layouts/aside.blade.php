<aside class="sidebar">
    <section class="widget nav_menu-4 widget_nav_menu">
        <h3>Domains</h3>
        <ul id="menu-domains" class="menu">
            <li class="menu-item menu-demography"><a href="{{ route('domainSubpages', 'demography') }}">Demography</a></li>
            <li class="menu-item menu-health"><a href="{{ route('domainSubpages', 'health') }}">Health</a></li>
            <li class="menu-item menu-education"><a href="{{ route('domainSubpages', 'education') }}">Education</a></li>
            <li class="menu-item menu-agriculture"><a href="{{ route('domainSubpages', 'agriculture') }}">Agriculture</a></li>
            <li class="menu-item menu-economy"><a href="{{ route('domainSubpages', 'economy') }}">Economy</a></li>
            <li class="menu-item menu-foreign-trade"><a href="{{ route('domainSubpages', 'foreign-trade') }}">Foreign Trade</a></li>
            <li class="menu-item menu-tourism"><a href="{{ route('domainSubpages', 'tourism') }}">Tourism</a></li>
            <li class="menu-item menu-transport"><a href="{{ route('domainSubpages', 'transport') }}">Transport</a></li>
        </ul>
    </section>
    <section class="widget recent-posts-2 widget_recent_entries">
        <h3>Publications</h3>
        <ul>
            @foreach ($publications as $publication)
                <li>
                    <a href="#">{{ $publication['title'] }}</a>
                    <span class="post-date">{{ \Carbon\Carbon::parse($publication['created_at'])->format('jS F Y') }}</span>
                </li>
            @endforeach
            
        </ul>
    </section>
</aside>