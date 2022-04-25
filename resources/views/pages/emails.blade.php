<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Emails') }}
        </h2>
    </x-slot>
    <!-- component -->
    <div class="flex items-center h-screen justify-center mx-5">
        <div class="w-full  mb-2 justify-center rounded-lg text-white bg-gray-900">
            <h3 class="text-white p-3 md:text-2xl lg:text-2xl text-lg">Email seeders</h3>
            <div class="p-5 pt-1 flex-wrap  flex items-center gap-2 justify-center">
                @foreach ($seederMails as $mail)
                    <div
                        class="bg-gradient-to-r flex-auto  w-42 h-42  from-gray-800 to-gray-700    shadow-lg    rounded-lg">
                        <div class="md:p-7 p-4">
                            {{-- <h2 class="text-xl text-center text-gray-200 capitalize">10$</h2> --}}
                            <h3 class="text-sm  text-gray-400  text-center">{{ $mail->email }}</h3>
                        </div>
                    </div>
                @endforeach
                <div class="w-full  mb-2 justify-center rounded-lg text-white bg-gray-900">
                    <h3 class="text-white p-3 md:text-2xl lg:text-2xl text-lg">Emails </h3>
                    <div class="p-5 pt-1 flex-wrap  flex items-center gap-2 justify-center">
                        @foreach ($emails as $mail)
                            <div
                                class="bg-gradient-to-r flex-auto  w-42 h-42  from-gray-800 to-gray-700    shadow-lg    rounded-lg">
                                <div class="md:p-7 p-4">
                                    <h3 class="text-sm  text-gray-400  text-center">{{ $mail->emails }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
