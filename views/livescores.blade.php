<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livescores | Alphalive</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 600;
                text-align: left;
                height: 100vh;
                margin: 0;
            }

            table, html, body {
                color: #020202;
                font-size: 13px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #020202;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center-none position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    AlphaLive
                </div>

                <div class="row">
                    
                    <div class="col-md-3">

                        <table class="table table-striped table-responsive"> 
                            <thead> 
                                <tr>
                                    <th>Countries</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                @foreach ($countries as $country)
                                    <tr>
                                        <td><?php //var_dump($country->extra->flag); ?> {{ $country->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody> 
                        </table>
                        
                    </div>

                    <div class="col-md-6">
                        
                        <h5>Livescores for <?php echo date("Y/m/d"); ?></h5>
                        <tbody> 
                            @foreach ($livescores as $livescore)
                                <tr>
                                    <td> {{ $livescore->localTeam->data->name }} </td>
                                    <td> <strong>vs</strong> </td>
                                    <td> {{ $livescore->visitorTeam->data->name }} </td>
                                </tr>
                            @endforeach
                        </tbody> 
                        
                    </div>

                    <div class="col-md-3">
                        <table class="table table-striped table-responsive"> 
                            <thead> 
                                <tr>
                                    <th>Leagues</th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                                
                            </tbody> 
                        </table>
                    </div>

                </div>

                <div class="links hide">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
