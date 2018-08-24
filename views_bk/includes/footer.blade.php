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
</body>
</html>