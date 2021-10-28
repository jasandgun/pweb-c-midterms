<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- page title --}}
<title>@yield('title')</title>

<!-- <link rel="manifest" href="site.webmanifest"> -->

{{-- <link rel="shortcut icon" href="{{ asset('web_asset') }}/img/favicon.png"> --}}
<link rel="icon" href="favicon.png">
<!-- Place favicon.ico in the root directory -->

<!-- CSS here -->
<link rel="stylesheet" href="{{ asset('web_asset') }}/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('web_asset') }}/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{ asset('web_asset') }}/css/magnific-popup.css">
<link rel="stylesheet" href="{{ asset('web_asset') }}/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('web_asset') }}/css/themify-icons.css">
<link rel="stylesheet" href="{{ asset('web_asset') }}/css/nice-select.css">
<link rel="stylesheet" href="{{ asset('web_asset') }}/css/flaticon.css">
<link rel="stylesheet" href="{{ asset('web_asset') }}/css/gijgo.css">
<link rel="stylesheet" href="{{ asset('web_asset') }}/css/animate.min.css">
<link rel="stylesheet" href="{{ asset('web_asset') }}/css/slicknav.css">

<link rel="stylesheet" href="{{ asset('web_asset') }}/css/style.css">
<!-- <link rel="stylesheet" href="css/responsive.css"> -->

{{-- own's page scripts/stylesheets --}}
@yield('stylesheets')