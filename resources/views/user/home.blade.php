@extends('layouts.app')

@section('content')
<div class="bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-center text-2xl font-bold mb-6">Love helping pets?</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-yellow-200 p-6 rounded-lg text-center">
            <div class="flex justify-center mb-4">
                <div class="w-10 h-10 bg-black rounded-full flex items-center justify-center">
                    <span class="text-white">✿</span>
                </div>
            </div>
            <h2 class="text-xl font-bold mb-2">Make a donation</h2>
            <p class="mb-4">Donate Today and Make a Difference in the Lives of Those in Need</p>
            <a href="{{ url('/donate') }}" class="bg-black text-white py-2 px-4 rounded-full">Donate</a>
        </div>
        <div class="bg-yellow-200 p-6 rounded-lg text-center">
            <div class="flex justify-center mb-4">
                <div class="w-10 h-10 bg-black rounded-full flex items-center justify-center">
                    <span class="text-white">🏠</span>
                </div>
            </div>
            <h2 class="text-xl font-bold mb-2">Become a foster parent</h2>
            <p class="mb-4">Open Your Heart and Home to a Pet in Need. Join Our Foster Family and Change Lives, One Paw at a Time</p>
            <a href="{{ url('/foster') }}" class="bg-black text-white py-2 px-4 rounded-full">Foster</a>
        </div>
    </div>
</div>
@endsection
