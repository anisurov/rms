<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>@yield('title')|EkhuniChai Online Food ordering &amp; Resturent reservstion website </title>
    
    <meta name="description" content="" />
	<meta name="author" content="Dhrubo" />
    

	<!--**CSS user Modal**-->
       <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
      <!-- <link rel="stylesheet" href="css/resetem.css"> <!-- CSS reset -->
       <link rel="stylesheet" href="{{ asset('css/user.modal.css')}}"> <!-- Gem style -->

    
    <!-- **CSS - stylesheets** -->
    <link  href="{{asset('css/app.css')}}" rel="stylesheet" media="all" />
    <link id="default-css" href="{{asset('style.css')}}" rel="stylesheet" media="all" />
    <link id="shortcodes-css" href="{{ asset('css/shortcodes.css')}}" rel="stylesheet" media="all" />    
    <link id="skin-css" href="{{ asset('skins/palebrown/style.css')}}" rel="stylesheet" media="all" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
    
    <link href="{{ asset('css/responsive.css')}}" rel="stylesheet" media="all" />
    <link href="{{ asset('css/superfish.css')}}" rel="stylesheet" media="all" />
    <link href="{{ asset('css/slicknav.css')}}" rel="stylesheet" media="all" />
    
    <!-- **Font Awesome** -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" />
    
    <!-- **Google - Fonts** 
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Norican' rel='stylesheet' type='text/css'> -->
    
    <!-- SLIDER STYLES STARTS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('js/revolution/settings.css')}}" media="screen" />
    <!-- SLIDER STYLES ENDS -->
    
    <script src="{{ asset('js/modernizr-2.6.2.min.js')}}"></script>
</head>
