<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles Edit') }}
        </h2>
    </x-slot>

    <section class="w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 mt-10">
        <form action="/article/{{ $article->id }}" method="post">
            @csrf
            @method('put')
            <div class="mt-6 ">
                <div class="items-center -mx-2 md:flex">
                    <div class="w-full mx-2">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Title</label>

                        <input
                            class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                            type="text" name="title" value="{{ $article->title }}">
                    </div>
                </div>

                <div class="w-full mt-4">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Message</label>

                    <textarea name="text"
                        class="block w-full h-40 px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">{{ $article->text }}</textarea>
                </div>

                <div class="flex justify-center mt-6">
                    <button type="submitart"
                        class="px-4 py-2 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Update</button>
                </div>
            </div>

        </form>
    </section>
</x-app-layout>
