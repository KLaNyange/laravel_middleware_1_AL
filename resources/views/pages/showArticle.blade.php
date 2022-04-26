<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $article->title }} edit
        </h2>
    </x-slot>

    @error('refused')
        {{ $message }}
    @enderror

    {{-- {{ dd($article->user->id) }} --}}

    <section class="bg-gray-100 dark:bg-gray-900 lg:py-12 lg:flex lg:justify-center mt-44">
        <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg w-1/2">
            <div class="lg:w-1/2">
                <div class="h-64 bg-cover lg:rounded-lg lg:h-full"
                    style="background-image:url('https://picsum.photos/200')">
                </div>
            </div>

            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">{{ $article->title }} by <span
                        class="text-blue-600 dark:text-blue-400">{{ $article->user->name }}</span></h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">{{ $article->text }}</p>

                <div class="mt-8">
                    <a href="/article/{{ $article->id }}/edit"
                        class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700">Edit</a>
                </div>
            </div>
        </div>
        <!-- component -->
        <div>

            <section class="rounded-b-lg  mt-4 ">


                <form action="/comment/{{ $article->id }}" accept-charset="UTF-8" method="post">
                    @csrf
                    <textarea class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl"
                        placeholder="Post your comments here" cols="6" rows="6" id="comment_content" spellcheck="false"
                        name="comment"></textarea>
                    <button
                        class="font-bold py-2 px-4 w-full bg-purple-400 text-lg text-white shadow-md rounded-lg ">Comment
                    </button>
                </form>

            </section>

        </div>
    </section>
        <div id="task-comments" class="flex flex-col items-center">
            <!--     comment-->
            @foreach ($article->comment as $comment)
                <div
                    class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4 w-2/3">
                    <div class="flex flex-row justify-center mr-2">
                        <img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4"
                            src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
                        <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">
                            {{ $comment->user->name }}</h3>
                    </div>


                    <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">{{ $comment->comment }}
                    </p>


                </div>
            @endforeach
            <!--  comment end-->
        </div>
</x-app-layout>
