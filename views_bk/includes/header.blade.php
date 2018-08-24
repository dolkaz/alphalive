<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <title> {{ $page_details['name'] }} | {{ config('app.name') }}</title>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('app/app.bundle.css') }}">
    <script type="text/javascript" src="{{ asset('app/app.bundle.js') }}"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="primary">

    <!-- Navigation -->
    <nav class="z-depth-0">
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo left"><img src="{{ asset('images/goalnownow-logo.png') }}" width="280" alt="{{ config('app.name') }}"></a>
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
                <img src="{{ asset('images/goalnownow-logo.png') }}" style="width: 100%;" alt="{{ config('app.name') }}">
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

                <li class="bold active hide">
                    <a class="collapsible-header secondary-text">Cups</a>
                    <div class="collapsible-body primary">
                        <ul>
                            <li><a href="#!">World Cup</a></li>
                            <li><a href="#!">UEFA Champions League</a></li>
                            <li><a href="#!">Europa League</a></li>
                            <li><a href="#!">Confed. Cup</a></li>
                            <li><a href="#!">Cup of Nations</a></li>
                            <li><a href="#!">Euro 2016</a></li>
                            <li><a href="#!">Copa America</a></li>
                            <li><a href="#!">International</a></li>
                        </ul>
                    </div>
                </li>

                
                <!-- top leagues section -->
                <li class="bold active">
                    <a class="collapsible-header secondary-text">Current Leagues</a>
                    <div class="collapsible-body">
                        <ul>
                            @foreach (array_slice(SoccerAPI::leagues()->setInclude('country')->all(), 0, 15) as $league)
                                <li>
                                    <a href="#!/leagues/{{$league->id}}">{{ $league->name }}<!--  - <strong> {{ $league->country->data->name }} </strong> --></a>
                                </li>
                            @endforeach
                            <li><a class="secondary-text" href="/leagues/"><strong>View More</strong></a></li>
                        </ul>
                    </div>
                </li>
                <!-- //end top leagues seciton //-->

                
                <!-- Countries section -->
                <li class="bold active">
                    <a class="collapsible-header secondary-text">Countries</a>
                    <div class="collapsible-body">
                        <ul>
                            @foreach (array_slice(SoccerAPI::countries()->all(), 0, 15) as $country)
                                <li>
                                    <a href="#!/countries/{{$country->id}}">{{ $country->name }}<!--  - <strong> {{ $country->name }} </strong> --></a>
                                </li>
                            @endforeach
                            <li><a class="secondary-text" href="/countries/"><strong>View More</strong></a></li>
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
