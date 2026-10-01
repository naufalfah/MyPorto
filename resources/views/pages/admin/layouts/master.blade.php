<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio - {{$title}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex min-h-screen">
        @include('pages.admin.layouts.sidebar')
    
        <div class="flex-1 flex flex-col min-h-screen bg-gray-100">
            <nav class="fixed z-100 w-full flex items-center justifi-center p-8 h-20 bg-white shadow">
                @if (session('pesan'))
                    <p class="px-4 py-2 bg-blue-600 text-white rounded-xl">{{session('pesan')}} !!</p>
                @endif
            </nav>
            <div class="p-8 mt-20">
                @yield('konten')
            </div>
        </div>
    </div>
    
</body>
</html>