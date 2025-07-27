<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Expense Tracker</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-orange-100 text-gray-900">
    <div class="max-w-3xl mx-auto py-8 px-4">
        <h1 class="text-3xl font-bold mb-6 text-center">💸 Expense Tracker</h1>

        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')

        <div class="bottom-0 w-full bg-white shadow-md py-4 px-6 mt-8">
            <p class="text-center text-gray-600 mt-6">
                &copy; {{ date('Y') }} @MCRM - Expense Tracker. All rights reserved.
            </p>
        </div>
    </div>
</body>

</html>