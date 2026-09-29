<x-app-layout>
    <!-- CSS FIX: Konsistensi Sidebar & Styling Area Kamera -->
    <style>
        body > div > nav, header.bg-white { display: none !important; } 
        
        /* Animasi Garis Laser Scan */
        .scanner-laser {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: #6366f1;
            box-shadow: 0 0 15px 2px rgba(99, 102, 241, 0.8);
            animation: scan 2s linear infinite;
            z-index: 10;
        }

        @keyframes scan {
            0% { top: 0; }
            50% { top: 100%; }
            100% { top: 0; }
        }

        /* Styling Tombol Bawaan Library Scanner agar tidak 'alay' */
        #reader button {
            background-color: #4f46e5 !important;
            color: white !important;
            border: none !important;
            padding: 10px 20px !important;
            border-radius: 12px !important;
            font-weight: bold !important;
            text-transform: uppercase !important;
            font-size: 10px !important;
            letter-spacing: 1px !important;
            margin-top: 10px !important;
            cursor: pointer !important;
            transition: 0.3s !important;
        }
        #reader button:hover {
            background-color: #6366f1 !important;
            transform: scale(1.05);
        }
        #reader select {
            background: #111827 !important;
            color: white !important;
            border: 1px solid #374151 !important;
            border-radius: 8px !important;
            padding: 5px !important;
        }
    </style>

    <div class="flex h-screen bg-[#0B0F1A] text-slate-300 font-sans selection:bg-indigo-500/30 overflow-hidden">
        
        <!-- SIDEBAR (Sama dengan Dashboard) -->
        <aside class="w-72 bg-[#0F172A] border-r border-white/5 flex flex-col z-50 shadow-2xl">
            <div class="p-8">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-[#161F32] rounded-lg flex items-center justify-center border border-white/10">
                        <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <span class="text-white font-bold text-xl tracking-tighter uppercase">Librarize<span class="text-indigo-500">.</span></span>
                </div>
            </div>

            <div class="flex-1 px-4 space-y-2 mt-4 overflow-y-auto">
                <p class="px-4 text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-4">Menu Utama</p>
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-white/5 rounded-xl transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z"></path></svg>
                    <span class="font-bold text-sm">Dashboard</span>
                </a>
                <a href="{{ route('books.index') }}" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-white/5 rounded-xl transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    <span class="font-bold text-sm">Arsip Buku</span>
                </a>
            </div>
        </aside>

        <!-- KONTEN UTAMA -->
        <main class="flex-1 flex flex-col relative overflow-hidden bg-[#0B0F1A]">
            
            <!-- HEADER -->
            <header class="h-20 border-b border-white/5 flex items-center justify-between px-10">
                <h2 class="text-xl font-black text-white tracking-tighter uppercase italic">Unit Pemindai Biometrik Buku<span class="text-indigo-500">.</span></h2>
                <div class="flex items-center gap-3">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest italic">Sistem Siap</span>
                </div>
            </header>

            <!-- SCANNER AREA -->
            <div class="flex-1 overflow-y-auto p-10 custom-scrollbar flex flex-col items-center justify-center">
                
                <div class="max-w-xl w-full text-center">
                    <div class="mb-10">
                        <h3 class="text-3xl font-black text-white tracking-tighter uppercase mb-2">Inisialisasi Pemindaian</h3>
                        <p class="text-slate-500 text-sm font-light italic">"Arahkan QR Code buku ke dalam kotak sensor di bawah ini untuk otorisasi peminjaman otomatis."</p>
                    </div>

                    <!-- CONTAINER KAMERA DENGAN EFEK HIGH-TECH -->
                    <div class="relative p-2 bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded-[2.5rem] border border-white/5 shadow-2xl">
                        <div class="relative bg-[#0F172A] rounded-[2rem] overflow-hidden border border-white/10 min-h-[300px]">
                            
                            <!-- Laser Animation Overlay -->
                            <div class="scanner-laser"></div>

                            <!-- Decorative Corners -->
                            <div class="absolute top-5 left-5 w-10 h-10 border-t-4 border-l-4 border-indigo-500 rounded-tl-lg z-20"></div>
                            <div class="absolute top-5 right-5 w-10 h-10 border-t-4 border-r-4 border-indigo-500 rounded-tr-lg z-20"></div>
                            <div class="absolute bottom-5 left-5 w-10 h-10 border-b-4 border-l-4 border-indigo-500 rounded-bl-lg z-20"></div>
                            <div class="absolute bottom-5 right-5 w-10 h-10 border-b-4 border-r-4 border-indigo-500 rounded-br-lg z-20"></div>

                            <!-- Area Kamera -->
                            <div id="reader" class="w-full"></div>
                        </div>
                    </div>

                    <div class="mt-12 flex flex-col items-center gap-6">
                        <div class="flex items-center gap-4 py-3 px-6 bg-white/5 border border-white/10 rounded-2xl">
                            <div class="w-3 h-3 bg-indigo-500 rounded-full animate-ping"></div>
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Mencari Sinyal Enkripsi...</p>
                        </div>
                        
                        <a href="{{ route('books.index') }}" class="text-xs font-bold text-slate-600 hover:text-white transition uppercase tracking-widest italic decoration-indigo-500 underline underline-offset-8">
                            &larr; Abort (Kembali ke Katalog)
                        </a>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <!-- Script QR Scanner -->
    <script src="https://unpkg.com/html5-qrcode"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // Feedback visual sukses
            document.querySelector('.scanner-laser').style.backgroundColor = '#10b981'; // Ubah laser jadi hijau
            console.log(`Scan Berhasil: ${decodedText}`);
            
            // Redirect kilat
            setTimeout(() => {
                window.location.href = decodedText;
            }, 500);
        }

        function onScanFailure(error) {
            // Abaikan error kecil
        }

        // Inisialisasi Scanner dengan Gaya Modern
        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", 
            { 
                fps: 20, // Lebih cepat lebih smooth
                qrbox: { width: 250, height: 250 },
                aspectRatio: 1.0 
            }
        );
        
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
</x-app-layout>