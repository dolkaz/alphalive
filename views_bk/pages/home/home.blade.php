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
                                            <a href="/scores/{{ date('Y-m-j',strtotime('-1 days')) }}">
                                                <i class="material-icons">keyboard_arrow_left</i>
                                            </a>
                                        </span>
                                        <a href="#day">Today</a>
                                        <span class="r valign-wrapper">
                                            <a href="/scores/{{ date('Y-m-j',strtotime('+1 days')) }}">
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
                                    @foreach ($livescores as $livescore)
                                    <li class="bold active row">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title"> <?php //{{ SoccerAPI::countries()->byId($livescore->league->data->country_id)->data->name }} ?> - {{ $livescore->league->data->name }} <?php //var_dump($livescore->stage->data->name) ?></span>
                                            <span class="date">{{ \Carbon\Carbon::parse($livescore->time->starting_at->date_time)->format('M d') }}</span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <ol>
                                                <!-- former foreach -->
                                                <li class="col s12 primary dark z-depth-1">
                                                    <div class="col s1 m1 time">
                                                        @if($livescore->time->status =='NS')
                                                            <span class="white-text">        
                                                                <!-- {{ $livescore->time->starting_at->timezone }} --> {{ \Carbon\Carbon::parse($livescore->time->starting_at->date_time)->format('h:i') }}
                                                                <!-- {{ var_dump(\Carbon\Carbon::createFromTimestampUTC(strtotime($livescore->time->starting_at->date_time))) }} -->
                                                            </span>
                                                        @elseif($livescore->time->status =='LIVE')
                                                            <span class="green-text text-accent-3">
                                                                <img src="http://gifimage.net/wp-content/uploads/2017/10/new-blinking-icon-gif-4.gif" style="width: 10px;" /> 
                                                                {{ $livescore->time->minute }}'
                                                            </span>
                                                        @elseif($livescore->time->status =='FT')
                                                            <span class="green-text text-accent-3">
                                                                {{ $livescore->time->status }}
                                                            </span>
                                                        @else
                                                            <span class="red-text">
                                                                {{ $livescore->time->status }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                    <div class="col s1 m1 home-team center-align hide">
                                                        <!-- <span></span> -->
                                                        <!-- <img src="<?php //{{ $livescore->localTeam->data->logo_path }} ?>" width="20"> -->
                                                    </div>
                                                    <div class="col s11 m10 center-align mts white-text">
                                                        <p class="col s5 right-align">{{ $livescore->localTeam->data->name }}</p>
                                                        @if($livescore->time->status =='NS')
                                                            <p class="col s2 secondary-text center-align scs">
                                                                <span class="home-scs">?</span> - 
                                                                <span class="away-scs">?</span>
                                                            </p>
                                                        @elseif($livescore->time->status =='POSTP')
                                                            <p class="col s2 secondary-text center-align scs">
                                                                <span class="home-scs">?</span> - 
                                                                <span class="away-scs">?</span>
                                                            </p>
                                                        @elseif($livescore->time->status =='TBA')
                                                            <p class="col s2 secondary-text center-align scs">
                                                                <span class="home-scs">?</span> - 
                                                                <span class="away-scs">?</span>
                                                            </p>
                                                        @else
                                                            <a href="/matches/{{$livescore->id}}" class="col s2 secondary-text center-align scs">
                                                                <span class="home-scs">{{ $livescore->scores->localteam_score }}</span> - 
                                                                <span class="away-scs">{{ $livescore->scores->visitorteam_score }}</span>
                                                            </a>
                                                        @endif
                                                        <p class="col s5 left-align">{{ $livescore->visitorTeam->data->name }}</p>
                                                    </div>
                                                    <div class="col s1 m1 away-team center-align hide">
                                                        <!-- <span></span> -->
                                                        <!-- <img src="<?php //{{ $livescore->visitorTeam->data->logo_path }} ?>" width="20"> -->
                                                    </div>
                                                </li>
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

                            <!--odds tab -->
                            <div id="odds" class="col s12">
                                <ul class="collapsible expandable">
                                   
                                    @foreach ($livescores_odds as $livescore)
                                    <li class="bold row active">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title"><?php //{{ SoccerAPI::countries()->byId($livescore->league->data->country_id)->data->name }} - ?> {{ $livescore->league->data->name }}</span>
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
                                                        <div class="col s1 time hide-on-small-only">
                                                            <span class="white-text">
                                                                @if($livescore->time->status =='NS')         
                                                                    <!-- {{ $livescore->time->starting_at->timezone }} --> {{ \Carbon\Carbon::parse($livescore->time->starting_at->date_time)->format('h:i') }}
                                                                    <!-- {{ var_dump(\Carbon\Carbon::createFromTimestampUTC(strtotime($livescore->time->starting_at->date_time))) }} -->
                                                                @elseif($livescore->time->status =='LIVE')
                                                                    {{ $livescore->time->minute }}:{{ $livescore->time->second }}
                                                                @else
                                                                    {{ $livescore->time->status }}
                                                                @endif
                                                            </span>
                                                        </div>
                                                        

                                                        <div class="col s1 m2 home-team center-align hide">
                                                            <!-- <span></span> -->
                                                            <!-- <img src="<?php //{{ $livescore->localTeam->data->logo_path }} ?>" width="20"> -->
                                                        </div>
                                                        <div class="col s11 m10 center-align mts white-text">
                                                            <p class="col s4 right-align hide-on-small-only">{{ $livescore->localTeam->data->name }}</p>
                                                            @if($livescore->time->status =='NS')
                                                                <p class="col s4 secondary-text center-align scs">
                                                                    <span class="home-scs">?</span> - 
                                                                    <span class="away-scs">?</span>
                                                                </p>
                                                            @else
                                                                <p class="col s4 secondary-text center-align scs">
                                                                    <span class="home-scs">{{ $livescore->scores->localteam_score }}</span> - 
                                                                    <span class="away-scs">{{ $livescore->scores->visitorteam_score }}</span>
                                                                </p>
                                                            @endif
                                                            <p class="col s4 left-align">{{ $livescore->visitorTeam->data->name }}</p>
                                                        </div>
                                                        <div class="col s1 m2 away-team center-align hide">
                                                            <!-- <span></span> -->
                                                            <!-- <img src="<?php //{{ $livescore->visitorTeam->data->logo_path }} ?>" width="20"> -->
                                                        </div>
                                                        

                                                    </div>
                                                    <div class="col s6 m5 white-text">
                                                    @if(count($livescore->flatOdds->data) == 0)
                                                        <div class="col s12 m12 center-align">No odds available on this match</div>
                                                    @else
                                                        @foreach ($livescore->flatOdds->data[0] as $odd)
                                                            
                                                            <div class="col s3 m2 center-align">
                                                                @if($odd[0] == '')
                                                                    <span>-</span>
                                                                @else
                                                                    <span>{{ $odd[0]->value }}</span>
                                                                @endif
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                       
                                                    </div>
                                                </li>
                                            </ol>
                                            <!-- // end list of matches and their odds under this group //-->
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
                            <!-- // end odds tab// -->


                            <div id="table" class="col s12">
                                <ul class="collapsible expandable">


                                    <?php foreach(array(8, 82, 564, 384, 301) as $league): 
                                        $league_details = SoccerAPI::leagues()->byId($league);
                                    ?>


                                        <li class="bold row active">
                                            <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                                <span class="title"><?php echo $league_details->data->name; ?></span>
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

                                                            <?php $league_standings = SoccerAPI::standings()->bySeasonId($league_details->data->current_season_id) ?>
                                                
                                                            <tr class="secondary-text">
                                                                <?php foreach($league_standings as $standing): ?>

                                                                    <?php foreach ($standing->standings as $team_stand): ?>

                                                                        <?php foreach ($team_stand as $team_s): ?>

                                                                            <tr>
                                                                                <td></td>
                                                                                <td>1</td>
                                                                                <!-- <td><span class="up"></span></td> -->
                                                                                <td><?php echo $team_s->team_name; ?></td>
                                                                                <td><?php echo $team_s->overall->games_played; ?></td>
                                                                                <td><?php echo $team_s->overall->won; ?></td>
                                                                                <td><?php echo $team_s->overall->draw; ?></td>
                                                                                <td><?php echo $team_s->overall->lost; ?></td>
                                                                                <td><?php echo $team_s->points; ?></td>
                                                                            </tr>
                                                                            
                                                                        <?php endforeach ?>
                                                                        
                                                                    <?php endforeach ?>

                                                                <?php endforeach ?>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>
                                       
                                    <?php endforeach ?>

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