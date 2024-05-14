@extends('layouts.main')

@section('container')
<div class="bg-white p-8 rounded-lg shadow-lg">
<div class="flex justify-center mb-6">
        <h1 class="text-2xl font-bold" style="background-color: #FFE0B5; padding: 1rem; border-radius: 0.5rem; max-width: 300px;">Love helping pets?</h1>
    </div>
    <div class="flex justify-center">
    <div class="w-fit gap-8 flex flex-row justify-center items-center">
        <div class="p-6 rounded-lg text-center" style="background-color: #FFE0B5; max-width: 300px; height: 300px; margin: auto;">
            <div class="flex justify-center mb-4">
                <div class="w-10 h-10 bg-black rounded-full flex items-center justify-center">
                    <span class="text-white">✿</span>
                </div>
            </div>
            <h2 class="text-xl font-bold mb-2">Make a donation</h2>
            <p class="mb-4">Donate Today and Make a Difference in the Lives of Those in Need</p>
            <a href="{{ url('/donate') }}" class="bg-black text-white py-2 px-4 rounded">Donate</a>
        </div>
        <div class="p-6 rounded-lg text-center" style="background-color: #FFE0B5; max-width: 300px; height: 300px; margin: auto;">
            <div class="flex justify-center mb-4">
                <div class="w-10 h-10 bg-black rounded-full flex items-center justify-center">
                    <span class="text-white">🏠</span>
                </div>
            </div>
            <h2 class="text-xl font-bold mb-2">Become a foster parent</h2>
            <p class="mb-4">Open Your Heart and Home to a Pet in Need. Join Our Foster Family and Change Lives, One Paw at a Time</p>
            <a href="{{ url('/foster') }}" class="bg-black text-white py-2 px-4 rounded">Foster</a>
        </div>
    </div>
    </div>
   
</div>
@endsection
