<!--// End Content Section //-->
    <hr color="#ffd918" style="height: 2px;">
    <footer>
        <div class="container">
            <div class="row no-padding no-margin">
                <div class="col m4 hide-on-small-only left-align"><a href="/"><img src="{{ asset('images/goalnownow-logo.png') }}" width="280" alt="{{ config('app.name') }}"></a></div>
                <div class="col m4 center-align s6 white-text"><p>Privacy Policy | Cookie Policy</p></div>
                <div class="col m4 right-align s6 white-text">
                    <p>&copy; 
                        <?php 
                            if(date('Y') == '2018') {
                                echo date('Y').' '.config('app.name'); 
                            } 
                            else {
                                echo '2018 - '.date('Y').' '.config('app.name'); 
                            } 
                        ?>
                    </p>
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