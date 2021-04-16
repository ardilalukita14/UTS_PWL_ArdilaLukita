<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Alexa Reading House</title>
     
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
            background-image: url("https://penerbitbukudeepublish.com/wp-content/uploads/2020/03/pengadaan-buku-perpustakaan.jpg");;
            background-repeat: no-repeat;
            background-position: center;
            background-size:cover;
			background-attachment: fixed;

        }
    </style>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
     
</body>
</html>
