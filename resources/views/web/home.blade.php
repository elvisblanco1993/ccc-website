@extends('layouts.web')
@section('content')
{{-- Home page content goes here --}}
<header class="mt-20 md:mt-24 relative flex items-center justify-center py-44 md:py-96 mb-12 overflow-hidden">
    <div class="absolute h-full w-full z-30 p-5 text-ccc bg-white bg-opacity-60 backdrop-blur-md flex items-center justify-center">
        <h1 class="text-4xl md:text-6xl font-bold">Christ Community Church</h1>
    </div>
    <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
        <source src="https://assets.mixkit.co/videos/preview/mixkit-crucifix-on-a-cliff-in-the-sea-landscape-14459-large.mp4" type="video/mp4" />Your browser does not support the video tag.
    </video>
</header>

<div class="py-12 md:py-24"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 gap-12 items-center">
        <div class="col-span-2 md:col-span-1">
            <h2 class="roboto-slab text-center md:text-left font-bold text-3xl md:text-4xl uppercase">{!! __("a simple church <br> with a simple message") !!}</h2>
            <p class="mt-4 text-lg text-slate-800">{{ __("If God is drawing you closer to Himself; if you're looking for a clear, direct, and Biblical presentation of truth and the gospel of Jesus Christ that brings life transformation and peace; Then, visit us to learn more and meet God.") }}</p>
            <p class="mt-4 text-lg text-slate-700">{{ __("Hear Biblical preaching and teaching, God glorifying worship, and participate in loving fellowship for the purpose of making us into Disciples of Jesus Christ for the Glory of God.") }}</p>
        </div>
        <div class="col-span-2 md:col-span-1">
            <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1473&q=80"
                alt=""
                class="w-full aspect-video md:aspect-[8/10] object-cover object-center rounded-2xl shadow">
        </div>
    </div>
    <div class="py-12 md:py-24"></div>
    {{-- Pastor message/video --}}
    <div class="text-center">
        <h2 class="roboto-slab text-center font-bold text-3xl md:text-4xl uppercase">{{ __("a welcome message from pastor bernie diaz") }}</h2>
        <video src="{{ asset('bernie_diaz_welcome.mp4') }}"
            autoplay
            muted
            loop
            class="mt-12 w-full aspect-video rounded-xl"
        ></video>
    </div>
</div>
<div class="py-12 md:py-24"></div>
{{-- End of page content --}}
@include('web.partials.cta')
@endsection
