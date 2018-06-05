<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- <title>County Government of Kisumu</title> -->
	  <title>Afyapepe- @yield('title') </title>
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

    @yield('content')

    @include('include.footer')

  </div>
  <script src="{{ asset('js/lib/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.matchHeight.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.flexslider.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>


</body>
</html>
