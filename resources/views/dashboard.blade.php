<!DOCTYPE html>
<html>

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .custom-container {
            width: 610px;
            height: 324px;
            position: absolute;
            top: 212px;
            left: 181px;
            gap: 0px;
            border: 1px solid transparent;
            background: transparent;
        }

        .custom-container p {
            font-family: 'Gilda Display', serif;
            font-size: 64px;
            font-weight: 400;
            line-height: 96px;
            text-align: left;
            color: #000000; 
            margin: 0;
            padding: 20px;
        }

        .adopt-button {
            width: 162px;
            height: 53px;
            position: absolute;
            top: 526px;
            left: 181px;
            padding: 0 16px;
            gap: 8px;
            border-radius: 28px;
            opacity: 1;
            background: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
        }

        .adopt-button span {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 24px;
            text-align: left;
            color: #FFFFFF; 
            width: 90px;
            height: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0;
        }

        .dashboard-image {
            width: 1447px;
            height: 901px;
            position: absolute;
            top: 123px;
            left: -7px;
            gap: 0px;
            border-radius: 580px 0px 0px 0px;
            opacity: 0px;
            background-image: url('resources/images/dashboard.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    @include('nav')

    <div class="relative w-full h-screen">
        <!-- Gambar Dashboard -->
        <div class="dashboard-image"></div>

        <!-- Custom Container -->
        <div class="custom-container">
            <p>You can make a difference in their live</p>
        </div>

        <!-- Adopt Button -->
        <a href="/adopt-a-pet" class="adopt-button">
            <span>Adopt a Pet</span>
        </a>
    </div>
</body>

</html>
