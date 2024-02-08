@extends('layouts.app')

@section('content')
<div class="wrap container" role="document">
    <div class="content row">
        <main class="main">
            <div class="page-header">
                <h1>{{ $page_title }}</h1>
            </div>

            @foreach ($paginatedNews as $news)
                <article class="post-3448 post type-post status-publish format-standard hentry category-uncategorized">
                    <header>
                        <h2 class="entry-title">
                            <a href="#">{{ $news['title'] }}</a>
                        </h2>
                        <time class="updated" datetime="{{ $news['created_at'] }}">{{ $news['created_at'] }}</time>
                        <p class="byline author vcard">
                            By
                            <a href="#" rel="author" class="fn">ADSBS</a>
                        </p>
                    </header>
                    <div class="entry-summary"></div>
                </article>

                @endforeach

                <div class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginatedNews->onFirstPage())
                        <span aria-disabled="true" aria-label="@lang('pagination.previous')" class="prev page-numbers" disabled><i class="fa fa-caret-left"></i></span>
                    @else
                        <a class="prev page-numbers" href="{{ $paginatedNews->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fa fa-caret-left"></i></a>
                    @endif

                    {{-- Pagination Elements --}}
                    @for ($page = 1; $page <= $paginatedNews->lastPage(); $page++)
                        @if ($page == $paginatedNews->currentPage())
                            <span aria-current="page" class="page-numbers current">{{ $page }}</span>
                        @else
                            <a class="page-numbers" href="{{ $paginatedNews->url($page) }}">{{ $page }}</a>
                        @endif
                    @endfor

                    {{-- Next Page Link --}}
                    @if ($paginatedNews->hasMorePages())
                        <a class="next page-numbers" href="{{ $paginatedNews->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fa fa-caret-right"></i></a>
                    @else
                        <span aria-disabled="true" aria-label="@lang('pagination.next')" class="next page-numbers" disabled><i class="fa fa-caret-right"></i></span>
                    @endif
                </div>


        </main>
        <!-- /.main -->
    </div>
    <!-- /.content -->
</div>
@endsection

@section('aside')
    @include('layouts.aside')
@endsection