@include('includes.header')

    <!-- Content section -->
    <main class="container">

        <!-- Advertisment section -->
        <div class="co">

            <div class="ads-none text-center hide-sm hide-xs hide-on-small-only" style="text-align: center; margin: 10px 0px 10px;">
                <!-- Inner mast head -->
                <ins class="adsbygoogle"
                    style="display:inline-block;width:970px;height:90px"
                    data-ad-client="ca-pub-8933541584844926"
                    data-ad-slot="3964450261"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>

            <!-- Custom Adverts -->
            <?php 
                $where_array       = array('status' => 1, 'type' => 'top-inner');
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
                            <!-- tab headings-->
                            <div class="col s12 no-padding">
                                <ul class="collapsible expandable" style="border: none;">
                                   <li class="bold active row">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1" style="border: none;">
                                            <span class="title"> 
                                                <?php $country = DB::table('countries')->where('spm_id', $league_details->spm_country_id_id)->value('name') ?>
                                                {{ $country }} - {{ $league_details->name }} </span>
                                            
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--// end tab headings //-->

                            <!-- Live score for day tab -->
                            <div id="day" class="col s12">
                                <ul class="collapsible expandable">
                                    @foreach ($league_fixture_day as $livescore_league)
                                    <li class="bold active row">
                                        <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                            <span class="title" style="display: none;"> 
                                                {{ $livescore_league->league_name }} </span>
                                            <span class="date">{{ \Carbon\Carbon::parse($livescore_league->starting_date_time)->format('F d') }} - {{ $livescore_league->stage_name }}</span>
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
                                                                <a href="/matches/{{$livescore->spm_id}}" target="_blank" class="col s2 secondary-text center-align scs">
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

                            
                            @if($league_details->league_table == '1')
                                <div id="table" class="col s12">
                                    <ul class="collapsible expandable">

                                            <li class="bold row active">
                                                <div class="collapsible-header primary lighter secondary-text z-depth-1">
                                                    <span class="title"><?php echo $league_details->name; ?> Table</span>
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
                                                                $chk_array      = array('spm_league_id' => $league_details->spm_id, 'spm_season_id' => $league_details->current_season_id);
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

                                    </ul>
                                </div>
                            @endif


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
        $where_array        = array('status' => 1, 'type' => 'mobile-inner');
        $ads_placement      = DB::table('ads')->where($where_array)->inRandomOrder()->first();
    ?>
    <?php if ($ads_placement !== null): ?>
        <div class="static-ads hide-on-large-only text-center"  style="text-align: center;">
            <a class=" text-center" href="{{ $ads_placement->url }}" target="_blank">
                <img src="{{ $ads_placement->image }}" alt="{{ $ads_placement->notes }} - {{ config('app.name') }}" style="text-align: center; width: 100%;">
            </a>
        </div>
    <?php endif ?>
    <!--// End Static Ads Section [MOBILE] -->
    
@include('includes.footer')