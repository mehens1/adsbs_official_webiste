@extends('layouts.app')

@section('content')
<main class="main">

    @include('layouts.secNav')

    <div class="entry-content">
        <embed src="{{ asset('uploads//Org_chart.pdf#page=1') }} " type="application/pdf" width="100%" height="700px" />
    </div>
    
</main>

@endsection

@section('aside')
@include('layouts.aside')
@endsection