<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Teacher Wishlist')</title>
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-xl font-bold">Teacher Wishlist Platform</h1>
</div>
    </nav>
    <main class="container mx-auto p-4 py-8">
        @yield('content')
</main>
    
</body>
</html>