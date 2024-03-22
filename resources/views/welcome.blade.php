@extends('layout')
@section('title','Home')

@section('content')

    <div class="sm:pb-0 pb-[20rem]">
        <section class=" pt-[4.5rem] bg-center bg-no-repeat bg-[url('/public/images/jumbotron.jpg')] bg-gray-700 bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Hi There! Shankhalp Here</h1>
                <p class="mb-8 text-2xl font-normal text-gray-300 lg:text-4xl md:text-3xl sm:px-16 lg:px-48">An aspiring Software Developer...</p>
                <div class="flex space-y-4 justify-center sm:space-y-0">
                    <a href="contact" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white border-x-2 rounded-lg bg-transparent hover:bg-slate-500 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Contact Me
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        <div class=" w-full font-mono h-full ">
            <div class="md:text-6xl sm:text-5xl text-4xl pt-4 font-bold  flex justify-center items-center text-center p-10">
                <h1 class >ABOUT ME</h1>
            </div>
            <div class="px-10 text-justify">
                <p class="arrow-bullet pb-5"> Hi there! I'm Shankhalp, a BTech Computer Engineering student who loves turning ideas into reality with code. Right now, I'm diving into web development and having a blast!</p>
                <p class="arrow-bullet pb-5"> While I'm still learning, I've played around with PHP and MySQL to build some cool projects. These projects focus on making things work behind the scenes on websites.</p>
                <p class="arrow-bullet pb-5">Beyond the web stuff, I've dabbled in a bunch of programming languages like C, C++, Java, and Python. I've also done projects where I use Python to analyze data and do some machine learning—turning numbers into useful info.</p>
                <p class="arrow-bullet pb-5">One of my standout projects is the Math Problem Solution Provider System. This innovative system was crafted to tackle math problems with solutions defined in the backend. Users simply input their problems, and the system does the heavy lifting, delivering accurate solutions. These hands-on projects have been more than just code—they've been my learning playground, sparking a fire for continuous growth and discovery. Excited to take on even more challenges and delve deeper into the world of problem-solving through technology.
                </p>
                <p class="arrow-bullet pb-0">I'm all about exploring new tech possibilities and taking on challenges. Whether it's building websites, solving tricky problems, or playing with data, I'm up for it!</p>
            </div>
        </div>
        <div class="w-full  font-mono h-screen pt-[4.5rem]  text-justify ">
            <div class="md:text-6xl sm:text-5xl text-4xl pt-0 font-bold  flex justify-center items-center text-center p-10">
                <h1>SKILLS</h1>
            </div>
            <div class="w-full text-3xl">
                <div class="flex sm:flex-row flex-col items-center">
                    <div class="flex w-1/2 p-10 justify-center text-center">
                        <div class="flex items-center pr-3"><p>Laravel</p></div>
                        <img src="/images/pngwing.com.png" alt="" class='md:w-16 md:h-16 sm:w-14 sm:h-14 w-12 h-12'>

                    </div>
                    <div class="flex w-1/2 p-10 justify-center  text-center">
                        <div class="flex items-center pr-3"><p>PHP</p></div>
                        <img src="/images/php.png" alt="" class='md:w-16 md:h-16 sm:w-14 sm:h-14 w-12 h-12 '>
                    </div>
                </div>
                <div class=" flex sm:flex-row flex-col justify-center items-center ">
                    <div class="flex w-1/2 p-10 justify-center text-center">
                        <div class="flex items-center pr-3"><p>Tailwind CSS</p></div>
                        <img src="/images/pngwing.com (1).png" alt="" class='md:w-16 md:h-16 sm:w-14 sm:h-14 w-12 h-12 '>
                    </div>
                    <div class="flex w-1/2 p-10 justify-center text-center">
                        <div class="flex items-center pr-3"><p>Javascript</p></div>
                        <img src="/images/pngwing.com (2).png" alt="" class='md:w-16 md:h-16 sm:w-14 sm:h-14 w-12 h-12 '>
                    </div>
                </div>
                <div class="flex sm:flex-row flex-col items-center">
                    <div class="flex w-1/2 p-10 justify-center text-center">
                        <div class="flex items-center pr-3"><p>CSS</p></div>
                        <img src="/images/pngwing.com (4).png" alt="" class='md:w-16 md:h-16 sm:w-14 sm:h-14 w-12 h-12 '>
                    </div>
                    <div class="flex w-1/2 p-10 justify-center text-center">
                        <div class="flex items-center pr-3"><p>HTML</p></div>
                        <img src="/images/pngwing.com (3).png" alt="" class='md:w-16 md:h-16 sm:w-14 sm:h-14 w-12 h-12 '>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection('content')
