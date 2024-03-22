{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Me</title>
    {!! NoCaptcha::renderJs() !!}
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles()
</head>
<body class = "">

    <x-navbar/> --}}

@extends('layout')
@section('title','Contact Us')
@section('content')

    <div class="pt-[2rem]">
        <div class=" font-mono w-full h-full  ">
            @livewire('contact-us',['loginId' => session('loginId')])
        </div>
    </div>
@endsection('content')

{{--
    <x-footer/>
    @livewireScripts()
</body>
</html> --}}
