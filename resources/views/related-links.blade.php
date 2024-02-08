@extends('layouts.app')

@section('content')
<main class="main">

    @include('layouts.secNav')

    <div class="entry-content">
        <h1>Government</h1>
        <h1>National</h1>
        <ul>
            <li>Federal Ministry of Budget and National Planning</li>
            <li>Federal Ministry of Finance</li>
            <li>Central Bank of Nigeria</li>
            <li>National Bureau of Statistics</li>
            <li>National Population Commission</li>
        </ul>
        <h2>Sub-National</h2>
        <ul>
            <li>Adamawa State Government</li>
            <li>Planning and Budget Commission</li>
            <li>Ministry of Health and Human Services</li>
            <li>Ministry of Finance</li>
            <li>Office of The Surveyour General Adamawa State</li>
        </ul>
    </div>

</main>

@endsection

@section('aside')
@include('layouts.aside')
@endsection