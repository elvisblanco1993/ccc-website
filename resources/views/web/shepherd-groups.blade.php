@extends('layouts.web')
@section('content')
<header class="py-12 overflow-hidden">
    <div class="bg-gradient-to-tr from-slate-100 to-indigo-50 max-w-7xl mx-auto p-4 sm:p-6 lg:p-8 rounded-xl">
        <h1 class="roboto-slab md:text-left font-bold text-3xl md:text-4xl capitalize">Small Groups</h1>
        <p class="mt-4 text-lg text-slate-800">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quos accusamus assumenda et vel unde sequi quo iste sint, deleniti dolorem ipsum recusandae mollitia quam est voluptate. Ea, impedit possimus?</p>
    </div>
</header>

<div class="py-12"></div>

<section class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8 grid grid-cols-2 gap-12 items-center">
    {{-- Group 1 --}}
    <div class="col-span-2 md:col-span-1">
        <h2 class="roboto-slab md:text-left font-bold text-3xl md:text-4xl uppercase">{!! __("Ladies Shepherd Group") !!}</h2>
        <p class="mt-4 text-lg text-slate-800">{{ __("If God is drawing you closer to Himself; if you're looking for a clear, direct, and Biblical presentation of truth and the gospel of Jesus Christ that brings life transformation and peace; Then, visit us to learn more and meet God.") }}</p>
    </div>
    <div class="col-span-2 md:col-span-1">
        <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1473&q=80"
            alt=""
            class="w-full aspect-video md:aspect-[10/8] object-cover object-center rounded-2xl shadow">
    </div>

    {{-- Group 2 --}}
    <div class="col-span-2 md:col-span-1">
        <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1473&q=80"
            alt=""
            class="w-full aspect-video md:aspect-[10/8] object-cover object-center rounded-2xl shadow">
    </div>
    <div class="col-span-2 md:col-span-1">
        <h2 class="roboto-slab md:text-left font-bold text-3xl md:text-4xl uppercase">{!! __("Men's Shepherd Group") !!}</h2>
        <p class="mt-4 text-lg text-slate-800">{{ __("If God is drawing you closer to Himself; if you're looking for a clear, direct, and Biblical presentation of truth and the gospel of Jesus Christ that brings life transformation and peace; Then, visit us to learn more and meet God.") }}</p>
    </div>

    {{-- Group 3 --}}
    <div class="col-span-2 md:col-span-1">
        <h2 class="roboto-slab md:text-left font-bold text-3xl md:text-4xl uppercase">{!! __("Family Shepherd Group") !!}</h2>
        <p class="mt-4 text-lg text-slate-800">{{ __("If God is drawing you closer to Himself; if you're looking for a clear, direct, and Biblical presentation of truth and the gospel of Jesus Christ that brings life transformation and peace; Then, visit us to learn more and meet God.") }}</p>
    </div>
    <div class="col-span-2 md:col-span-1">
        <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1473&q=80"
            alt=""
            class="w-full aspect-video md:aspect-[10/8] object-cover object-center rounded-2xl shadow">
    </div>
</section>
<div class="py-12"></div>

{{-- End of page content --}}
@include('web.partials.cta')
@endsection
