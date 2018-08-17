@include('includes.header')

    <!-- Content section -->
    <main class="container">

        <!-- Advertisment section -->
        <div class="co">

            <div class="ads-none text-center hide-sm hide-xs hide-on-small-only" style="text-align: center; margin: 10px 0px 10px;">
                <a href="/">
                    <img src="{{ asset('images/728x90.png') }}" class="text-center" alt="ADS on {{ config('app.name') }}">
                </a>
            </div>

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
                            <!-- tab headings-->
                            <div class="col s12 no-padding">
                                <ul class="tabs transparent">
                                    <li class="tab primary dark lighter">
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
                                    @foreach ($livescores_leagues as $livescore_league)
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
                                                    $where_array = array('league_id' => $livescore_league->league_id, 'starting_date' => $today->toDateString());
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
                                                                    <img src="http://gifimage.net/wp-content/uploads/2017/10/new-blinking-icon-gif-4.gif" style="width: 10px;" /> 
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
                                                            <p class="col s5 right-align">{{ $livescore->localteam_name }}</p>
                                                            @if($livescore->time_status == 'NS')
                                                                <p class="col s2 secondary-text center-align scs">
                                                                    <span class="home-scs">?</span> - 
                                                                    <span class="away-scs">?</span>
                                                                </p>
                                                            @elseif($livescore->time_status == 'POSTP')
                                                                <p class="col s2 secondary-text center-align scs">
                                                                    <span class="home-scs">?</span> - 
                                                                    <span class="away-scs">?</span>
                                                                </p>
                                                            @elseif($livescore->time_status == 'TBA')
                                                                <p class="col s2 secondary-text center-align scs">
                                                                    <span class="home-scs">?</span> - 
                                                                    <span class="away-scs">?</span>
                                                                </p>
                                                            @elseif($livescore->time_status == 'CANCL')
                                                                <p class="col s2 secondary-text center-align scs">
                                                                    <span class="home-scs">?</span> - 
                                                                    <span class="away-scs">?</span>
                                                                </p>
                                                            @else
                                                                <a href="/matches/{{$livescore->spm_id}}" class="col s2 secondary-text center-align scs">
                                                                    <span class="home-scs">{{ $livescore->localteam_score }}</span> - 
                                                                    <span class="away-scs">{{ $livescore->visitorteam_score }}</span>
                                                                </a>
                                                            @endif
                                                            <p class="col s5 left-align">{{ $livescore->visitorteam_name }}</p>
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
                                    @endforeach

                                    <div class="ads-none text-center" style="text-align: center; margin: 10px 0px 10px;">
                                        <a href="/">
                                            <img src="{{ asset('images/728x90.png') }}" style="width: 100%;" class="text-center" alt="ADS on {{ config('app.name') }}">
                                        </a>
                                    </div>
                                   
                                </ul>
                            </div>
                            <!--// end live score for day tab //-->

                            
                            <div id="odds" class="col s12">
                                <ul class="collapsible expandable">
                                   
                                    

                                    <div class="ads-none text-center" style="text-align: center; margin: 10px 0px 10px;">
                                        <a href="/">
                                            <img src="{{ asset('images/728x90.png') }}" style="width: 100%;" class="text-center" alt="ADS on {{ config('app.name') }}">
                                        </a>
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
                                            <a href="/">
                                                <img src="{{ asset('images/728x90.png') }}" style="width: 100%;" class="text-center" alt="ADS on {{ config('app.name') }}">
                                            </a>
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
    
@include('includes.footer')