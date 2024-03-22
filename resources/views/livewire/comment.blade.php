<div>
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
            @livewire('commentnew', ['comment' => $comment, 'depth' => 0])
        @endforeach
    </div>
</div>
