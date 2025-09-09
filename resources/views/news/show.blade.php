@extends('layouts.app')

@section('title', $news->title . ' - SMK Negeri 1')

@section('content')

<!-- Article Header -->
<article class="py-12 bg-gray-900">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="flex items-center space-x-2 text-sm text-gray-400 mb-8">
            <a href="{{ route('home') }}" class="hover:text-yellow-400 transition-colors">Beranda</a>
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <a href="{{ route('news.index') }}" class="hover:text-yellow-400 transition-colors">Berita</a>
            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-yellow-400">{{ Str::limit($news->title, 50) }}</span>
        </nav>
        
        <!-- Article Meta -->
        <div class="flex items-center text-sm text-gray-400 mb-6">
            <div class="flex items-center mr-6">
                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                {{ $news->published_at->format('d M Y') }}
            </div>
            <div class="flex items-center mr-6">
                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                {{ $news->created_at->diffForHumans() }}
            </div>
            <div class="flex items-center">
                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
                {{ random_int(150, 500) }} views
            </div>
        </div>
        
        <!-- Article Title -->
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-8 leading-tight">
            {{ $news->title }}
        </h1>
        
        <!-- Featured Image -->
        @if($news->featured_image)
        <div class="aspect-video overflow-hidden rounded-2xl mb-8">
            <img src="{{ $news->featured_image }}" 
                 alt="{{ $news->title }}"
                 class="w-full h-full object-cover">
        </div>
        @endif
        
        <!-- Article Content -->
        <div class="prose prose-invert prose-lg max-w-none">
            <div class="text-gray-300 leading-relaxed article-content">
                {!! nl2br(e($news->content)) !!}
            </div>
        </div>
        
        <!-- Social Share -->
        <div class="mt-12 pt-8 border-t border-gray-700">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <div>
                    <h3 class="text-lg font-semibold text-white mb-2">Bagikan Artikel:</h3>
                    <div class="flex space-x-3">
                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($news->title) }}&url={{ urlencode(request()->url()) }}" 
                           target="_blank" 
                           class="social-share-btn bg-blue-600 hover:bg-blue-500">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                           target="_blank" 
                           class="social-share-btn bg-blue-800 hover:bg-blue-700">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($news->title . ' ' . request()->url()) }}" 
                           target="_blank" 
                           class="social-share-btn bg-green-600 hover:bg-green-500">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                        </a>
                        <button onclick="copyToClipboard()" 
                                class="social-share-btn bg-gray-600 hover:bg-gray-500" 
                                id="copy-btn">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="text-right">
                    <a href="{{ route('news.index') }}" 
                       class="inline-flex items-center text-yellow-400 hover:text-yellow-300 font-semibold transition-colors group">
                        <svg class="mr-2 h-4 w-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/>
                        </svg>
                        Kembali ke Berita
                    </a>
                </div>
            </div>
        </div>
    </div>
</article>

<!-- Related News -->
@if($relatedNews->count() > 0)
<section class="py-20 bg-black">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-white mb-12 text-center">
            📰 Berita Terkait
        </h2>
        
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            @foreach($relatedNews as $relatedItem)
            <article class="related-news-card group">
                @if($relatedItem->featured_image)
                <div class="aspect-video overflow-hidden rounded-t-2xl">
                    <img src="{{ $relatedItem->featured_image }}" 
                         alt="{{ $relatedItem->title }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                @endif
                
                <div class="p-4">
                    <div class="text-xs text-gray-400 mb-2">
                        {{ $relatedItem->published_at->format('d M Y') }}
                    </div>
                    
                    <h3 class="text-sm font-semibold text-white mb-2 group-hover:text-yellow-400 transition-colors leading-tight">
                        {{ Str::limit($relatedItem->title, 60) }}
                    </h3>
                    
                    <a href="{{ route('news.show', $relatedItem) }}" 
                       class="inline-flex items-center text-yellow-400 hover:text-yellow-300 text-xs font-medium transition-colors group">
                        Baca
                        <svg class="ml-1 h-3 w-3 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
@endif

<style>
.article-content {
    @apply text-lg leading-8;
}

.article-content p {
    @apply mb-6;
}

.social-share-btn {
    @apply w-10 h-10 rounded-lg flex items-center justify-center text-white transition-all duration-300 transform hover:scale-110;
}

.related-news-card {
    @apply bg-gray-800 rounded-2xl overflow-hidden hover:bg-gray-700 transition-all duration-300 transform hover:scale-105 border border-gray-700 hover:border-yellow-400;
}

.prose h2 {
    @apply text-2xl font-bold text-white mt-8 mb-4;
}

.prose h3 {
    @apply text-xl font-semibold text-white mt-6 mb-3;
}

.prose p {
    @apply text-gray-300 mb-4;
}

.prose ul, .prose ol {
    @apply ml-6 mb-4;
}

.prose li {
    @apply text-gray-300 mb-2;
}

.prose blockquote {
    @apply border-l-4 border-yellow-400 pl-4 italic text-gray-300 my-6;
}
</style>

<script>
function copyToClipboard() {
    navigator.clipboard.writeText(window.location.href).then(() => {
        const btn = document.getElementById('copy-btn');
        const originalHTML = btn.innerHTML;
        btn.innerHTML = '<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>';
        setTimeout(() => {
            btn.innerHTML = originalHTML;
        }, 2000);
    });
}
</script>

@endsection