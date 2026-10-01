<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Buku') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Wajib untuk Update -->

                        <div class="mb-4">
                            <label for="judul" class="block text-gray-700 text-sm font-bold mb-2">Judul Buku</label>
                            <input type="text" name="judul" value="{{ old('judul', $book->judul) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="penulis" class="block text-gray-700 text-sm font-bold mb-2">Penulis</label>
                                <input type="text" name="penulis" value="{{ old('penulis', $book->penulis) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div>
                                <label for="penerbit" class="block text-gray-700 text-sm font-bold mb-2">Penerbit</label>
                                <input type="text" name="penerbit" value="{{ old('penerbit', $book->penerbit) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="tahun_terbit" class="block text-gray-700 text-sm font-bold mb-2">Tahun Terbit</label>
                                <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit', $book->tahun_terbit) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                            <div>
                                <label for="stok" class="block text-gray-700 text-sm font-bold mb-2">Stok</label>
                                <input type="number" name="stok" value="{{ old('stok', $book->stok) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            </div>
                        </div>

                        <!-- Cover Image Preview -->
                        <div class="mb-4">
                            <label for="cover_image" class="block text-gray-700 text-sm font-bold mb-2">Ganti Cover (Opsional)</label>
                            
                            @if($book->cover_image)
                                <div class="mb-2">
                                    <p class="text-xs text-gray-500 mb-1">Cover Saat Ini:</p>
                                    <img src="{{ asset('storage/' . $book->cover_image) }}" class="w-20 h-28 object-cover border rounded">
                                </div>
                            @endif

<input type="file"
       name="cover_image"
       accept=".jpg,.jpeg,.png"
       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('books.index') }}" class="text-gray-600 underline mr-4">Batal</a>
                            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update Data
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>