<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Skincare</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 text-gray-800 font-sans">

    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="text-2xl font-bold text-pink-600">
                SPK Skincare
            </div>
            
            <!-- Menu -->
            <div class="space-x-6">
                <a href="{{ url('/') }}" class="text-gray-700 hover:text-pink-600 font-medium">Home</a>
                <a href="{{ route('jenis-kulit') }}" class="text-gray-700 hover:text-pink-600 font-medium">Jenis Kulit</a>
                <a href="{{ route('rekomendasi.form') }}" class="text-gray-700 hover:text-pink-600 font-medium">Rekomendasi Skincare</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center py-6 text-sm text-gray-500">
        &copy; {{ date('Y') }} SPK Skincare. All rights reserved.
    </footer>

</body>
</html>
