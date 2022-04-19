<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>


    <section class="container p-6 mx-auto bg-white dark:bg-gray-800">
        <h2 class="text-xl font-medium text-gray-800 capitalize dark:text-white md:text-2xl">Our Team</h2>

        <div class="flex items-center justify-center">
            <div class="grid gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($users as $user)
                    {{-- {{ dd($role->role) }} --}}
                    <div class="w-full max-w-xs text-center mt-3">
                        @if ($user->role->id == 1)
                            <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                                src="https://images.unsplash.com/photo-1493863641943-9b68992a8d07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=739&q=80"
                                alt="avatar" />
                        @elseif ($user->role->id == 2)
                            <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                                src="https://images.unsplash.com/photo-1516756587022-7891ad56a8cd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                                alt="avatar" />
                        @else
                            <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                                src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80"
                                alt="avatar" />
                        @endif

                        <div class="mt-2">
                            <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">{{ $user->name }}
                            </h3>
                            <span
                                class="mt-1 font-medium text-gray-600 dark:text-gray-300">{{ $user->role->role }}</span>
                        </div>
                        <div class="flex justify-center p-2 ">
                            @can('canEdit', $user)
                                <a class="bg-green-800 p-2 rounded-md m-2" href="user/{{ $user->id }}/edit">Edit</a>
                            @endcan
                            @can('deleteUser', $user)
                                {{-- {{dd ($roles) }} --}}
                                <form action="/user/{{ $user->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="bg-red-500 p-2 rounded-md m-2">delete</button>
                                </form>
                            @endcan
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-app-layout>
