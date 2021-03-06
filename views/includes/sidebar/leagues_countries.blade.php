@include('includes.sidebar.left_news')
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
                    <?php $leagues = DB::table('leagues')->where('status', '1')->orderBy('sort_order', 'ASC')->limit(10)->get() ?>
                    @foreach ($leagues as $league)
                        <li>
                            <a href="/leagues/{{ $league->spm_id }}">{{ $league->name }}</a>
                        </li>
                    @endforeach
                    <!-- <li><a class="secondary-text" href="#/leagues/"><strong>View More</strong></a></li> -->
                </ul>
            </div>
        </li>
        <!-- //end top leagues seciton //-->
    
    </ul>
    <!-- // end collapsible section // -->

</div>


<!-- bet add section -->
<div class="bet-ad hide-on-med-and-down z-depth-1" style="text-align: center; margin: 10px 0px 10px; padding: 0; overflow: hidden;">
    <!-- Rectangule left -->
    <ins class="adsbygoogle"
        style="display:inline-block;width:300px;height:250px"
        data-ad-client="ca-pub-8933541584844926"
        data-ad-slot="4211862271"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>


<div class="primary dark z-depth-1">

    <!-- Collapsible  section -->
    <ul class="collapsible expandable z-depth-0">
       
        <!-- Countries section -->
       <li class="bold active">
            <a class="collapsible-header secondary-text">Countries</a>
            <div class="collapsible-body">
                <ul>

                    <?php $countries = DB::table('countries')->where('status', '1')->orderBy('sort_order', 'ASC')->get() ?>
                    @foreach ($countries as $country)
                        <li>
                            <a href="/countries/{{$country->spm_id}}">{{ $country->name }}<!--  - <strong> {{ $country->name }} </strong> --></a>
                        </li>
                    @endforeach
                    <!-- <li><a class="secondary-text" href="#/countries/"><strong>View More</strong></a></li> -->
                </ul>
            </div>
        </li>
        <!--// end countries section // --->

    </ul>
    <!-- // end collapsible section // -->
</div>


<!-- bet add section -->
<div class="bet-ad hide-on-med-and-down z-depth-1" style="text-align: center; margin: 10px 0px 10px; padding: 0; overflow: hidden;">
    <!-- Long left -->
    <ins class="adsbygoogle"
        style="display:inline-block;width:300px;height:600px"
        data-ad-client="ca-pub-8933541584844926"
        data-ad-slot="2223993182"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>