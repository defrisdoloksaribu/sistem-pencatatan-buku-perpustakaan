<x-app-layout>
    <!-- CSS FIX: Hanya sembunyikan navigasi atas bawaan, jangan sembunyikan sidebar -->
    <style>
        /* Sembunyikan Navigasi Atas Bawaan Laravel Breeze/Jetstream */
        body > div > nav, 
        header.bg-white { 
            display: none !important; 
        } 
        
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 10px; }
    </style>

    <div class="flex h-screen bg-[#0B0F1A] text-slate-300 font-sans selection:bg-indigo-500/30 overflow-hidden">
        
        <!-- SIDEBAR CUSTOM (PASTIKAN ID/CLASS BERBEDA) -->
        <aside class="w-72 bg-[#0F172A] border-r border-white/5 flex flex-col z-50 shadow-2xl">
            <div class="p-8">
                <div class="flex items-center gap-3 group cursor-pointer">
                    <div class="relative">
                        <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-75 transition duration-1000"></div>
                        <div class="relative w-10 h-10 bg-[#161F32] rounded-lg flex items-center justify-center border border-white/10">
                            <svg class="w-6 h-6 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                    </div>
                    <span class="text-white font-bold text-xl tracking-tighter">LIBRARIZE<span class="text-indigo-500">.</span></span>
                </div>
            </div>

            <!-- AREA MENU (Menggunakan DIV agar tidak kena 'display:none' dari tag NAV) -->
            <div class="flex-1 px-4 space-y-2 mt-4 overflow-y-auto">
                <p class="px-4 text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-4">Menu Utama</p>
                
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-white bg-indigo-600 rounded-xl shadow-[0_0_20px_rgba(79,70,229,0.3)] transition-all">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z"></path></svg>
                    <span class="font-bold text-sm">Dashboard</span>
                </a>

                <a href="{{ route('books.index') }}" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-white/5 rounded-xl transition-all group">
                    <svg class="w-5 h-5 group-hover:text-indigo-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    <span class="font-bold text-sm">Daftar Buku</span>
                </a>

                <a href="{{ route('borrowings.index') }}" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-white/5 rounded-xl transition-all group">
                    <svg class="w-5 h-5 group-hover:text-indigo-400 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    <span class="font-bold text-sm">Peminjaman</span>
                </a>

                <div class="pt-8 px-4">
                    <p class="text-[10px] font-bold text-slate-500 uppercase tracking-[0.2em] mb-4">Sistem</p>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-xl transition group">
                            <svg class="w-5 h-5 group-hover:scale-110 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            <span class="font-bold text-sm tracking-tight">Logout</span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- CARD OPERATOR -->
            <div class="p-6">
                <div class="bg-gradient-to-br from-indigo-600 to-indigo-800 p-4 rounded-2xl shadow-lg">
                    <p class="text-[10px] text-indigo-200 font-bold uppercase mb-1 tracking-widest text-center">Operator Aktif</p>
                    <p class="text-sm text-white font-black truncate text-center uppercase">{{ Auth::user()->name }}</p>
                </div>
            </div>
        </aside>

        <!-- KONTEN UTAMA -->
        <main class="flex-1 flex flex-col relative overflow-hidden bg-[#0B0F1A]">
            
            <!-- HEADER SEARCH & DATE -->
            <header class="h-20 border-b border-white/5 flex items-center justify-between px-10 z-40">
                <div class="flex items-center bg-white/5 border border-white/10 px-4 py-2 rounded-xl w-96 focus-within:border-indigo-500/50 transition">
                    <svg class="w-4 h-4 text-slate-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <input type="text" placeholder="Cari data buku..." class="bg-transparent border-none text-sm text-slate-300 focus:ring-0 w-full placeholder:text-slate-600">
                </div>

                <div class="flex items-center gap-6">
                    <div class="text-right">
                        <p class="text-[10px] font-bold text-indigo-500 uppercase tracking-[0.2em]">{{ now()->isoFormat('dddd') }}</p>
                        <p class="text-sm font-black text-white tracking-tighter">{{ now()->isoFormat('D MMMM YYYY') }}</p>
                    </div>
                </div>
            </header>

            <!-- ISI DASHBOARD (SCROLLABLE) -->
            <div class="flex-1 overflow-y-auto p-10 custom-scrollbar space-y-10">
                
                <!-- BANNER HERO -->
                <section>
                    <div class="relative overflow-hidden bg-gradient-to-r from-indigo-600 to-purple-700 rounded-[2.5rem] p-10 text-white shadow-2xl shadow-indigo-600/20 group">
                        <div class="relative z-10 flex flex-col md:flex-row justify-between items-center gap-8">
                            <div class="text-center md:text-left">
                                <h2 class="text-4xl font-black mb-3 tracking-tight uppercase tracking-tighter italic">Sistem Operasional<span class="text-white/50">.</span></h2>
                                <p class="text-indigo-100 max-w-xl text-lg font-light leading-relaxed">"Selamat datang kembali di pusat kendali, semua modul perpustakaan digital berjalan optimal."</p>
                            </div>
                            <a href="{{ route('borrowings.scanner') }}" class="px-8 py-4 bg-white text-indigo-600 font-black rounded-2xl hover:bg-indigo-50 hover:shadow-xl transition-all flex items-center gap-3 transform hover:-translate-y-1 active:scale-95 shadow-2xl shadow-black/20">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 17h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
                                MULAI SCAN QR
                            </a>
                        </div>
                        <div class="absolute -right-20 -top-20 w-96 h-96 bg-white/10 rounded-full blur-[100px] group-hover:bg-white/20 transition duration-700"></div>
                    </div>
                </section>

                <!-- BENTO GRID STATS -->
                <section class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <!-- Total Buku -->
                    <div class="bg-[#111827] border border-white/5 p-8 rounded-[2.5rem] group hover:border-indigo-500/50 transition-all duration-500 shadow-xl">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-4 bg-indigo-500/10 rounded-2xl text-indigo-500 group-hover:bg-indigo-600 group-hover:text-white transition duration-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                            <span class="text-[10px] font-bold text-emerald-500 bg-emerald-500/10 px-3 py-1 rounded-full tracking-widest uppercase">Tersedia</span>
                        </div>
                        <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-1">Arsip Koleksi</p>
                        <h4 class="text-5xl font-black text-white tracking-tighter">{{ $stats['total_books'] }} <span class="text-xs text-slate-600 font-light italic">Buku</span></h4>
                    </div>

                    <!-- Aktif Pinjam -->
                    <div class="bg-[#111827] border border-white/5 p-8 rounded-[2.5rem] group hover:border-purple-500/50 transition-all duration-500 shadow-xl">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-4 bg-purple-500/10 rounded-2xl text-purple-500 group-hover:bg-purple-600 group-hover:text-white transition duration-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                            </div>
                            <span class="text-[10px] font-bold text-slate-500 bg-white/5 px-3 py-1 rounded-full tracking-widest uppercase">Live</span>
                        </div>
                        <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-1">Pinjaman Aktif</p>
                        <h4 class="text-5xl font-black text-white tracking-tighter">{{ $stats['active_borrowings'] }}</h4>
                    </div>

                    <!-- Pending -->
                    <div class="bg-[#111827] border border-white/5 p-8 rounded-[2.5rem] group hover:border-orange-500/50 transition-all duration-500 shadow-xl">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-4 bg-orange-500/10 rounded-2xl text-orange-500 group-hover:bg-orange-600 group-hover:text-white transition duration-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            @if($stats['pending_approvals'] > 0)
                            <span class="text-[10px] font-bold text-orange-500 bg-orange-500/10 px-3 py-1 rounded-full animate-pulse uppercase tracking-widest">Antrian</span>
                            @endif
                        </div>
                        <p class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em] mb-1">Konfirmasi</p>
                        <h4 class="text-5xl font-black text-white tracking-tighter">{{ $stats['pending_approvals'] }}</h4>
                    </div>

                    <!-- Total Member -->
                    <div class="bg-white p-8 rounded-[2.5rem] group shadow-2xl shadow-indigo-500/10 transition duration-500">
                        <div class="flex justify-between items-start mb-6 text-indigo-600">
                            <div class="p-4 bg-indigo-600 rounded-2xl text-white group-hover:rotate-6 transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                        </div>
                        <p class="text-[10px] font-black text-indigo-400 uppercase tracking-[0.2em] mb-1">Total Member</p>
                        <h4 class="text-5xl font-black text-indigo-600 tracking-tighter">{{ $stats['total_members'] }}</h4>
                    </div>
                </section>

                <!-- TABEL LOG AKTIVITAS -->
                <section class="pb-20">
                    <div class="bg-[#111827] border border-white/5 rounded-[2.5rem] overflow-hidden shadow-2xl">
                        <div class="p-8 border-b border-white/5 flex items-center justify-between">
                            <div>
                                <h3 class="text-xl font-black text-white tracking-tight italic uppercase">Log Aktivitas Terbaru</h3>
                                <p class="text-sm text-slate-500 font-light italic">Data transaksi realtime perpustakaan digital.</p>
                            </div>
                            <a href="{{ route('borrowings.index') }}" class="text-[10px] font-black text-indigo-400 border border-indigo-400/20 px-6 py-2 rounded-2xl hover:bg-indigo-600 hover:text-white transition-all uppercase tracking-widest">Lihat Semua</a>
                        </div>
                        <table class="w-full text-left">
                            <thead class="bg-white/5">
                                <tr>
                                    <th class="px-8 py-5 text-[10px] font-black text-slate-500 uppercase tracking-widest italic">Peminjam</th>
                                    <th class="px-8 py-5 text-[10px] font-black text-slate-500 uppercase tracking-widest italic text-center">Buku</th>
                                    <th class="px-8 py-5 text-[10px] font-black text-slate-500 uppercase tracking-widest italic text-center">Waktu</th>
                                    <th class="px-8 py-5 text-[10px] font-black text-slate-500 uppercase tracking-widest italic text-center">Status Sistem</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                @foreach($recent_activities as $activity)
                                <tr class="hover:bg-white/5 transition duration-300">
                                    <td class="px-8 py-5">
                                        <div class="flex items-center gap-4">
                                            <div class="w-9 h-9 rounded-xl bg-[#161F32] border border-white/10 flex items-center justify-center text-[10px] font-black text-indigo-400 uppercase italic shadow-lg">{{ substr($activity->user->name, 0, 2) }}</div>
                                            <span class="text-sm font-bold text-slate-200 uppercase tracking-tight">{{ $activity->user->name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-5 text-center">
                                        <span class="text-sm font-light text-slate-400 italic">"{{ $activity->book->title }}"</span>
                                    </td>
                                    <td class="px-8 py-5 text-center">
                                        <span class="text-xs font-bold text-slate-500 uppercase tracking-tighter">{{ $activity->created_at->diffForHumans() }}</span>
                                    </td>
                                    <td class="px-8 py-5 text-center">
                                        <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-emerald-500/10 text-emerald-500 rounded-xl text-[10px] font-black uppercase tracking-widest border border-emerald-500/20">
                                            <span class="w-1 h-1 bg-emerald-500 rounded-full animate-ping"></span>
                                            Berhasil
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>

            </div>
        </main>
    </div>
</x-app-layout> 