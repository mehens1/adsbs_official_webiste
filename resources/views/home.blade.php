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
                                <div class="slide__image"
                                    style="background-image: url('uploads/information_gallery/placeholders/{{ $infoGal['placeholder_image'] }}');">
                                </div>
                                <div class="slide__content">
                                    <p>{!! $infoGal['text'] !!}</p>

                                    @if ($infoGal['document'])
                                        <p><a href="uploads/information_gallery/documents/{{ $infoGal['document'] }}"><strong>Read
                                                    More &gt;&gt;&gt;</strong></a></p>
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
                                        <div id = "healthChart" style = "width: 100%; height: 100%; margin: 0 auto"></div>
                                    </div>
                                </div>
                                <div class="chart">
                                    <div class="chart__title">
                                        <h4>Economy</h4>
                                    </div>
                                    <div class="chart__chart">
                                        <div id = "economyChart" style = "width: 100%; height: 100%; margin: 0 auto"></div>
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
                                        <div id="educationChart" style="width: 100%; height: 100%; margin: 0 auto"></div>
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
    {{-- // Population Chart --}}
    <script>
        var populationStat = {!! json_encode($populationStat) !!};

        // Extract labels from populationStat variable
        var populationLabels = populationStat.map(function(item) {
            return item.label;
        });
        var populationValues = populationStat.map(function(item) {
            return item.value;
        });

        var populationChartSec = document.getElementById('populationChart').getContext('2d');
        var chartData = {
            labels: populationLabels,
            datasets: [{
                label: 'People',
                data: populationValues, // Adjust the data for 'Male' and 'Female'
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

        var populationChartOptions = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        // Create the modified column chart
        var populationChart = new Chart(populationChartSec, {
            type: 'bar',
            data: chartData,
            options: populationChartOptions
        });
    </script>

    {{-- // Health Chart --}}
    <script>
        var healthStat = {!! json_encode($healthStat) !!};

        // Extract labels from populationStat variable
        var healthLabels = healthStat.map(function(item) {
            return item.label;
        });
        var healthHomeValues = healthStat.map(function(item) {
            return item.home_value;
        });
        var healthAssistedValues = healthStat.map(function(item) {
            return item.assisted_value;
        });

            var chart = {
               type: 'spline'
            };
            var title = {
               text: 'Birth : Assisted vs Home Delivery'
            };
            var subtitle = {
               text: 'Source: ADSBS'
            };
            var xAxis = {
               categories: healthLabels
            };
            var yAxis = {
               title: {
                  text: '% of Delivery'
               },
               labels: {
                  formatter: function () {
                     return this.value + '%';
                  }
               },
               lineWidth: 2
            };
            var tooltip = {
               crosshairs: true,
               shared: true
            };
            var plotOptions = {
               spline: {
                  marker: {
                     radius: 4,
                     lineColor: '#666666',
                     lineWidth: 1
                  }
               }
            };
            var series = [
               {
                  name: 'Assited',
                  marker: {
                     symbol: 'square'
                  },
                  data: healthAssistedValues
               },
               {
                  name: 'Home Delivery',
                  marker: {
                     symbol: 'diamond'
                  },
                  data: healthHomeValues
               }
            ];

            var json = {};
            json.chart = chart;
            json.title = title;
            json.subtitle = subtitle;
            json.tooltip = tooltip;
            json.xAxis = xAxis;
            json.yAxis = yAxis;
            json.series = series;
            json.plotOptions = plotOptions;
            $('#healthChart').highcharts(json);

    </script>

    {{-- // Economy Chart --}}
    <script language = "JavaScript">

        var economyStat = {!! json_encode($economyStat) !!};

        // Extract labels from populationStat variable
        var economyLabels = economyStat.map(function(item) {
            return [item.label, item.value];
        });
        // var economyValues = economyStat.map(function(item) {
        //     return item.value;
        // });
        // var healthAssistedValues = economyStat.map(function(item) {
        //     return item.assisted_value;
        // });


           var chart = {
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false
           };
           var title = {
              text: 'GDP(%)'
           };
           var tooltip = {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
           };
           var plotOptions = {
              pie: {
                 allowPointSelect: true,
                 cursor: 'pointer',

                 dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}%</b>: {point.percentage:.1f} %',
                    style: {
                       color: (Highcharts.theme && Highcharts.theme.contrastTextColor)||
                       'black'
                    }
                 }
              }
           };
           var series = [{
              type: 'pie',
              name: 'Browser share',
              data: economyLabels
           }];
           var json = {};
           json.chart = chart;
           json.title = title;
           json.tooltip = tooltip;
           json.series = series;
           json.plotOptions = plotOptions;
           $('#economyChart').highcharts(json);

    </script>

    {{-- // Agriculture Chart --}}
    {{-- <script language = "JavaScript">

        var agricStat = {!! json_encode($agricStat) !!};

        // Extract labels from populationStat variable
        var economyLabels = agricStat.map(function(item) {
            return [item.label, item.value];
        });
        // var economyValues = economyStat.map(function(item) {
        //     return item.value;
        // });
        // var healthAssistedValues = economyStat.map(function(item) {
        //     return item.assisted_value;
        // });


           var chart = {
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false
           };
           var title = {
              text: 'GDP(%)'
           };
           var tooltip = {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
           };
           var plotOptions = {
              pie: {
                 allowPointSelect: true,
                 cursor: 'pointer',

                 dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}%</b>: {point.percentage:.1f} %',
                    style: {
                       color: (Highcharts.theme && Highcharts.theme.contrastTextColor)||
                       'black'
                    }
                 }
              }
           };
           var series = [{
              type: 'pie',
              name: 'Browser share',
              data: economyLabels
           }];
           var json = {};
           json.chart = chart;
           json.title = title;
           json.tooltip = tooltip;
           json.series = series;
           json.plotOptions = plotOptions;
           $('#economyChart').highcharts(json);

    </script> --}}

    {{-- // Education Chart --}}
    <script language = "JavaScript">

        var educationStat = {!! json_encode($educationStat) !!};

        // Extract labels from populationStat variable
        var educationLabels = educationStat.map(function(item) {
            return item.label;
        });
        var educationMaleValues = educationStat.map(function(item) {
            return item.male;
        });
        var educationFemaleValues = educationStat.map(function(item) {
            return item.female;
        });

        var educationTotalValues = educationStat.map(function(item) {
        var total = item.male + item.female;
            return total;
        });

        var chart = {
            type: 'column'
        };
        var title = {
            text: 'Education Key Statistics'
        };
        var subtitle = {
            text: 'Source: ADSBS, Yola'
        };
        var xAxis = {
            categories: educationLabels,
            crosshair: true
        };
        var yAxis = {
            min: 0,
            title: {
                text: 'Rainfall (mm)'
            }
        };
        var tooltip = {
            headerFormat: '<span style = "font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style = "color:{series.color};padding:0">{series.name}: </td>' +
                '<td style = "padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        };
        var plotOptions = {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        };
        var credits = {
            enabled: false
        };
        var series= [
            {
                name: 'Male',
                data: educationMaleValues
            },
            {
                name: 'Female',
                data: educationFemaleValues
            },
            {
                name: 'Total',
                data: educationTotalValues
            }
        ];

        var json = {};
        json.chart = chart;
        json.title = title;
        json.subtitle = subtitle;
        json.tooltip = tooltip;
        json.xAxis = xAxis;
        json.yAxis = yAxis;
        json.series = series;
        json.plotOptions = plotOptions;
        json.credits = credits;
        $('#educationChart').highcharts(json);

    </script>
@endsection
