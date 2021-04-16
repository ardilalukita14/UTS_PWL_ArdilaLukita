<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rumah Baca</title>
     
     <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

   <!-- Favicon and touch icons -->
   <link rel="shortcut icon" href="https://smkn1kaidipang.sch.id/wp-content/uploads/2016/12/icon-perpus.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style> 
        body {
            background-image: url("https://4.bp.blogspot.com/-0l6cJUl1Hoo/W0cbmIIQaxI/AAAAAAAACE8/y2xW_RLsv1oilVOQyCG4c_NaXAgLcU5wgCLcBGAs/s1600/perpustakaan.jpg");;
            background-repeat: no-repeat;
            background-position: center;
            background-size:cover;
			background-attachment: fixed;

        }
    </style>
    <body>
    </br></br></br>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('INFORMATION') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 style="text-align:center; color:blue; font-family: 'Libre Franklin', sans-serif">YOUR REQUEST IS BEING PROCESSED
                    </br></br></br>
                    <p>Click the button bellow to re-login!</p></h3>
                                    
                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                    <a style="center" button type="submit" class="btn btn-primary" href="{{ url('/') }}">
                                    Back to the login page</a>
        </body>