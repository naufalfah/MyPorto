<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex min-h-screen items-center justify-center bg-gray-100">
        <div class="w-[360px] bg-white flex flex-col gap-5 shadow rounded-xl p-8">
            <div class="text-center">
                <h1 class="text-3xl font-bold">Login</h1>
                <p class="text-xs mt-3">Login terlebih dahulu untuk masuk admin</p>
            </div>
            <div class="flex flex-col">
                <form action="login" method="POST">
                    @csrf
                    <div class="flex flex-col gap-5">
                        <div class="flex flex-col">
                            <label for="" class="font-bold text-xs mb-1">Email</label>
                            <input type="email" name="email" value="{{old('email')}}" placeholder="Masukkan email anda" class="border rounded-xl px-4 py-2 placeholder:text-sm" id="">
                            @error('email')
                                <p class="text-xs mt-1 text-red-600">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col">
                            <label for="" class="font-bold text-xs mb-1">Password</label>
                            <input type="password" name="password" value="{{old('password')}}" placeholder="Masukkan password anda" class="border rounded-xl px-4 py-2 placeholder:text-sm" id="">
                            @error('password')
                                <p class="text-xs mt-1 text-red-600">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-10">
                        <button type="submit" class="text-center bg-blue-600 hover:bg-blue-800 transition duration-300 w-full rounded-xl px-4 py-2 text-white">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>