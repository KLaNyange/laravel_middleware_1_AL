<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-5">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="/article/create">Create an article</a>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($articles as $article)
                        <div class="max-w-md px-8 py-4 mx-auto mt-16 bg-white rounded-lg shadow-lg dark:bg-gray-800">
                            <div class="flex justify-center -mt-16 md:justify-end">
                                <img class="object-cover w-20 h-20 border-2 border-blue-500 rounded-full dark:border-blue-400"
                                    alt="Testimonial avatar" src="https://picsum.photos/200">
                            </div>

                            <h2 class="mt-2 text-2xl font-semibold text-gray-800 dark:text-white md:mt-0 md:text-3xl">
                                {{ $article->title }}</h2>

                            <p class="mt-2 text-gray-600 dark:text-gray-200">{{ $article->text }}</p>

                            <div class="flex justify-end mt-4">
                                <a href="#"
                                    class="text-xl font-medium text-blue-500 dark:text-blue-300">{{ $article->user->name }}</a>
                            </div>
                            <div class="flex justify-end mt-4">
                                <a class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700"
                                    href="/article/{{ $article->id }}">Show</a>
                                <form action="/article/{{ $article->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button
                                        class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-red-900 rounded-md hover:bg-gray-700"
                                        type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
