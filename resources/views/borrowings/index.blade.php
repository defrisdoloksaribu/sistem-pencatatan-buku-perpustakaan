<x-app-layout>
    <!-- CSS FIX: Konsistensi Sidebar & Mematikan Navigasi Bawaan -->
    <style>
        body > div > nav, header.bg-white { display: none !important; } 
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 10px; }
    </style>

    <div class="flex h-screen bg-[#0B0F1A] text-slate-300 font-sans selection:bg-indigo-500/30 overflow-hidden">
        
        <!-- SIDEBAR CUSTOM -->
        <aside class="w-72 bg-[#0F172A] border-r border-white/5 flex flex-col z-50 shadow-2xl">
            <div class="p-8">
                <div class="flex items-center gap-3 group cursor-pointer">
                    <div class="relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-75 transition duration-1000"></div>
                        <div class="relative w-10 h-10 bg-[#161F32] rounded-lg flex items-center justify-center border border-white/10">
                            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                    </div>
                    <span class="text-white font-bold text-xl tracking-tighter">LIBRARIZE<span class="text-indigo-500">.</span></span>
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
                    <span class="font-bold text-sm">Daftar Buku</span>
                </a>

                <a href="{{ route('borrowings.index') }}" class="flex items-center gap-3 px-4 py-3 text-white bg-indigo-600 rounded-xl shadow-[0_0_20px_rgba(79,70,229,0.3)]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    <span class="font-bold text-sm">Peminjaman</span>
                </a>

                <div class="pt-8 px-4">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-xl transition group">
                            <svg class="w-5 h-5 group-hover:scale-110 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            <span class="font-bold text-sm uppercase">Logout</span>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- MAIN CONTENT AREA -->
        <main class="flex-1 flex flex-col relative overflow-hidden bg-[#0B0F1A]">
            
            <!-- HEADER -->
            <header class="h-20 border-b border-white/5 flex items-center justify-between px-10 z-40 bg-[#0B0F1A]">
                <div>
                    <h2 class="text-2xl font-black text-white tracking-tighter uppercase italic">Log Transaksi Peminjaman<span class="text-indigo-500">.</span></h2>
                </div>

                <div class="flex items-center gap-4 text-right">
                    <p class="text-[10px] font-bold text-indigo-500 uppercase tracking-widest">{{ now()->isoFormat('dddd') }}</p>
                    <p class="text-sm font-black text-white tracking-tighter uppercase">{{ now()->isoFormat('D MMMM YYYY') }}</p>
                </div>
            </header>

            <!-- KONTEN -->
            <div class="flex-1 overflow-y-auto p-10 custom-scrollbar space-y-8">
                
                <!-- NOTIFIKASI -->
                @if(session('success') || session('error'))
                    <div class="animate-bounce">
                        @if(session('success'))
                            <div class="bg-emerald-500/10 border border-emerald-500/20 text-emerald-500 px-6 py-4 rounded-2xl text-xs font-bold uppercase tracking-widest shadow-lg shadow-emerald-500/5">
                                ✨ {{ session('success') }}
                            </div>
                        @else
                            <div class="bg-rose-500/10 border border-rose-500/20 text-rose-500 px-6 py-4 rounded-2xl text-xs font-bold uppercase tracking-widest shadow-lg shadow-rose-500/5">
                                ⚠️ {{ session('error') }}
                            </div>
                        @endif
                    </div>
                @endif

                <!-- TABEL INDUSTRIAL -->
                <div class="bg-[#111827] border border-white/5 rounded-[2.5rem] overflow-hidden shadow-2xl">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-white/5">
                            <tr>
                                <th class="px-8 py-6 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Data Peminjam</th>
                                <th class="px-8 py-6 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Detail Buku</th>
                                <th class="px-8 py-6 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] text-center">Periode</th>
                                <th class="px-8 py-6 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] text-center">Status Transaksi</th>
                                @if(Auth::user()->role === 'admin')
                                    <th class="px-8 py-6 text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] text-right">Aksi Admin</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            @forelse($borrowings as $item)
                                <tr class="hover:bg-white/[0.02] transition duration-300 group">
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-4">
                                            <div class="w-10 h-10 rounded-xl bg-indigo-500/10 border border-indigo-500/20 flex items-center justify-center text-indigo-400 font-black text-xs uppercase">{{ substr($item->nama_lengkap, 0, 2) }}</div>
                                            <div>
                                                <p class="text-sm font-black text-white uppercase tracking-tight">{{ $item->nama_lengkap }}</p>
                                                <p class="text-[10px] text-slate-500 font-bold tracking-widest italic">ID: {{ $item->nim }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <p class="text-sm font-bold text-slate-300 italic">"{{ $item->book->judul }}"</p>
                                        <p class="text-[10px] text-slate-600 mt-1 uppercase tracking-tighter">Ref: {{ substr($item->book->uuid, 0, 8) }}</p>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex flex-col items-center">
                                            <div class="text-[10px] font-bold text-slate-400 flex items-center gap-2">
                                                <span>{{ $item->tanggal_pinjam }}</span>
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                                <span class="{{ $item->status == 'approved' ? 'text-indigo-400' : '' }}">{{ $item->tanggal_kembali }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6 text-center">
                                        @if($item->status == 'pending')
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-amber-500/10 text-amber-500 rounded-lg text-[10px] font-black uppercase tracking-widest border border-amber-500/20">
                                                <span class="w-1.5 h-1.5 bg-amber-500 rounded-full animate-pulse"></span>
                                                Menunggu
                                            </span>
                                        @elseif($item->status == 'approved')
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-indigo-500/10 text-indigo-500 rounded-lg text-[10px] font-black uppercase tracking-widest border border-indigo-500/20 shadow-[0_0_10px_rgba(99,102,241,0.1)]">
                                                <span class="w-1.5 h-1.5 bg-indigo-500 rounded-full animate-ping"></span>
                                                Dipinjam
                                            </span>
                                        @elseif($item->status == 'rejected')
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-rose-500/10 text-rose-500 rounded-lg text-[10px] font-black uppercase tracking-widest border border-rose-500/20">
                                                Ditolak
                                            </span>
                                        @elseif($item->status == 'returned')
                                            <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-500/10 text-emerald-500 rounded-lg text-[10px] font-black uppercase tracking-widest border border-emerald-500/20">
                                                Selesai
                                            </span>
                                        @endif
                                    </td>
                                    
                                    @if(Auth::user()->role === 'admin')
                                        <td class="px-8 py-6">
                                            <div class="flex justify-end gap-2">
                                                @if($item->status == 'pending')
                                                    <form action="{{ route('borrowings.approve', $item->id) }}" method="POST">
                                                        @csrf @method('PATCH')
                                                        <button class="p-2 bg-emerald-500/10 text-emerald-500 rounded-xl hover:bg-emerald-500 hover:text-white transition shadow-lg border border-emerald-500/20 flex items-center gap-1 text-[10px] font-bold uppercase">
                                                            ✔ Terima
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('borrowings.reject', $item->id) }}" method="POST">
                                                        @csrf @method('PATCH')
                                                        <button class="p-2 bg-rose-500/10 text-rose-500 rounded-xl hover:bg-rose-500 hover:text-white transition shadow-lg border border-rose-500/20 flex items-center gap-1 text-[10px] font-bold uppercase">
                                                            ✖ Tolak
                                                        </button>
                                                    </form>
                                                @elseif($item->status == 'approved')
                                                    <form action="{{ route('borrowings.return', $item->id) }}" method="POST">
                                                        @csrf @method('PATCH')
                                                        <button class="p-2 bg-white/5 text-slate-400 rounded-xl hover:bg-white/10 hover:text-white transition shadow-lg border border-white/10 flex items-center gap-1 text-[10px] font-bold uppercase">
                                                            ↩ Proses Kembali
                                                        </button>
                                                    </form>
                                                @else
                                                    <span class="text-slate-700 italic text-[10px] font-black uppercase tracking-widest">Arsip</span>
                                                @endif
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-8 py-20 text-center">
                                        <div class="flex flex-col items-center">
                                            <svg class="w-12 h-12 text-slate-800 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                            <p class="text-slate-600 font-black italic uppercase tracking-widest italic text-sm">"Belum ada catatan aktivitas transaksi dalam database."</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
                <!-- PAGINATION -->
                <div class="px-2 pb-10">
                    {{ $borrowings->links() }}
                </div>
            </div>
        </main>
    </div>
</x-app-layout>