@extends('layouts.web')

@section('content')
<header class="py-12 overflow-hidden">
    <div class="bg-gradient-to-tr from-slate-100 to-indigo-50 max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 md:rounded-xl">
        <h1 class="roboto-slab text-center font-bold text-3xl md:text-4xl capitalize">Listen to our Sunday sermons</h1>
    </div>
</header>

<div class="max-w-7xl mx-auto px-4 sm:px-0">
    <iframe tabindex="-1"
        src="https://embed.sermonaudio.com/browser/broadcaster/christcommchurch/?sort=newest&amp;page_size=25&amp;header=false"
        allow="autoplay"
        scrolling="no"
        class="min-w-full w-full rounded-lg border"
        height="768"
        frameborder="0"
    ></iframe>
</div>
<div class="mt-12"></div>
@endsection
