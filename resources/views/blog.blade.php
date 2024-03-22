@extends('layout')
@section('title','Blog')
@section('content')

    <div class="sm:pb-0 pb-[20rem]">
        <div class="w-full font-mono h-full pt-[2rem]  text-justify px-10">
            <div class="md:text-5xl sm:text-4xl text-2xl pt-4 pb-4 font-bold  flex justify-center items-center text-center">
                <h1>BLOG</h1>
            </div>
            <div class="containers items-center flex flex-col justify-center ">
                @foreach ($blogs as $blog)
                    <div class="flex flex-col  w-[1000px]  p-28">
                        <div class="image  flex  justify-center">
                            <a href="{{ route('blog_desc', ['id' => $blog->id]) }}"><img class="w-full rounded-xl" src="{{ asset('http://127.0.0.1:8000/storage/'.$blog->b_image)}}" alt=""></a>
                        </div>
                        <div class="flex justify-center">
                            <a href="{{ route('blog_desc', ['id' => $blog->id]) }}"><p class="text-4xl p-3">{{ $blog->title }}</p></a>
                        </div>
                        <div class="inbrief  flex justify-center">
                            <p class="text-xl p-3">{{ $blog->inbrief}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection('content')
