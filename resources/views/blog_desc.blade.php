@extends('layout')
@section('title','Blog Description')
@section('content')

    <div class="sm:pb-0 pb-[20rem]">
        <div class="w-full font-mono h-full pt-[2rem]  text-justify px-10">
            <div class="md:text-5xl sm:text-4xl text-2xl pt-4 pb-4 font-bold  flex justify-center items-center text-center">
                <h1>BLOG DESCRIPTION</h1>
            </div>
            <div class="containers items-center flex flex-col justify-center ">
                <div class="flex flex-col  w-[1000px]  p-28">
                    <div class="image  flex  justify-center">
                        <img class="w-full rounded-xl" src="{{ asset('http://127.0.0.1:8000/storage/'.$blog->b_image)}}" alt="">
                    </div>
                    <div class="flex justify-center">
                        <p class="text-4xl p-3">{{ $blog->title }}</p>
                    </div>
                    <div class="inbrief  flex justify-center">
                        <p class="text-xl p-3">{{ $blog->inbrief}}</p>
                    </div>
                    <div class="inbrief  flex justify-center">
                        <p class="text-xl p-3">{{ $blog->description}}</p>
                    </div>
                </div>
                <div class="comment p-10 border-8 rounded-xl w-full h-auto border-black">
                    <div class="md:text-5xl sm:text-4xl text-2xl pt-4 pb-4 flex justify-between items-center text-center font-medium">
                        <h1>COMMENT</h1>
                        @if(session('loginId')!=null)
                        <div class="">
                            <div class="flex items-center text-lg font-medium text-gray-900">
                                <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                                </svg>
                                {{$data->name}}
                            </div>
                            <div class="inline-flex rounded-md shadow-sm" role="group">
                                <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                                    <a  href="/logout" class = "flex justify-center items-center">
                                        <svg class="w-3 h-4 me-2" fill="#000000" viewBox="0 0 32 32" id="Outlined" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g id="Fill"> <path d="M25,2H16V4h9a1,1,0,0,1,1,1V27a1,1,0,0,1-1,1H16v2h9a3,3,0,0,0,3-3V5A3,3,0,0,0,25,2Z"></path> <path d="M21.58,17V15H7l4-4L9.58,9.55l-5,5a2,2,0,0,0,0,2.83l5,5L11,21,7,17Z"></path> </g> </g></svg>
                                        <p>Log Out<p>
                                    </a>
                                </button>
                            </div>
                        </div>
                        @else
                        <div class="inline-flex rounded-md shadow-sm" role="group">
                            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                            <a href="/login"><svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                            </svg>
                            LogIn</a>
                            </button>

                            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                            <a href="/register"><svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
                                <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                            </svg>
                            Register</a>
                            </button>
                        </div>
                        @endif
                    </div>
                    <div class="">
                        {{-- @livewire('comment', ['blog'=>$blog,'comment' => $comment,'commentId' => $comment->id, 'loginId' => session('loginId')]) --}}
                        <div class="comment_form">
                            <form action=" {{ route('comment', ['blogId' => $blog->id,'loginId' => session('loginId'),'pId'=> 0 ]) }}" method="post" >
                                @csrf
                                <div class=" mb-6 relative">
                                    <label for="comment" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Leave a comment {{ session('loginId')!=null?'':'(You need to login to leave a comment)' }}</label>
                                    <textarea id="comment" name="comment" {{ session('loginId')!=null?'':'disabled' }} required rows="4" class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                                    @if (session('loginId')==null)
                                        <div class="overlay absolute w-full h-full top-0 left-0 z-[1]"></div>
                                    @endif
                                </div>
                                <div class="relative" id="commentButtonContainer" >
                                    <button type="submit" {{ session('loginId')!=null?'':'disabled' }} id = "commentSubmitButton" class=" disabled text-white bg-zinc-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Submit
                                    </button>
                                    @if (session('loginId')==null)
                                        <div class="overlay absolute w-full h-full top-0 left-0 z-[1]" ></div>
                                    @endif
                                </div>
                            </form>
                        </div>
                        <div class="existingcomments pt-8">
                            @foreach($blog->comments as $comment)
                                @include('comment', ['comment' => $comment, 'depth' => 0])
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
            // Select all reply buttons
            const replyButtons = document.querySelectorAll('.reply_button');
            const repliesButtons = document.querySelectorAll('.replies_button');
            const cancelButtons = document.querySelectorAll('.cancel_button');
            const disabled = document.getElementById('disabled');
            console.log(disabled);

            // Add click event listener to each reply button
            replyButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Extract the comment ID from the button's ID
                    const commentId = this.id;

                    // Find the corresponding reply form using the comment ID
                    const replyForm = document.getElementById('reply' + commentId);
                    // Toggle the visibility of the reply form
                    if (replyForm.style.display == 'none') {
                        replyForm.style.display = 'block';
                    } else {
                        replyForm.style.display = 'none';
                    }
                });
            });

            repliesButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Extract the comment ID from the button's ID
                    const commentId = this.id.replace('replies_button', '');

                    // Find the corresponding reply form using the comment ID
                    const replies = document.getElementById('replies' + commentId);
                    const arrowup = document.getElementById('up'+ commentId);
                    const arrowdown = document.getElementById('down'+ commentId);

                    // Toggle the visibility of the reply form
                    if (replies.style.display == 'none') {
                        replies.style.display = 'block';
                        arrowup.style.display = 'block';
                        arrowdown.style.display = 'none';

                    } else {
                        replies.style.display = 'none';
                        arrowup.style.display = 'none';
                        arrowdown.style.display = 'block';
                    }
                });
            });

            // Select all elements with the class "overlay"
            const overlays = document.querySelectorAll('.overlay');

            // Loop through each overlay and add a click event listener
            overlays.forEach(function(overlay) {
                overlay.addEventListener('click', function() {
                    if (commentSubmitButton.disabled) {
                        //alert("You need to login first.");
                        // toastr()->success('Data has been saved successfully!');
                        toastr.options.timeOut = 1500; // 1.5s
                        toastr.error('You need to login first!');

                    }
                });
            });

            cancelButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Extract the comment ID from the button's ID
                    const commentId = this.id.replace('cancel', '');
                    const replyForm = document.getElementById('reply' + commentId);

                    document.getElementById("text"+commentId).value="";
                    replyForm.style.display = 'none';
                });
            });
        });
    </script>

@endsection('content')

