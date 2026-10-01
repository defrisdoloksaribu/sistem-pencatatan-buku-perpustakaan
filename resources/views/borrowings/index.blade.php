@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-slate-950 text-white">

    <!-- Sidebar -->
    <aside class="fixed left-0 top-0 z-40 h-screen w-64 border-r border-slate-800 bg-slate-950">
        <div class="flex h-full flex-col">

            <!-- Logo -->
            <div class="flex h-20 items-center border-b border-slate-800 px-6">
                <div>
                    <h1 class="text-lg font-black tracking-tight text-white">
                        LIBRARY
                    </h1>
                    <p class="text-[9px] font-bold uppercase tracking-[0.3em] text-slate-500">
                        Management System
                    </p>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 space-y-2 px-4 py-6">

                <a href="{{ route('dashboard') }}"
                   class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-bold text-slate-400 transition hover:bg-slate-900 hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6"/>
                    </svg>
                    Dashboard
                </a>

                <a href="{{ route('books.index') }}"
                   class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-bold text-slate-400 transition hover:bg-slate-900 hover:text-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253"/>
                    </svg>
                    Daftar Buku
                </a>

                <a href="{{ route('borrowings.index') }}"
                   class="flex items-center gap-3 rounded-xl bg-slate-900 px-4 py-3 text-sm font-bold text-white">
                    <svg class="h-5 w-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 7V3m8 4V3m-9 8h10M5 5h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/>
                    </svg>
                    Peminjaman
                </a>

            </nav>

            <!-- Logout -->
            <div class="border-t border-slate-800 p-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit"
                            class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm font-bold text-slate-400 transition hover:bg-red-500/10 hover:text-red-400">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H6a2 2 0 01-2-2V5a2 2 0 012-2h5a2 2 0 012 2v1"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>

        </div>
    </aside>


    <!-- Main Content -->
    <main class="ml-64 min-h-screen">

        <!-- Header -->
        <header class="border-b border-slate-800 bg-slate-950/80 px-8 py-6 backdrop-blur">
            <div class="flex items-center justify-between">

                <div>
                    <h2 class="text-2xl font-black tracking-tight text-white">
                        Log Transaksi Peminjaman.
                    </h2>

                    <p class="mt-1 text-sm text-slate-500">
                        Kelola dan pantau seluruh transaksi peminjaman buku.
                    </p>
                </div>

            </div>
        </header>


        <!-- Content -->
        <div class="p-8">

            <!-- Notifications -->
            @if(session('success'))
                <div class="mb-6 rounded-xl border border-emerald-500/20 bg-emerald-500/10 px-5 py-4 text-sm font-bold text-emerald-400">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 rounded-xl border border-red-500/20 bg-red-500/10 px-5 py-4 text-sm font-bold text-red-400">
                    {{ session('error') }}
                </div>
            @endif


            <!-- Table -->
            <div class="overflow-hidden rounded-2xl border border-slate-800 bg-slate-950 shadow-2xl">

                <div class="overflow-x-auto">

                    <table class="w-full min-w-[1100px]">

                        <thead class="border-b border-slate-800 bg-slate-900/50">
                            <tr>

                                <th class="px-8 py-5 text-center text-[10px] font-black uppercase tracking-widest text-slate-500">
                                    Data Peminjam
                                </th>

                                <th class="px-8 py-5 text-center text-[10px] font-black uppercase tracking-widest text-slate-500">
                                    Detail Buku
                                </th>

                                <th class="px-8 py-5 text-center text-[10px] font-black uppercase tracking-widest text-slate-500">
                                    Periode
                                </th>

                                <th class="px-8 py-5 text-center text-[10px] font-black uppercase tracking-widest text-slate-500">
                                    Status Transaksi
                                </th>

                                <th class="px-8 py-5 text-center text-[10px] font-black uppercase tracking-widest text-slate-500">
                                    Aksi Admin
                                </th>

                            </tr>
                        </thead>


                        <tbody class="divide-y divide-slate-800">

                            @forelse($borrowings as $item)

                                <tr class="transition hover:bg-slate-900/40">

                                    <!-- Data Peminjam -->
                                    <td class="px-8 py-6">
                                        <div class="flex flex-col items-center text-center">

                                            <span class="text-sm font-black text-white">
                                                {{ $item->user->name ?? 'User' }}
                                            </span>

                                            <span class="mt-1 text-[10px] font-bold text-slate-500">
                                                {{ $item->user->email ?? '-' }}
                                            </span>

                                        </div>
                                    </td>


                                    <!-- Detail Buku -->
                                    <td class="px-8 py-6">
                                        <div class="flex flex-col items-center text-center">

                                            <span class="text-sm font-black text-white">
                                                {{ $item->book->judul ?? 'Buku tidak ditemukan' }}
                                            </span>

                                            <span class="mt-1 text-[10px] font-bold uppercase tracking-wider text-slate-500">
                                                {{ $item->book->penulis ?? '-' }}
                                            </span>

                                        </div>
                                    </td>


                                    <!-- Periode Peminjaman -->
                                    <td class="px-8 py-6">
                                        <div class="flex flex-col items-center gap-1">

                                            <span class="text-[9px] font-black uppercase tracking-widest text-slate-500">
                                                Pinjam: {{ $item->tanggal_pinjam }}
                                            </span>

                                            <span class="text-[9px] font-black uppercase tracking-widest
                                                {{ $item->status == 'approved'
                                                    ? 'text-indigo-400'
                                                    : 'text-slate-400' }}">

                                                Kembali: {{ $item->tanggal_kembali }}

                                            </span>

                                        </div>
                                    </td>


                                    <!-- Status Transaksi -->
                                    <td class="px-8 py-6">

                                        <div class="flex justify-center">

                                            @if($item->status == 'pending')

                                                <span class="rounded-full border border-yellow-500/20 bg-yellow-500/10 px-4 py-2 text-[9px] font-black uppercase tracking-widest text-yellow-400">
                                                    Menunggu
                                                </span>

                                            @elseif($item->status == 'approved')

                                                <span class="rounded-full border border-indigo-500/20 bg-indigo-500/10 px-4 py-2 text-[9px] font-black uppercase tracking-widest text-indigo-400">
                                                    Dipinjam
                                                </span>

                                            @elseif($item->status == 'rejected')

                                                <span class="rounded-full border border-red-500/20 bg-red-500/10 px-4 py-2 text-[9px] font-black uppercase tracking-widest text-red-400">
                                                    Ditolak
                                                </span>

                                            @elseif($item->status == 'returned')

                                                <span class="rounded-full border border-emerald-500/20 bg-emerald-500/10 px-4 py-2 text-[9px] font-black uppercase tracking-widest text-emerald-400">
                                                    Selesai
                                                </span>

                                            @endif

                                        </div>

                                    </td>


                                    <!-- Aksi Admin -->
                                    <td class="px-8 py-6">

                                        <div class="flex justify-center gap-2">

                                            @if($item->status == 'pending')

                                                <!-- Approve -->
                                                <form action="{{ route('borrowings.approve', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')

                                                    <button type="submit"
                                                            class="rounded-lg bg-emerald-500/10 px-3 py-2 text-[9px] font-black uppercase tracking-widest text-emerald-400 transition hover:bg-emerald-500/20">
                                                        Approve
                                                    </button>
                                                </form>


                                                <!-- Reject -->
                                                <form action="{{ route('borrowings.reject', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')

                                                    <button type="submit"
                                                            class="rounded-lg bg-red-500/10 px-3 py-2 text-[9px] font-black uppercase tracking-widest text-red-400 transition hover:bg-red-500/20">
                                                        Reject
                                                    </button>
                                                </form>

                                            @elseif($item->status == 'approved')

                                                <!-- Return -->
                                                <form action="{{ route('borrowings.return', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('PATCH')

                                                    <button type="submit"
                                                            class="rounded-lg bg-indigo-500/10 px-3 py-2 text-[9px] font-black uppercase tracking-widest text-indigo-400 transition hover:bg-indigo-500/20">
                                                        Kembalikan
                                                    </button>
                                                </form>

                                            @else

                                                <span class="px-3 py-2 text-[9px] font-black uppercase tracking-widest text-slate-600">
                                                    Arsip
                                                </span>

                                            @endif

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="5" class="px-8 py-16 text-center">

                                        <div class="flex flex-col items-center">

                                            <svg class="mb-4 h-10 w-10 text-slate-700"
                                                 fill="none"
                                                 stroke="currentColor"
                                                 viewBox="0 0 24 24">

                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2"
                                                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>

                                            </svg>

                                            <p class="text-sm font-bold text-slate-500">
                                                Belum ada transaksi peminjaman.
                                            </p>

                                        </div>

                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>


                <!-- Pagination -->
                @if($borrowings->hasPages())
                    <div class="border-t border-slate-800 px-8 py-5">
                        {{ $borrowings->links() }}
                    </div>
                @endif

            </div>

        </div>

    </main>

</div>

@endsection