<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Ide - INSANOVA</title>
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
        <div class="container mx-auto text-center max-w-4xl">
            <p class="text-teal-600 font-semibold text-lg mb-4">Insan Berinovasi</p>
            <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-8">
                Salurkan Inovasi anda
            </h1>
            
            <!-- Steps -->
            <div class="space-y-3 text-left max-w-2xl mx-auto mb-6">
                <div class="flex items-start">
                    <span class="font-bold text-gray-700 mr-3">1.</span>
                    <p class="text-gray-700">Kriteria Ide</p>
                </div>
                <div class="flex items-start">
                    <span class="font-bold text-gray-700 mr-3">2.</span>
                    <p class="text-gray-700">Proses Review</p>
                </div>
                <div class="flex items-start">
                    <span class="font-bold text-gray-700 mr-3">3.</span>
                    <p class="text-gray-700">Pastikan data dan kontak anda benar</p>
                </div>
                <div class="flex items-start">
                    <span class="font-bold text-gray-700 mr-3">4.</span>
                    <p class="text-gray-700">Jaminan Kerahasiaan data anda</p>
                </div>
            </div>

            <!-- Warning Note -->
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-8">
                <p class="text-red-700 text-sm text-left">
                    <span class="font-bold">*Catatan Penting:</span> Jarak teks di bawah formulir ini harus pemisahan bahwa semua data yang disubmit akan masuk ke database BPJS Ketenagakerjaan untuk dinyunyi lebih lanjut.
                </p>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section class="bg-gray-100 py-12 px-4">
        <div class="container mx-auto max-w-4xl">
            <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-12">
                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 text-center mb-8">
                    Formulir Pengajuan Ide Inovasi<br>
                    INSANOVA BPJS Ketenagakerjaan
                </h2>

                <div class="mb-8 text-gray-700 space-y-4">
                    <p class="font-semibold">Formulir Pengajuan Ide Inovasi INSANOVA BPJS Ketenagakerjaan</p>
                    <p>Selamat datang di saluran resmi pengajuan Ide Inovasi untuk program INSANOVA (Insan Inovasi) BPJS Ketenagakerjaan!</p>
                    <p>Kami mengundang seluruh Insan BPJS Ketenagakerjaan, mitra, peserta, dan masyarakat umum untuk menyalurkan gagasan cemerlang yang dapat meningkatkan layanan, menghilangkan operasional, dan memperluas manfaat perlindungan jaminan sosial.</p>
                    
                    <div class="mt-6">
                        <p class="font-semibold mb-2">Mohon Perhatian:</p>
                        <ol class="list-decimal list-inside space-y-2 text-sm">
                            <li>Isi semua kolom wajib dengan data yang benar dan lengkap.</li>
                            <li>Pastikan ide yang Anda ajukan adalah orisinal dan belum pernah diimplementasikan secara resmi.</li>
                            <li>Setiap ide yang masuk akan ditinjau secara berkala oleh Tim Penilai Inovasi dan akan dipertimbangkan untuk pengembangan lebih lanjut dari BPJS Ketenagakerjaan.</li>
                        </ol>
                    </div>

                    <p class="mt-6">Terima kasih atas kontribusi Anda dalam membangun masa depan ketenagakerjaan yang lebih baik.</p>
                    
                    <p class="font-semibold mt-6">Mari Berinovasi!👍</p>
                </div>

                <!-- Form Start -->
                <form action="{{ url('/kirim-ide/submit') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Informasi Pengusul -->
                    <div class="border-t pt-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Informasi Pengusul</h3>

                        <!-- Nama Lengkap -->
                        <div class="mb-6">
                            <label for="nama" class="block text-gray-700 font-semibold mb-2">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="nama" name="nama" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                   placeholder="Masukkan nama lengkap Anda">
                        </div>

                        <!-- Email -->
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-semibold mb-2">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                   placeholder="contoh@email.com">
                        </div>

                        <!-- No. Telepon -->
                        <div class="mb-6">
                            <label for="telepon" class="block text-gray-700 font-semibold mb-2">
                                No. Telepon/WhatsApp <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="telepon" name="telepon" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                   placeholder="08xxxxxxxxxx">
                        </div>

                        <!-- Unit Kerja -->
                        <div class="mb-6">
                            <label for="unit_kerja" class="block text-gray-700 font-semibold mb-2">
                                Unit Kerja/Instansi <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="unit_kerja" name="unit_kerja" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                   placeholder="Masukkan unit kerja Anda">
                        </div>

                        <!-- Jabatan -->
                        <div class="mb-6">
                            <label for="jabatan" class="block text-gray-700 font-semibold mb-2">
                                Jabatan
                            </label>
                            <input type="text" id="jabatan" name="jabatan"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                   placeholder="Masukkan jabatan Anda">
                        </div>
                    </div>

                    <!-- Informasi Inovasi -->
                    <div class="border-t pt-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Informasi Inovasi</h3>

                        <!-- Judul Inovasi -->
                        <div class="mb-6">
                            <label for="judul_inovasi" class="block text-gray-700 font-semibold mb-2">
                                Judul Inovasi <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="judul_inovasi" name="judul_inovasi" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                   placeholder="Berikan judul yang singkat dan deskriptif">
                        </div>

                        <!-- Kategori Inovasi -->
                        <div class="mb-6">
                            <label for="kategori" class="block text-gray-700 font-semibold mb-2">
                                Kategori Inovasi <span class="text-red-500">*</span>
                            </label>
                            <select id="kategori" name="kategori" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent">
                                <option value="">Pilih Kategori</option>
                                <option value="teknologi">Teknologi Informasi</option>
                                <option value="pelayanan">Pelayanan Publik</option>
                                <option value="efisiensi">Efisiensi Operasional</option>
                                <option value="kesehatan">Kesehatan & Keselamatan Kerja</option>
                                <option value="lingkungan">Lingkungan & Keberlanjutan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>

                        <!-- Deskripsi Masalah -->
                        <div class="mb-6">
                            <label for="deskripsi_masalah" class="block text-gray-700 font-semibold mb-2">
                                Deskripsi Masalah yang Ingin Diselesaikan <span class="text-red-500">*</span>
                            </label>
                            <textarea id="deskripsi_masalah" name="deskripsi_masalah" rows="5" required
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                      placeholder="Jelaskan masalah atau tantangan yang ingin diselesaikan dengan inovasi ini"></textarea>
                        </div>

                        <!-- Solusi yang Diusulkan -->
                        <div class="mb-6">
                            <label for="solusi" class="block text-gray-700 font-semibold mb-2">
                                Solusi yang Diusulkan <span class="text-red-500">*</span>
                            </label>
                            <textarea id="solusi" name="solusi" rows="5" required
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                      placeholder="Jelaskan solusi inovatif yang Anda usulkan"></textarea>
                        </div>

                        <!-- Manfaat dan Dampak -->
                        <div class="mb-6">
                            <label for="manfaat" class="block text-gray-700 font-semibold mb-2">
                                Manfaat dan Dampak yang Diharapkan <span class="text-red-500">*</span>
                            </label>
                            <textarea id="manfaat" name="manfaat" rows="5" required
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                      placeholder="Jelaskan manfaat dan dampak positif dari inovasi ini"></textarea>
                        </div>

                        <!-- Rencana Implementasi -->
                        <div class="mb-6">
                            <label for="rencana_implementasi" class="block text-gray-700 font-semibold mb-2">
                                Rencana Implementasi (Opsional)
                            </label>
                            <textarea id="rencana_implementasi" name="rencana_implementasi" rows="4"
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                                      placeholder="Jelaskan langkah-langkah implementasi jika ada"></textarea>
                        </div>

                        <!-- Upload File -->
                        <div class="mb-6">
                            <label for="file_pendukung" class="block text-gray-700 font-semibold mb-2">
                                Upload File Pendukung (Opsional)
                            </label>
                            <p class="text-sm text-gray-600 mb-2">Format: PDF, Word, PowerPoint, atau Gambar (Max 10MB)</p>
                            <input type="file" id="file_pendukung" name="file_pendukung"
                                   accept=".pdf,.doc,.docx,.ppt,.pptx,.jpg,.jpeg,.png"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-teal-50 file:text-teal-700 hover:file:bg-teal-100">
                        </div>
                    </div>

                    <!-- Persetujuan -->
                    <div class="border-t pt-6">
                        <div class="flex items-start mb-6">
                            <input type="checkbox" id="persetujuan" name="persetujuan" required
                                   class="mt-1 w-5 h-5 text-teal-600 border-gray-300 rounded focus:ring-teal-500">
                            <label for="persetujuan" class="ml-3 text-gray-700 text-sm">
                                Saya menyetujui bahwa data yang saya kirimkan adalah benar dan dapat digunakan oleh BPJS Ketenagakerjaan untuk keperluan evaluasi dan implementasi inovasi. <span class="text-red-500">*</span>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center pt-6">
                        <button type="submit" 
                                class="bg-teal-600 hover:bg-teal-700 text-white font-bold px-12 py-4 rounded-lg text-lg transition duration-300 shadow-lg hover:shadow-xl">
                            Kirim Inovasi
                        </button>
                    </div>
                </form>
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