<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <style>
        #toast-container > .toast-error {
            background-color: #000000;
        }
    </style>
    {!! NoCaptcha::renderJs() !!}
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles()
</head>
<body class = "">
    <x-navbar/>
    <div class="main">
        @yield('content')
    </div>
    <x-footer/>
    @livewireScripts()
</body>
</html>
