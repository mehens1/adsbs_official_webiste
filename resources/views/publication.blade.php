@extends('layouts.app')

@section('content')
<main class="main">

    <section class="section--publications">
        <div class="section__container">
            <div class="date-filter">
                <div class="date-filter__container">
                    <form action="" method="get">
                        <div>
                            <p><strong>Filters: </strong></p>
                        </div>

                        <div class="filter filter--month">
                            <select name="publication_month" id="publication_month">
                                <option value="" selected disabled>&ndash; Select month &ndash;</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>

                        <div class="filter filter--year">
                            <select name="publication_year" id="publication_year">
                                <option value="" selected disabled>&ndash; Select year &ndash;</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                            </select>
                        </div>

                        <div>
                            <button type="submit"><i class="fa fa-filter"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="publications">
                <table>
                    <thead>
                        <tr>
                            <th>Publication</th>
                            <th>Publication date</th>
                            <th>Type of document</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($publications as $publication)
                            <tr>
                                <td><a href="{{ route('publicationSubpage', strtolower($publication['title'])) }}">{{ $publication['title'] }}</a></td>
                                <td>{{ \Carbon\Carbon::parse($publication['created_at'])->format('jS F Y') }}</td>
                                <!-- <td>{{ $publication['created_at'] }}</td> -->
                                <td>
                                    @foreach ($publication->tags()->get() as $tag)
                                        
                                        {{ $tag->tag !== $publication->tags()->first()->tag ? ',' : '' }}
                                        <a href="{{ route('domainSubpages', strtolower($tag->tag)) }}">{{ $tag->tag }}</a>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="pagination">
                <span aria-current='page' class='page-numbers current'>1</span>
                <a class="next page-numbers" href="/publications/page/2/"><i class="fa fa-caret-right"></i></a>
            </div>
        </div>
    </section>

</main>

@endsection

@section('aside')
@include('layouts.aside')
@endsection