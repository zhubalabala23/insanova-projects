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
                            Hai, Selamat<br>Datang Kembali!
                        </h2>
                        <p class="text-gray-600 mb-8">Kami sangat gembira melihat Anda kembali!</p>

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
                                    By signing up, you are creating a COMMIT account, and you agree to COMMIT's 
                                    <a href="#" class="text-teal-600 hover:text-teal-700 font-semibold">Term of Use</a> and 
                                    <a href="#" class="text-teal-600 hover:text-teal-700 font-semibold">Privacy Policy</a>.
                                </label>
                            </div>

                            <!-- Remember Me -->
                            <div class="flex items-center text-sm text-gray-600">
                                Remember Me as 
                                <a href="#" class="text-teal-600 hover:text-teal-700 font-semibold ml-1">Member of COMMIT Community</a>.
                            </div>

                            <!-- Login Button -->
                            <button type="submit" 
                                    class="w-full bg-teal-600 hover:bg-teal-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300 shadow-lg hover:shadow-xl">
                                Login
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

                            <!-- Social Login Buttons -->
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Google Login -->
                                <button type="button" 
                                        class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                                    <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24">
                                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                                    </svg>
                                    <span class="text-gray-700 text-sm font-medium">Login with Google</span>
                                </button>

                                <!-- Facebook Login -->
                                <button type="button" 
                                        class="flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                                    <svg class="w-5 h-5 mr-2" fill="#1877F2" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                    <span class="text-gray-700 text-sm font-medium">Login with Facebook</span>
                                </button>
                            </div>

                            <!-- Sign Up Link -->
                            <div class="text-center text-sm text-gray-600 mt-6">
                                Don't have account? 
                                <a href="{{ route('register') }}" class="text-teal-600 hover:text-teal-700 font-semibold">Sign Up Here!</a>
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