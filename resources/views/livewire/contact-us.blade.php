<div>
    <div class="flex justify-center md:text-5xl sm:text-4xl text-2xl font-bold">
        <h1>CONTACT ME</h1>

    </div>
    <form class=" h-full p-10 pb-32 sm:pb-16" method="post" action="/contact" wire:submit.prevent="store">
        @csrf
    <div class="w=full flex flex-col md:flex-row justify-center items-center pt-0">
        <div class="md:pr-3 w-full flex flex-col md:w-auto">
            <label class="font-bold">Email ID:</label>
            <input class="rounded-xl" type="text" name="email" value="{{ old('email') }}" wire:model="email" >
            <div>

                @error('email') <span class=" text-sm error">{{ $message }}</span> @enderror
            </div>
        </div>


        <div class="md:pt-0 pt-6 w-full md:w-auto flex flex-col">
            <label class="font-bold">Phone No:</label>
            <input class="rounded-xl" type="text" name="phonenumber" value="{{ old('phone') }}" wire:model='phone'>
            <div>
                @error('phone') <span class="text-sm error">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row justify-center items-center pt-10">
        <div class="md:pr-3 w-full md:w-auto flex flex-col">
            <label class="font-bold">Name:</label>
            <input class="rounded-xl" type="text" name="fullname" value="{{ old('name') }}" wire:model='name'>
            <div>
                @error('name') <span class="text-sm error">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="md:pt-0 pt-10 w-full md:w-auto flex flex-col">
            <label class="font-bold">Subject:</label>
            <input class="rounded-xl" type="text" name="subject" value="{{ old('subject') }}" wire:model='subject'>
            <div>
                @error('subject') <span class=" text-sm error">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>

        <div class="flex justify-center items-center pt-10">
            <div class="flex flex-col w-full md:w-auto">
                <label class="font-bold ">Message:</label>
            <textarea class="rounded-xl" name="message" id="" cols="30" rows="10" wire:model='message'>{{ old('message') }}</textarea>
            <div>
                @error('message') <span class=" text-sm error">{{ $message }}</span>@enderror
            </div>
        </div>
        </div>
        <div class="text-center">
            @if(session('success'))
             <span class="error">
                Your form has been successfully inserted.
            </span>
            @endif
        </div>
        <div class="flex justify-center items-center pt-10"  wire:ignore >
            {!! NoCaptcha::display() !!}
        </div>
        <div class="flex justify-center items-center pt-10" >
            @error('captcha') <span class=" text-sm error">{{ $message }}</span>@enderror
        </div>

        <div class="flex justify-center pt-9">
            <button type="submit" wire:click="$set('captcha', grecaptcha.getResponse())" class="text-gray-900 {{ session('success')? 'bg-slate-300' : 'bg-white' }} border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    @if(session('success'))
                        Submitted
                    @else
                        Submit
                    @endif
            </button>
        </div>
    </form>
</div>
