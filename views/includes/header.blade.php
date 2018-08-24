<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <title> {{ $page_details['name'] }} | {{ config('app.name') }}</title>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123762440-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-123762440-1');
    </script>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
     (adsbygoogle = window.adsbygoogle || []).push({
       google_ad_client: "ca-pub-8933541584844926",
       enable_page_level_ads: true
     });
    </script>
    <!-- Non Global site tag -->

    <link rel="stylesheet" href="{{ asset('app/app.bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('app/update.css') }}">
    <script type="text/javascript" src="{{ asset('app/app.bundle.js') }}"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript">
        setInterval(function(){
            window.location.reload();
        }, 90000);
    </script>    
    <style>
        .tabs .tab a{
            padding: 0 5px !important;
        }
    </style>

</head>
<body class="primary">

    <!-- Navigation -->
    <nav class="z-depth-0">
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo left"><img src="{{ asset('images/goalnownow-logo.png') }}" width="200" alt="{{ config('app.name') }}"></a>
            <a href="#" data-target="slide-out" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li class="no-margin"><a href="/">Soccer</a></li>
                <li class="no-margin"><a href="#!/worldcup/">WorldCup</a></li>
                <li class="no-margin"><a href="#!">About</a></li>
                <li class="no-margin"><a href=#!">Advertise</a></li>
                <!-- <li class="no-margin"><a class="waves-effect waves-dark btn white">Log in</a></li> -->
                <li class="no-margin"><a href="#!" class="waves-effect waves-light btn">Contact</a></li>
            </ul>
        </div>
    </nav>
    <hr color="#ffd918" style="height: 2px;">
    <!--// End Navigation //-->

    <!-- Side Navigation -->
    <ul id="slide-out" class="sidenav primary">
        <!-- logo -->
        <li class="logo">
            <a href="/">
                <img src="{{ asset('images/goalnownow-logo.png') }}" style="width: 100%; margin-top: 10px;" alt="{{ config('app.name') }}">
            </a>
        </li>

        <hr color="#ffd918" style="height: 2px;">
        <!--// end logo //-->
        <!-- <li><a href="#!" class="waves-effect waves-dark btn white">Log in</a></li> -->
        <!-- <li><a href="#!" class="waves-effect waves-light btn secondary">Sign up</a></li> -->
        <li><a href="/"><i class="material-icons secondar-text">home</i>Home</a></li>
        <li><a href="/"><i class="material-icons secondar-text">video_library</i>Live</a></li>
        <!-- Collapsible Section -->
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                
                <!-- top leagues section -->
                <li class="bold active">
                    <a class="collapsible-header secondary-text">Current Leagues</a>
                    <div class="collapsible-body primary">
                        <ul>
                            <?php $leagues = DB::table('leagues')->where('status', '1')->orderBy('sort_order', 'asc')->get(); ?>
                            @foreach ($leagues as $league)
                                <li>
                                    <a href="#!/leagues/{{$league->spm_id}}">{{ $league->name }}</a>
                                </li>
                            @endforeach
                            <!-- <li><a class="secondary-text" href="/leagues/"><strong>View More</strong></a></li> -->
                        </ul>
                    </div>
                </li>
                <!-- //end top leagues seciton //-->

                
                <!-- Countries section -->
                <li class="bold active">
                    <a class="collapsible-header secondary-text">Countries</a>
                    <div class="collapsible-body primary">
                        <ul>
                            <?php $countries = DB::table('countries')->where('status', '1')->orderBy('sort_order', 'asc')->get(); ?>
                            @foreach ($countries as $country)
                                <li>
                                    <a href="#!/countries/{{$country->spm_id}}">{{ $country->name }} </a>
                                </li>
                            @endforeach
                            <!-- <li><a class="secondary-text" href="/countries/"><strong>View More</strong></a></li> -->
                        </ul>
                    </div>
                </li>
                <!--// end countries section // --->

                


                <!-- Countries -->


            </ul>
        </li>
        <!--// End Collapsible Section //-->
    </ul>
    <!--// End Side Navigation //-->
