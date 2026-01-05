<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Six Innovators - INSANOVA</title>
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
                <a href="{{ url('/beranda') }}" class="flex items-center hover:opacity-80 transition">
                    <div class="h-12 w-12 overflow-hidden flex items-center justify-center bg-white rounded">
                        <img src="{{ asset('build/assets/images/logo-insanova.png') }}" 
                             alt="INSANOVA" 
                             class="w-full h-full object-cover object-center">
                    </div>
                    <div class="ml-3 text-white">
                        <div class="font-bold text-xl">INSANOVA</div>
                        <div class="text-xs">LET'S INNOVATE</div>
                    </div>
                </a>

                <!-- Menu Desktop -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="{{ url('/beranda') }}" class="text-white hover:text-teal-200 font-medium transition">Beranda</a>
                    <a href="{{ url('/arsip-inovasi') }}" class="text-white hover:text-teal-200 font-medium transition">Arsip Inovasi</a>
                    <a href="{{ url('/kirim-ide') }}" class="text-white hover:text-teal-200 font-medium transition">Kirim Ide</a>
                    <a href="{{ url('/tentang-insanova') }}" class="text-white hover:text-teal-200 font-medium transition">Tentang Insanova</a>
                    <a href="{{ route('login') }}" class="bg-white text-teal-600 hover:bg-gray-100 px-4 py-2 rounded-lg font-semibold transition">Login</a>
                    <a href="tel:+6208076948377" class="text-white hover:text-teal-200 font-medium transition">+62 0807 6945 8377</a>
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
            <a href="{{ url('/beranda') }}" class="block text-white hover:text-teal-200 py-2 transition">Beranda</a>
            <a href="{{ url('/arsip-inovasi') }}" class="block text-white hover:text-teal-200 py-2 transition">Arsip Inovasi</a>
            <a href="{{ url('/kirim-ide') }}" class="block text-white hover:text-teal-200 py-2 transition">Kirim Ide</a>
            <a href="{{ url('/tentang-insanova') }}" class="block text-white hover:text-teal-200 py-2 transition">Tentang Insanova</a>
            <a href="{{ route('login') }}" class="block bg-white text-teal-600 text-center px-4 py-2 rounded-lg font-semibold mt-2 hover:bg-gray-100 transition">Login</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-teal-50 to-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-2xl lg:text-3xl font-bold text-teal-700 mb-2">
                Pemenang Insanova 2025
            </h1>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                Best Six Innovators
            </h2>
        </div>
    </section>

    <!-- Innovator 1 -->
    <section class="bg-white py-12 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="border-4 border-blue-500 rounded-2xl p-8">
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 text-center mb-6">
                    Tim Si Pertiwi (Sistem Perlindungan<br>Terintegrasi Pekerja Rentan dan DBH)
                </h3>

                <h4 class="text-2xl font-bold text-teal-600 text-center mb-8">
                    Latar Belakang Inovasi
                </h4>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Left: Content -->
                    <div class="space-y-4 text-gray-700 leading-relaxed text-justify">
                        <p>
                            Inisial Si PERTIWI dikembangkan agar kendatain karakteristik sektor menyuguhkan kum berngonsi desa kepadaran. Dan sai butme tenorsti serta yang mortas. Itu termagis sama Permenkol Ismail Dinusal. BPJS Ketenagakerjaan. dan cara penarik klaratuangan tentang penangani Dunia Dhensa Ratu/laya atau Mempat Suat Ganti Daga hasil yang sangat bagi disukai BPJS Ketenagakerjaan.
                        </p>

                        <p>
                            Oleh karena itu, BPJS Ketenagakerjaan yang telah memiliki berlatai layanan dan kepengian BPJS Ketenagakerjaan sebagai senyma pungut utilitah, lagi kepatuhan khusus berdoi social and office. dan mempertukuhutan skama peserta lebih semaitan yang bataukan dalam DH Online satu bersihina yang terjamin untuk kepengian BPJS atau limpakihkan. Dan Mangku di 2126WT6U teigakin telah medjibut para pad jis.
                        </p>
                    </div>

                    <!-- Right: Image/Infographic -->
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('build/assets/images/si-pertiwi-infographic.png') }}" 
                             alt="Si Pertiwi Infographic" 
                             class="w-full h-auto rounded-xl shadow-lg"
                             onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22500%22 height=%22400%22%3E%3Crect fill=%22%23f3f4f6%22 width=%22500%22 height=%22400%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22Arial%22 font-size=%2220%22 fill=%22%23666%22%3ESi PERTIWI Infographic%3C/text%3E%3C/svg%3E';">
                    </div>
                </div>

                <!-- Bottom Section -->
                <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Bottom Left: Additional Image -->
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('build/assets/images/si-pertiwi-diagram.png') }}" 
                             alt="Si Pertiwi Diagram" 
                             class="w-full h-auto rounded-xl shadow-lg"
                             onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22500%22 height=%22300%22%3E%3Crect fill=%22%232d3748%22 width=%22500%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22Arial%22 font-size=%2220%22 fill=%22white%22%3ESi PERTIWI Diagram%3C/text%3E%3C/svg%3E';">
                    </div>

                    <!-- Bottom Right: Key Features -->
                    <div class="space-y-3">
                        <h5 class="font-bold text-gray-900 mb-4">Keunggulan Inovasi:</h5>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Keunggulan Digital Kebanggaan Pastem layanan dilakukan atau waktul cara karena BPJS Ketenagakerjaan yang digitalbat menyaman dan DBH Garu.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Komplementaritas kepatuhan peserta berfokus BPJS Ketenagakerjaan mencapai Masa Terepat Orijin ber Dampingan Kenakan atau Samadentohna.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Terjaga Kisha dari Demangan Kenaturisakan atau Samakentohna.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Tambah Ciptahian Panang Kepatuan sosial digunakan Pibesia pada malabikde ditembannan sosial dan dibentum Pibesia dan benar dan dilakukan.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Meara Tenarik Pastem BPJS Ketenagakerjaan secara melihat sakina bertanduna dan meringkukan kesepakatan.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Semanahima pasir benda belum demikian pertukakaan bertujuhah lapak terhadap tertujuh proses digital kesempatan Pastem BPJS Ketenagakerjaan.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Kemitraan untuk hoka tenuatan lebih ahya tingkah dan dibasa tingkata itu dianggungan biaya keenagakerjaan sosial.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Kemakanan Ahasi ANK's Menjanjikan bida ahyo tingkadi tidak dibasa tingkata itu pungukan tingkatukannya sosial dan keteretuan sosial.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Kemampuan kebebahian anda berburuingan dengan berkurun demiliki dengan penukaran keswa. dirahkan atau sama POB [Panel Layanan Relational Relay Garu tidak layanan Ahasi Sana.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Innovator 2 (Duplicate structure with different content) -->
    <section class="bg-gray-50 py-12 px-4">
        <div class="container mx-auto max-w-6xl">
            <div class="bg-white border-4 border-gray-300 rounded-2xl p-8 shadow-lg">
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 text-center mb-6">
                    Tim Si Pertiwi (Sistem Perlindungan<br>Terintegrasi Pekerja Rentan dan DBH)
                </h3>

                <h4 class="text-2xl font-bold text-teal-600 text-center mb-8">
                    Latar Belakang Inovasi
                </h4>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Left: Content -->
                    <div class="space-y-4 text-gray-700 leading-relaxed text-justify">
                        <p>
                            Inisial Si PERTIWI dikembangkan agar kendatain karakteristik sektor menyuguhkan kum berngonsi desa kepadaran. Dan sai butme tenorsti serta yang mortas. Itu termagis sama Permenkol Ismail Dinusal. BPJS Ketenagakerjaan. dan cara penarik klaratuangan tentang penangani Dunia Dhensa Ratu/laya atau Mempat Suat Ganti Daga hasil yang sangat bagi disukai BPJS Ketenagakerjaan.
                        </p>

                        <p>
                            Oleh karena itu, BPJS Ketenagakerjaan yang telah memiliki berlatai layanan dan kepengian BPJS Ketenagakerjaan sebagai senyma pungut utilitah, lagi kepatuhan khusus berdoi social and office. dan mempertukuhutan skama peserta lebih semaitan yang bataukan dalam DH Online satu bersihina yang terjamin untuk kepengian BPJS atau limpakihkan.
                        </p>
                    </div>

                    <!-- Right: Image/Infographic -->
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('build/assets/images/si-pertiwi-infographic-2.png') }}" 
                             alt="Si Pertiwi Infographic 2" 
                             class="w-full h-auto rounded-xl shadow-lg"
                             onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22500%22 height=%22400%22%3E%3Crect fill=%22%23f3f4f6%22 width=%22500%22 height=%22400%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22Arial%22 font-size=%2220%22 fill=%22%23666%22%3ESi PERTIWI Infographic 2%3C/text%3E%3C/svg%3E';">
                    </div>
                </div>

                <!-- Bottom Section -->
                <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Bottom Left: Additional Image -->
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('build/assets/images/si-pertiwi-diagram-2.png') }}" 
                             alt="Si Pertiwi Diagram 2" 
                             class="w-full h-auto rounded-xl shadow-lg"
                             onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22500%22 height=%22300%22%3E%3Crect fill=%22%232d3748%22 width=%22500%22 height=%22300%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-family=%22Arial%22 font-size=%2220%22 fill=%22white%22%3ESi PERTIWI Diagram 2%3C/text%3E%3C/svg%3E';">
                    </div>

                    <!-- Bottom Right: Key Features -->
                    <div class="space-y-3">
                        <h5 class="font-bold text-gray-900 mb-4">Keunggulan Inovasi:</h5>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Keunggulan Digital Kebanggaan Pastem layanan dilakukan atau waktul cara karena BPJS Ketenagakerjaan.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Meningkatkan kepatuhan peserta dan pemberi kerja dalam program BPJS Ketenagakerjaan.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Mempermudah Proses Pencatatan, perhutanan benar, Indah, Prinsida Porsentasi Desa akan mekanikde Wantapan Sosial Pencatakan.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Meara banguaan Pastem BPJS Ketenagakerjaan dapat gunakan proses umum penataan alampang pekerja Itunm.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Meningkatkan digitalisasi layanan untuk mempermudah akses peserta di seluruh Indonesia.</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-teal-600 font-bold mr-2">•</span>
                                <span>Tertuhap Nita ANK Lackarican Simubidian tidak can CAN Lackarican Kuasaidsan kemp dan tidak lahti laindengan kemp dan Ladri Laintalan.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to Archive Button -->
    <section class="bg-white py-12 px-4">
        <div class="container mx-auto text-center">
            <a href="{{ url('/arsip-inovasi') }}" class="inline-flex items-center bg-teal-600 hover:bg-teal-700 text-white font-semibold px-8 py-4 rounded-lg transition duration-300 shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Kembali ke Arsip Inovasi
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 px-4">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 overflow-hidden flex items-center justify-center bg-white rounded">
                            <img src="{{ asset('build/assets/images/logo-insanova.png') }}" 
                                 alt="INSANOVA" 
                                 class="w-full h-full object-cover object-center" 
                                 onerror="this.style.display='none'">
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm">
                        INSANOVA - Platform Inovasi untuk Pekerja Indonesia
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-bold mb-4">Menu</h3>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="{{ url('/beranda') }}" class="hover:text-white transition">Beranda</a></li>
                        <li><a href="{{ url('/arsip-inovasi') }}" class="hover:text-white transition">Arsip Inovasi</a></li>
                        <li><a href="{{ url('/kirim-ide') }}" class="hover:text-white transition">Kirim Ide</a></li>
                        <li><a href="{{ url('/tentang-insanova') }}" class="hover:text-white transition">Tentang Insanova</a></li>
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
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
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

    <script src="{{ asset('js/app.js') }}">