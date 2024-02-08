@extends('layouts.app')

@section('content')
    <article class="post-3911 post type-post status-publish format-standard hentry category-uncategorized">
        <header>
            <h1 class="entry-title">{{ $pub['title'] }}</h1>
            <time class="updated" datetime="{{ $pub['created_at'] }}">{{ $pub['created_at'] }}</time>
            <p class="byline author vcard">By <a href="https://kdbs.ng/author/nass007gmail-com/" rel="author"
                    class="fn">{{ $author->first_name }}</a></p>
        </header>
        <div class="entry-content">
            <h2><span style="color: #008000;"><strong>Executive Summary</strong></span></h2>
            {{ $pub['description'] }}
            <br>
            <br>
                <a style="background-color: #ffffff;" href="{{ asset($pub['document_path']) }}">
                    Read More
                </a>
            </p>
        </div>
        <footer>
        </footer>
    </article>
@endsection

@section('aside')
    @include('layouts.aside')
@endsection
