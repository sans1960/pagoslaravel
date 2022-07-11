<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ejemplos Webpay REST</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">

</head>

<body class="p-0 m-0">
    <div class="container mx-auto">
        <nav class="border-b w-full mb-5 p-4 flex justify-content-around">
            <a class="text-gray-800 no-underline ml-4 mr-4" href="{{ url('/') }}"><i class="fa fa-home"></i> Inicio</a>
           <a href="{{ url('/webpayplus/create') }}" class="text-gray-800 no-underline">webpayplus</a>
        </nav>
    </div>

   <div class="container mx-auto flex items-center justify-center">
       <div class="box shadow-lg p-10 bg-white w-full">

        @yield('content')
       </div>
   </div>

</body>

</html>

