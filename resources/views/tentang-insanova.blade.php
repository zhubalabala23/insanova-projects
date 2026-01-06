<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Insanova - INSANOVA</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="font-sans antialiased bg-gray-50">
    
     <!-- Navigation -->
    <nav class="bg-teal-600 shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="{{ asset('build/assets/images/logo-insanova.png') }}" alt="INSANOVA" class="h-16 w-auto object-contain" onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22100%22 height=%22100%22%3E%3Crect fill=%22%23059669%22 width=%22100%22 height=%22100%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22white%22%3ELOGO%3C/text%3E%3C/svg%3E';">
                    <!-- <div class="ml-3 text-white">
                        <div class="font-bold text-xl">INSANOVA</div>
                        <div class="text-xs">LET'S INNOVATE</div>
                    </div> -->
                </div>

                <!-- Menu Desktop -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ url('/beranda') }}" class="text-white hover:text-teal-200 font-medium">Beranda</a>
                    <a href="{{ url('/arsip-inovasi') }}" class="text-white hover:text-teal-200 font-medium">Arsip Inovasi</a>
                    <a href="{{ url('/kirim-ide') }}" class="text-white hover:text-teal-200 font-medium">Kirim Ide</a>
                    <a href="{{ url('/tentang-insanova') }}" class="text-white hover:text-teal-200 font-medium">Tentang Insanova</a>
                    <a href="{{ url('/login') }}" class="bg-white text-teal-600 hover:bg-gray-100 px-4 py-2 rounded-lg font-semibold transition">Login</a>
                    <a href="tel:+628006948377" class="bg-white text-teal-600 hover:bg-gray-100 px-4 py-2 rounded-lg font-semibold transition">+62 807 6945 8377</a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-white" onclick="toggleMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-teal-700 px-4 py-4">
            <a href="{{ url('/beranda') }}" class="block text-white hover:text-teal-200 py-2">Beranda</a>
            <a href="{{ url('/arsip-inovasi') }}" class="block text-white hover:text-teal-200 py-2">Arsip Inovasi</a>
            <a href="{{ url('/kirim-ide') }}" class="block text-white hover:text-teal-200 py-2">Kirim Ide</a>
            <a href="{{ url('/tentang-insanova') }}" class="block text-white hover:text-teal-200 py-2">Tentang Insanova</a>
            <a href="{{ url('/login') }}" class="block bg-white text-teal-600 text-center px-4 py-2 rounded-lg font-semibold mt-2">Login</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-white py-12 px-4">
        <div class="container mx-auto text-center">
            <p class="text-teal-600 font-semibold text-sm uppercase tracking-wide mb-3">Insan Berinovasi</p>
            <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                Mengenal Program Insanova
            </h1>
        </div>
    </section>

    <!-- Latar Belakang Section -->
    <section class="bg-gray-100 py-16 px-4">
        <div class="container mx-auto">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                    <!-- Left: Images -->
                    <div class="space-y-6">
                        <!-- Image 1: Values, Mission, Vision -->
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                            <img src="{{ asset('build/assets/images/values-mission-vision.jpg') }}" 
                                 alt="Values Mission Vision" 
                                 class="w-full h-64 object-cover"
                                 onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect fill=%22%2314b8a6%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22white%22%3EVALUES%20MISSION%20VISION%3C/text%3E%3C/svg%3E';">
                        </div>

                        <!-- Image 2: Vision Bulb -->
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                            <img src="{{ asset('build/assets/images/vision-bulb.jpg') }}" 
                                 alt="Vision" 
                                 class="w-full h-64 object-cover"
                                 onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect fill=%22%2314b8a6%22 width=%22400%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22white%22%3EVISION%3C/text%3E%3C/svg%3E';">
                        </div>
                    </div>

                    <!-- Right: Content -->
                    <div>
                        <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-6">LATAR BELAKANG</h2>
                        
                        <div class="space-y-4 text-gray-700 leading-relaxed">
                            <p>
                                Di era transformasi digital dan tuntutan layanan publik yang semakin kompleks, BPJS Ketenagakerjaan menghadapi berbagai tantangan yang memerlukan solusi inovatif. Baik dalam aspek pelayanan, teknologi, maupun efisiensi operasional. Untuk itu, BPJS Ketenagakerjaan meluncurkan program INSANOVA (Insan Inovasi), sebuah wadah bagi seluruh insan BPJS Ketenagakerjaan, mitra kerja, dan masyarakat umum untuk menyalurkan ide-ide kreatif dan inovatif yang dapat meningkatkan kualitas layanan jaminan sosial.
                            </p>

                            <p>
                                BPJS Ketenagakerjaan percaya bahwa inovasi tidak hanya datang dari unit tertentu, melainkan dari seluruh pihak yang terlibat dalam ekosistem jaminan sosial ketenagakerjaan. Oleh karena itu, program ini hadir sebagai upaya untuk menghimpun dan mengelola ide-ide cemerlang yang dapat memberikan nilai tambah, baik dalam meningkatkan kepuasan peserta, efisiensi internal, maupun kontribusi terhadap pembangunan ekonomi dan kesejahteraan pekerja Indonesia.
                            </p>

                            <p>
                                Dengan melalui program INSANOVA, diharapkan BPJS Ketenagakerjaan dapat:
                            </p>

                            <ul class="list-disc list-inside space-y-2 ml-4">
                                <li>Meningkatkan kualitas layanan kepada peserta dan pemberi kerja.</li>
                                <li>Mengoptimalkan proses bisnis dan efisiensi operasional.</li>
                                <li>Mendorong budaya inovasi di seluruh lini organisasi.</li>
                                <li>Menciptakan solusi berkelanjutan yang berdampak positif bagi masyarakat luas.</li>
                            </ul>

                            <p>
                                Melalui kerja sama dari semua pihak, INSANOVA diharapkan dapat menjadi wadah untuk menghasilkan ide-ide yang tidak hanya solutif, tetapi juga dapat diimplementasikan secara nyata demi terwujudnya visi BPJS Ketenagakerjaan dalam memberikan perlindungan yang komprehensif dan inklusif bagi seluruh pekerja Indonesia.
                            </p>
                        </div>

                        <div class="mt-8">
                            <a href="{{ url('/kirim-ide') }}" class="inline-flex items-center bg-teal-600 hover:bg-teal-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-300">
                                Kirimkan Ide Anda
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Maksud dan Tujuan Section -->
    <section class="bg-white py-16 px-4">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto text-center">
                <p class="text-teal-600 font-semibold text-sm uppercase tracking-wide mb-3">INSANOVA 2025</p>
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-6">
                    MAKSUD DAN TUJUAN
                </h2>

                <div class="text-gray-700 leading-relaxed space-y-4">
                    <p>
                        Maksud dari program Insanova adalah untuk menciptakan ruang bagi seluruh insan BPJS Ketenagakerjaan untuk dapat tampil sebagai pelaku inovasi dengan ide-ide cemerlang yang mampu memberikan dampak signifikan terhadap pelayanan, efisiensi, dan kepuasan peserta serta penerima manfaat lainnya. Dengan mendorong budaya inovasi secara berkelanjutan, program ini diharapkan mampu memperkuat daya saing institusi dalam menghadapi dinamika ketenagakerjaan yang terus berkembang.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Pelaksanaan Section -->
    <section class="bg-gray-100 py-16 px-4">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto text-center">
                <p class="text-teal-600 font-semibold text-sm uppercase tracking-wide mb-3">INSANOVA 2025</p>
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-12">
                    TIMELINE PELAKSANAAN
                </h2>

                <!-- Timeline Image -->
                <div class="bg-white rounded-2xl shadow-xl p-8 inline-block">
                    <img src="{{ asset('build/assets/images/timeline-insanova.png') }}" 
                         alt="Timeline Pelaksanaan Insanova" 
                         class="w-full max-w-2xl h-auto mx-auto"
                         onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22600%22 height=%22800%22%3E%3Crect fill=%22%23f3f4f6%22 width=%22600%22 height=%22800%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22Arial%22 font-size=%2224%22 fill=%22%23666%22%3ETIMELINE%20PELAKSANAAN%3C/text%3E%3C/svg%3E';">
                </div>

                <!-- Timeline Steps (Alternative if image not available) -->
                <div class="mt-12 hidden" id="timelineSteps">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Step 1 -->
                        <div class="bg-yellow-400 text-gray-900 p-6 rounded-xl shadow-lg">
                            <div class="text-4xl font-bold mb-2">01</div>
                            <h3 class="font-bold text-lg mb-2">Sosialisasi</h3>
                            <p class="text-sm">Januari - Februari 2025</p>
                        </div>

                        <!-- Step 2 -->
                        <div class="bg-yellow-400 text-gray-900 p-6 rounded-xl shadow-lg">
                            <div class="text-4xl font-bold mb-2">02</div>
                            <h3 class="font-bold text-lg mb-2">Pengumpulan Ide</h3>
                            <p class="text-sm">Maret - April 2025</p>
                        </div>

                        <!-- Step 3 -->
                        <div class="bg-yellow-400 text-gray-900 p-6 rounded-xl shadow-lg">
                            <div class="text-4xl font-bold mb-2">03</div>
                            <h3 class="font-bold text-lg mb-2">Seleksi Awal</h3>
                            <p class="text-sm">Mei 2025</p>
                        </div>

                        <!-- Step 4 -->
                        <div class="bg-green-400 text-gray-900 p-6 rounded-xl shadow-lg">
                            <div class="text-4xl font-bold mb-2">04</div>
                            <h3 class="font-bold text-lg mb-2">Penilaian</h3>
                            <p class="text-sm">Juni 2025</p>
                        </div>

                        <!-- Step 5 -->
                        <div class="bg-green-400 text-gray-900 p-6 rounded-xl shadow-lg">
                            <div class="text-4xl font-bold mb-2">05</div>
                            <h3 class="font-bold text-lg mb-2">Presentasi Finalis</h3>
                            <p class="text-sm">Juli 2025</p>
                        </div>

                        <!-- Step 6 -->
                        <div class="bg-green-400 text-gray-900 p-6 rounded-xl shadow-lg">
                            <div class="text-4xl font-bold mb-2">06</div>
                            <h3 class="font-bold text-lg mb-2">Pengumuman Pemenang</h3>
                            <p class="text-sm">Agustus 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-teal-600 to-teal-700 py-16 px-4">
        <div class="container mx-auto text-center text-white">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">
                Mari Bergabung dalam Program INSANOVA
            </h2>
            <p class="text-lg mb-8 opacity-90 max-w-2xl mx-auto">
                Wujudkan ide inovatif Anda dan berkontribusi untuk masa depan yang lebih baik bagi pekerja Indonesia
            </p>

            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-8 text-center max-w-2xl mx-auto rounded">
            <p class="text-red-700 text-sm text-left">
                <span class="font-bold">*Catatan Penting:</span> Sebelum menyalurkan ide Anda marilah membuat akun terlebih dahulu supaya diri anda terdaftar sebagai pengirim ide di Insanova.
            </div>
        </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/kirim-ide') }}" class="inline-block bg-white text-teal-700 hover:bg-gray-100 font-bold px-8 py-4 rounded-lg transition duration-300 shadow-lg">
                    Kirim Ide Sekarang
                </a>
                <a href="{{ url('/arsip-inovasi') }}" class="inline-block bg-teal-800 text-white hover:bg-teal-900 font-bold px-8 py-4 rounded-lg transition duration-300 shadow-lg">
                    Lihat Arsip Pemenang
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 px-4">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('build/assets/images/logo-insanova.png') }}" alt="INSANOVA" class="h-12 w-auto object-contain" onerror="this.style.display='none'">
                    </div>
                    <p class="text-gray-400 text-sm">
                        INSANOVA - Platform Inovasi untuk Pekerja Indonesia
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-bold mb-4">Menu</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="{{ url('/beranda') }}" class="hover:text-white">Beranda</a></li>
                        <li><a href="{{ url('/arsip-inovasi') }}" class="hover:text-white">Arsip Inovasi</a></li>
                        <li><a href="{{ url('/kirim-ide') }}" class="hover:text-white">Kirim Ide</a></li>
                        <li><a href="{{ url('/tentang-insanova') }}" class="hover:text-white">Tentang Insanova</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="font-bold mb-4">Kontak</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li>Email: info@insanova.co.id</li>
                        <li>Tel: +62 0807 6945 8377</li>
                        <li>Jakarta, Indonesia</li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div>
                    <h3 class="font-bold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; 2025 INSANOVA. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>