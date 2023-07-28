@extends('layouts.web')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-black text-gray-900">{{ $article->title }}</h1>
        <p class="mt-4 text-slate-600">Last updated on: {{ Carbon\Carbon::parse($article->updated_at)->format('M d, Y') }}</p>
        @if ($article->banner)
            <img src="{{ asset($article->banner) }}" alt="" class="mt-12 rounded-lg aspect-video">
        @endif

        <div class="block mt-12 prose max-w-full">
            {!! Str::of($article->body)->markdown() !!}
        </div>
    </div>
</div>
@endsection
