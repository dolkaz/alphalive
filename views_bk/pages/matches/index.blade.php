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
                            <!-- Live score for day tab -->
                            <div id="match" class="col s12 no-margin">
                                <ul class="collapsible expandable no-margin">
                                    
                                    <li class="bold active row">
                                        <div class="collapsible-header primary lighter center-align secondary-text z-depth-1">
                                            <span class="title">{{ $livescores_oda->data->league->data->name }} - 
                                                @if($livescores_oda->data->stage_id !== null)
                                                    {{ $livescores_oda->data->stage->data->name }} ({{ $livescores_oda->data->stage->data->type }})
                                                @endif
                                            </span>
                                        </div>
                                        <div class="collapsible-body">
                                            <!-- Match possesion stats -->
                                            <div class="mst row z-depth-1 primary dark">
                                                <div class="ast">
                                                    
                                                    <!-- Possession indicator -->
                                                    <div class="pos">
                                                        <div class="team" style="background: none;">
                                                            <img src="{{ $livescores->data->localTeam->data->logo_path }}" style="width: 100%">
                                                        </div>

                                                        <div class="pos-prog hide-on-small-only">
                                                            <span class="right" style="background-color: #CE1D2B; width: 40%"></span>
                                                        </div>

                                                        <div class="score secondary-text">
                                                            <span class="home">{{ $livescores->data->scores->localteam_score }}</span> - 
                                                            <span class="away">{{ $livescores->data->scores->visitorteam_score }}</span>
                                                        </div>

                                                        <div class="pos-prog hide-on-small-only">
                                                            <span style="background-color: #1C75BC; width: 60%"></span>
                                                        </div>

                                                        <div class="team" style="background: none;">
                                                            <img src="{{ $livescores->data->visitorTeam->data->logo_path }}" style="width: 100%">
                                                        </div>
                                                    </div>
                                                    <!-- // End possession indicator // -->

                                                    <!-- Team name and ish -->
                                                    <div class="deta">
                                                        <p>{{ $livescores->data->localTeam->data->name }}</p>
                                                        <p>
                                                            <span>{{ $livescores->data->time->status }}</span> | 
                                                            <!-- <span class="green-text text-accent-3"> -->
                                                            @if($livescores->data->time->status =='LIVE')
                                                                <span class="green-text text-accent-3">
                                                                    {{ $livescores->data->time->minute }}:{{ $livescores->data->time->second }}'
                                                                </span>
                                                            @elseif($livescores->data->time->status =='FT')
                                                                <span class="green-text text-accent-3">
                                                                    @if($livescores->data->time->extra_minute !== null)
                                                                        {{ $livescores->data->time->minute }} + {{ $livescores->data->time->extra_minute }}
                                                                    @else 
                                                                        {{ $livescores->data->time->minute }} + {{ $livescores->data->time->injury_time }}
                                                                    @endif                                                                         
                                                                </span>
                                                            @else
                                                                <span class="red-text">
                                                                    {{ $livescores->data->time->minute }}
                                                                </span>
                                                            @endif
                                                            <!-- </span> -->
                                                        </p>
                                                        <p>{{ $livescores->data->visitorTeam->data->name }}</p>
                                                    </div>

                                                    @if($livescores_oda->data->venue_id !== null)
                                                        <p class="center-align grey-text no-margin">Venue: {{ $livescores_oda->data->venue->data->name }}</p>
                                                    @endif

                                                </div>
                                                
                                                
                                                @foreach($livescores->data->goals->data as $goals)
                                                    <div class="bst row">
                                                        @if($livescores->data->localTeam->data->id == $goals->team_id)
                                                        <!-- home team scorers -->
                                                        
                                                        <div class="col s2 mida">
                                                            <small class="white-text" style="margin: 0px 5px;">{{ $goals->minute }}
                                                                @if($goals->extra_minute !== null) 
                                                                    + {{  $goals->extra_minute }}
                                                                @endif                                                                    
                                                                '
                                                                @if($goals->type == 'penalty') 
                                                                    <span class="red-text"><sup>Pen</sup></span>
                                                                @elseif($goals->type == 'owngoal')
                                                                    <span class="red-text"><sup>OG</sup></span>
                                                                @else
                                                                @endif
                                                            </small> 
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/>
                                                                <path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/>
                                                                <path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/>
                                                                <path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/>
                                                                <path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/>
                                                                <path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/>
                                                                <path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/>
                                                                <path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/>
                                                                <path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/>
                                                                <path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/>
                                                                <path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/>
                                                            </svg>
                                                        </div>

                                                        <div class="col s5">
                                                            <ul>
                                                                <li>
                                                                    <span>
                                                                        {{ $goals->player_name }}<br>
                                                                        <small>{{ $goals->player_assist_name }}</small>
                                                                    </span>
                                                                    <span class="right" style="letter-spacing: 6px;">{{ $goals->result }}</span> 
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- // end home team scorers -->

                                                        @elseif($livescores->data->visitorTeam->data->id == $goals->team_id)

                                                        <div class="col s5"></div>
                                                        
                                                        <!-- away team scorers -->
                                                        <div class="col s5">
                                                            <ul>
                                                                <li> 
                                                                    <span class="left" style="letter-spacing: 6px; margin-left: 17px;">{{ $goals->result }}</span>  
                                                                    <span class="right">
                                                                        {{ $goals->player_name }}<br>
                                                                        <small>{{ $goals->player_assist_name }}</small>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="col s2 mida">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/>
                                                                <path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/>
                                                                <path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/>
                                                                <path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/>
                                                                <path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/>
                                                                <path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/>
                                                                <path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/>
                                                                <path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/>
                                                                <path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/>
                                                                <path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/>
                                                                <path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/>
                                                            </svg>
                                                             <small class="white-text" style="margin: 0px 5px;">
                                                                {{ $goals->minute }} 
                                                                @if($goals->extra_minute !== null) 
                                                                    + {{  $goals->extra_minute }}
                                                                @endif
                                                                '
                                                                <span class="red-text">
                                                                    @if($goals->type == 'penalty') 
                                                                        <sup>Pen</sup>
                                                                    @elseif($goals->type == 'owngoal')
                                                                        <sup>OG</sup>
                                                                    @else
                                                                    @endif
                                                                </span>
                                                            </small>
                                                        </div>

                                                        <!-- // end away team scorers -->
                                                        @else 
                                                        @endif
                                                    </div>
                                                @endforeach
                                                
                                            </div>
                                            <!-- // end Match possesion stats // -->
                                            
                                            <!-- tab headings section -->
                                            <div class="tst row">
                                                <ul class="tabs transparent">
                                                <li class="tab ss col s6 primary dark lighter"><a class="active" href="#matchInfo">Match Info</a></li>
                                                <li class="tab sa col s6 primary dark"><a href="#lineUp">Line up</a></li>
                                              </ul>
                                            </div>
                                            <!-- // end tab headings // -->

                                            <!-- tab body section -->
                                            <!-- basic match info section -->
                                            <div id="matchInfo" class="row primary dark z-depth-1">
                                                <div class="tabl">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <td class="left"><div class="team"></div></td>
                                                                <td>Team Statistics</td>
                                                                <td class="right"><div class="team"></div></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->shots->total }}</td>
                                                                <td>Shots</td>
                                                                <td class="right">{{ $livescores->data->stats->data[1]->shots->total }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->shots->ongoal }}</td>
                                                                <td>Shots on target</td>
                                                                <td class="right">{{ $livescores->data->stats->data[1]->shots->ongoal }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->possessiontime }}% </td>
                                                                <td>Possession</td>
                                                                <td class="right">{{ $livescores->data->stats->data[1]->possessiontime }}% </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->passes }}</td>
                                                                <td>Passes</td>
                                                                <td class="right">{{ $livescores->data->stats->data[0]->passes }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->fouls }}</td>
                                                                <td>Fouls</td>
                                                                <td class="right">{{ $livescores->data->stats->data[1]->fouls }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->yellowcards }}</td>
                                                                <td>Yellow Cards</td>
                                                                <td class="right">{{ $livescores->data->stats->data[1]->yellowcards }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->redcards }}</td>
                                                                <td>Red Cards</td>
                                                                <td class="right">{{ $livescores->data->stats->data[1]->redcards }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->offsides }}</td>
                                                                <td>Offsides</td>
                                                                <td class="right">{{ $livescores->data->stats->data[1]->offsides }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->corners }}</td>
                                                                <td>Corners</td>
                                                                <td class="right">{{ $livescores->data->stats->data[1]->corners }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->goal_attempts }}</td>
                                                                <td>Goal Attempts</td>
                                                                <td class="right">{{ $livescores->data->stats->data[1]->goal_attempts }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->free_kick }}</td>
                                                                <td>Free Kick</td>
                                                                <td class="right">{{ $livescores->data->stats->data[1]->free_kick }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->throw_in }}</td>
                                                                <td>Throw In</td>
                                                                <td class="right">{{ $livescores->data->stats->data[1]->throw_in }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">{{ $livescores->data->stats->data[0]->saves }}</td>
                                                                <td>Saves</td>
                                                                <td class="right">{{ $livescores->data->stats->data[1]->saves }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- // end basic match info section // -->
                                            <!-- Line up section -->
                                            <div id="lineUp" class="row">
                          <!-- formation section -->
                                                <div class="formation z-depth-1">
                                                   <img style="width: 100%; height: auto;" src="img/formation/field.svg" alt="">
                                                   <div class="sides">
                                                     <div class="a">
                                                       <div class="goalkeeper"><img src="img/formation/grey.svg" alt=""></div>
                                                       <div class="defenders">
                                                          <img src="img/formation/red.svg" alt="">
                                                          <img src="img/formation/red.svg" alt="">
                                                          <img src="img/formation/red.svg" alt="">
                                                          <img src="img/formation/red.svg" alt="">
                                                        </div>
                                                        <div class="dm">
                                                          <img src="img/formation/red.svg" alt="">
                                                          <img src="img/formation/red.svg" alt="">
                                                        </div>
                                                        <div class="mid">
                                                          <img src="img/formation/red.svg" alt="">
                                                        </div>
                                                        <div class="strikers">
                                                          <img src="img/formation/red.svg" alt="">
                                                          <img src="img/formation/red.svg" alt="">
                                                          <img src="img/formation/red.svg" alt="">
                                                        </div>
                                                     </div>
                                                     <div class="b">
                                                       <div class="strikers">
                                                          <img src="img/formation/blue.svg" alt="">
                                                          <img src="img/formation/blue.svg" alt="">
                                                       </div>
                                                       <div class="mid">
                                                          <img src="img/formation/blue.svg" alt="">
                                                          <img src="img/formation/blue.svg" alt="">
                                                          <img src="img/formation/blue.svg" alt="">
                                                       </div>
                                                       <div class="dm">
                                                          <img src="img/formation/blue.svg" alt="">
                                                          <img src="img/formation/blue.svg" alt="">
                                                       </div>
                                                       <div class="defenders">
                                                          <img src="img/formation/blue.svg" alt="">
                                                          <img src="img/formation/blue.svg" alt="">
                                                          <img src="img/formation/blue.svg" alt="">
                                                       </div>
                                                       <div class="goalkeeper"><img src="img/formation/grey.svg" alt=""></div>
                                                     </div>
                                                   </div>
                                                </div>
                                                  <!-- // end formation section // -->
                                                  <!-- team line up section -->
                                                <div class="team-line-up col s12 primary dark z-depth-1">
                                                    <div class="col s12 m6">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td><div class="team"></div></td>
                                                                    <td class="secondary-text semibold">{{ $livescores->data->localTeam->data->name }} Lineup</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                @foreach($livescores_oda->data->lineup->data as $lineup)
                                                                    @if($lineup->team_id == $livescores->data->localTeam->data->id)
                                                                    <tr>
                                                                        <td class="white-text">{{ $lineup->formation_position }}</td>
                                                                        <td><div class="team"></div></td>
                                                                        <td class="white-text">{{ $lineup->player_name }} <strong>{{ $lineup->position }}</strong></td>
                                                                        @if($lineup->stats->other->minutes_played !== 90)
                                                                            <!-- substitution -->
                                                                            <td class="">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M5.70788 2.1398H2.42927L3.23704 1.28702C3.5162 0.992304 3.5162 0.515747 3.23704 0.221035C2.95788 -0.0736782 2.50648 -0.0736782 2.22732 0.221035L0.207883 2.35927C0.0712743 2.50349 0 2.69161 0 2.89226C0 3.09292 0.0772138 3.28103 0.207883 3.42525L2.23326 5.56349C2.36987 5.70771 2.554 5.78296 2.73812 5.78296C2.92225 5.78296 3.10043 5.70771 3.24298 5.56349C3.52214 5.26878 3.52214 4.79222 3.24298 4.49751L2.4352 3.64472H5.71382C7.84611 3.64472 9.57451 5.4757 9.57451 7.72054V10.2475C9.57451 10.6614 9.89525 11 10.2873 11C10.6793 11 11 10.6614 11 10.2475V7.72054C11 4.64173 8.62419 2.1398 5.70788 2.1398Z" transform="translate(0 11) scale(1 -1)" fill="#C91922"/></svg>
                                                                            </td>
                                                                            <!-- // end substitution // -->
                                                                        @endif

                                                                        <!-- goal -->
                                                                        <td class="white-text goal">
                                                                          @if($lineup->stats->goals->scored > 0)
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/><path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/><path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/><path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/><path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/><path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/><path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/><path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/><path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/><path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/><path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/></svg> {{ $lineup->stats->goals->scored }}'
                                                                          @endif
                                                                        </td>
                                                                        <!-- // end goal // -->

                                                                        <!-- Yellow card -->
                                                                        <td class="white-text">
                                                                            @if($lineup->stats->cards->yellowcards > 0)
                                                                                <span style="content:' '; display: block; height: 18px; width: 12px; background-color: yellow;"></span>
                                                                            @endif
                                                                         </td>
                                                                        <!-- // end yellowcard // -->

                                                                        <!-- Red card -->
                                                                        <td class="white-text">
                                                                            @if($lineup->stats->cards->redcards > 0)
                                                                                <span style="content: ' '; display: block; height: 18px; width: 12px; background-color: red;"></span>
                                                                            @endif
                                                                        </td>
                                                                        <!-- // end Red card // -->
                                                                    </tr>
                                                                    @endif
                                                                @endforeach
                                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col s12 m6">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td><div class="team"></div></td>
                                                                    <td class="secondary-text semibold">{{ $livescores->data->visitorTeam->data->name }} Lineup</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                @foreach($livescores_oda->data->lineup->data as $lineup)
                                                                    @if($lineup->team_id == $livescores->data->visitorTeam->data->id)
                                                                    <tr>
                                                                        <td class="white-text">{{ $lineup->formation_position }}</td>
                                                                        <td><div class="team"></div></td>
                                                                        <td class="white-text">{{ $lineup->player_name }} <strong>{{ $lineup->position }}</strong></td>
                                                                        @if($lineup->stats->other->minutes_played !== 90)
                                                                            <!-- substitution -->
                                                                            <td class=""><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none"><path d="M5.70788 2.1398H2.42927L3.23704 1.28702C3.5162 0.992304 3.5162 0.515747 3.23704 0.221035C2.95788 -0.0736782 2.50648 -0.0736782 2.22732 0.221035L0.207883 2.35927C0.0712743 2.50349 0 2.69161 0 2.89226C0 3.09292 0.0772138 3.28103 0.207883 3.42525L2.23326 5.56349C2.36987 5.70771 2.554 5.78296 2.73812 5.78296C2.92225 5.78296 3.10043 5.70771 3.24298 5.56349C3.52214 5.26878 3.52214 4.79222 3.24298 4.49751L2.4352 3.64472H5.71382C7.84611 3.64472 9.57451 5.4757 9.57451 7.72054V10.2475C9.57451 10.6614 9.89525 11 10.2873 11C10.6793 11 11 10.6614 11 10.2475V7.72054C11 4.64173 8.62419 2.1398 5.70788 2.1398Z" transform="translate(0 11) scale(1 -1)" fill="#C91922"/></svg></td>
                                                                            <!-- // end substitution // -->
                                                                        @endif

                                                                        <!-- goal -->
                                                                        <td class="white-text goal">
                                                                          @if($lineup->stats->goals->scored > 0)
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/><path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/><path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/><path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/><path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/><path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/><path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/><path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/><path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/><path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/><path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/></svg> ({{ $lineup->stats->goals->scored }}')
                                                                          @endif
                                                                        </td>
                                                                        <!-- // end goal // -->

                                                                        <!-- Yellow card -->
                                                                        <td class="white-text">
                                                                            @if($lineup->stats->cards->yellowcards > 0)
                                                                                <span style="content:' '; display: block; height: 18px; width: 12px; background-color: yellow;"></span>
                                                                            @endif
                                                                         </td>
                                                                        <!-- // end yellowcard // -->

                                                                        <!-- Red card -->
                                                                        <td class="white-text">
                                                                            @if($lineup->stats->cards->redcards > 0)
                                                                                <span style="content: ' '; display: block; height: 18px; width: 12px; background-color: red;"></span>
                                                                            @endif
                                                                        </td>
                                                                        <!-- // end Red card // -->
                                                                    </tr>
                                                                    @endif
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                  <!-- // end team line up section // -->
                                                  <!-- substitution section -->
                                                  <div class="substitution col s12 hide">
                                                   <!-- Substitution section -->
                                                    <ul class="collapsible expandable">
                                                      <li class="bold active row no-margin">
                                                        <div class="collapsible-header primary lighter white-text z-depth-1">
                                                          <h5 class="center-align sa">Substitutes</h5>
                                                        </div>
                                                        <div class="collapsible-body col s12 primary dark white-text z-depth-1">
                                                          <div class="col s12 m6">
                                                            <table>
                                                              <tbody>
                                                                <tr>
                                                                  <td></td>
                                                                  <td><div class="team"></div></td>
                                                                  <td class="secondary-text semibold">Russia Substitutes</td>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td></td>
                                                                </tr>
                                                                <tr>
                                                                  <td class="white-text">23</td>
                                                                  <td><div class="team"></div></td>
                                                                  <td class="white-text">D. Beckham</td>
                                                                  <!-- substitution -->
                                                                  <td class=""><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.70788 2.1398H2.42927L3.23704 1.28702C3.5162 0.992304 3.5162 0.515747 3.23704 0.221035C2.95788 -0.0736782 2.50648 -0.0736782 2.22732 0.221035L0.207883 2.35927C0.0712743 2.50349 0 2.69161 0 2.89226C0 3.09292 0.0772138 3.28103 0.207883 3.42525L2.23326 5.56349C2.36987 5.70771 2.554 5.78296 2.73812 5.78296C2.92225 5.78296 3.10043 5.70771 3.24298 5.56349C3.52214 5.26878 3.52214 4.79222 3.24298 4.49751L2.4352 3.64472H5.71382C7.84611 3.64472 9.57451 5.4757 9.57451 7.72054V10.2475C9.57451 10.6614 9.89525 11 10.2873 11C10.6793 11 11 10.6614 11 10.2475V7.72054C11 4.64173 8.62419 2.1398 5.70788 2.1398Z" transform="translate(11) scale(-1 1)" fill="#00F175"/></svg></td>
                                                                  <!-- // end substitution // -->
                                                                  <!-- goal -->
                                                                  <td class="white-text goal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/><path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/><path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/><path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/><path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/><path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/><path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/><path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/><path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/><path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/><path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/></svg> 11'</td>
                                                                  <!-- // end goal // -->
                                                                  <!-- Yellow card -->
                                                                  <td class="white-text">
                                                                    <span style="content:' '; display: block; height: 18px; width: 12px; background-color: yellow;"></span>
                                                                  </td>
                                                                  <!-- // end yellowcard // -->
                                                                  <!-- Red card -->
                                                                  <td class="white-text">
                                                                    <span style="content: ' '; display: block; height: 18px; width: 12px; background-color: red;"></span>
                                                                  </td>
                                                                  <!-- // end Red card // -->
                                                                </tr>
                                                                <tr>
                                                                  <td class="white-text">23</td>
                                                                  <td><div class="team"></div></td>
                                                                  <td class="white-text">D. Beckham</td>
                                                                  <!-- substitution -->
                                                                  <td class=""><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.70788 2.1398H2.42927L3.23704 1.28702C3.5162 0.992304 3.5162 0.515747 3.23704 0.221035C2.95788 -0.0736782 2.50648 -0.0736782 2.22732 0.221035L0.207883 2.35927C0.0712743 2.50349 0 2.69161 0 2.89226C0 3.09292 0.0772138 3.28103 0.207883 3.42525L2.23326 5.56349C2.36987 5.70771 2.554 5.78296 2.73812 5.78296C2.92225 5.78296 3.10043 5.70771 3.24298 5.56349C3.52214 5.26878 3.52214 4.79222 3.24298 4.49751L2.4352 3.64472H5.71382C7.84611 3.64472 9.57451 5.4757 9.57451 7.72054V10.2475C9.57451 10.6614 9.89525 11 10.2873 11C10.6793 11 11 10.6614 11 10.2475V7.72054C11 4.64173 8.62419 2.1398 5.70788 2.1398Z" transform="translate(11) scale(-1 1)" fill="#00F175"/></svg></td>
                                                                  <!-- // end substitution // -->
                                                                  <!-- goal -->
                                                                  <td class="white-text goal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/><path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/><path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/><path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/><path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/><path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/><path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/><path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/><path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/><path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/><path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/></svg> 11'</td>
                                                                  <!-- // end goal // -->
                                                                  <!-- Yellow card -->
                                                                  <td class="white-text">
                                                                    <span style="content:' '; display: block; height: 18px; width: 12px; background-color: yellow;"></span>
                                                                  </td>
                                                                  <!-- // end yellowcard // -->
                                                                  <!-- Red card -->
                                                                  <td class="white-text">
                                                                    <span style="content: ' '; display: block; height: 18px; width: 12px; background-color: red;"></span>
                                                                  </td>
                                                                  <!-- // end Red card // -->
                                                                </tr>
                                                                <tr>
                                                                  <td class="white-text">23</td>
                                                                  <td><div class="team"></div></td>
                                                                  <td class="white-text">D. Beckham</td>
                                                                  <!-- substitution -->
                                                                  <td class=""><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.70788 2.1398H2.42927L3.23704 1.28702C3.5162 0.992304 3.5162 0.515747 3.23704 0.221035C2.95788 -0.0736782 2.50648 -0.0736782 2.22732 0.221035L0.207883 2.35927C0.0712743 2.50349 0 2.69161 0 2.89226C0 3.09292 0.0772138 3.28103 0.207883 3.42525L2.23326 5.56349C2.36987 5.70771 2.554 5.78296 2.73812 5.78296C2.92225 5.78296 3.10043 5.70771 3.24298 5.56349C3.52214 5.26878 3.52214 4.79222 3.24298 4.49751L2.4352 3.64472H5.71382C7.84611 3.64472 9.57451 5.4757 9.57451 7.72054V10.2475C9.57451 10.6614 9.89525 11 10.2873 11C10.6793 11 11 10.6614 11 10.2475V7.72054C11 4.64173 8.62419 2.1398 5.70788 2.1398Z" transform="translate(11) scale(-1 1)" fill="#00F175"/></svg></td>
                                                                  <!-- // end substitution // -->
                                                                  <!-- goal -->
                                                                  <td class="white-text goal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/><path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/><path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/><path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/><path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/><path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/><path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/><path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/><path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/><path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/><path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/></svg> 11'</td>
                                                                  <!-- // end goal // -->
                                                                  <!-- Yellow card -->
                                                                  <td class="white-text">
                                                                    <span style="content:' '; display: block; height: 18px; width: 12px; background-color: yellow;"></span>
                                                                  </td>
                                                                  <!-- // end yellowcard // -->
                                                                  
                                                                  <!-- Red card -->
                                                                  <td class="white-text">
                                                                    <span style="content: ' '; display: block; height: 18px; width: 12px; background-color: red;"></span>
                                                                  </td>
                                                                  <!-- // end Red card // -->
                                                                </tr>
                                                                <tr>
                                                                  <td class="white-text">23</td>
                                                                  <td><div class="team"></div></td>
                                                                  <td class="white-text">D. Beckham</td>
                                                                  <!-- substitution -->
                                                                  <td class=""><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.70788 2.1398H2.42927L3.23704 1.28702C3.5162 0.992304 3.5162 0.515747 3.23704 0.221035C2.95788 -0.0736782 2.50648 -0.0736782 2.22732 0.221035L0.207883 2.35927C0.0712743 2.50349 0 2.69161 0 2.89226C0 3.09292 0.0772138 3.28103 0.207883 3.42525L2.23326 5.56349C2.36987 5.70771 2.554 5.78296 2.73812 5.78296C2.92225 5.78296 3.10043 5.70771 3.24298 5.56349C3.52214 5.26878 3.52214 4.79222 3.24298 4.49751L2.4352 3.64472H5.71382C7.84611 3.64472 9.57451 5.4757 9.57451 7.72054V10.2475C9.57451 10.6614 9.89525 11 10.2873 11C10.6793 11 11 10.6614 11 10.2475V7.72054C11 4.64173 8.62419 2.1398 5.70788 2.1398Z" transform="translate(11) scale(-1 1)" fill="#00F175"/></svg></td>
                                                                  <!-- // end substitution // -->
                                                                  <!-- goal -->
                                                                  <td class="white-text goal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/><path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/><path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/><path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/><path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/><path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/><path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/><path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/><path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/><path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/><path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/></svg> 11'</td>
                                                                  <!-- // end goal // -->
                                                                  <!-- Yellow card -->
                                                                  <td class="white-text">
                                                                    <span style="content:' '; display: block; height: 18px; width: 12px; background-color: yellow;"></span>
                                                                  </td>
                                                                  <!-- // end yellowcard // -->
                                                                  <!-- Red card -->
                                                                  <td class="white-text">
                                                                    <span style="content: ' '; display: block; height: 18px; width: 12px; background-color: red;"></span>
                                                                  </td>
                                                                  <!-- // end Red card // -->
                                                                </tr>
                                                                <tr>
                                                                  <td class="white-text">23</td>
                                                                  <td><div class="team"></div></td>
                                                                  <td class="white-text">D. Beckham</td>
                                                                  <!-- substitution -->
                                                                  <td class=""><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.70788 2.1398H2.42927L3.23704 1.28702C3.5162 0.992304 3.5162 0.515747 3.23704 0.221035C2.95788 -0.0736782 2.50648 -0.0736782 2.22732 0.221035L0.207883 2.35927C0.0712743 2.50349 0 2.69161 0 2.89226C0 3.09292 0.0772138 3.28103 0.207883 3.42525L2.23326 5.56349C2.36987 5.70771 2.554 5.78296 2.73812 5.78296C2.92225 5.78296 3.10043 5.70771 3.24298 5.56349C3.52214 5.26878 3.52214 4.79222 3.24298 4.49751L2.4352 3.64472H5.71382C7.84611 3.64472 9.57451 5.4757 9.57451 7.72054V10.2475C9.57451 10.6614 9.89525 11 10.2873 11C10.6793 11 11 10.6614 11 10.2475V7.72054C11 4.64173 8.62419 2.1398 5.70788 2.1398Z" transform="translate(11) scale(-1 1)" fill="#00F175"/></svg></td>
                                                                  <!-- // end substitution // -->
                                                                  <!-- goal -->
                                                                  <td class="white-text goal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/><path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/><path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/><path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/><path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/><path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/><path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/><path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/><path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/><path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/><path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/></svg> 11'</td>
                                                                  <!-- // end goal // -->
                                                                  <!-- Yellow card -->
                                                                  <td class="white-text">
                                                                    <span style="content:' '; display: block; height: 18px; width: 12px; background-color: yellow;"></span>
                                                                  </td>
                                                                  <!-- // end yellowcard // -->
                                                                  <!-- Red card -->
                                                                  <td class="white-text">
                                                                    <span style="content: ' '; display: block; height: 18px; width: 12px; background-color: red;"></span>
                                                                  </td>
                                                                  <!-- // end Red card // -->
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </div>
                                                          <div class="col s12 m6">
                                                            <table>
                                                              <tbody>
                                                                <tr>
                                                                  <td></td>
                                                                  <td><div class="team"></div></td>
                                                                  <td class="secondary-text semibold">Egypt Substitutes</td>
                                                                  <td></td>
                                                                  <td></td>
                                                                  <td></td>
                                                                </tr>
                                                                <tr>
                                                                  <td class="white-text">23</td>
                                                                  <td><div class="team"></div></td>
                                                                  <td class="white-text">D. Beckham</td>
                                                                  <!-- substitution -->
                                                                  <td class=""><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.70788 2.1398H2.42927L3.23704 1.28702C3.5162 0.992304 3.5162 0.515747 3.23704 0.221035C2.95788 -0.0736782 2.50648 -0.0736782 2.22732 0.221035L0.207883 2.35927C0.0712743 2.50349 0 2.69161 0 2.89226C0 3.09292 0.0772138 3.28103 0.207883 3.42525L2.23326 5.56349C2.36987 5.70771 2.554 5.78296 2.73812 5.78296C2.92225 5.78296 3.10043 5.70771 3.24298 5.56349C3.52214 5.26878 3.52214 4.79222 3.24298 4.49751L2.4352 3.64472H5.71382C7.84611 3.64472 9.57451 5.4757 9.57451 7.72054V10.2475C9.57451 10.6614 9.89525 11 10.2873 11C10.6793 11 11 10.6614 11 10.2475V7.72054C11 4.64173 8.62419 2.1398 5.70788 2.1398Z" transform="translate(11) scale(-1 1)" fill="#00F175"/></svg></td>
                                                                  <!-- // end substitution // -->
                                                                  <!-- goal -->
                                                                  <td class="white-text goal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/><path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/><path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/><path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/><path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/><path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/><path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/><path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/><path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/><path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/><path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/></svg> 11'</td>
                                                                  <!-- // end goal // -->
                                                                  <!-- Yellow card -->
                                                                  <td class="white-text">
                                                                    <span style="content:' '; display: block; height: 18px; width: 12px; background-color: yellow;"></span>
                                                                  </td>
                                                                  <!-- // end yellowcard // -->
                                                                  <!-- Red card -->
                                                                  <td class="white-text">
                                                                    <span style="content: ' '; display: block; height: 18px; width: 12px; background-color: red;"></span>
                                                                  </td>
                                                                  <!-- // end Red card // -->
                                                                </tr>
                                                                <tr>
                                                                  <td class="white-text">23</td>
                                                                  <td><div class="team"></div></td>
                                                                  <td class="white-text">D. Beckham</td>
                                                                  <!-- substitution -->
                                                                  <td class=""><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.70788 2.1398H2.42927L3.23704 1.28702C3.5162 0.992304 3.5162 0.515747 3.23704 0.221035C2.95788 -0.0736782 2.50648 -0.0736782 2.22732 0.221035L0.207883 2.35927C0.0712743 2.50349 0 2.69161 0 2.89226C0 3.09292 0.0772138 3.28103 0.207883 3.42525L2.23326 5.56349C2.36987 5.70771 2.554 5.78296 2.73812 5.78296C2.92225 5.78296 3.10043 5.70771 3.24298 5.56349C3.52214 5.26878 3.52214 4.79222 3.24298 4.49751L2.4352 3.64472H5.71382C7.84611 3.64472 9.57451 5.4757 9.57451 7.72054V10.2475C9.57451 10.6614 9.89525 11 10.2873 11C10.6793 11 11 10.6614 11 10.2475V7.72054C11 4.64173 8.62419 2.1398 5.70788 2.1398Z" transform="translate(11) scale(-1 1)" fill="#00F175"/></svg></td>
                                                                  <!-- // end substitution // -->
                                                                  <!-- goal -->
                                                                  <td class="white-text goal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/><path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/><path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/><path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/><path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/><path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/><path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/><path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/><path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/><path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/><path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/></svg> 11'</td>
                                                                  <!-- // end goal // -->
                                                                  <!-- Yellow card -->
                                                                  <td class="white-text">
                                                                    <span style="content:' '; display: block; height: 18px; width: 12px; background-color: yellow;"></span>
                                                                  </td>
                                                                  <!-- // end yellowcard // -->
                                                                  <!-- Red card -->
                                                                  <td class="white-text">
                                                                    <span style="content: ' '; display: block; height: 18px; width: 12px; background-color: red;"></span>
                                                                  </td>
                                                                  <!-- // end Red card // -->
                                                                </tr>
                                                                <tr>
                                                                  <td class="white-text">23</td>
                                                                  <td><div class="team"></div></td>
                                                                  <td class="white-text">D. Beckham</td>
                                                                  <!-- substitution -->
                                                                  <td class=""><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.70788 2.1398H2.42927L3.23704 1.28702C3.5162 0.992304 3.5162 0.515747 3.23704 0.221035C2.95788 -0.0736782 2.50648 -0.0736782 2.22732 0.221035L0.207883 2.35927C0.0712743 2.50349 0 2.69161 0 2.89226C0 3.09292 0.0772138 3.28103 0.207883 3.42525L2.23326 5.56349C2.36987 5.70771 2.554 5.78296 2.73812 5.78296C2.92225 5.78296 3.10043 5.70771 3.24298 5.56349C3.52214 5.26878 3.52214 4.79222 3.24298 4.49751L2.4352 3.64472H5.71382C7.84611 3.64472 9.57451 5.4757 9.57451 7.72054V10.2475C9.57451 10.6614 9.89525 11 10.2873 11C10.6793 11 11 10.6614 11 10.2475V7.72054C11 4.64173 8.62419 2.1398 5.70788 2.1398Z" transform="translate(11) scale(-1 1)" fill="#00F175"/></svg></td>
                                                                  <!-- // end substitution // -->
                                                                  <!-- goal -->
                                                                  <td class="white-text goal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/><path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/><path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/><path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/><path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/><path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/><path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/><path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/><path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/><path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/><path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/></svg> 11'</td>
                                                                  <!-- // end goal // -->
                                                                  <!-- Yellow card -->
                                                                  <td class="white-text">
                                                                    <span style="content:' '; display: block; height: 18px; width: 12px; background-color: yellow;"></span>
                                                                  </td>
                                                                  <!-- // end yellowcard // -->
                                                                  <!-- Red card -->
                                                                  <td class="white-text">
                                                                    <span style="content: ' '; display: block; height: 18px; width: 12px; background-color: red;"></span>
                                                                  </td>
                                                                  <!-- // end Red card // -->
                                                                </tr>
                                                                <tr>
                                                                  <td class="white-text">23</td>
                                                                  <td><div class="team"></div></td>
                                                                  <td class="white-text">D. Beckham</td>
                                                                  <!-- substitution -->
                                                                  <td class=""><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.70788 2.1398H2.42927L3.23704 1.28702C3.5162 0.992304 3.5162 0.515747 3.23704 0.221035C2.95788 -0.0736782 2.50648 -0.0736782 2.22732 0.221035L0.207883 2.35927C0.0712743 2.50349 0 2.69161 0 2.89226C0 3.09292 0.0772138 3.28103 0.207883 3.42525L2.23326 5.56349C2.36987 5.70771 2.554 5.78296 2.73812 5.78296C2.92225 5.78296 3.10043 5.70771 3.24298 5.56349C3.52214 5.26878 3.52214 4.79222 3.24298 4.49751L2.4352 3.64472H5.71382C7.84611 3.64472 9.57451 5.4757 9.57451 7.72054V10.2475C9.57451 10.6614 9.89525 11 10.2873 11C10.6793 11 11 10.6614 11 10.2475V7.72054C11 4.64173 8.62419 2.1398 5.70788 2.1398Z" transform="translate(11) scale(-1 1)" fill="#00F175"/></svg></td>
                                                                  <!-- // end substitution // -->
                                                                  <!-- goal -->
                                                                  <td class="white-text goal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/><path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/><path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/><path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/><path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/><path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/><path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/><path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/><path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/><path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/><path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/></svg> 11'</td>
                                                                  <!-- // end goal // -->
                                                                  <!-- Yellow card -->
                                                                  <td class="white-text">
                                                                    <span style="content:' '; display: block; height: 18px; width: 12px; background-color: yellow;"></span>
                                                                  </td>
                                                                  <!-- // end yellowcard // -->
                                                                  <!-- Red card -->
                                                                  <td class="white-text">
                                                                    <span style="content: ' '; display: block; height: 18px; width: 12px; background-color: red;"></span>
                                                                  </td>
                                                                  <!-- // end Red card // -->
                                                                </tr>
                                                                <tr>
                                                                  <td class="white-text">23</td>
                                                                  <td><div class="team"></div></td>
                                                                  <td class="white-text">D. Beckham</td>
                                                                  <!-- substitution -->
                                                                  <td class=""><svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.70788 2.1398H2.42927L3.23704 1.28702C3.5162 0.992304 3.5162 0.515747 3.23704 0.221035C2.95788 -0.0736782 2.50648 -0.0736782 2.22732 0.221035L0.207883 2.35927C0.0712743 2.50349 0 2.69161 0 2.89226C0 3.09292 0.0772138 3.28103 0.207883 3.42525L2.23326 5.56349C2.36987 5.70771 2.554 5.78296 2.73812 5.78296C2.92225 5.78296 3.10043 5.70771 3.24298 5.56349C3.52214 5.26878 3.52214 4.79222 3.24298 4.49751L2.4352 3.64472H5.71382C7.84611 3.64472 9.57451 5.4757 9.57451 7.72054V10.2475C9.57451 10.6614 9.89525 11 10.2873 11C10.6793 11 11 10.6614 11 10.2475V7.72054C11 4.64173 8.62419 2.1398 5.70788 2.1398Z" transform="translate(11) scale(-1 1)" fill="#00F175"/></svg></td>
                                                                  <!-- // end substitution // -->
                                                                  <!-- goal -->
                                                                  <td class="white-text goal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M0 1.31702V5.29025L3.29685 7.68551L6.54462 5.79482V2.08873C5.6714 1.21618 4.6339 0.507192 3.46974 0L0 1.31702Z" transform="translate(10.5078 0.838867)" fill="white"/><path d="M3.17316 0L0 2.30539L1.21208 6.03561H5.1343L6.34638 2.30539L3.17316 0Z" transform="translate(6.80859 7.04443)" fill="white"/><path d="M7.16495 5.50684L9.01154 2.5287L6.62172 0H2.38948L0 2.52836L1.85359 5.50933C3.59538 5.99246 5.42006 5.99212 7.16495 5.50684Z" transform="translate(5.47656 14.1289)" fill="white"/><path d="M0 0.306802L2.4407 1.23326L4.88262 0.306399C4.07992 0.102379 3.26108 0 2.44198 0C1.62301 0 0.803843 0.102648 0 0.306802Z" transform="translate(7.54102)" fill="white"/><path d="M4.54402 0L1.28946 1.89466L0 5.86305L2.3675 8.36816L5.93202 7.00254C6.05074 6.77324 6.16152 6.53857 6.2635 6.29838C6.71846 5.22653 6.97935 4.10533 7.0461 2.9764L4.54402 0Z" transform="translate(12.918 7.60742)" fill="white"/><path d="M7.04502 5.86272L5.75556 1.89432L2.50161 0L0 2.98467C0.0643316 4.05303 0.302231 5.11547 0.714908 6.13678C0.830463 6.42274 0.958589 6.70118 1.09774 6.97229L4.679 8.36634L7.04502 5.86272Z" transform="translate(0 7.60791)" fill="white"/><path d="M3.66858 0L1.2549 0.927734L0 2.95152C1.45785 2.26653 2.70737 1.25645 3.66858 0Z" transform="translate(14.2441 16.0889)" fill="white"/><path d="M0 0V2.57058L1.8191 4.72088C1.71766 3.82972 1.49455 2.94675 1.14943 2.09256C0.84626 1.34216 0.459531 0.641636 0 0Z" transform="translate(18.0996 4.16357)" fill="white"/><path d="M3.66973 2.95166L2.41509 0.928272L0 0C0.959866 1.25464 2.20959 2.26478 3.66973 2.95166Z" transform="translate(2.04883 16.0884)" fill="white"/><path d="M3.24777 7.68578L6.54462 5.29052V1.31729L3.07421 0C1.91146 0.506049 0.874023 1.21524 0 2.089V5.79509L3.24777 7.68578Z" transform="translate(2.91211 0.838379)" fill="white"/><path d="M0 4.72115L1.8189 2.57105V0C1.39271 0.595118 1.02917 1.24166 0.736218 1.93183C0.352917 2.83489 0.107824 3.77291 0 4.72115Z" transform="translate(0.0449219 4.16309)" fill="white"/></svg> 11'</td>
                                                                  <!-- // end goal // -->
                                                                  <!-- Yellow card -->
                                                                  <td class="white-text">
                                                                    <span style="content:' '; display: block; height: 18px; width: 12px; background-color: yellow;"></span>
                                                                  </td>
                                                                  <!-- // end yellowcard // -->
                                                                  <!-- Red card -->
                                                                  <td class="white-text">
                                                                    <span style="content: ' '; display: block; height: 18px; width: 12px; background-color: red;"></span>
                                                                  </td>
                                                                  <!-- // end Red card // -->
                                                                </tr>
                                                              </tbody>
                                                            </table>
                                                          </div>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <!-- // end substitution section // -->
                                                  </div>
                                                  <!-- // end substitution section // -->
                                                  <!-- addititonal information section -->
                                                  <div class="additional-info col s12">
                                                   <!-- Substitution section -->
                                                    <ul class="collapsible expandable">
                                                      <li class="bold active row no-margin">
                                                        <div class="collapsible-header primary lighter white-text z-depth-1">
                                                          <h5 class="center-align sa">Additional Information</h5>
                                                        </div>
                                                        <div class="collapsible-body col s12 primary dark white-text z-depth-1">
                                                          <div class="col s12 m6">
                                                            <table>
                                                              <tbody>

                                                                <tr>
                                                                    <td class="secondary-text">Referee</td>
                                                                    <td><div class="team"></div></td>
                                                                    <td class="">
                                                                        <?php //{{ $livescores->data->referee->data->fullname }} ({{ $livescores->data->referee->data->common_name }}) ?>
                                                                    </td>
                                                                </tr>
                                                                
                                                              </tbody>
                                                            </table>
                                                          </div>
                                                        </div>
                                                      </li>
                                                    </ul>
                                                    <!-- // end substitution section // -->
                                                  </div>
                                                  <!-- // end additional infromation section // -->
                                            </div>
                                            <!-- // End line up section -->
                                            <!-- // end tab body section // -->
                                        </div>
                                    </li>

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