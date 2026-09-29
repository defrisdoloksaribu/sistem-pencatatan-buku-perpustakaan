<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BiblioTech - Perpustakaan Digital Masa Depan</title>

    <!-- Fonts: Menggunakan kombinasi Serif untuk kesan buku dan Sans untuk modernitas -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&family=Instrument+Serif:italic@0;1&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (V4 compatible style) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-serif-italic { font-family: 'Instrument Serif', serif; font-style: italic; }
        
        .glass { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(12px); }
        .dark .glass { background: rgba(15, 15, 15, 0.7); backdrop-filter: blur(12px); }

        /* Animasi Mengambang untuk visual buku */
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        .float-anim { animation: float 6s ease-in-out infinite; }
        
        .bg-mesh {
            background-color: #fdfdfc;
            background-image: radial-gradient(at 0% 0%, rgba(79, 70, 229, 0.05) 0px, transparent 50%),
                              radial-gradient(at 100% 100%, rgba(245, 158, 11, 0.05) 0px, transparent 50%);
        }
        .dark .bg-mesh { background-color: #0a0a0a; }
    </style>
</head>
<body class="bg-mesh text-slate-900 dark:text-slate-100 selection:bg-indigo-100 overflow-x-hidden">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 glass border-b border-slate-200/50 dark:border-slate-800/50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2 group">
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <span class="text-xl font-bold tracking-tighter uppercase dark:text-white">Biblio<span class="text-indigo-600">Tech</span></span>
            </div>

            @if (Route::has('login'))
                <div class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-semibold px-5 py-2.5 bg-indigo-600 text-white rounded-full shadow-lg hover:bg-indigo-700 transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-semibold hover:text-indigo-600 transition">Masuk</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-5 py-2.5 border border-slate-200 dark:border-slate-700 rounded-full text-sm font-semibold hover:bg-slate-50 dark:hover:bg-slate-800 transition">Daftar</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <main class="relative pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Sisi Kiri: Konten -->
            <div class="relative z-10">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-50 dark:bg-indigo-900/30 border border-indigo-100 dark:border-indigo-800 mb-6">
                    <span class="w-2 h-2 rounded-full bg-indigo-600 animate-pulse"></span>
                    <span class="text-xs font-bold text-indigo-600 dark:text-indigo-400 uppercase tracking-widest">Sistem Perpustakaan v2.0</span>
                </div>
                
                <h1 class="text-6xl lg:text-7xl font-bold tracking-tight leading-[0.95] mb-8">
                    Baca Buku <br>
                    <span class="font-serif-italic text-indigo-600">Tanpa Ribet,</span> <br>
                    Cukup Scan QR.
                </h1>
                
                <p class="text-lg text-slate-600 dark:text-slate-400 mb-10 max-w-md leading-relaxed">
                    Sistem peminjaman buku tercanggih untuk mahasiswa. Jelajahi ribuan koleksi dan ajukan peminjaman secara instan dari smartphone Anda.
                </p>

                <div class="flex items-center gap-4">
                    <a href="{{ route('register') }}" class="group px-8 py-4 bg-slate-900 dark:bg-white dark:text-slate-900 text-white rounded-2xl font-bold text-lg shadow-2xl hover:scale-105 transition flex items-center gap-3">
                        Mulai Jelajahi
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-1 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <div class="mt-16 grid grid-cols-3 gap-8">
                    <div>
                        <p class="text-2xl font-bold">12K+</p>
                        <p class="text-xs text-slate-500 uppercase font-semibold tracking-widest">Buku</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold">5K+</p>
                        <p class="text-xs text-slate-500 uppercase font-semibold tracking-widest">Anggota</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold">24/7</p>
                        <p class="text-xs text-slate-500 uppercase font-semibold tracking-widest">Akses</p>
                    </div>
                </div>
            </div>

            <!-- Sisi Kanan: Visual Unik -->
            <div class="relative">
                <!-- Lingkaran Dekoratif Belakang -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-indigo-100 dark:bg-indigo-900/20 rounded-full blur-3xl opacity-60"></div>
                
                <div class="relative float-anim">
                    <div class="bg-white dark:bg-slate-800 p-4 rounded-[2.5rem] shadow-2xl border border-slate-200 dark:border-slate-700 max-w-md mx-auto transform -rotate-3 hover:rotate-0 transition duration-700">
                        <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=1000&auto=format&fit=crop" class="rounded-[2rem] w-full h-[400px] object-cover" alt="Buku">
                        
                        <!-- Floating Card: Info QR -->
                        <div class="absolute -right-10 top-1/3 bg-white dark:bg-slate-900 p-5 rounded-3xl shadow-2xl border border-slate-100 dark:border-slate-800 flex items-center gap-4 animate-bounce">
                            <div class="w-12 h-12 bg-indigo-600 rounded-2xl flex items-center justify-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[10px] font-bold text-indigo-600 uppercase tracking-tighter">Fitur Utama</p>
                                <p class="text-sm font-bold tracking-tight">QR Borrowing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Section Fitur -->
    <section class="py-24 bg-white dark:bg-[#0e0e0e] border-y border-slate-100 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12">
                <!-- Fitur 1 -->
                <div class="group">
                    <div class="mb-6 w-14 h-14 bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 rounded-2xl flex items-center justify-center group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 tracking-tight">Pencarian Cerdas</h3>
                    <p class="text-slate-500 dark:text-slate-400 leading-relaxed text-sm">Temukan lokasi rak buku secara presisi hanya dengan mengetikkan judul atau penulis.</p>
                </div>
                
                <!-- Fitur 2 -->
                <div class="group">
                    <div class="mb-6 w-14 h-14 bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 rounded-2xl flex items-center justify-center group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 tracking-tight">Notifikasi Email</h3>
                    <p class="text-slate-500 dark:text-slate-400 leading-relaxed text-sm">Update status peminjaman dikirim langsung ke email Anda secara real-time.</p>
                </div>

                <!-- Fitur 3 -->
                <div class="group">
                    <div class="mb-6 w-14 h-14 bg-indigo-50 dark:bg-indigo-900/20 text-indigo-600 rounded-2xl flex items-center justify-center group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3 tracking-tight">Keamanan Data</h3>
                    <p class="text-slate-500 dark:text-slate-400 leading-relaxed text-sm">Seluruh riwayat peminjaman Anda tersimpan aman dengan enkripsi standar industri.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 text-center border-t border-slate-100 dark:border-slate-800">
        <p class="text-xs font-bold text-slate-400 uppercase tracking-[0.3em]">&copy; 2025 BiblioTech Library Hub. Made for Future Leaders.</p>
    </footer>

</body>
</html>