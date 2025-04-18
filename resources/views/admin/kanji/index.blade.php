@extends('layouts.admin')

@section('content')
    <div class="bg-white shadow-xl rounded-lg p-8 mt-6">
        <h2 class="text-3xl font-semibold text-indigo-700 mb-6">Daftar Kanji</h2>

       
        <div class="text-right mb-4">
            <a href="{{ route('admin.kanji.create') }}" class="bg-indigo-600 text-white hover:bg-indigo-700 py-2 px-6 rounded-lg text-sm font-semibold transition duration-200">
                Tambah Kanji
            </a>
        </div>

     
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full table-auto border-collapse">
                <thead class="bg-indigo-600 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">No</th>
                        <th class="px-6 py-3 text-left">Kanji</th>
                        <th class="px-6 py-3 text-left">Arti</th>
                        <th class="px-6 py-3 text-left">Level</th>
                        <th class="px-6 py-3 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kanjis as $kanji)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ $kanji->kanji }}</td>
                            <td class="px-6 py-4">
                              
                                {{ $kanji->kunyomi }} / {{ $kanji->onyomi }}
                            </td>
                            <td class="px-6 py-4">{{ $kanji->arti }}</td>
                            <td class="px-6 py-4">{{ $kanji->level }}</td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="{{ route('admin.kanji.edit', $kanji->id) }}" class="text-yellow-600 hover:text-yellow-700 font-medium">Edit</a>
                                
                                <form action="{{ route('admin.kanji.destroy', $kanji->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kanji ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-700 font-medium">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
