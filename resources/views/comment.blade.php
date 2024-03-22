<div class="comment p-2 border-l-4  pl-[5%]">
    <p class="flex items-center">
        <svg class = "w-7 h-7" fill="#000000" viewBox="-1 0 19 19" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16.417 9.583A7.917 7.917 0 1 1 8.5 1.666a7.917 7.917 0 0 1 7.917 7.917zm-6.24-.064H6.81a2.528 2.528 0 0 0-2.692 2.303v1.51a.794.794 0 0 0 .792.792h7.166a.794.794 0 0 0 .792-.791V11.82a2.528 2.528 0 0 0-2.692-2.302zM6.14 6.374a2.353 2.353 0 1 0 2.353-2.353A2.353 2.353 0 0 0 6.14 6.374z"></path></g></svg>
         <span class="pl-1 pt-1 ">{{ $comment->user->name }}</span>
    </p>
    <p >{{ $comment->comment_content }}</p>

    <div class=" flex gap-9 relative " >
        @livewire('like', ['comment' => $comment,'commentId' => $comment->id, 'loginId' => session('loginId')])
        <div  class=""><button id="{{$comment->id}}"  {{ session('loginId')!=null?'':'disabled' }}  class="reply_button  p-0.5  border-solid border-gray-800 border-2 rounded-lg">Reply</button></div>
        @if (session('loginId')==null)
            <div class="overlay absolute w-full h-full top-0 left-0 z-[1]"></div>
        @endif
    </div>
    @if ($comment->replies()->count() > 0)
    <div  class=" pt-1 ">
        <button id="replies_button{{$comment->id}}"class="replies_button p-0.5 ml-[5%] rounded-lg flex">
            <svg class = "w-5 h-4" id="down{{$comment->id}}" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <svg class = "w-5 h-4 hidden" id="up{{$comment->id}}" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17 15L12 10L7 15" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            @if ($comment->replies()->count() == 1)
                {{$comment->replies()->count()}} reply
            @else
                {{$comment->replies()->count()}} replies
            @endif
        </button>
    </div>
    @endif

    <div class="reply_form hidden" style="display: none" id="reply{{$comment->id}}">
        <form class="pt-2" action=" {{ route('comment', ['blogId' => $blog->id,'loginId' => session('loginId') ,'pId'=> $comment->id ]) }}" method="post" >
            @csrf
            <div class="mb-6 flex flex-col w-2/3">
                <textarea id="text{{$comment->id}}" name="comment" {{ session('loginId')!=null?'':'disabled' }} required rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                <div class="ml-auto pt-1">
                    <button type="submit" {{ session('loginId')!=null?'':'disabled' }} class="text-white ml-5 bg-zinc-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reply</button>
                    <button type="button" id="cancel{{$comment->id}}" {{ session('loginId')!=null?'':'disabled' }} class="cancel_button text-white ml-5 bg-zinc-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cancel</button>
                </div>
            </div>
        </form>
    </div>
    <div class="replies border-hidden" id="replies{{$comment->id}}" style="display: none">

        @foreach ($comment->replies as $reply)
            @include('comment', ['comment' => $reply, 'depth' => $depth + 1])
        @endforeach

    </div>

</div>
