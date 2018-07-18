<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <title>GoalNowNow | Livescores</title>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="{{ asset('js/app.bundle.js') }}"></script>
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="primary">

    <!-- Navigation -->
    <nav class="z-depth-0">
        <div class="nav-wrapper container">
            <a href="#!" class="brand-logo left"><img src=images/c6a96635eb5e.png alt=""></a>
            <a href="#" data-target="slide-out" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li class="no-margin"><a href="sass.html">Soccer</a></li>
                <li class="no-margin"><a href="badges.html">World Cup</a></li>
                <li class="no-margin"><a href="collapsible.html">Hockey</a></li>
                <li class="no-margin"><a href="mobile.html">Basket Ball</a></li>
                <li class="no-margin"><a href="mobile.html">Tennis</a></li>
                <li class="no-margin"><a href="mobile.html">Mobile</a></li>
                <li class="no-margin"><a class="waves-effect waves-dark btn white">Log in</a></li>
                <li class="no-margin"><a class="waves-effect waves-light btn">Sign up</a></li>
            </ul>
        </div>
    </nav>
    <hr color="#ffd918" style="height: 2px;">
    <!--// End Navigation //-->

    <!-- Side Navigation -->
    <ul id="slide-out" class="sidenav primary">
        <!-- logo -->
        <li class="logo"><a href="#!"><img src=images/c6a96635eb5e.png alt=""></a></li>
        <hr color="#ffd918" style="height: 2px;">
        <!--// end logo //-->
        <li><a href="#!" class="waves-effect waves-dark btn white">Log in</a></li>
        <li><a href="#!" class="waves-effect waves-light btn secondary">Sign up</a></li>
        <li><a href="#!"><i class="material-icons secondar-text">home</i>Home</a></li>
        <li><a href="#!"><i class="material-icons secondar-text">video_library</i>Live</a></li>
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
                <li class="bold active">
                    <a class="collapsible-header secondary-text">Top Leagues</a>
                    <div class="collapsible-body primary">
                        <ul>
                            @foreach ($leagues as $league)
                                <li>
                                    <a href="#!">{{ $league->name }}</a>
                                </li>
                            @endforeach
                            <!-- <li><a href="#!">World Cup</a></li>
                            <li><a href="#!">UEFA Champions League</a></li>
                            <li><a href="#!">Europa League</a></li>
                            <li><a href="#!">Confed. Cup</a></li>
                            <li><a href="#!">Cup of Nations</a></li>
                            <li><a href="#!">Euro 2016</a></li>
                            <li><a href="#!">Copa America</a></li>
                            <li><a href="#!">International</a></li> -->
                        </ul>
                    </div>
                </li>
                <li class="bold hide">
                    <a class="collapsible-header secondary-text">Tournaments</a>
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
                <li class="bold active">
                    <a class="collapsible-header secondary-text">Countries</a>
                    <div class="collapsible-body primary">
                        <ul>
                            @foreach ($countries as $country)
                                <li>
                                    <a href="#!">{{ $country->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <!--// End Collapsible Section //-->
    </ul>
    <!--// End Side Navigation //-->

    <!-- Content section -->
    <main class="container">

        <!-- Advertisment section -->
        <div class="co">
            <div class="ads"></div>
        </div>
        <!--// end Advertisment section -->

        <div class="row">

            <!-- left section -->
            <section class="section-left col l3 hide-on-med-and-down">
                <div class="primary dark z-depth-1">
                    <div class="saii"><img src=images/e3805ee62b68.svg alt="" class="saimg"><a href="#!">Home</a></div>
                    <div class="saii"><img src=images/0cf54f6e0a6d.svg alt="" class="saimg"><a href="#!">Live</a></div>

                    <!-- Collapsible  section -->
                    <ul class="collapsible expandable z-depth-0">
                        <!-- Cups Section -->
                        <li class="bold active hide">
                            <a class="collapsible-header secondary-text">Cups</a>
                            <div class="collapsible-body">
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
                        <!--// end cups section //-->

                        <!-- top leagues section -->
                        <li class="bold active">
                            <a class="collapsible-header secondary-text">Current Leagues</a>
                            <div class="collapsible-body">
                                <ul>
                                    @foreach ($leagues as $league)
                                        <li>
                                            <a href="#!">{{ $league->name }} - <strong> {{ $league->country->data->name }} </strong></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <!-- //end top leagues seciton //-->

                        <!-- tournaments section -->
                        <li class="bold hide">
                            <a class="collapsible-header secondary-text">Tournaments</a>
                            <div class="collapsible-body">
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
                        <!--// end tournaments section //-->

                        <!-- Countries section -->
                        <li class="bold active">
                            <a class="collapsible-header secondary-text">Countries</a>
                            <div class="collapsible-body">
                                <ul>
                                    @foreach ($countries as $country)
                                        <li>
                                            <a href="#!">{{ $country->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <!--// end countries section // --->
                    </ul>
                    <!-- // end collapsible section // -->
                </div>
            </section>
            <!--// end left section // -->

            <section class="section col s12 l3 push-l6">
                <!-- search section -->
                <div class="search white">
                    <input type="text" class="search-input" placeholder="Search Here ...">
                    <i class="material-icons right">search</i>
                </div>
                <!-- // end search section // -->

                <!-- table section -->
                <div class="table-section hide-on-med-and-down">
                    <!-- table head -->
                    <div class="table-head z-depth-1">
                        Live Table
                        <div class="right">
                            <a href=""><i class="material-icons">keyboard_arrow_left</i></a>
                            <span>Premier League</span>
                            <a href=""><i class="material-icons">keyboard_arrow_right</i></a>
                        </div>
                    </div>
                    <!--// end table head// -->
                    
                    <!-- table body -->
                    <div class="table-body z-depth-1 primary dark white-text">
                        <table class="responsive-table stripped">
                            <thead>
                                <tr>
                                    <td colspan="2">Team</td>
                                    <td>PL</td>
                                    <td>PTS</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Manchester Utd.</td>
                                    <td>38</td>
                                    <td>108</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Manchester City</td>
                                    <td>38</td>
                                    <td>92</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Liverpool</td>
                                    <td>38</td>
                                    <td>88</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Tottenham</td>
                                    <td>38</td>
                                    <td>78</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Chelsea</td>
                                    <td>38</td>
                                    <td>78</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Arsenal</td>
                                    <td>38</td>
                                    <td>75</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Burnley</td>
                                    <td>38</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Watford</td>
                                    <td>38</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Newcastle Utd.</td>
                                    <td>38</td>
                                    <td>58</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>West Brom</td>
                                    <td>38</td>
                                    <td>55</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Huddersfield</td>
                                    <td>38</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Stoke City</td>
                                    <td>38</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Brighton</td>
                                    <td>38</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>West Ham Utd.</td>
                                    <td>38</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Everton</td>
                                    <td>38</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Leicester</td>
                                    <td>38</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Southampton</td>
                                    <td>38</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Swansea</td>
                                    <td>38</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Crystal Palace</td>
                                    <td>38</td>
                                    <td>68</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Bournmouth</td>
                                    <td>38</td>
                                    <td>68</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--// end table body //-->
                </div>
                <!-- // end table section // -->

                <!-- share section -->
                <div class="share hide-on-med-and-down">
                    <div class="sl primary lighter z-depth-1 white-text">
                        Share On: 
                        
                        <div class="links right">
                            
                            <a href="" class="facebook">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2656 0C4.5957 0 0 4.59766 0 10.2693C0 15.9407 4.5957 20.5386 10.2656 20.5386C15.9355 20.5386 20.5312 15.9407 20.5312 10.2693C20.5312 4.59766 15.9355 0 10.2656 0ZM11.3359 10.7202V16.3071H9.02539V10.7205H7.87109V8.79517H9.02539V7.63916C9.02539 6.0686 9.67773 5.13452 11.5293 5.13452H13.0723V7.06006H12.1074C11.3867 7.06006 11.3398 7.3291 11.3398 7.8313L11.3359 8.79492H13.082L12.8789 10.7202H11.3359Z" fill="white"/>
                                </svg>
                            </a>

                            <a href="https://api.whatsapp.com/send?phone=23462623992" class="whatsapp">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5312 10.2693C20.5312 15.9407 15.9355 20.5386 10.2656 20.5386C4.5957 20.5386 0 15.9407 0 10.2693C0 4.59766 4.5957 0 10.2656 0C15.9355 0 20.5312 4.59766 20.5312 10.2693ZM7.68359 15.2393C8.57422 15.7258 9.57812 15.9822 10.6035 15.9827C13.9688 15.9812 16.7051 13.2422 16.707 9.87622C16.709 8.24463 16.0742 6.71045 14.9219 5.55615C13.7695 4.4021 12.2363 3.76611 10.6035 3.76538C7.23828 3.76538 4.5 6.50464 4.49805 9.87134C4.49805 10.9475 4.7793 11.998 5.3125 12.9241L4.44727 16.0884L7.68359 15.2393Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.49023 9.44702L2.30469 9.33716L0.384766 9.84106L0.896484 7.96802L0.775391 7.77612C0.267578 6.96802 0 6.03394 0 5.07495C0.00195312 2.27661 2.27734 0 5.07617 0C6.43164 0.000488281 7.70508 0.529053 8.66211 1.48853C9.62109 2.44775 10.1484 3.7229 10.1484 5.0791C10.1465 7.87769 7.87109 10.1545 5.07422 10.1545C4.16211 10.1541 3.26758 9.90942 2.49023 9.44702ZM7.94141 6.39453C8.04688 6.4458 8.11914 6.48047 8.15039 6.53149C8.1875 6.59521 8.1875 6.90063 8.06055 7.25708C7.93359 7.61353 7.32422 7.93872 7.03125 7.98267C6.76953 8.02197 6.43555 8.03833 6.07031 7.92212C5.84961 7.85181 5.56445 7.75781 5.20117 7.60059C3.77148 6.98267 2.80469 5.5957 2.62305 5.33447L2.5957 5.29688C2.51953 5.19507 1.97266 4.46948 1.97266 3.71851C1.97266 3.01831 2.31641 2.65015 2.47461 2.47949L2.50586 2.44556C2.64648 2.29272 2.8125 2.25464 2.91406 2.25464C3.01562 2.25464 3.11719 2.25562 3.20508 2.26001L3.23828 2.2605C3.32812 2.25977 3.43945 2.25903 3.54883 2.52197L3.70703 2.90625C3.83984 3.23218 3.99219 3.60254 4.01953 3.65479C4.05664 3.7312 4.08203 3.82031 4.03125 3.92212L4.00977 3.96558C3.97266 4.0437 3.94336 4.10107 3.87891 4.17676L3.80078 4.27051C3.74805 4.33447 3.69531 4.39844 3.65039 4.44409C3.57422 4.52002 3.49414 4.60254 3.58398 4.75537C3.67188 4.9082 3.97852 5.40771 4.43164 5.8125C4.91992 6.2478 5.34375 6.43164 5.55859 6.52441L5.6582 6.56958C5.81055 6.646 5.90039 6.6333 5.98828 6.53149C6.07812 6.42969 6.37109 6.08594 6.47266 5.93335C6.57422 5.78052 6.67578 5.80591 6.81445 5.85693C6.95508 5.90796 7.70508 6.27686 7.85742 6.35327L7.94141 6.39453Z" transform="translate(5.5293 4.79688)" fill="white"/>
                                </svg>
                            </a>

                            <a href="" class="instagram">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2656 0C4.5957 0 0 4.59766 0 10.2693C0 15.9407 4.5957 20.5386 10.2656 20.5386C15.9355 20.5386 20.5312 15.9407 20.5312 10.2693C20.5312 4.59766 15.9355 0 10.2656 0ZM8.00977 4.82544C8.59375 4.79883 8.7793 4.79224 10.2676 4.79224C11.752 4.79224 11.9375 4.79883 12.5215 4.82544C13.1055 4.85205 13.5039 4.94434 13.8516 5.07983C14.2129 5.21948 14.5176 5.40674 14.8223 5.71143C15.127 6.01587 15.3145 6.32129 15.4531 6.68164C15.5879 7.02979 15.6816 7.42773 15.709 8.01099C15.7344 8.59497 15.7422 8.78174 15.7422 10.2693C15.7422 11.7566 15.7344 11.9429 15.709 12.5271C15.6816 13.1099 15.5879 13.5081 15.4531 13.8564C15.3145 14.2166 15.127 14.522 14.8223 14.8264C14.5176 15.1311 14.2129 15.3188 13.8535 15.4587C13.5039 15.594 13.1055 15.6865 12.5234 15.7131C11.9395 15.7397 11.7539 15.7461 10.2656 15.7461C8.7793 15.7461 8.5918 15.7397 8.00781 15.7131C7.42578 15.6865 7.02734 15.594 6.67969 15.4587C6.32031 15.3188 6.01367 15.1311 5.70898 14.8264C5.40625 14.522 5.21875 14.2166 5.07812 13.8562C4.94336 13.5081 4.85156 13.1101 4.82422 12.5271C4.79688 11.9429 4.79102 11.7566 4.79102 10.2693C4.79102 8.78174 4.79883 8.59497 4.82422 8.01074C4.84961 7.42798 4.94336 7.02979 5.07812 6.6814C5.21875 6.32129 5.40625 6.01587 5.71094 5.71143C6.01367 5.40674 6.32031 5.21973 6.67969 5.07983C7.0293 4.94434 7.42578 4.85205 8.00977 4.82544Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.99805 6.26964e-06H4.48828C5.95117 6.26964e-06 6.12305 0.00513322 6.70117 0.0315004C7.23438 0.0559145 7.52539 0.145026 7.7168 0.219977C7.97266 0.319342 8.1543 0.437995 8.34766 0.629645C8.53906 0.821295 8.65625 1.00391 8.75586 1.25953C8.83203 1.4524 8.91992 1.74219 8.94531 2.27613C8.9707 2.85352 8.97656 3.02686 8.97656 4.48853C8.97656 5.9502 8.9707 6.12379 8.94531 6.70118C8.91992 7.23511 8.83203 7.52491 8.75586 7.71778C8.6582 7.97339 8.53906 8.15528 8.34766 8.34693C8.1543 8.53858 7.97266 8.65723 7.7168 8.7566C7.52539 8.83179 7.23438 8.92091 6.70117 8.94532C6.12305 8.97144 5.95117 8.9773 4.48828 8.9773C3.02734 8.9773 2.85352 8.97144 2.27539 8.94532C1.74219 8.92066 1.45312 8.83131 1.25977 8.75635C1.00391 8.65723 0.822266 8.53858 0.628906 8.34693C0.4375 8.15504 0.320312 7.97291 0.220703 7.71729C0.144531 7.52442 0.0566406 7.23463 0.03125 6.70069C0.00585938 6.1233 0 5.94996 0 4.48731C0 3.02466 0.00585938 2.85206 0.03125 2.27491C0.0566406 1.74073 0.144531 1.45093 0.220703 1.25782C0.318359 1.0022 0.4375 0.81983 0.628906 0.627936C0.822266 0.436286 1.00391 0.317633 1.25977 0.218268C1.45312 0.142829 1.74219 0.0539613 2.27539 0.0293031C2.78125 0.00659807 2.97656 -0.000237871 3.99805 6.26964e-06ZM7.41016 0.909674C7.04883 0.909674 6.75391 1.20362 6.75391 1.56666C6.75391 1.92945 7.04883 2.22388 7.41016 2.22388C7.77344 2.22388 8.06836 1.92945 8.06836 1.56666C8.06836 1.20386 7.77344 0.90943 7.41016 0.909674ZM1.67578 4.49024C1.67578 2.93677 2.93555 1.6775 4.48828 1.6775C6.04102 1.6775 7.29883 2.93677 7.29883 4.49024C7.29883 6.04346 6.04102 7.30225 4.48828 7.30225C2.93555 7.30225 1.67578 6.04346 1.67578 4.49024Z" transform="translate(5.77734 5.7793)" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.82507 0C2.83297 0 3.65014 0.817325 3.65014 1.82566C3.65014 2.83388 2.83297 3.65132 1.82507 3.65132C0.817062 3.65132 0 2.83388 0 1.82566C0 0.817325 0.817062 0 1.82507 0V0Z" transform="translate(8.43945 8.44336)" fill="white"/>
                                </svg>
                            </a>

                            <a href="" class="twitter">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2656 0C4.5957 0 0 4.59766 0 10.2693C0 15.9407 4.5957 20.5386 10.2656 20.5386C15.9355 20.5386 20.5312 15.9407 20.5312 10.2693C20.5312 4.59766 15.9355 0 10.2656 0ZM9.98047 8.70215L9.95898 8.34668C9.89453 7.42578 10.4609 6.58472 11.3594 6.2583C11.6895 6.14233 12.248 6.12769 12.6152 6.22925C12.7598 6.27271 13.0312 6.41772 13.2246 6.54834L13.5781 6.7876L13.9648 6.66431C14.1797 6.59912 14.4688 6.49023 14.5977 6.41772C14.7188 6.35254 14.8262 6.31641 14.8262 6.33813C14.8262 6.46143 14.5605 6.88184 14.3379 7.11401C14.0371 7.44043 14.123 7.46924 14.7344 7.25171C15.0996 7.12842 15.1074 7.12842 15.0352 7.26636C14.9922 7.33887 14.7695 7.59253 14.5332 7.82471C14.1309 8.22363 14.1094 8.26709 14.1094 8.60059C14.1094 9.11548 13.8652 10.1887 13.6211 10.7761C13.168 11.8784 12.1992 13.0168 11.2285 13.5898C9.86523 14.3948 8.04883 14.5979 6.51953 14.1265C6.00977 13.967 5.13281 13.5608 5.13281 13.4883C5.13281 13.4666 5.39844 13.4375 5.7207 13.4304C6.39648 13.4158 7.07227 13.2273 7.64648 12.8938L8.0332 12.6616L7.58789 12.5093C6.95703 12.2917 6.38867 11.7915 6.24609 11.3201C6.20312 11.1677 6.2168 11.1604 6.61914 11.1604L7.03516 11.1533L6.68359 10.9866C6.26758 10.7761 5.88672 10.4209 5.69922 10.0581C5.56445 9.79712 5.39062 9.13721 5.44141 9.08643C5.45508 9.0647 5.60742 9.10815 5.7793 9.16626C6.27539 9.34766 6.33984 9.30396 6.05273 8.99951C5.51367 8.44824 5.34766 7.62891 5.60742 6.85303L5.72852 6.50488L6.20312 6.97632C7.17188 7.92627 8.31445 8.49194 9.62109 8.65869L9.98047 8.70215Z" fill="white"/>
                                </svg>
                            </a>

                            <a href="" class="messenger">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2656 0C4.5957 0 0 4.59766 0 10.2693C0 15.9407 4.5957 20.5386 10.2656 20.5386C15.9355 20.5386 20.5312 15.9407 20.5312 10.2693C20.5312 4.59766 15.9355 0 10.2656 0ZM4.10547 9.81274C4.10547 6.66187 6.86328 4.10767 10.2656 4.10767C13.666 4.10767 16.4238 6.66187 16.4238 9.81274C16.4238 12.9636 13.666 15.5178 10.2656 15.5178C9.65039 15.5178 9.05859 15.4343 8.49805 15.2793L6.40039 16.4307V14.2554C5.00195 13.2097 4.10547 11.6082 4.10547 9.81274Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.55663 3.42308L3.01265 1.82079L0 3.42308L3.31391 0L4.89555 1.60229L7.87054 0L4.55663 3.42308Z" transform="translate(6.1582 8.21533)" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    
                    </div>
                </div>
                <!-- // end share section //-->

                <!-- bet add section -->
                <div class="bet-ad hide-on-med-and-down z-depth-1">
                    <img src=images/43cc4065803e.png alt="">
                </div>
            </section>

            <!-- right section --> 
            <section class="section-right col s12 l6 pull-l3">

                <!-- flow section -->
                <div class="row">
                    <!-- live score section -->
                    <div class="col s12 ls">
                        <div>
                            <!-- tab headings-->
                            <div class="col s12 no-padding">
                                <ul class="tabs transparent">
                                    <li class="tab primary dark lighter"><span class="l valign-wrapper"><i class="material-icons">keyboard_arrow_left</i></span><a href="#day">Today</a><span class="r valign-wrapper"><i class="material-icons">keyboard_arrow_right</i></span></li>
                                    <li class="tab primary dark"><a href="#odds">Odds</a></li>
                                    <li class="tab primary dark"><a href="#table">Table</a></li>
                                </ul>
                            </div>
                            <!--// end tab headings //-->

                            <!-- Live score for day tab -->
                            <div id="day" class="col s12">
                                <ul class="collapsible expandable">
                                    
                                    <li class="bold active row">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title"><!-- World Cup - Group H --></span>
                                            <span class="date"><?php echo date("Y/m/d"); ?></span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                @foreach ($livescores as $livescore)
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 m1 time"><span class="green-text text-accent-3">
                                                        {{ $livescore->time->starting_at->time }}
                                                    </span></div>
                                                    <div class="col s1 m2 home-team center-align">
                                                        <!-- <span></span> -->
                                                        <img src="{{ $livescore->localTeam->data->logo_path }}" width="20">
                                                    </div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">{{ $livescore->localTeam->data->name }}</p>
                                                        <p class="col s4 secondary-text center-align scs">
                                                            <span class="home-scs">{{ $livescore->scores->localteam_score }}</span> - 
                                                            <span class="away-scs">{{ $livescore->scores->visitorteam_score }}</span>
                                                        </p>
                                                        <p class="col s4 left-align">{{ $livescore->visitorTeam->data->name }}</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align">
                                                        <span>
                                                            <img src="{{ $livescore->visitorTeam->data->logo_path }}" width="20">
                                                        </span>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ol>
                                            <!--// end list of matches under this group //-->
                                        </div>
                                    </li>
                                    
                                    <li class="bold active row hide">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <span class="date">June 19</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Nigeria</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                        <p class="col s4 left-align">Argentina</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Croatia</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">2</span> - <span class="away-scs">1</span></p>
                                                        <p class="col s4 left-align">Iceland</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                            </ol>
                                            <!--// end list of matches under this group //-->
                                        </div>
                                    </li>

                                    <li class="bold active row hide">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <span class="date">June 19</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Nigeria</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                        <p class="col s4 left-align">Argentina</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Croatia</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">2</span> - <span class="away-scs">1</span></p>
                                                        <p class="col s4 left-align">Iceland</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                            </ol>
                                            <!--// end list of matches under this group //-->
                                        </div>
                                    </li>

                                    <li class="bold active row hide">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <span class="date">June 19</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="red-text">Postp.</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Nigeria</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">0</span> - <span class="away-scs">0</span></p>
                                                        <p class="col s4 left-align">Argentina</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                            </ol>
                                            <!--// end list of matches under this group //-->
                                        </div>
                                    </li>

                                    <li class="bold active row hide">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <span class="date">June 19</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Nigeria</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                        <p class="col s4 left-align">Argentina</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Croatia</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">2</span> - <span class="away-scs">1</span></p>
                                                        <p class="col s4 left-align">Iceland</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                            </ol>
                                            <!--// end list of matches under this group //-->
                                        </div>
                                    </li>
                                    <div class="ads"></div>
                                    <li class="bold active row hide">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <span class="date">June 19</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Nigeria</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                        <p class="col s4 left-align">Argentina</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Croatia</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">2</span> - <span class="away-scs">1</span></p>
                                                        <p class="col s4 left-align">Iceland</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                            </ol>
                                            <!--// end list of matches under this group //-->
                                        </div>
                                    </li>
                                    <li class="bold active row hide">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <span class="date">June 19</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Nigeria</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                        <p class="col s4 left-align">Argentina</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Croatia</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">2</span> - <span class="away-scs">1</span></p>
                                                        <p class="col s4 left-align">Iceland</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                            </ol>
                                            <!--// end list of matches under this group //-->
                                        </div>
                                    </li>
                                    <li class="bold active row hide">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <span class="date">June 19</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Nigeria</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                        <p class="col s4 left-align">Argentina</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Croatia</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">2</span> - <span class="away-scs">1</span></p>
                                                        <p class="col s4 left-align">Iceland</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                            </ol>
                                            <!--// end list of matches under this group //-->
                                        </div>
                                    </li>
                                    <li class="bold active row hide">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <span class="date">June 19</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Nigeria</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                        <p class="col s4 left-align">Argentina</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Croatia</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">2</span> - <span class="away-scs">1</span></p>
                                                        <p class="col s4 left-align">Iceland</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                            </ol>
                                            <!--// end list of matches under this group //-->
                                        </div>
                                    </li>
                                    <li class="bold row hide">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <span class="date">June 19</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Nigeria</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                        <p class="col s4 left-align">Argentina</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Croatia</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">2</span> - <span class="away-scs">1</span></p>
                                                        <p class="col s4 left-align">Iceland</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                            </ol>
                                            <!--// end list of matches under this group //-->
                                        </div>
                                    </li>
                                    <div class="ads hide"></div>
                                    <li class="bold row hide">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <span class="date">June 19</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Nigeria</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                        <p class="col s4 left-align">Argentina</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Croatia</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">2</span> - <span class="away-scs">1</span></p>
                                                        <p class="col s4 left-align">Iceland</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                            </ol>
                                            <!--// end list of matches under this group //-->
                                        </div>
                                    </li>
                                    <li class="bold row hide">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <span class="date">June 19</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Nigeria</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                        <p class="col s4 left-align">Argentina</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 time"><span class="white-text">FT</span></div>
                                                    <div class="col s1 m2 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                    <div class="col s9 m6 center-align mts white-text">
                                                        <p class="col s4 right-align">Croatia</p>
                                                        <p class="col s4 secondary-text center-align scs"><span class="home-scs">2</span> - <span class="away-scs">1</span></p>
                                                        <p class="col s4 left-align">Iceland</p>
                                                    </div>
                                                    <div class="col s1 m2 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                </li>
                                            </ol>
                                            <!--// end list of matches under this group //-->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--// end live score for day tab //-->

                            <!--odds tab -->
                            <div id="odds" class="col s12">
                                <ul class="collapsible expandable">
                                    <li class="bold row active">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <div class="col s6 m5">
                                                <div class="col s3 m2 center-align">1</div>
                                                <div class="col s3 m2 center-align">X</div>
                                                <div class="col s3 m2 center-align">2</div>
                                                <div class="col m2 hide-on-small-only"></div>
                                                <div class="col s3 m4 center-align">+31></div>
                                            </div>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches and their odds under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s6 m7">
                                                        <div class="col s1 time hide-on-small-only"><span class="white-text">17:00</span></div>
                                                        <div class="col s1 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                        <div class="col s7 m9 center-align mts white-text">
                                                            <p class="col s4 right-align hide-on-small-only">Nigeria</p>
                                                            <p class="col s12 m4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                            <p class="col s4 left-align hide-on-small-only">Argentina</p>
                                                        </div>
                                                        <div class="col s1 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                    </div>
                                                    <div class="col s6 m5 white-text">
                                                        <div class="col s3 m2 center-align">1.50</div>
                                                        <div class="col s3 m2 center-align">4.25</div>
                                                        <div class="col s3 m2 center-align">7.50</div>
                                                        <div class="col m2 hide-on-small-only"></div>
                                                        <div class="col s3 m4 center-align">+194</div>
                                                    </div>
                                                </li>
                                            </ol>
                                            <!-- // end list of matches and their odds under this group //-->
                                        </div>
                                    </li>

                                    <li class="bold row active">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <div class="col s6 m5">
                                                <div class="col s3 m2 center-align">1</div>
                                                <div class="col s3 m2 center-align">X</div>
                                                <div class="col s3 m2 center-align">2</div>
                                                <div class="col m2 hide-on-small-only"></div>
                                                <div class="col s3 m4 center-align">+31></div>
                                            </div>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches and their odds under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s6 m7">
                                                        <div class="col s1 time hide-on-small-only"><span class="white-text">17:00</span></div>
                                                        <div class="col s1 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                        <div class="col s7 m9 center-align mts white-text">
                                                            <p class="col s4 right-align hide-on-small-only">Nigeria</p>
                                                            <p class="col s12 m4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                            <p class="col s4 left-align hide-on-small-only">Argentina</p>
                                                        </div>
                                                        <div class="col s1 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                    </div>
                                                    <div class="col s6 m5 white-text">
                                                        <div class="col s3 m2 center-align">1.50</div>
                                                        <div class="col s3 m2 center-align">4.25</div>
                                                        <div class="col s3 m2 center-align">7.50</div>
                                                        <div class="col m2 hide-on-small-only"></div>
                                                        <div class="col s3 m4 center-align">+194</div>
                                                    </div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s6 m7">
                                                        <div class="col s1 time hide-on-small-only"><span class="white-text">17:00</span></div>
                                                        <div class="col s1 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                        <div class="col s7 m9 center-align mts white-text">
                                                            <p class="col s4 right-align hide-on-small-only">Nigeria</p>
                                                            <p class="col s12 m4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                            <p class="col s4 left-align hide-on-small-only">Argentina</p>
                                                        </div>
                                                        <div class="col s1 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                    </div>
                                                    <div class="col s6 m5 white-text">
                                                        <div class="col s3 m2 center-align">1.50</div>
                                                        <div class="col s3 m2 center-align">4.25</div>
                                                        <div class="col s3 m2 center-align">7.50</div>
                                                        <div class="col m2 hide-on-small-only"></div>
                                                        <div class="col s3 m4 center-align">+194</div>
                                                    </div>
                                                </li>
                                            </ol>
                                            <!-- // end list of matches and their odds under this group //-->
                                        </div>
                                    </li>

                                    <li class="bold row active">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <div class="col s6 m5">
                                                <div class="col s3 m2 center-align">1</div>
                                                <div class="col s3 m2 center-align">X</div>
                                                <div class="col s3 m2 center-align">2</div>
                                                <div class="col m2 hide-on-small-only"></div>
                                                <div class="col s3 m4 center-align">+31></div>
                                            </div>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches and their odds under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s6 m7">
                                                        <div class="col s1 time hide-on-small-only"><span class="white-text">17:00</span></div>
                                                        <div class="col s1 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                        <div class="col s7 m9 center-align mts white-text">
                                                            <p class="col s4 right-align hide-on-small-only">Nigeria</p>
                                                            <p class="col s12 m4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                            <p class="col s4 left-align hide-on-small-only">Argentina</p>
                                                        </div>
                                                        <div class="col s1 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                    </div>
                                                    <div class="col s6 m5 white-text">
                                                        <div class="col s3 m2 center-align">1.50</div>
                                                        <div class="col s3 m2 center-align">4.25</div>
                                                        <div class="col s3 m2 center-align">7.50</div>
                                                        <div class="col m2 hide-on-small-only"></div>
                                                        <div class="col s3 m4 center-align">+194</div>
                                                    </div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s6 m7">
                                                        <div class="col s1 time hide-on-small-only"><span class="white-text">17:00</span></div>
                                                        <div class="col s1 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                        <div class="col s7 m9 center-align mts white-text">
                                                            <p class="col s4 right-align hide-on-small-only">Nigeria</p>
                                                            <p class="col s12 m4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                            <p class="col s4 left-align hide-on-small-only">Argentina</p>
                                                        </div>
                                                        <div class="col s1 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                    </div>
                                                    <div class="col s6 m5 white-text">
                                                        <div class="col s3 m2 center-align">1.50</div>
                                                        <div class="col s3 m2 center-align">4.25</div>
                                                        <div class="col s3 m2 center-align">7.50</div>
                                                        <div class="col m2 hide-on-small-only"></div>
                                                        <div class="col s3 m4 center-align">+194</div>
                                                    </div>
                                                </li>
                                            </ol>
                                            <!-- // end list of matches and their odds under this group //-->
                                        </div>
                                    </li>

                                    <li class="bold row active">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <div class="col s6 m5">
                                                <div class="col s3 m2 center-align">1</div>
                                                <div class="col s3 m2 center-align">X</div>
                                                <div class="col s3 m2 center-align">2</div>
                                                <div class="col m2 hide-on-small-only"></div>
                                                <div class="col s3 m4 center-align">+31></div>
                                            </div>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches and their odds under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s6 m7">
                                                        <div class="col s1 time hide-on-small-only"><span class="white-text">17:00</span></div>
                                                        <div class="col s1 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                        <div class="col s7 m9 center-align mts white-text">
                                                            <p class="col s4 right-align hide-on-small-only">Nigeria</p>
                                                            <p class="col s12 m4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                            <p class="col s4 left-align hide-on-small-only">Argentina</p>
                                                        </div>
                                                        <div class="col s1 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                    </div>
                                                    <div class="col s6 m5 white-text">
                                                        <div class="col s3 m2 center-align">1.50</div>
                                                        <div class="col s3 m2 center-align">4.25</div>
                                                        <div class="col s3 m2 center-align">7.50</div>
                                                        <div class="col m2 hide-on-small-only"></div>
                                                        <div class="col s3 m4 center-align">+194</div>
                                                    </div>
                                                </li>
                                            </ol>
                                            <!-- // end list of matches and their odds under this group //-->
                                        </div>
                                    </li>

                                    <li class="bold row active">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <div class="col s6 m5">
                                                <div class="col s3 m2 center-align">1</div>
                                                <div class="col s3 m2 center-align">X</div>
                                                <div class="col s3 m2 center-align">2</div>
                                                <div class="col m2 hide-on-small-only"></div>
                                                <div class="col s3 m4 center-align">+31></div>
                                            </div>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches and their odds under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s6 m7">
                                                        <div class="col s1 time hide-on-small-only"><span class="white-text">17:00</span></div>
                                                        <div class="col s1 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                        <div class="col s7 m9 center-align mts white-text">
                                                            <p class="col s4 right-align hide-on-small-only">Nigeria</p>
                                                            <p class="col s12 m4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                            <p class="col s4 left-align hide-on-small-only">Argentina</p>
                                                        </div>
                                                        <div class="col s1 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                    </div>
                                                    <div class="col s6 m5 white-text">
                                                        <div class="col s3 m2 center-align">1.50</div>
                                                        <div class="col s3 m2 center-align">4.25</div>
                                                        <div class="col s3 m2 center-align">7.50</div>
                                                        <div class="col m2 hide-on-small-only"></div>
                                                        <div class="col s3 m4 center-align">+194</div>
                                                    </div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s6 m7">
                                                        <div class="col s1 time hide-on-small-only"><span class="white-text">17:00</span></div>
                                                        <div class="col s1 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                        <div class="col s7 m9 center-align mts white-text">
                                                            <p class="col s4 right-align hide-on-small-only">Nigeria</p>
                                                            <p class="col s12 m4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                            <p class="col s4 left-align hide-on-small-only">Argentina</p>
                                                        </div>
                                                        <div class="col s1 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                    </div>
                                                    <div class="col s6 m5 white-text">
                                                        <div class="col s3 m2 center-align">1.50</div>
                                                        <div class="col s3 m2 center-align">4.25</div>
                                                        <div class="col s3 m2 center-align">7.50</div>
                                                        <div class="col m2 hide-on-small-only"></div>
                                                        <div class="col s3 m4 center-align">+194</div>
                                                    </div>
                                                </li>
                                            </ol>
                                            <!-- // end list of matches and their odds under this group //-->
                                        </div>
                                    </li>

                                    <div class="ads"></div>

                                    <li class="bold row active">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">World Cup - Group G</span>
                                            <div class="col s6 m5">
                                                <div class="col s3 m2 center-align">1</div>
                                                <div class="col s3 m2 center-align">X</div>
                                                <div class="col s3 m2 center-align">2</div>
                                                <div class="col m2 hide-on-small-only"></div>
                                                <div class="col s3 m4 center-align">+31></div>
                                            </div>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches and their odds under this group -->
                                            <ol>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s6 m7">
                                                        <div class="col s1 time hide-on-small-only"><span class="white-text">17:00</span></div>
                                                        <div class="col s1 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                        <div class="col s7 m9 center-align mts white-text">
                                                            <p class="col s4 right-align hide-on-small-only">Nigeria</p>
                                                            <p class="col s12 m4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                            <p class="col s4 left-align hide-on-small-only">Argentina</p>
                                                        </div>
                                                        <div class="col s1 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                    </div>
                                                    <div class="col s6 m5 white-text">
                                                        <div class="col s3 m2 center-align">1.50</div>
                                                        <div class="col s3 m2 center-align">4.25</div>
                                                        <div class="col s3 m2 center-align">7.50</div>
                                                        <div class="col m2 hide-on-small-only"></div>
                                                        <div class="col s3 m4 center-align">+194</div>
                                                    </div>
                                                </li>
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s6 m7">
                                                        <div class="col s1 time hide-on-small-only"><span class="white-text">17:00</span></div>
                                                        <div class="col s1 home-team center-align"><span><!-- Image goes in here --></span></div>
                                                        <div class="col s7 m9 center-align mts white-text">
                                                            <p class="col s4 right-align hide-on-small-only">Nigeria</p>
                                                            <p class="col s12 m4 secondary-text center-align scs"><span class="home-scs">1</span> - <span class="away-scs">2</span></p>
                                                            <p class="col s4 left-align hide-on-small-only">Argentina</p>
                                                        </div>
                                                        <div class="col s1 away-team center-align"><span><!-- Image goes in here --></span></div>
                                                    </div>
                                                    <div class="col s6 m5 white-text">
                                                        <div class="col s3 m2 center-align">1.50</div>
                                                        <div class="col s3 m2 center-align">4.25</div>
                                                        <div class="col s3 m2 center-align">7.50</div>
                                                        <div class="col m2 hide-on-small-only"></div>
                                                        <div class="col s3 m4 center-align">+194</div>
                                                    </div>
                                                </li>
                                            </ol>
                                            <!-- // end list of matches and their odds under this group //-->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- // end odds tab// -->

                            <div id="table" class="col s12">
                                <ul class="collapsible expandable">
                                    <li class="bold row active">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">English Premier League</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="table-body z-depth-1 primary dark white-text">
                                                <table class="stripped">
                                                    <thead>
                                                        <tr class="secondary-text">
                                                            <td></td>
                                                            <td>#</td>
                                                            <td></td>
                                                            <td>Team</td>
                                                            <td>MP</td>
                                                            <td>W</td>
                                                            <td>D</td>
                                                            <td>L</td>
                                                            <td>PTS</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td>1</td>
                                                            <td><span class="up"></span></td>
                                                            <td>Manchester Utd.</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>108</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>2</td>
                                                            <td><span class="down"></span></td>
                                                            <td>Manchester City</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>92</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>Liverpool</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>88</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>4</td>
                                                            <td></td>
                                                            <td>Tottenham</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>78</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>5</td>
                                                            <td></td>
                                                            <td>Chelsea</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>78</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>6</td>
                                                            <td></td>
                                                            <td>Arsenal</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>75</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>7</td>
                                                            <td></td>
                                                            <td>Burnley</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>8</td>
                                                            <td></td>
                                                            <td>Watford</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>60</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>9</td>
                                                            <td></td>
                                                            <td>Newcastle Utd.</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>58</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>10</td>
                                                            <td></td>
                                                            <td>West Brom</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>55</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>11</td>
                                                            <td></td>
                                                            <td>Huddersfield</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>12</td>
                                                            <td></td>
                                                            <td>Stoke City</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>13</td>
                                                            <td></td>
                                                            <td>Brighton</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>14</td>
                                                            <td></td>
                                                            <td>West Ham Utd.</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>15</td>
                                                            <td></td>
                                                            <td>Everton</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>16</td>
                                                            <td></td>
                                                            <td>Leicester</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>17</td>
                                                            <td></td>
                                                            <td>Southampton</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>18</td>
                                                            <td></td>
                                                            <td>Swansea</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>19</td>
                                                            <td></td>
                                                            <td>Crystal Palace</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>20</td>
                                                            <td></td>
                                                            <td>Bournmouth</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="bold row active">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">Spanish La Liga</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="table-body z-depth-1 primary dark white-text">
                                                <table class="responsive-table stripped">
                                                    <thead>
                                                        <tr class="secondary-text">
                                                            <td></td>
                                                            <td>#</td>
                                                            <td></td>
                                                            <td>Team</td>
                                                            <td>MP</td>
                                                            <td>W</td>
                                                            <td>D</td>
                                                            <td>L</td>
                                                            <td>PTS</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td>1</td>
                                                            <td><span class="up"></span></td>
                                                            <td>Manchester Utd.</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>108</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>2</td>
                                                            <td><span class="down"></span></td>
                                                            <td>Manchester City</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>92</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>Liverpool</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>88</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>4</td>
                                                            <td></td>
                                                            <td>Tottenham</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>78</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>5</td>
                                                            <td></td>
                                                            <td>Chelsea</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>78</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>6</td>
                                                            <td></td>
                                                            <td>Arsenal</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>75</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>7</td>
                                                            <td></td>
                                                            <td>Burnley</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>8</td>
                                                            <td></td>
                                                            <td>Watford</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>60</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>9</td>
                                                            <td></td>
                                                            <td>Newcastle Utd.</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>58</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>10</td>
                                                            <td></td>
                                                            <td>West Brom</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>55</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>11</td>
                                                            <td></td>
                                                            <td>Huddersfield</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>12</td>
                                                            <td></td>
                                                            <td>Stoke City</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>13</td>
                                                            <td></td>
                                                            <td>Brighton</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>14</td>
                                                            <td></td>
                                                            <td>West Ham Utd.</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>15</td>
                                                            <td></td>
                                                            <td>Everton</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>16</td>
                                                            <td></td>
                                                            <td>Leicester</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>17</td>
                                                            <td></td>
                                                            <td>Southampton</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>18</td>
                                                            <td></td>
                                                            <td>Swansea</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>19</td>
                                                            <td></td>
                                                            <td>Crystal Palace</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>20</td>
                                                            <td></td>
                                                            <td>Bournmouth</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="bold row active">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">Italian Seria A</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="table-body z-depth-1 primary dark white-text">
                                                <table class="responsive-table stripped">
                                                    <thead>
                                                        <tr class="secondary-text">
                                                            <td></td>
                                                            <td>#</td>
                                                            <td></td>
                                                            <td>Team</td>
                                                            <td>MP</td>
                                                            <td>W</td>
                                                            <td>D</td>
                                                            <td>L</td>
                                                            <td>PTS</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td>1</td>
                                                            <td><span class="up"></span></td>
                                                            <td>Manchester Utd.</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>108</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>2</td>
                                                            <td><span class="down"></span></td>
                                                            <td>Manchester City</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>92</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>Liverpool</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>88</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>4</td>
                                                            <td></td>
                                                            <td>Tottenham</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>78</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>5</td>
                                                            <td></td>
                                                            <td>Chelsea</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>78</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>6</td>
                                                            <td></td>
                                                            <td>Arsenal</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>75</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>7</td>
                                                            <td></td>
                                                            <td>Burnley</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>8</td>
                                                            <td></td>
                                                            <td>Watford</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>60</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>9</td>
                                                            <td></td>
                                                            <td>Newcastle Utd.</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>58</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>10</td>
                                                            <td></td>
                                                            <td>West Brom</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>55</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>11</td>
                                                            <td></td>
                                                            <td>Huddersfield</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>12</td>
                                                            <td></td>
                                                            <td>Stoke City</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>13</td>
                                                            <td></td>
                                                            <td>Brighton</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>14</td>
                                                            <td></td>
                                                            <td>West Ham Utd.</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>15</td>
                                                            <td></td>
                                                            <td>Everton</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>16</td>
                                                            <td></td>
                                                            <td>Leicester</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>17</td>
                                                            <td></td>
                                                            <td>Southampton</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>18</td>
                                                            <td></td>
                                                            <td>Swansea</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>19</td>
                                                            <td></td>
                                                            <td>Crystal Palace</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>20</td>
                                                            <td></td>
                                                            <td>Bournmouth</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="bold row active">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title">German Bundesliga</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <div class="table-body z-depth-1 primary dark white-text">
                                                <table class="responsive-table stripped">
                                                    <thead>
                                                        <tr class="secondary-text">
                                                            <td></td>
                                                            <td>#</td>
                                                            <td></td>
                                                            <td>Team</td>
                                                            <td>MP</td>
                                                            <td>W</td>
                                                            <td>D</td>
                                                            <td>L</td>
                                                            <td>PTS</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td>1</td>
                                                            <td><span class="up"></span></td>
                                                            <td>Manchester Utd.</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>108</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>2</td>
                                                            <td><span class="down"></span></td>
                                                            <td>Manchester City</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>92</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>3</td>
                                                            <td></td>
                                                            <td>Liverpool</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>88</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>4</td>
                                                            <td></td>
                                                            <td>Tottenham</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>78</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>5</td>
                                                            <td></td>
                                                            <td>Chelsea</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>78</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>6</td>
                                                            <td></td>
                                                            <td>Arsenal</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>75</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>7</td>
                                                            <td></td>
                                                            <td>Burnley</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>8</td>
                                                            <td></td>
                                                            <td>Watford</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>60</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>9</td>
                                                            <td></td>
                                                            <td>Newcastle Utd.</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>58</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>10</td>
                                                            <td></td>
                                                            <td>West Brom</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>55</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>11</td>
                                                            <td></td>
                                                            <td>Huddersfield</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>12</td>
                                                            <td></td>
                                                            <td>Stoke City</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>13</td>
                                                            <td></td>
                                                            <td>Brighton</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>14</td>
                                                            <td></td>
                                                            <td>West Ham Utd.</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>15</td>
                                                            <td></td>
                                                            <td>Everton</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>16</td>
                                                            <td></td>
                                                            <td>Leicester</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>17</td>
                                                            <td></td>
                                                            <td>Southampton</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>18</td>
                                                            <td></td>
                                                            <td>Swansea</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>19</td>
                                                            <td></td>
                                                            <td>Crystal Palace</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>20</td>
                                                            <td></td>
                                                            <td>Bournmouth</td>
                                                            <td>38</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>68</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- // end livescore section -->
                </div>
                <!--// end flow section // -->
            </section>
            <!--// end right section // -->
        </div>
    </main>
    <!--// End Content Section //-->
    <hr color="#ffd918" style="height: 2px;">
    <footer>
        <div class="container">
            <div class="row no-padding no-margin">
                <div class="col m4 hide-on-small-only left-align"><a href="#!"><img src=images/c6a96635eb5e.png alt=""></a></div>
                <div class="col m4 center-align s6 white-text"><p>Privacy Policy | Cookie Policy</p></div>
                <div class="col m4 right-align s6 white-text"><p>&copy; 2018 Goalnownow!!</p></div>
            </div>
        </div>
    </footer>    
</body>
</html>