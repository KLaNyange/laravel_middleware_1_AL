<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <!-- component -->
    <div class="relative min-h-screen flex items-center justify-center bg-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
        style="background-image: url(https://images.unsplash.com/photo-1532423622396-10a3f979251a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80);">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <h2 class="font-semibold text-lg mr-auto">Contact us</h2>
                        <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                    </div>
                    <div class="mt-5">
                        <form action="/contacts" method="post">
                            @csrf
                            <div class="form">
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <label class=" font-semibold text-gray-600 py-2">Your email adress</label>
                                    <div class="flex flex-wrap items-stretch w-full mb-4 relative">

                                        <input type="email" name="email"
                                            class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border  h-10 border-grey-light rounded-lg  px-3 relative focus:border-blue focus:shadow">
                                    </div>
                                </div>
                                <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                    <textarea required="" name="text" id=""
                                        class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                        placeholder="Enter your message" spellcheck="false"></textarea>
                                </div>
                                <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                    <button type="submit"
                                        class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
