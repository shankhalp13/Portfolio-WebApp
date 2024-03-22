<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class = "">

    <x-navbar/>

    <div class="pt-[2rem]">
        <div class=" font-mono w-full h-screen  ">
            <div class="flex justify-center md:text-5xl sm:text-4xl text-2xl font-bold">
                <h1>Login</h1>
            </div>
             <form class=" h-full p-10 pb-32 sm:pb-16" method="post" action="{{route('user-login')}}" {{-- wire:submit.prevent="store" --}}>
                @if(Session::has('success'))
                <div class="">{{Session::get('success')}}</div>
                @elseif (Session::has('fail'))
                <div class="">{{Session::get('fail')}}</div>
                @endif
                @csrf
                <div class="w=full flex flex-col md:flex-row justify-center items-center pt-0">
                    <div class="md:pr-3 w-full flex flex-col md:w-auto">
                        <label class="font-bold">Email ID/Username:</label>
                        <input class="rounded-xl" type="text" name="email" value="{{ old('email', $email) }}"{{-- wire:model="email" --}}>
                        <div>
                            @error('email') <span class=" block mb-2 text-sm font-medium text-red-500 dark:text-red-300">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="md:pt-0 pt-6 w-full md:w-auto flex flex-col">
                        <label class="font-bold">Password:</label>
                        <input class="rounded-xl" type="password" name="password" value="{{ old('password') }}"{{-- wire:model='phone' --}} >
                        <div>
                            @error('password') <span class=" block mb-2 text-sm font-medium text-red-500 dark:text-red-300">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    @if(session('success'))
                     <span class="  error">
                        Your form has been successfully inserted.
                    </span>
                    @endif
                </div>
                <div class="flex justify-center pt-9">
                    <button type="submit" {{-- wire:submit --}} class="text-gray-900 {{ session('success')? 'bg-slate-300' : 'bg-white' }} border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                            Login
                    </button>
                </div>
            </form>
        </div>
    </div>
    <x-footer/>
</body>
</html>
