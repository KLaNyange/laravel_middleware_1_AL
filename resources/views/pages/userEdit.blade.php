<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <!-- component -->
    <div>
        <div class="relative min-h-screen  grid bg-black ">
            <div
                class="flex flex-col sm:flex-row items-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 ">
                <div class=" sm:w-1/2 xl:w-3/5 bg-blue-500 h-full hidden md:flex flex-auto items-center justify-center p-10 overflow-hidden  text-white bg-no-repeat bg-cover relative"
                    style="background-image: url(https://i.postimg.cc/mrgPMqpP/logo.png);">
                    <div class="absolute bg-black  opacity-25 inset-0 z-0"></div>
                    <div class="w-full  lg:max-w-2xl md:max-w-md z-10 items-center text-center ">
                        <div class=" font-bold leading-tight mb-6 mx-auto w-full content-center items-center ">

                        </div>
                    </div>
                </div>

                <div
                    class="md:flex md:items-center md:justify-left w-full sm:w-auto md:h-full xl:w-1/2 p-8  md:p-10 lg:p-14 sm:rounded-lg md:rounded-none ">
                    <div class="max-w-xl w-full space-y-12">
                        <div class="lg:text-left text-center">

                            <div class="flex items-center justify-center ">
                                <div class="bg-black flex flex-col w-80 border border-gray-900 rounded-lg px-8 py-10">

                                    <form action="/user/{{ $edit->id }}" method="post"
                                        class="flex flex-col space-y-8 mt-10">
                                        @csrf
                                        @method('put')
                                        <label class="font-bold text-lg text-white ">Name</label>
                                        <input type="text" formControlName="accnum"
                                            class="border rounded-lg py-3 px-3 mt-4 bg-black border-indigo-600 placeholder-white-500 text-white"
                                            value="{{ $edit->name }}" name="name">
                                        <label class="font-bold text-lg text-white">Email</label>
                                        <input type="email"
                                            class="border rounded-lg py-3 px-3 bg-black border-indigo-600 placeholder-white-500 text-white"
                                            value="{{ $edit->email }}" name="email">
                                        <label class="font-bold text-lg text-white ">Role</label>
                                        <select name="role_id" id="">
                                            @foreach ($roles as $role)
                                                @can('roleChange', $role)
                                                    <option {{ $edit->role_id == $role->id ? "selected" : null}} value="{{ $role->id }}">{{ $role->role }}</option>
                                                @endcan
                                            @endforeach
                                            {{-- @can('roleChange')
                                            <option value="{{ $roles[0]->id }}">{{ $roles[0]->role }}</option>
                                            <option value="{{ $roles[2]->id }}">{{ $roles[2]->role }}</option>
                                            @endcan
                                            <option value="{{ $roles[1]->id }}">{{ $roles[1]->role }}</option>

                                            <option value="{{ $roles[3]->id }}">{{ $roles[3]->role }}</option> --}}
                                        </select>

                                        <button type="submit"
                                            class="border border-indigo-600 bg-black text-white rounded-lg py-3 font-semibold">Edit</button>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
</x-app-layout>
