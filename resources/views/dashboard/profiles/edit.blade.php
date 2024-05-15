@extends('dashboard.layouts.main')
@section('container')
    <div class="w-full flex justify-center">
        <div class="relative max-w-sm bg-white border border-gray-200 rounded-2xl shadow-lg flex flex-col items-center p-8">
            <img class="rounded-full w-36 h-36" src="../../img/user.png" alt="image description">


            <form class="max-w-sm mx-auto" action="/dashboard/profile" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="mb-5 mt-8">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Change image</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="multiple_files" type="file" multiple>
                </div>
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-400 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-400 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required />
                    @error('name')
                        <div class="invalid-feedback">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span> {{ $message }}
                            </p>
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        email</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-400 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-400 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required />
                    @error('email')
                        <div class="invalid-feedback">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span> {{ $message }}
                            </p>
                        </div>
                    @enderror

                </div>
                <div class="mb-5">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        phone</label>
                    <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-400 focus:border-primary-300 block w-full p-2.5 "
                        required />
                    @error('phone')
                        <div class="invalid-feedback">
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span> {{ $message }}
                            </p>
                        </div>
                    @enderror
                </div>
                <button type="submit"
                    class="mt-4 text-gray-800 hover:text-gray-600 bg-primary-400 hover:bg-primary-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Edit profile</button>
            </form>

        </div>

    </div>
@endsection
