@extends('layouts.main')
@section('container')
    <div class="flex flex-row">
        <div class="w-1/2">
            <h1 class="text-4xl font-bold mt-8">Register</h1>            
            <form class="max-w-md mt-8 flex flex-col" action="/register" method="post">
                @csrf
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="name" id="name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="name"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span> {{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="email" id="email"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                        address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span> {{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="phone" id="phone"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="phone"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                        number</label>
                    @error('phone')
                        <div class="invalid-feedback">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span> {{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="password" name="password" id="password"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="password"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span> {{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <button type="submit"
                    class="mt-10 w-full sm:w-full text-white bg-black hover:bg-primary-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Submit
                </button>
                <p class="self-center mt-6">Already have an account? | <a href="/login" class="text-primary-400">Log In</a></p>
            </form>            
        </div>
        <div class="w-1/2 h-lvh overflow-hidden">
            <img src="img/register.png" alt="" class="w-full h-full object-cover">
        </div>

    </div>
@endsection
