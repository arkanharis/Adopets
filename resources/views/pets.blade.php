@extends('layouts.main')
@section('container')

<div class="flex flex-wrap gap-6 justify-evenly mt-10">
    @foreach ($pets as $pet)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="https://source.unsplash.com/1200x600/?{{ $pet->species }}" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $pet->name }}</h5>
            </a>
            <p class=" font-normal text-gray-700 dark:text-gray-400">Age: {{ $pet->age }}</p>            
            <p class=" font-normal text-gray-700 dark:text-gray-400">Species: {{ $pet->species }}</p>    
            <p class=" font-normal mb-6 text-gray-700 dark:text-gray-400">Sex: {{ $pet->sex }}</p>                        
            <a href="/login" class="mt-8 text-gray-800 hover:text-gray-600 bg-primary-400 hover:bg-primary-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Adopt
            </a>
        </div>
    </div>
    @endforeach    
</div>




@endsection