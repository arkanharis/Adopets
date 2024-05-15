@extends('dashboard.layouts.main')
@section('container')

    
<div class="w-full flex justify-center">
    <div class="relative max-w-sm bg-white border border-gray-200 rounded-2xl shadow-lg flex flex-col items-center p-8">
        <a href="/dashboard/profile/edit">
            <i class="fa-solid fa-pen-to-square absolute top-0 right-0 mt-2 mr-2"></i>
        </a>
        <a href="/dashboard/profile/edit">        
            <img class="rounded-full w-36 h-36" src="../img/user.png" alt="image description">
        </a>
        <div class="p-5">
            <a href="/dashboard/profile/edit">
                <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900">{{ $user->name }}</h5>
            </a>
            <p><i class="fa-solid fa-envelope mr-2 mt-4"></i>{{ $user->email }}</p>
            <p><i class="fa-solid fa-phone mr-2 mt-2"></i>{{ $user->phone }}</p>            
        </div>
    </div>
    
</div>
@endsection