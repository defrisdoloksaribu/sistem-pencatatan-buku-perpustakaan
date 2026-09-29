<x-app-layout>
    <!-- CSS FIX: Menyamakan Tema & Styling Kalender -->
    <style>
        body > div > nav, header.bg-white { display: none !important; } 
        
        /* Membuat icon kalender pada input date menjadi putih/terang */
        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
            cursor: pointer;
        }
    </style>

    <div class="flex h-screen bg-[#0B0F1A] text-slate-300 font-sans selection:bg-indigo-500/30 overflow-hidden">
        
        <!-- SIDEBAR (Konsisten) -->
        <aside class="w-72 bg-[#0F172A] border-r border-white/5 flex flex-col z-50 shadow-2xl">
            <div class="p-8">
                <div class="flex items-center gap-3 group cursor-pointer">
                    <div class="relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-75 transition duration-1000"></div>
                        <div class="relative w-10 h-10 bg-[#161F32] rounded-lg flex items-center justify-center border border-white/10">
                            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                    </div>
                    <span class="text-white font-bold text-xl tracking-tighter uppercase uppercase">Librarize<span class="text-indigo-500">.</span></span>
                </div>
            </div>

            <div class="flex-1 px-4 space-y-2 mt-4 overflow-y-auto">
                <p class="px-4 text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-4">Menu Utama</p>
                
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-white/5 rounded-xl transition-all group">
                    <svg class="w-5 h-5 group-hover:text-indigo-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z"></path></svg>
                    <span class="font-bold text-sm">Dashboard</span>
                </a>

                <a href="{{ route('books.index') }}" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-white/5 rounded-xl transition-all group">
                    <svg class="w-5 h-5 group-hover:text-indigo-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    <span class="font-bold text-sm">Arsip Buku</span>
                </a>
            </div>
        </aside>

        <!-- AREA KONTEN UTAMA -->
        <main class="flex-1 flex flex-col relative overflow-hidden bg-[#0B0F1A]">
            
            <!-- HEADER -->
            <header class="h-20 border-b border-white/5 flex items-center justify-between px-10">
                <h2 class="text-xl font-black text-white tracking-tighter uppercase italic">Otorisasi Akses Peminjaman<span class="text-indigo-500">.</span></h2>
                <a href="{{ route('books.index') }}" class="text-xs font-bold text-slate-500 hover:text-white transition uppercase tracking-widest">← Kembali ke Katalog</a>
            </header>

            <!-- ISI HALAMAN -->
            <div class="flex-1 overflow-y-auto p-10 custom-scrollbar flex justify-center">
                <div class="max-w-3xl w-full">
                    
                    <!-- INFO BUKU (Floating Card) -->
                    <div class="relative overflow-hidden bg-gradient-to-br from-indigo-600 to-purple-700 p-8 rounded-[2.5rem] text-white shadow-2xl mb-8 group transition-all duration-500 hover:shadow-indigo-500/20">
                        <div class="relative z-10 flex items-center gap-6">
                            <div class="w-20 h-28 bg-white/10 backdrop-blur-md rounded-2xl border border-white/20 flex items-center justify-center shadow-inner group-hover:rotate-3 transition duration-500">
                                <svg class="w-10 h-10 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                            <div>
                                <p class="text-[10px] font-black uppercase tracking-[0.3em] text-indigo-200 mb-1">Asset Terdeteksi</p>
                                <h3 class="text-3xl font-black tracking-tighter leading-tight uppercase">{{ $book->judul }}</h3>
                                <p class="text-sm font-light text-indigo-100 italic mt-1 uppercase tracking-tighter">Penulis: {{ $book->penulis }}</p>
                            </div>
                        </div>
                        <!-- Background Glow Decor -->
                        <div class="absolute -right-10 -top-10 w-40 h-40 bg-white/10 rounded-full blur-3xl group-hover:bg-white/20 transition duration-700"></div>
                    </div>

                    <!-- FORMULIR INPUT DARK -->
                    <div class="bg-[#111827] border border-white/5 p-12 rounded-[2.5rem] shadow-2xl relative overflow-hidden">
                        <div class="absolute -left-20 -bottom-20 w-64 h-64 bg-indigo-600/5 rounded-full blur-[100px]"></div>

                        <form action="{{ route('borrowings.store', $book->id) }}" method="POST" class="space-y-8 relative z-10">
                            @csrf

                            <!-- BARIS 1: NAMA & NIM -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3">Operator / Peminjam</label>
                                    <input type="text" name="nama_lengkap" value="{{ Auth::user()->name }}" 
                                        class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 text-white font-bold focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all shadow-inner" required>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3">NIM (Nomor Induk)</label>
                                    <input type="text" name="nim" placeholder="Input NIM Anda..."
                                        class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 text-white font-bold focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all placeholder:text-slate-700 shadow-inner" required>
                                </div>
                            </div>

                            <!-- BARIS 2: PRODI & ANGKATAN -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3">Program Studi</label>
                                    <input type="text" name="prodi" placeholder="Contoh: Teknik Informatika"
                                        class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 text-white font-bold focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all placeholder:text-slate-700 shadow-inner" required>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3">Angkatan</label>
                                    <input type="number" name="angkatan" placeholder="2023"
                                        class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 text-white font-bold focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all placeholder:text-slate-700 shadow-inner" required>
                                </div>
                            </div>

                            <!-- BARIS 3: TANGGAL (BENTO BOX STYLE) -->
                            <div class="bg-white/[0.02] border border-white/5 p-8 rounded-[2rem] grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <label class="block text-[10px] font-black text-indigo-400 uppercase tracking-widest mb-3 italic">Mulai Pinjam</label>
                                    <input type="date" name="tanggal_pinjam" 
                                        class="w-full bg-transparent border-b-2 border-white/10 focus:border-indigo-500 text-white font-black transition-all p-2 text-lg" required>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3 italic">Estimasi Kembali</label>
                                    <input type="date" name="tanggal_kembali" 
                                        class="w-full bg-transparent border-b-2 border-white/10 focus:border-indigo-500 text-white font-black transition-all p-2 text-lg" required>
                                </div>
                            </div>

                            <!-- BUTTON AKSI -->
                            <div class="pt-6">
                                <button type="submit" class="w-full bg-white text-black font-black py-5 rounded-2xl hover:bg-indigo-600 hover:text-white transition-all duration-500 flex items-center justify-center gap-3 shadow-xl active:scale-95 group uppercase text-xs tracking-[0.2em]">
                                    Kirim Permintaan Peminjaman
                                    <svg class="w-5 h-5 group-hover:translate-x-2 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </button>
                                <p class="text-center text-[10px] text-slate-600 font-bold uppercase tracking-widest mt-8 italic">Status pengajuan dapat dipantau pada halaman log transaksi.</p>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </main>
    </div>
</x-app-layout>