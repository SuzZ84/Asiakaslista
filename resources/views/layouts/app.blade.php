<!DOCTYPE html>
<html>
    <head>
        <meta charser="utf-8">
        <title>   {{ trans('messages.title') }} </title>
        <link rel="stylesheet">   <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
         
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    </head>
    

    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
 <!-- Example single danger button -->

    </div>
</li>

        
        <style>
  footer {
            margin-top: 30px;
            padding: 30px;
            color: #fff;
            background:#333;
         }
        </style>
      

        @include('inc.navbar')

        <div class="container">
            @if (Request::is('/'))
            @include('inc.showcase')
            @endif
      
            <div class="row">
                <div class="col-md-8 col-lg-8">
                @include('inc.messages')
                    @yield('content')
                </div>
                <div class="col-md-4 col-lg-4">
                @include('inc.sidebar')

                </div>
            </div>
        </div>
<footer id="footer" class="text-center">

    <p> Copyright 2022 &copy; Tiia Riikonen </p>
</footer>

   
    </body>
</html>