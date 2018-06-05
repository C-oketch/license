<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- <title>County Government of Kisumu</title> -->
	  <title>CGK- @yield('title') </title>
	<link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<script src="{{ asset('js/lib/modernizr-2.7.2.js') }}" type="text/javascript"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/easy-responsive-tabs.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

	<!--[if lte IE 8]>
		<link rel="stylesheet" href="css/ie8.css">
	<![endif]-->
</head>

<body>
    <!--[if lte IE 8]>
        <div id="banner">
            <div class="row">
                <p>Our system is designed to use the most up-to-date modern web standards please <a href="https://www.google.com/chrome/browser/desktop/" target="_blank">Download</a> the latest brownser <a href="https://www.google.com/chrome/browser/desktop/" target="_blank">here</a></p>
            </div>
        </div>
    <![endif]-->
    <div class="wrapper banner">
  @include('include.user_headmenu')
	<div class="content dashboard">
		<div class="row clearfix">
			  @include('include.user_left')
    @yield('content')
	  </div>
	</div>

    @include('include.footer')

  </div>
  <script src="{{ asset('js/lib/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.matchHeight.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.flexslider.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/highcharts.js') }}" type="text/javascript"></script>

	<script type="text/javascript">
				Highcharts.chart('container', {
				    chart: {
				        type: 'line'
				    },
				    title: {
				        text: 'Money In Money Out'
				    },
				    // subtitle: {
				    //     text: 'Source: WorldClimate.com'
				    // },
				    xAxis: {
				        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
				    },
						yAxis: {
								title: {
										text: ''
								},
								labels: {
										formatter: function () {
												return this.value / 1000 + 'k';
										}
								}
						},
				    // plotOptions: {
				    //     line: {
				    //         dataLabels: {
				    //             enabled: true
				    //         },
				    //         enableMouseTracking: false
				    //     }
				    // },
						series: [{
								name: 'Money In',
								data: [7000, 6900, 9500, 14500, 18400, 21500, 25200, 26500, 23300, 18300, 13900, 9600]
						}, {
								name: 'Money Out',
								data: [3900, 4200, 5700, 8500, 11900, 15200, 17000, 16600, 14200, 10300, 6600, 4800]
						}]
				});

				Highcharts.chart('bar', {
				    chart: {
				        type: 'column'
				    },
				    title: {
				        text: ''
				    },

				    xAxis: {
				        categories: [
				            'Mon',
				            'Tue',
				            'Wed',
				            'Thu',
				            'Fri',
				            'Sat',
				            'Sun'
				        ],
				        crosshair: true
				    },
				    // yAxis: {
				    //     min: 0,
				    //     title: {
				    //         text: ''
				    //     }
				    // },
						yAxis: {
								min: 0,
								title: {
										text: ''
								},
								labels: {
										formatter: function () {
												return this.value / 10000 + 'k';
										}
								}
						},
				    tooltip: {
				        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
				        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
				            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
				        footerFormat: '</table>',
				        shared: true,
				        useHTML: true
				    },
				    plotOptions: {
				        column: {
				            pointPadding: 0.2,
				            borderWidth: 0
				        }
				    },
				    series: [{
				        name: 'Agent Deposit',
				        data: [49900, 71500, 10640, 12920, 14400, 17600, 13560]

				    }, {
				        name: 'Agent Widthrawal',
				        data: [8360, 7880, 9850, 9340, 10600, 8450, 10500]
				    }]
				});
			</script>
</body>
</html>
