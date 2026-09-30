<x-app-layout>
    <!-- CSS FIX: Menghilangkan Navigasi Bawaan & Styling Scrollbar -->
    <style>
        body > div > nav, header.bg-white { display: none !important; } 
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 10px; }
    </style>

    <div class="flex h-screen bg-[#0B0F1A] text-slate-300 font-sans selection:bg-indigo-500/30 overflow-hidden">
        
        <!-- SIDEBAR (Konsisten dengan Dashboard) -->
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
                    <span class="font-bold text-sm tracking-tight">Dashboard</span>
                </a>

                <a href="{{ route('books.index') }}" class="flex items-center gap-3 px-4 py-3 text-white bg-indigo-600 rounded-xl shadow-[0_0_20px_rgba(79,70,229,0.3)] transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    <span class="font-bold text-sm tracking-tight">Arsip Buku</span>
                </a>

                <a href="{{ route('borrowings.index') }}" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-white/5 rounded-xl transition-all group">
                    <svg class="w-5 h-5 group-hover:text-indigo-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    <span class="font-bold text-sm tracking-tight">Peminjaman</span>
                </a>

                <div class="pt-8 px-4">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-xl transition group">
                            <svg class="w-5 h-5 group-hover:scale-110 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            <span class="font-bold text-sm uppercase">Keluar</span>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- AREA KONTEN UTAMA -->
        <main class="flex-1 flex flex-col relative overflow-hidden bg-[#0B0F1A]">
            
            <!-- HEADER (Search Bar & Identitas) -->
            <header class="h-20 border-b border-white/5 flex items-center justify-between px-10 z-40 bg-[#0B0F1A]">
                <form action="{{ route('books.index') }}" method="GET" class="flex items-center bg-white/5 border border-white/10 px-4 py-2 rounded-xl w-96 focus-within:border-indigo-500/50 transition">
                    <svg class="w-4 h-4 text-slate-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari judul atau penulis..." class="bg-transparent border-none text-sm text-slate-300 focus:ring-0 w-full placeholder:text-slate-600">
                </form>

                <div class="flex items-center gap-6">
                    <div class="text-right">
                        <p class="text-[10px] font-bold text-indigo-500 uppercase tracking-widest italic">Data Global</p>
                        <p class="text-sm font-black text-white tracking-tighter uppercase">{{ $books->total() }} Koleksi Terdaftar</p>
                    </div>
                </div>
            </header>

            <!-- ISI HALALMAN (SCROLLABLE) -->
            <div class="flex-1 overflow-y-auto p-10 custom-scrollbar space-y-8">
                
                <!-- TOP ACTIONS & NOTIFIKASI -->
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="flex gap-3">
                        @if(Auth::user()->role === 'admin')
                            <a href="{{ route('books.create') }}" class="px-6 py-3 bg-indigo-600 text-white font-black rounded-xl hover:bg-indigo-500 transition shadow-lg shadow-indigo-600/20 flex items-center gap-2 uppercase text-[10px] tracking-[0.2em]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                                Tambah Koleksi
                            </a>
                            <a href="{{ route('books.exportPdf') }}" target="_blank" class="px-6 py-3 bg-red-600/10 border border-red-600/20 text-red-500 font-black rounded-xl hover:bg-red-600 hover:text-white transition flex items-center gap-2 uppercase text-[10px] tracking-[0.2em]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                Cetak Laporan
                            </a>
                        @else
                            <a href="{{ route('borrowings.scanner') }}" class="px-6 py-3 bg-indigo-600 text-white font-black rounded-xl hover:bg-indigo-500 transition shadow-lg flex items-center gap-2 uppercase text-[10px] tracking-[0.2em]">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 17h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
                                Scan QR Buku
                            </a>
                        @endif
                    </div>

                    @if(session('success'))
                        <div class="bg-emerald-500/10 border border-emerald-500/20 text-emerald-500 px-6 py-3 rounded-xl text-xs font-bold animate-fade-in uppercase tracking-widest">
                            ✨ {{ session('success') }}
                        </div>
                    @endif
                </div>

                <!-- TABEL INDUSTRIAL DATA -->
                <div class="bg-[#111827] border border-white/5 rounded-[2.5rem] overflow-hidden shadow-2xl">
                    <table class="w-full text-left">
                        <thead class="bg-white/5">
                            <tr>
                                <th class="px-8 py-6 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Arsip Cover</th>
                                <th class="px-8 py-6 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Identitas Buku</th>
                                <th class="px-8 py-6 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Detail & Lokasi</th>
                                <th class="px-8 py-6 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] text-center">Status Stok</th>
                                @if(Auth::user()->role === 'admin')
                                    <th class="px-8 py-6 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] text-center">Enkripsi QR</th>
                                @endif
                                <th class="px-8 py-6 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] text-right">Opsi Sistem</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            @forelse($books as $book)
                                <tr class="hover:bg-white/[0.02] transition duration-300 group">
                                    <td class="px-8 py-6">
                                        <div class="relative w-20 h-28 rounded-xl overflow-hidden shadow-2xl border border-white/10 group-hover:scale-105 transition duration-500">
                                            @if($book->cover_image)
                                                <img src="{{ asset('storage/' . $book->cover_image) }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full bg-slate-800 flex items-center justify-center text-[10px] text-slate-600 font-black uppercase italic">No File</div>
                                            @endif
                                            <div class="absolute inset-0 bg-gradient-to-t from-[#0B0F1A] to-transparent opacity-40"></div>
                                        </div>
                                    </td>
                                    
                                    <td class="px-8 py-6">
                                        <div>
                                            <p class="text-base font-black text-white leading-tight uppercase tracking-tighter">{{ $book->judul }}</p>
                                            <div class="flex items-center gap-2 mt-2">
                                                <span class="text-[10px] font-bold text-indigo-400 bg-indigo-400/10 px-2 py-0.5 rounded uppercase tracking-widest italic">{{ $book->penulis }}</span>
                                                <span class="text-[10px] text-slate-600 font-bold uppercase tracking-widest">{{ $book->tahun_terbit }}</span>
                                            </div>
                                            <p class="text-[10px] text-slate-500 mt-1 italic uppercase tracking-tighter">{{ $book->penerbit }}</p>
                                        </div>
                                    </td>

                                    <td class="px-8 py-6">
                                        <div class="space-y-1.5">
                                            <div class="text-[10px] font-black text-slate-400 uppercase tracking-[0.1em]">Kategori: <span class="text-white italic">{{ $book->kategori ?? 'Umum' }}</span></div>
                                            <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/5 border border-white/10 rounded-lg">
                                                <svg class="w-3 h-3 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                                <span class="text-[10px] font-bold text-slate-300 uppercase tracking-tighter">Lt. {{ $book->lantai ?? '-' }} / Rak {{ $book->rak ?? '-' }}</span>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-8 py-6 text-center">
                                        @if($book->stok > 0)
                                            <div class="inline-flex flex-col items-center">
                                                <span class="text-2xl font-black text-emerald-500 tracking-tighter">{{ $book->stok }}</span>
                                                <span class="text-[9px] font-black text-emerald-500/50 uppercase tracking-widest">Tersedia</span>
                                            </div>
                                        @else
                                            <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-red-500/10 text-red-500 rounded-lg text-[10px] font-black uppercase tracking-widest border border-red-500/20">
                                                <span class="w-1 h-1 bg-red-500 rounded-full animate-ping"></span>
                                                Habis
                                            </div>
                                        @endif
                                    </td>

                                    @if(Auth::user()->role === 'admin')
                                        <td class="px-8 py-6 text-center">
                                            <div class="inline-block p-2 bg-white rounded-2xl shadow-xl shadow-white/5 transition duration-500 group-hover:rotate-6">
                                                {!! QrCode::size(60)->generate(route('borrowings.processScan', $book->uuid)) !!}
                                            </div>
                                            <p class="text-[9px] font-mono text-slate-600 mt-2 uppercase tracking-tighter">{{ substr($book->uuid, 0, 8) }}</p>
                                        </td>
                                    @endif

                                    <td class="px-8 py-6">
                                        <div class="flex justify-end items-center gap-2">
                                            @if(Auth::user()->role === 'admin')
                                                <a href="{{ route('books.edit', $book->id) }}" class="p-2.5 bg-white/5 border border-white/10 text-amber-500 rounded-xl hover:bg-amber-500 hover:text-white transition shadow-lg">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                                </a>
                                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Hapus data ini secara permanen dari server?');">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="p-2.5 bg-white/5 border border-white/10 text-red-500 rounded-xl hover:bg-red-500 hover:text-white transition shadow-lg">
                                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                                    </button>
                                                </form>
                                            @else
                                                @if($book->stok > 0)
                                                    <a href="{{ route('borrowings.create', $book->id) }}" class="px-4 py-2 bg-indigo-600 text-white text-[10px] font-black uppercase tracking-widest rounded-xl hover:bg-indigo-500 transition shadow-lg shadow-indigo-600/20 flex items-center gap-2">
                                                        📖 Pinjam
                                                    </a>
                                                @else
                                                    <span class="px-4 py-2 bg-white/5 border border-white/10 text-slate-600 text-[10px] font-black uppercase tracking-widest rounded-xl cursor-not-allowed italic">
    Stok Habis
</span>
                                                @endif
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-8 py-20 text-center">
                                        <p class="text-slate-500 font-light italic tracking-widest uppercase text-sm">"Arsip data tidak ditemukan dalam sistem"</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- PAGINATION -->
                <div class="px-2 pb-10">
                    {{ $books->links() }}
                </div>

            </div>
        </main>
    </div>
</x-app-layout>