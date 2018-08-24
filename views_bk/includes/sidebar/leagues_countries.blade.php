<div class="primary dark z-depth-1">
    <div class="saii"><img src=images/e3805ee62b68.svg alt="" class="saimg"><a href="/">Home</a></div>
    <!-- <div class="saii"><img src=images/0cf54f6e0a6d.svg alt="" class="saimg"><a href="#!">Live</a></div> -->

    <!-- Collapsible  section -->
    <ul class="collapsible expandable z-depth-0">
        


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
    
    </ul>
    <!-- // end collapsible section // -->

</div>


<!-- bet add section -->
<div class="bet-ad hide-on-med-and-down z-depth-1" style="text-align: center; margin: 10px 0px 10px; padding: 0;">
    <a href="/">
        <img src="{{ asset('images/300x250-goalnownow.png') }}" style="width: 100%;" alt="ADS on {{ config('app.name') }}">
    </a>
</div>


<div class="primary dark z-depth-1">

    <!-- Collapsible  section -->
    <ul class="collapsible expandable z-depth-0">
       
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

    </ul>
    <!-- // end collapsible section // -->
</div>


<!-- bet add section -->
<div class="bet-ad hide-on-med-and-down z-depth-1" style="text-align: center; margin: 10px 0px 10px; padding: 0;">
    <a href="/">
        <img src="{{ asset('images/300x250-goalnownow.png') }}" style="width: 100%;" alt="ADS on {{ config('app.name') }}">
    </a>
</div>