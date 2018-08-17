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
                                <ul class="collapsible expandable" style="border: none;">
                                   <li class="bold active row">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1" style="border: none;">
                                            <span class="title"> 
                                                {{ $country_details->name }} 
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--// end tab headings //-->

                            <!-- Live score for day tab -->
                            <div id="day" class="col s12">
                                <ul class="collapsible expandable">
                                    @foreach ($country_leagues as $livescore_league)
                                    <li class="bold active row">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title"> {{ $livescore_league->name }} </span>
                                        </div>

                                        <div class="collapsible-body">
                                            <!-- list of matches under this group -->
                                            <?php 
                                                $where_array = array('league_id' => $livescore_league->spm_id);
                                                $livescores_fxle  = DB::table('fixtures_leagues')->where($where_array)->orderBy('starting_date', 'asc')->get();
                                            ?>
                                            @if(isset($livescores_fxle))

                                                @foreach ($livescores_fxle as $key => $livescores_fl)
                                                <ol>
                                                    <span class="col s12 primary lighter secondary-text dark z-depth-1 date" style="color: #FFD91B; font-size: 12px; margin-top: 10px; padding-top: 7px; padding-bottom: 7px;">
                                                        {{ \Carbon\Carbon::parse($livescores_fl->starting_date_time)->format('F d') }} - {{ $livescores_fl->stage_name }}
                                                    </span>
                                                    <!-- Fixtures foreach -->
                                                    <?php 
                                                        $where_array = array('league_id' => $livescores_fl->league_id, 'starting_date' => $livescores_fl->starting_date);
                                                        $livescores = DB::table('fixtures')->where($where_array)->orderBy('starting_time', 'asc')->get() 
                                                    ?>
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
                                                @endforeach
                                            <!--// end list of matches under this group //-->
                                            @else
                                                <h3>No Fixtures available on this League.</h3>
                                            @endif
                                        </div>

                                    </li>

                                    <div class="ads-none text-center" style="display: none; text-align: center; margin: 10px 0px 10px;">
                                        <a href="/">
                                            <img src="{{ asset('images/728x90.png') }}" style="width: 100%;" class="text-center" alt="ADS on {{ config('app.name') }}">
                                        </a>
                                    </div>

                                    @endforeach

                                    <div class="ads-none text-center" style="text-align: center; margin: 10px 0px 10px;">
                                        <a href="/">
                                            <img src="{{ asset('images/728x90.png') }}" style="width: 100%;" class="text-center" alt="ADS on {{ config('app.name') }}">
                                        </a>
                                    </div>
                                   
                                </ul>
                            </div>
                            <!--// end live score for day tab //-->

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