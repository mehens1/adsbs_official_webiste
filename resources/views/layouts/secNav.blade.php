<section class="section section--navigation">
    <div class="section__container">
        <div class="section__content">
            <div class="navigation__breadcrumbs">
                
                <strong>Navigation: </strong>

                <ul class="breadcrumbs">
                    @if ( isset($domain))
                        <li><a href="{{ route($page_class) }}">{{ ucfirst($page_class) }}</a><i class="fa fa-caret-right"></i>
                        <li>{{ucfirst($domain) }}</li>
                    @else
                        <li>{{ $page_title }}</li>
                    @endif
                    
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="page-header">
@if ( isset($domain) )
    <h1>{{ucfirst($domain) }}</h1>
@else
    <h1>{{ $page_title }}</h1>
@endif
</div>