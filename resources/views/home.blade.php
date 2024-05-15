@extends('layouts.main')
@section('container')

<div class="relative w-full h-screen">
    <!-- Gambar Dashboard -->
    <div class="dashboard-image"></div>

    <!-- Custom Container -->
    <div class="custom-container">
        <p>You can make a difference in their live</p>
    </div>

    <!-- Adopt Button -->
    <a href="/pets" class="adopt-button">
        <span>Adopt a Pet</span>
    </a>
</div>

@endsection