<x-app-layout>
    <!-- CSS FIX: Sinkronisasi Tema & Styling Kalender/File -->
    <style>
        body > div > nav, header.bg-white { display: none !important; } 
        
        /* Custom Styling Input File */
        input[type="file"]::file-selector-button {
            background-color: rgba(99, 102, 241, 0.1);
            color: #818cf8;
            border: 1px solid rgba(99, 102, 241, 0.2);
            padding: 8px 16px;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            margin-right: 15px;
        }
        input[type="file"]::file-selector-button:hover {
            background-color: #4f46e5;
            color: white;
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
                    <span class="text-white font-bold text-xl tracking-tighter uppercase">Librarize<span class="text-indigo-500">.</span></span>
                </div>
            </div>

            <div class="flex-1 px-4 space-y-2 mt-4 overflow-y-auto">
                <p class="px-4 text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-4">Menu Utama</p>
                
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-white/5 rounded-xl transition-all group">
                    <svg class="w-5 h-5 group-hover:text-indigo-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z"></path></svg>
                    <span class="font-bold text-sm">Dashboard</span>
                </a>

                <a href="{{ route('books.index') }}" class="flex items-center gap-3 px-4 py-3 text-white bg-indigo-600 rounded-xl shadow-[0_0_20px_rgba(79,70,229,0.3)]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    <span class="font-bold text-sm">Arsip Buku</span>
                </a>

                <div class="pt-8 px-4">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-xl transition group text-left uppercase text-[10px] font-black tracking-widest">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- AREA KONTEN UTAMA -->
        <main class="flex-1 flex flex-col relative overflow-hidden bg-[#0B0F1A]">
            
            <!-- HEADER -->
            <header class="h-20 border-b border-white/5 flex items-center justify-between px-10">
                <h2 class="text-xl font-black text-white tracking-tighter uppercase italic">Registrasi Koleksi Baru<span class="text-indigo-500">.</span></h2>
                <div class="flex items-center gap-4">
                    <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">{{ now()->isoFormat('dddd, D MMMM YYYY') }}</span>
                </div>
            </header>

            <!-- ISI HALAMAN -->
            <div class="flex-1 overflow-y-auto p-10 custom-scrollbar flex justify-center">
                <div class="max-w-4xl w-full">
                    
                    <div class="bg-[#111827] border border-white/5 p-12 rounded-[3rem] shadow-2xl relative overflow-hidden">
                        <!-- Aksesoris Cahaya -->
                        <div class="absolute -right-20 -top-20 w-64 h-64 bg-indigo-600/10 rounded-full blur-[100px]"></div>

                        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8 relative z-10">
                            @csrf

                            <!-- JUDUL BUKU -->
                            <div>
                                <label for="judul" class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3 italic">Judul Lengkap Buku</label>
                                <input type="text" name="judul" id="judul" value="{{ old('judul') }}" placeholder="Contoh: Laskar Pelangi" 
                                    class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 text-white font-bold focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all placeholder:text-slate-700 shadow-inner" required>
                                @error('judul') <p class="text-red-500 text-[10px] mt-2 font-bold uppercase tracking-widest">{{ $message }}</p> @enderror
                            </div>

                            <!-- PENULIS & PENERBIT -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <label for="penulis" class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3">Penulis / Author</label>
                                    <input type="text" name="penulis" id="penulis" value="{{ old('penulis') }}" placeholder="Nama Penulis"
                                        class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 text-white font-bold focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all placeholder:text-slate-700 shadow-inner" required>
                                    @error('penulis') <p class="text-red-500 text-[10px] mt-2 font-bold uppercase tracking-widest">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label for="penerbit" class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3">Penerbit / Publisher</label>
                                    <input type="text" name="penerbit" id="penerbit" value="{{ old('penerbit') }}" placeholder="Nama Penerbit"
                                        class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 text-white font-bold focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all placeholder:text-slate-700 shadow-inner" required>
                                    @error('penerbit') <p class="text-red-500 text-[10px] mt-2 font-bold uppercase tracking-widest">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <!-- TAHUN & STOK -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div>
                                    <label for="tahun_terbit" class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3">Tahun Terbit</label>
                                    <input type="number" name="tahun_terbit" id="tahun_terbit" value="{{ old('tahun_terbit', date('Y')) }}"
                                        class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 text-white font-bold focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all shadow-inner" required>
                                </div>
                                <div>
                                    <label for="stok" class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3">Jumlah Stok Fisik</label>
                                    <input type="number" name="stok" id="stok" value="{{ old('stok') }}" placeholder="0"
                                        class="w-full bg-white/5 border border-white/10 rounded-2xl p-4 text-white font-bold focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all shadow-inner" required>
                                </div>
                            </div>

                            <!-- LOKASI & KATEGORI (BENTO STYLE) -->
                            <div class="bg-white/[0.02] border border-white/5 p-8 rounded-[2.5rem] grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label class="block text-[10px] font-black text-indigo-400 uppercase tracking-widest mb-3 italic">Kategori Koleksi</label>
                                    <select name="kategori" class="w-full bg-[#161F32] border border-white/10 rounded-xl p-3 text-sm text-white font-bold focus:ring-indigo-500 transition-all" required>
                                        <option value="">-- Pilih --</option>
                                        @foreach(['Novel', 'Komik', 'Buku Pelajaran', 'Ensiklopedia', 'Biografi', 'Majalah', 'Lainnya'] as $cat)
                                            <option value="{{ $cat }}" {{ old('kategori') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3">Posisi Rak</label>
                                    <input type="text" name="rak" value="{{ old('rak') }}" placeholder="Cth: A-01"
                                        class="w-full bg-white/5 border border-white/10 rounded-xl p-3 text-sm text-white font-bold focus:ring-indigo-500 transition-all shadow-inner" required>
                                </div>
                                <div>
                                    <label class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-3">Lantai</label>
                                    <input type="number" name="lantai" value="{{ old('lantai') }}" placeholder="Cth: 1"
                                        class="w-full bg-white/5 border border-white/10 rounded-xl p-3 text-sm text-white font-bold focus:ring-indigo-500 transition-all shadow-inner" required>
                                </div>
                            </div>

                            <!-- COVER IMAGE -->
                            <div>
                                <label for="cover_image" class="block text-[10px] font-black text-slate-500 uppercase tracking-widest mb-4 italic">Visual Sampul (Gambar)</label>
                                <div class="border-2 border-dashed border-white/10 p-8 rounded-[2rem] hover:border-indigo-500/50 transition-all text-center group">
                                    <input type="file" name="cover_image" id="cover_image" class="w-full text-xs text-slate-500 font-bold uppercase tracking-widest">
                                    <p class="text-[9px] text-slate-600 mt-4 uppercase tracking-[0.2em]">Format: JPG, JPEG, PNG • Maksimal: 2MB</p>
                                </div>
                                @error('cover_image') <p class="text-red-500 text-[10px] mt-2 font-bold uppercase tracking-widest">{{ $message }}</p> @enderror
                            </div>

                            <!-- TOMBOL AKSI -->
                            <div class="pt-8 flex items-center justify-between">
                                <a href="{{ route('books.index') }}" class="text-xs font-black text-slate-600 hover:text-white uppercase tracking-widest transition italic">
                                    ← Batalkan Input
                                </a>
                                <button type="submit" class="px-12 py-5 bg-white text-black font-black rounded-2xl hover:bg-indigo-600 hover:text-white transition-all duration-500 flex items-center gap-3 shadow-xl active:scale-95 uppercase text-xs tracking-[0.2em]">
                                    Simpan ke Database
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </button>
                            </div>
                        </form>
                    </div>

                    <p class="text-center text-[10px] text-slate-800 font-black uppercase tracking-[0.5em] mt-12 mb-20 italic underline decoration-indigo-500/20 underline-offset-8">Librarize Terminal Access</p>
                </div>
            </div>
        </main>
    </div>
</x-app-layout> 