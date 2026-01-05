<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - INSANOVA</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background: linear-gradient(135deg, rgba(106, 132, 168, 0.95) 0%, rgba(17, 24, 39, 0.98) 100%);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="font-sans antialiased min-h-screen flex items-center justify-center p-4">
    
    <div class="w-full max-w-5xl">
        <!-- Login Page Title -->
        <!-- <h1 class="text-white text-2xl font-semibold mb-6">Login Page</h1> -->

        <!-- Main Container -->
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                
                <!-- Left Side - Form -->
                <div class="p-8 lg:p-12">
                    <div class="max-w-md mx-auto">
                        <h2 class="text-3xl font-bold text-teal-700 mb-2">
                            Daftar disini
                        </h2>
                        <p class="text-gray-600 mb-8">Daftarkan diri anda disini, dan mulai mencari inovasi anda</p>

                        <!-- Login Form -->
                        <form action="{{ route('login') }}" method="POST" class="space-y-6">
                            @csrf

                            <!-- Email Input -->
                            <div>
                                <label for="email" class="block text-gray-700 font-semibold mb-2">
                                    Email
                                </label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       required
                                       placeholder="youremail@email.com"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition">
                            </div>

                            <!-- userame input -->
                            <div>
                                <label for="name" class="block text-gray-700 font-semibold mb-2">
                                    Name
                                </label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       required
                                       placeholder="your name"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition">
                            </div>

                            <!-- Password Input -->
                            <div>
                                <label for="password" class="block text-gray-700 font-semibold mb-2">
                                    Password
                                </label>
                                <input type="password" 
                                       id="password" 
                                       name="password" 
                                       required
                                       placeholder="••••••••••"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent transition">
                            </div>

                            <!-- Terms Checkbox -->
                            <div class="flex items-start">
                                <input type="checkbox" 
                                       id="terms" 
                                       name="terms" 
                                       required
                                       class="mt-1 w-4 h-4 text-teal-600 border-gray-300 rounded focus:ring-teal-500">
                                <label for="terms" class="ml-3 text-sm text-gray-600">
                                    I don't want to receive emails about insanova and related Intuit product and feature updates, 
                                    marketing best practices, and promotions from insanova.
                                </label>
                            </div>

                            <!-- Login Button -->
                            <button type="submit" 
                                    class="w-full bg-teal-600 hover:bg-teal-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 shadow-lg hover:shadow-xl">
                                Sign Up
                            </button>

                            <!-- Divider -->
                            <div class="relative my-6">
                                <div class="absolute inset-0 flex items-center">
                                    <div class="w-full border-t border-gray-300"></div>
                                </div>
                                <div class="relative flex justify-center text-sm">
                                    <span class="px-4 bg-white text-gray-500">OR</span>
                                </div>
                            </div>

                            <!-- Sign Up Link -->
                            <div class="text-center text-sm text-gray-600 mt-6">
                                Don't have account? 
                                <a href="{{ route('login') }}" class="text-teal-600 hover:text-teal-700 font-semibold">Login Here!</a>
                            </div>

                            <!-- Kembali ke Beranda link -->
                            <div class="text-center text-sm text-gray-600 mt-2 underline">
                                <a href="{{ url('/') }}" class="text-teal-000 hover:text-teal-700 font-semibold">Kembali Ke Beranda!</a>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Side - Branding -->
                <div class="bg-gradient-to-br from-teal-400 via-teal-500 to-emerald-600 p-8 lg:p-12 flex items-center justify-center">
                    <div class="text-center text-white w-full">
                        <!-- Logo INSANOVA -->
                        <img src="{{ asset('build/assets/images/logo-insanova.png') }}" 
                             alt="INSANOVA" 
                             class="w-full max-w-lg mx-auto object-contain"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        
                        <!-- Fallback if image not found -->
                        <div class="hidden flex-col items-center justify-center">
                            <svg class="w-32 h-32 mb-6" fill="white" viewBox="0 0 24 24">
                                <path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                            <h1 class="text-6xl font-bold mb-4">INSANOVA</h1>
                            <p class="text-xl opacity-90">LET'S INNOVATE</p>
                            <p class="text-sm opacity-75 mt-2">Insan Berinovasi BPJS Ketenagakerjaan</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>