@extends('layout')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-emerald-50 to-blue-50 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Back Button -->
        <div class="mb-6">
            <a href="{{ route('posts.index') }}" class="inline-flex items-center space-x-2 bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg transition-all shadow-sm hover:shadow-md font-medium">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span>Kembali</span>
            </a>
        </div>

        <!-- Post Content -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-emerald-500 to-blue-500 text-white p-6">
                <div class="flex items-start justify-between">
                    <div class="flex-1">
                        <div class="flex items-center space-x-2 mb-3">
                            <svg class="w-5 h-5 text-emerald-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            <span class="text-emerald-100 text-sm font-medium">Detail Post</span>
                        </div>
                        <h1 class="text-3xl font-bold leading-tight">{{ $post->title }}</h1>
                        <div class="flex items-center space-x-2 mt-3 text-emerald-100">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm">{{ $post->created_at ? $post->created_at->format('d M Y') : 'Tanggal tidak tersedia' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="p-8">
                <div class="bg-gradient-to-r from-emerald-50 to-blue-50 rounded-xl p-6 border-l-4 border-emerald-400">
                    <div class="flex items-start space-x-3">
                        <svg class="w-6 h-6 text-emerald-500 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">Konten Post</h3>
                            <div class="text-gray-700 leading-relaxed whitespace-pre-wrap">{{ $post->content }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="bg-gray-50 px-8 py-6 border-t border-gray-200">
                <div class="flex justify-end space-x-3">
                    <a href="{{ route('posts.edit', $post->id) }}" 
                       class="flex items-center space-x-2 bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white px-6 py-3 rounded-lg transition-all shadow-lg hover:shadow-xl">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        <span>Edit Post</span>
                    </a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="flex items-center space-x-2 bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white px-6 py-3 rounded-lg transition-all shadow-lg hover:shadow-xl"
                                onclick="return confirm('Yakin ingin menghapus post ini?')">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            <span>Hapus Post</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
