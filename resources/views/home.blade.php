@extends('layouts.app')

@section('content')
    <!-- Carousel -->
    <section class="section section--carousel section--carousel-homepage">
        <div class="section__container">
            <div class="section__content">
                <div class="carousel">

                    @foreach ($informationGallary as $infoGal)
                    <div class="carousel__slide">
                        <div class="slide__container">
                            <div class="slide__image" style="background-image: url('uploads/information_gallery/placeholders/{{ $infoGal['placeholder_image'] }}');">
                            </div>
                            <div class="slide__content">
                                <p>{!! $infoGal['text'] !!}</p>

                                @if ($infoGal['document'])
                                <p><a href="uploads/information_gallery/documents/{{ $infoGal['document'] }}"><strong>Read More &gt;&gt;&gt;</strong></a></p>
                                @endif

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <div class="section section--statistics">
        <div class="section__container">
            <div class="section__content">
                <!-- Tabs -->
                <section class="section section--tabs">
                    <div class="tabs__container">
                        <h3>Request for Statistical Data</h3>
                        <div class="tabs__content">
                            <div class="tabs">
                                @foreach ($tabLabels as $tabLabel)
                                <div class="tab__label">
                                    <h4>{{ $tabLabel }}</h4>
                                </div>
                                @endforeach

                            </div>

                            <div class="tabs__text">
                                @foreach ($tabTexts as $tabText)
                                <div class="tab__text">

                                    <p>{!! $tabText !!}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="upcoming-events">
                        <div class="upcoming-events__container">
                            <h3>Upcoming events</h3>
                            <div class="upcoming-events__content">
                                <div class="upcoming-event">
                                    <a href="#" class="a--cover"></a>
                                    <h4>Weekly Retail Market Prices</h4>
                                    <h5>August 23 @ 8:00 am</h5>
                                    <p>
                                    <p>Retail Market Prices of selected items produced</p>
                                    </p>
                                </div>
                                <div class="upcoming-event">
                                    <a href="#" class="a--cover"></a>
                                    <h4>Weekly Retail Market Prices</h4>
                                    <h5>August 30 @ 8:00 am</h5>
                                    <p>
                                    <p>Retail Market Prices of selected items produced</p>
                                    </p>
                                </div>
                                <a href="#">View all events</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Charts -->
                <section class="section section--charts-accordion">
                    <div class="charts__container">
                        <h3>Key Statistics</h3>
                        <div class="charts__content">
                            <div class="charts">
                                <div class="chart">
                                    <div class="chart__title">
                                        <h4>Projected Population</h4>
                                    </div>
                                    <div class="chart__chart">
                                        <canvas id="populationChart"></canvas>
                                    </div>
                                </div>

                                <div class="chart">
                                    <div class="chart__title">
                                        <h4>Health</h4>
                                    </div>
                                    <div class="chart__chart">
                                        <canvas id="healthChart"></canvas>
                                    </div>
                                </div>
                                <div class="chart">
                                    <div class="chart__title">
                                        <h4>Economy</h4>
                                    </div>
                                    <div class="chart__chart">
                                        <canvas id="economyChart"></canvas>
                                    </div>
                                </div>
                                <div class="chart">
                                    <div class="chart__title">
                                        <h4>Agriculture</h4>
                                    </div>

                                    <div class="chart__chart">
                                        <canvas id="agricultureChart"></canvas>
                                    </div>
                                </div>
                                <div class="chart">
                                    <div class="chart__title">
                                        <h4>Education</h4>
                                    </div>
                                    <div class="chart__chart">
                                        <script type="text/javascript">
                                        if (typeof(wpDataCharts) == 'undefined') {
                                            wpDataCharts = {};
                                        };
                                        wpDataCharts[7] = {
                                            render_data: {
                                                "options": {
                                                    "data": {
                                                        "labels": ["Public Pre-Primary",
                                                            "Public Primary",
                                                            "Public Junior Secondary",
                                                            "Public Senior Secondary",
                                                            "Public - Junior Science & Tech",
                                                            "Public - Senior Science & Tech"
                                                        ],
                                                        "datasets": [{
                                                            "label": "Male Enrolment",
                                                            "orig_header": "Male Enrolment",
                                                            "backgroundColor": "rgba(255,99,132,0.2)",
                                                            "borderColor": "#ff6384",
                                                            "borderWidth": 1,
                                                            "data": [135814, 801910, 174173,
                                                                75032, 2870, 5583
                                                            ],
                                                            "lineTension": 0
                                                        }, {
                                                            "label": "Female Enrolment",
                                                            "orig_header": "Female Enrolment",
                                                            "backgroundColor": "rgba(54,162,235,0.2)",
                                                            "borderColor": "#36a2eb",
                                                            "borderWidth": 1,
                                                            "data": [127825, 734134, 142839,
                                                                59964, 970, 2423
                                                            ],
                                                            "lineTension": 0
                                                        }, {
                                                            "label": "Total Enrolmemt",
                                                            "orig_header": "Total Enrolmemt",
                                                            "backgroundColor": "rgba(255,206,86,0.2)",
                                                            "borderColor": "#ffce56",
                                                            "borderWidth": 1,
                                                            "data": [263639, 1536044, 317012,
                                                                134996, 3840, 8006
                                                            ],
                                                            "lineTension": 0
                                                        }]
                                                    },
                                                    "options": {
                                                        "maintainAspectRatio": true,
                                                        "scales": {
                                                            "xAxes": [{
                                                                "scaleLabel": {
                                                                    "display": true,
                                                                    "labelString": ""
                                                                }
                                                            }],
                                                            "yAxes": [{
                                                                "scaleLabel": {
                                                                    "display": true,
                                                                    "labelString": ""
                                                                },
                                                                "ticks": {
                                                                    "beginAtZero": true,
                                                                    "min": 0
                                                                }
                                                            }]
                                                        },
                                                        "title": {
                                                            "display": true,
                                                            "text": "Education_Key_Statistics",
                                                            "position": "top",
                                                            "fontFamily": "Arial",
                                                            "fontStyle": "bold",
                                                            "fontColor": "#666"
                                                        },
                                                        "tooltips": {
                                                            "enabled": true,
                                                            "mode": "single",
                                                            "backgroundColor": "rgb(0,0,0)",
                                                            "cornerRadius": 3
                                                        },
                                                        "legend": {
                                                            "display": true,
                                                            "position": "top"
                                                        }
                                                    },
                                                    "globalOptions": {
                                                        "defaultFontSize": "",
                                                        "defaultFontFamily": "Arial",
                                                        "defaultFontStyle": "bold",
                                                        "defaultFontColor": ""
                                                    }
                                                },
                                                "configurations": {
                                                    "type": "chartjs_column_chart",
                                                    "container": {
                                                        "height": "400",
                                                        "width": 0
                                                    },
                                                    "canvas": {
                                                        "backgroundColor": "",
                                                        "borderWidth": "NaN",
                                                        "borderColor": "",
                                                        "borderRadius": ""
                                                    }
                                                }
                                            },
                                            engine: "chartjs",
                                            type: "chartjs_column_chart",
                                            title: "Education_Key_Statistics",
                                            container: "wpDataChart_7",
                                            follow_filtering: 0,
                                            wpdatatable_id: 7,
                                            group_chart: 0
                                        }
                                        </script>

                                        <div id="chartJSContainer_7">
                                            <canvas id="chartJSCanvas_7"></canvas>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="section__content"></div>
        </div>
    </div>
@endsection

@section('aside')
    @include('layouts.aside')
@endsection

@section('pageJs')
    <script>


        // Agriculture Chart
        var agricChartSec = document.getElementById('agricultureChart').getContext('2d');
        var chartData = {
            labels: ['Male', 'Female'],
            datasets: [{
                label: 'Gender Distribution',
                data: [23423, 5452345], // Adjust the data for 'Male' and 'Female'
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        };

        var chartOptions = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

    // Create the modified column chart
    var myColumnChart = new Chart(agricChartSec, {
        type: 'bar',
        data: chartData,
        options: chartOptions
    });
    </script>

@endsection
