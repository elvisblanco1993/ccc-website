@extends('layouts.web')
@section('content')
<header class="py-12 overflow-hidden">
    <div class="bg-gradient-to-tr from-slate-100 to-indigo-50 max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 md:rounded-xl">
        <h1 class="roboto-slab md:text-left font-bold text-3xl md:text-4xl capitalize">Discipleship and Shepherd Groups</h1>
        <p class="mt-4 text-lg text-slate-800">Our community of followers and families gather regularly in homes throughout South Florida (<a target="_blank" class="underline" href="https://www.biblegateway.com/passage/?search=Deuteronomy+29%3A10-13&version=ESV">Deut. 29:10-13</a>; <a target="_blank" class="underline" href="https://www.biblegateway.com/passage/?search=Joshua+8%3A35&version=ESV">Jos. 8:35</a>), as well as in men’s and ladies' groups (<a target="_blank" class="underline" href="https://www.biblegateway.com/passage/?search=Titus+2%3A3-8&version=ESV">Titus 2:3-8</a>), to study the Bible, pray, fellowship and live the Christian life.</p>
    </div>
</header>

<div class="py-12"></div>

<section class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8 grid grid-cols-2 gap-12 items-center">
    {{-- Group 1 --}}
    <div class="col-span-2 md:col-span-1">
        <h2 class="roboto-slab md:text-left font-bold text-3xl capitalize">{!! __("Ladies Shepherd Group") !!}</h2>
        <p class="mt-4 text-lg text-slate-800">{{ __("This discipleship meeting is open to guests and ladies 13 years of age and older on Tuesday nights @ 7 PM, focusing on fellowship, the Bible and related resources that are of relevance to Christian women today. For information on where and when the next meeting is scheduled, contact us at") }} <a target="_blank" class="underline" href="mailto:info@christcomchurch.org">info@christcomchurch.org</a></p>
    </div>
    <div class="col-span-2 md:col-span-1">
        <img src="{{ asset('ladies-shepherd-group-blurred.jpeg') }}"
            alt=""
            class="w-full aspect-video md:aspect-[10/8] object-cover object-center rounded-2xl shadow">
    </div>

    {{-- Group 2 --}}
    <div class="col-span-2 md:col-span-1">
        <img src="{{ asset('mens-shepherd-group-blurred.jpeg') }}"
            alt=""
            class="w-full aspect-video md:aspect-[10/8] object-cover object-center rounded-2xl shadow">
    </div>
    <div class="col-span-2 md:col-span-1">
        <h2 class="roboto-slab md:text-left font-bold text-3xl capitalize">{!! __("Men's Shepherd Group") !!}</h2>
        <p class="mt-4 text-lg text-slate-800">{{ __("This discipleship meeting is open to guests and males 13 years of age and older on Tuesday nights @ 7 PM,  focusing on fellowship, the Bible and related resources that are of relevance to Christian men today. For information on where and when the next meeting is scheduled, contact us at") }} <a target="_blank" class="underline" href="mailto:info@christcomchurch.org">info@christcomchurch.org</a></p>
    </div>

    {{-- Group 3 --}}
    <div class="col-span-2 md:col-span-1">
        <h2 class="roboto-slab md:text-left font-bold text-3xl capitalize">{!! __("Family Worship Night") !!}</h2>
        <p class="mt-4 text-lg text-slate-800">{{ __("This monthly discipleship meeting is open to guests and families (including children of all ages) on Tuesday nights @ 7 PM, focusing on fellowship and featuring a meal, worship music and family-friendly Bible teaching (e.g. The Westminster Confession of Faith and Catechism) and themes. For information on where and when the next meeting is scheduled, contact us at") }} <a target="_blank" class="underline" href="mailto:info@christcomchurch.org">info@christcomchurch.org</a></p>
    </div>
    <div class="col-span-2 md:col-span-1">
        <img src="{{ asset('family-workship-blurred.jpeg') }}"
            alt=""
            class="w-full aspect-video md:aspect-[10/8] object-cover object-center rounded-2xl shadow">
    </div>
</section>
<div class="py-12"></div>

{{-- End of page content --}}
@include('web.partials.cta')
@endsection
