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
                @foreach ($roles as $role)
                    {{-- {{ dd($role->role) }} --}}
                    <div class="w-full max-w-xs text-center">
                        @foreach ($role->user as $user)
                            @if ($user->role_id == 1)
                                <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                                    src="https://images.unsplash.com/photo-1493863641943-9b68992a8d07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=739&q=80"
                                    alt="avatar" />
                            @elseif ($user->role_id == 2)
                                <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                                    src="https://images.unsplash.com/photo-1516756587022-7891ad56a8cd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                                    alt="avatar" />
                            @else
                                <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80"
                                    alt="avatar" />
                            @endif
                        @endforeach

                        <div class="mt-2">
                            @foreach ($role->user as $user)
                                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">{{ $user->name }}
                                </h3>
                            @endforeach
                            <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">{{ $role->role }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-app-layout>
