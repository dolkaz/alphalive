@include('includes.header')

    <!-- Content section -->
    <main class="container">

        <!-- Advertisment section -->
        <div class="co">

            <div class="ads-none text-center hide-sm hide-xs hide-on-small-only" style="text-align: center; margin: 10px 0px 10px;">
                <!-- Top Banner Home page -->
                <ins class="adsbygoogle"
                    style="display:inline-block;width:728px;height:90px"
                    data-ad-client="ca-pub-8933541584844926"
                    data-ad-slot="2135120005"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            
            <!-- Custom Adverts -->
            <?php 
                $where_array       = array('status' => 1, 'type' => 'top-home');
                $ads_placement     = DB::table('ads')->where($where_array)->inRandomOrder()->first();
            ?>
            <?php if ($ads_placement !== null): ?>
                <div class="ads-none text-center hide-sm hide-xs hide-on-small-only" style="text-align: center; margin: 10px 0px 10px;">
                    <a href="{{ $ads_placement->url }}" target="_blank">
                        <img src="{{ $ads_placement->image }}" alt="{{ $ads_placement->notes }} - {{ config('app.name') }}">
                    </a>
                </div>
            <?php endif ?>
            <!-- CLose Custom Adverts -->

        </div>
        <!--// end Advertisment section -->

        <div class="row">

            <!-- left section -->
            <section class="section-left col l3 hide-on-med-and-down">
                @include('includes.sidebar.leagues_countries')
            </section>
            <!--// end left section // -->

            <section class="section col s12 l3 push-l6">
                @include('includes.sidebar.table')
            </section>

            <!-- right section --> 
            <section class="section-right col s12 l6 pull-l3">

                <!-- flow section -->
                <div class="row">
                    <!-- live score section -->
                    <div class="col s12 ls">
                        <div>
                            <!-- date headings -->
                            <div class="col s12 dayList no-padding">
                                <ul class="row no-margin">
                                    <!-- Previous days -->
                                    <li class="before col s4 m5 no-padding">
                                        <div class="col s12 m4 cs">
                                            <a href="/scores/{{ date('Y-m-d',strtotime('-3 days')) }}" class="center-align primary lighter btn white-text waves-effect waves-dark hide-on-small-only">{{ date('j M',strtotime('-3 days')) }}</a>
                                        </div>
                                        <div class="col s12 m4 cs">
                                            <a href="/scores/{{ date('Y-m-d',strtotime('-2 days')) }}" class="center-align primary lighter btn white-text waves-effect waves-dark hide-on-small-only">{{ date('j M',strtotime('-2 days')) }}</a>
                                        </div>
                                        <div class="col s12 m4 cs">
                                            <a href="/scores/{{ date('Y-m-d',strtotime('-1 days')) }}" class="center-align primary lighter btn white-text waves-effect waves-dark">{{ date('j M',strtotime('-1 days')) }}</a>
                                        </div>
                                    </li>
                                    <!--// end previous days //-->

                                    <!-- Current day -->
                                    <li class="todays col s4 m2 no-padding">
                                        <div class="col s12 cs">
                                            <a href="/" class="col s12 center-align secondary btn primary-text waves-effect waves-dark">Today</a>
                                        </div>
                                    </li>
                                    <!--// end Current day //-->

                                    <!-- Next days -->
                                    <li class="after col s4 m5 no-padding">
                                        <div class="col s12 m4 cs">
                                            <a href="/scores/{{ date('Y-m-d',strtotime('+1 days')) }}" class="center-align primary lighter btn white-text waves-effect waves-dark">{{ date('j M',strtotime('+1 days')) }}</a>
                                        </div>
                                        <div class="col s12 m4 cs">
                                            <a href="/scores/{{ date('Y-m-d',strtotime('+2 days')) }}" class="center-align primary lighter btn white-text waves-effect waves-dark hide-on-small-only">{{ date('j M',strtotime('+2 days')) }}</a>
                                        </div>
                                        <div class="col s12 m4 cs">
                                            <a href="/scores/{{ date('Y-m-d',strtotime('+3 days')) }}" class="center-align primary lighter btn white-text waves-effect waves-dark hide-on-small-only">{{ date('j M',strtotime('+3 days')) }}</a>
                                        </div>
                                    </li>
                                    <!--// end Next days //-->
                                </ul>
                            </div>
                            <!--// end date headings //-->

                            <!-- tab headings-->
                            <div class="col s12 no-padding">
                                <ul class="tabs transparent">
                                    <li class="tab primary dark lighter hide">
                                        <span class="l valign-wrapper">
                                            <a href="#/scores/{{ date('Y-m-j',strtotime('-1 days')) }}">
                                                <i class="material-icons">keyboard_arrow_left</i>
                                            </a>
                                        </span>
                                        <a href="#day">Today</a>
                                        <span class="r valign-wrapper">
                                            <a href="#/scores/{{ date('Y-m-j',strtotime('+1 days')) }}">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tab primary dark"><a href="#odds">Odds</a></li>
                                    <li class="tab primary dark"><a href="#table">Table</a></li>
                                </ul>
                            </div>
                            <!--// end tab headings //-->

                            <!-- Live score for day tab -->
                            <div id="day" class="col s12">
                                <ul class="collapsible expandable">
                                    <?php foreach ($livescores_leagues as $key => $livescore_league): ?>
                                        <li class="bold active row">
                                            <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                                <span class="title"> 
                                                    <?php 

                                                        $league_id = DB::table('leagues')->where('spm_id', '=', $livescore_league->league_id)->value('spm_country_id_id');

                                                        $country = DB::table('countries')->where('spm_id', $league_id)->value('name');
                                                        // var_dump($country);
                                                    ?> 
                                                    {{ $country }} - {{ $livescore_league->league_name }} - {{ $livescore_league->stage_name }} </span>
                                                <span class="date">{{ \Carbon\Carbon::parse($livescore_league->starting_date_time)->format('M d') }}</span>
                                            </div>

                                            <div class="collapsible-body">
                                                <!-- list of matches under this group -->
                                                <ol>
                                                    <!-- Fixtures foreach -->
                                                    <?php 
                                                        $today = \Carbon\Carbon::today();
                                                        $where_array = array('league_id' => $livescore_league->league_id, 'starting_date' => $livescore_league->starting_date);
                                                        $livescores = DB::table('fixtures')->where($where_array)->orderBy('starting_time', 'asc')->get() ?>
                                                    @foreach ($livescores as $key => $livescore)
                                                        
                                                        <li class="col s12 primary dark z-depth-1">
                                                            <div class="col s1 m1 time">
                                                                @if($livescore->time_status =='NS')
                                                                    <span class="white-text">        
                                                                        {{ \Carbon\Carbon::parse($livescore->starting_date_time)->addHour()->format('H:i') }}
                                                                    </span>
                                                                @elseif($livescore->time_status =='LIVE')
                                                                    <span class="green-text text-accent-3">
                                                                        <img src="{{ asset('images/goalnownow-live-2.gif') }}" style="width: 10px;" /> 
                                                                        {{ $livescore->time_minute }}'
                                                                    </span>
                                                                @elseif($livescore->time_status =='FT')
                                                                    <span class="green-text text-accent-3">
                                                                        {{ $livescore->time_status }}
                                                                    </span>
                                                                @else
                                                                    <span class="red-text">
                                                                        {{ $livescore->time_status }}
                                                                    </span>
                                                                @endif
                                                            </div>
                                                            <div class="col s1 m1 home-team center-align hide">
                                                                <!-- <span></span> -->
                                                                <!-- <img src="<?php //{{ $livescore->localTeam->data->logo_path }} ?>" width="20"> -->
                                                            </div>
                                                            <div class="col s11 m10 center-align mts white-text">
                                                                @if($livescore->time_status == 'NS')
                                                                    <p class="col s12 m5 right-align s-left-align">{{ $livescore->localteam_name }} <span class="right secondary-text hide-on-med-and-up">?</span></p>
                                                                    <p class="col s2 secondary-text center-align scs hide-on-small-only">
                                                                        <span class="home-scs">?</span> - 
                                                                        <span class="away-scs">?</span>
                                                                    </p>
                                                                    <p class="col s12 m5 left-align">{{ $livescore->visitorteam_name }} <span class="right secondary-text hide-on-med-and-up">?</span></p>
                                                                @elseif($livescore->time_status == 'POSTP')
                                                                    <p class="col s12 m5 right-align s-left-align">{{ $livescore->localteam_name }} <span class="right secondary-text hide-on-med-and-up">?</span></p>
                                                                    <p class="col s2 secondary-text center-align scs hide-on-small-only">
                                                                        <span class="home-scs">?</span> - 
                                                                        <span class="away-scs">?</span>
                                                                    </p>
                                                                    <p class="col s12 m5 left-align">{{ $livescore->visitorteam_name }} <span class="right secondary-text hide-on-med-and-up">?</span></p>
                                                                @elseif($livescore->time_status == 'TBA')
                                                                    <p class="col s12 m5 right-align s-left-align">{{ $livescore->localteam_name }} <span class="right secondary-text hide-on-med-and-up">?</span></p>
                                                                    <p class="col s2 secondary-text center-align scs hide-on-small-only">
                                                                        <span class="home-scs">?</span> - 
                                                                        <span class="away-scs">?</span>
                                                                    </p>
                                                                    <p class="col s12 m5 left-align">{{ $livescore->visitorteam_name }} <span class="right secondary-text hide-on-med-and-up">?</span></p>
                                                                @elseif($livescore->time_status == 'CANCL')
                                                                    <p class="col s12 m5 right-align s-left-align">{{ $livescore->localteam_name }} <span class="right secondary-text hide-on-med-and-up">?</span></p>
                                                                    <p class="col s2 secondary-text center-align scs hide-on-small-only">
                                                                        <span class="home-scs">?</span> - 
                                                                        <span class="away-scs">?</span>
                                                                    </p>
                                                                    <p class="col s12 m5 left-align">{{ $livescore->visitorteam_name }} <span class="right secondary-text hide-on-med-and-up">?</span></p>
                                                                @else
                                                                    <p class="col s12 m5 right-align s-left-align">{{ $livescore->localteam_name }} <a href="/matches/{{$livescore->spm_id}}" target="_blank" class="right secondary-text hide-on-med-and-up">{{ $livescore->localteam_score }}</a></p>
                                                                    <a href="/matches/{{$livescore->spm_id}}" target="_blank" class="col s2 secondary-text center-align scs hide-on-small-only">
                                                                        <span class="home-scs">{{ $livescore->localteam_score }}</span> - 
                                                                        <span class="away-scs">{{ $livescore->visitorteam_score }}</span>
                                                                    </a>
                                                                    <p class="col s12 m5 left-align">{{ $livescore->visitorteam_name }} <a href="/matches/{{$livescore->spm_id}}" target="_blank" class="right secondary-text hide-on-med-and-up">{{ $livescore->visitorteam_score }}</a></p>
                                                                @endif
                                                            </div>
                                                            <div class="col s1 m1 away-team center-align hide">
                                                                <!-- <span></span> -->
                                                                <!-- <img src="<?php //{{ $livescore->visitorTeam->data->logo_path }} ?>" width="20"> -->
                                                            </div>
                                                        </li>

                                                    @endforeach
                                                    
                                                    <!-- Former closing foreach -->
                                                </ol>
                                                <!--// end list of matches under this group //-->
                                            </div>
                                        </li>

                                        <?php if ($key % 4 == 0): //echo $key; ?>

                                            <div class="ads-none text-center" style="text-align: center; margin: 10px 0px 10px;">
                                                <!-- Inbetween Desktop -->
                                                <ins class="adsbygoogle"
                                                    style="display:inline-block;width:468px;height:60px"
                                                    data-ad-client="ca-pub-8933541584844926"
                                                    data-ad-slot="5673967814"></ins>
                                                <script>
                                                (adsbygoogle = window.adsbygoogle || []).push({});
                                                </script>
                                            </div>

                                        <?php endif ?>

                                    <?php endforeach ?>
                                </ul>
                            </div>
                            <!--// end live score for day tab //-->

                            
                            <div id="odds" class="col s12">
                                <ul class="collapsible expandable">
                                   
                                    

                                    <div class="ads-none text-center" style="text-align: center; margin: 10px 0px 10px;">
                                        <!-- Inbetween Desktop -->
                                        <ins class="adsbygoogle"
                                            style="display:inline-block;width:468px;height:60px"
                                            data-ad-client="ca-pub-8933541584844926"
                                            data-ad-slot="5673967814"></ins>
                                        <script>
                                        (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script>
                                    </div>

                                </ul>
                            </div>
                            <!-- // end odds tab// -->


                            <div id="table" class="col s12">
                                <ul class="collapsible expandable">


                                    <?php 
                                        $league_array   = array('status' =>  '1', 'league_table' => '1');
                                        $cron_array     = DB::table('leagues')->where($league_array)->get();
                                    ?>

                                    @foreach ($cron_array as $cron_data)
                                        <li class="bold row active">
                                            <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                                <span class="title"><?php echo $cron_data->name; ?></span>
                                            </div>
                                            <div class="collapsible-body">
                                                <div class="table-body z-depth-1 primary dark white-text">
                                                    <table class="stripped">
                                                        
                                                        <thead>
                                                            <tr class="secondary-text">
                                                                <td></td>
                                                                <td>#</td>
                                                                <!-- <td></td> -->
                                                                <td>Team</td>
                                                                <td>MP</td>
                                                                <td>W</td>
                                                                <td>D</td>
                                                                <td>L</td>
                                                                <td>PTS</td>
                                                            </tr>
                                                        </thead>
                                                       
                                                        <tbody>

                                                        <?php 
                                                            $chk_array      = array('spm_league_id' => $cron_data->spm_id, 'spm_season_id' => $cron_data->current_season_id);
                                                            $get_standings  = DB::table('standings')->where($chk_array)->orderBy('position', 'ASC')->get();
                                                        ?>
                                                
                                                            <tr class="secondary-text">
                                                                <?php foreach($get_standings as $standing): ?>

                                                                    <tr>
                                                                        <td></td>
                                                                        <td><?php echo $standing->position; ?></td>
                                                                        <!-- <td><span class="up"></span></td> -->
                                                                        <td><?php echo $standing->team_name; ?></td>
                                                                        <td><?php echo $standing->overall_games_played; ?></td>
                                                                        <td><?php echo $standing->overall_won; ?></td>
                                                                        <td><?php echo $standing->overall_draw; ?></td>
                                                                        <td><?php echo $standing->overall_lost; ?></td>
                                                                        <td><?php echo $standing->points; ?></td>
                                                                    </tr>
                                                                       
                                                                <?php endforeach ?>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <div class="ads-none text-center" style="text-align: center; margin: 10px 0px 10px;">
                                            <!-- Inbetween Desktop -->
                                            <ins class="adsbygoogle"
                                                style="display:inline-block;width:468px;height:60px"
                                                data-ad-client="ca-pub-8933541584844926"
                                                data-ad-slot="5673967814"></ins>
                                            <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});
                                            </script>
                                        </div>

                                    @endforeach

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
    <!--// End Content section //-->
    
    <!-- Static Ads Section [MOBILE] -->
    <?php 
        $where_array        = array('status' => 1, 'type' => 'mobile-home');
        $ads_placement      = DB::table('ads')->where($where_array)->inRandomOrder()->first();
    ?>
    <?php if ($ads_placement !== null): ?>
        <div class="static-ads hide-on-large-only text-center"  style="text-align: center;">
            <a class=" text-center" href="{{ $ads_placement->url }}" target="_blank">
                <img src="{{ $ads_placement->image }}" alt="{{ $ads_placement->notes }} - {{ config('app.name') }}" style="text-align: center; width: 100%;">
            </a>
        </div>
    <?php endif ?>

    @include('includes.static_news')

    <!--// End Static Ads Section [MOBILE] -->

    
@include('includes.footer')