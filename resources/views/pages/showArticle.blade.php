<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $article->title }} edit
        </h2>
    </x-slot>

    @error('refused')
    {{ $message }}
    @enderror

    <section class="bg-gray-100 dark:bg-gray-900 lg:py-12 lg:flex lg:justify-center mt-44">
        <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg w-1/2">
            <div class="lg:w-1/2">
                <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('https://images.unsplash.com/photo-1593642532400-2682810df593?ixlib=rb-1.2.1&ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80')"></div>
            </div>

            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">{{ $article->title }} by <span class="text-blue-600 dark:text-blue-400">{{ $article->user->name }}</span></h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">{{ $article->text }}</p>

                <div class="mt-8">
                    <a href="/article/{{ $article->id }}/edit" class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700">Edit</a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
