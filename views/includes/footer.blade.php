<!--// End Content Section //-->
    <hr color="#ffd918" style="height: 2px;">
    <footer id='footContact' class="hide-on-small-only">

        <div class="container">
            <div class="row">
                @if(Session::has('success'))
                    <div class="col s12 center-align h">
                       <div class="alert alert-success">
                         {{ Session::get('success') }}
                       </div>
                    </div>
                @endif
                
                <div class="col s4 left-align">
                    <a href="/">
                        <img src="{{ asset('images/goalnownow-logo.png') }}" width="280" alt="{{ config('app.name') }}">
                    </a>
                </div>
                <div class="col s4">
                    <button id="smawu" class="btn waves-effect waves-dark z-depth-0 primary-text secondary">ADVERTISE WITH US</button>
                </div>
            </div>
            <form class="row s56 hide" id="s56" method="POST" action="/contactus">
                {{ csrf_field() }}
                <div class="col s12 left-align white-text h">
                    Advertise with us
                </div>
                
                <div class="col s4">
                    <input type="text" placeholder="Name" name="name" class="inputs">
                    <input type="email" name="email" placeholder="Email" class="inputs">
                    <input type="tel" name="phone" placeholder="Phone Number" class="inputs">
                </div>
                <div class="col s4">
                    <div class="row no-margin fl">
                        <div class="col s6 mr"><input type="text" name="country" placeholder="Country" class="inputs"></div>
                        <div class="col s6 ml"><input type="text" name="objective" placeholder="Objective" class="inputs"></div>
                    </div>
                    <div class="row no-margin fl">
                        <div class="col s6 mr"><input type="number" name="budget_range" placeholder="Budget Range" class="inputs"></div>
                        <div class="col s6 ml"><input type="url" name="website" placeholder="Website" class="inputs"></div>
                    </div>
                    <input type="text" name="company_name" placeholder="Company Name" class="inputs">
                </div>
                <div class="col s4">
                    <textarea class="inputs" name="message"></textarea>
                    <button type="submit" class="btn waves-effect waves-dark z-depth-0 primary-text secondary">SUBMIT</button>
                </div>
            </form>
        </div>

        <div class="secondary primary-text scf">
            <div class="container">
                <div class="row no-margin">
                    <div class="col s6 flz">
                        <a href="">PRIVACY POLICY</a>
                        <a href="">TERMS AND CONDITIONS</a>
                        <a href="">FAQ</a>
                        <a href="">COOKIES</a>
                    </div>
                    <div class="s6 right-align">
                        &copy; 
                        <?php 
                            if(date('Y') == '2018') {
                                echo date('Y').' '.config('app.name'); 
                            } 
                            else {
                                echo '2018 - '.date('Y').' '.config('app.name'); 
                            } 
                        ?>. All rights reserved.
                    </div>
                </div>
            </div>
        </div>



        
    </footer>    

    <!-- SlickJS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {
            $('.leagues_item').slick(
                // asNavFor: "#asNavForLeague"
            );
        });
    </script>

</body>
</html>