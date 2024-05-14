<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        /* Gaya tambahan jika diperlukan */
        .input-group textarea {
            resize: none;
        }
    </style>
</head>

<body style="background-color: #F7DCAD;" class="bg-gray-100">

    <!-- Navbar -->
    @include('nav') <!-- Sisipkan navbar dari file nav.blade.php -->

    <!-- Halaman Kontak -->
    <div class="container mx-auto p-6">
        <h1 class="text-3xl text-center mb-8">Contact Us</h1>
        <div class="max-w-3xl mx-auto mb-16"> <!-- Tambahkan max-w-3xl dan mb-16 untuk mengatur lebar dan margin bawah -->
            <form action="#" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"> <!-- Tambahkan beberapa kelas untuk styling -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name:</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700">Message:</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md resize-none focus:outline-none focus:border-blue-500"></textarea>
                </div>
                <button type="submit"
                    class="w-full bg-gray-900 text-white py-2 px-4 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-blue-600">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>
