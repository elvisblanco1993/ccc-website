@extends('layouts.web')
@section('content')
{{-- Home page content goes here --}}
@include('web.partials.header')

<div class="py-12 md:py-24"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 gap-12 items-center">
        <div class="col-span-2 md:col-span-1">
            <h2 class="roboto-slab md:text-left font-bold text-3xl md:text-3xl uppercase">{!! __("a simple church <br> with a simple message") !!}</h2>
            <p class="mt-4 text-lg text-slate-800">{{ __("If God is drawing you closer to Himself; if you're looking for a clear, direct, and Biblical presentation of truth and the gospel of Jesus Christ that brings life transformation and peace; Then, visit us to learn more and meet God.") }}</p>
            <p class="mt-4 text-lg text-slate-700">{{ __("Hear Biblical preaching and teaching, God glorifying worship, and participate in loving fellowship for the purpose of making us into Disciples of Jesus Christ for the Glory of God.") }}</p>
        </div>
        <div class="col-span-2 md:col-span-1">
            <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1473&q=80"
                alt=""
                class="w-full aspect-video md:aspect-[10/8] object-cover object-center rounded-2xl shadow">
        </div>
    </div>
    <div class="py-12 md:py-24"></div>
    {{-- Pastor message/video --}}
    <div>
        <h2 class="roboto-slab text-left md:text-center font-bold text-3xl md:text-3xl uppercase">{{ __("a welcome message from pastor bernie diaz") }}</h2>
        <video src="{{ asset('ccc-intro.webm') }}"
            type='video/webm; codecs="vp9, vorbis"'
            controls
            class="mt-12 w-full aspect-video rounded-xl"
        ></video>
    </div>
    <div class="py-12 md:py-24"></div>
    {{-- Location --}}
    <div class="grid grid-cols-2 gap-12 items-center">
        <div class="col-span-2 md:col-span-1">
            <h2 class="roboto-slab text-left font-bold text-3xl uppercase">{!! __("Join us every Sunday morning for our worship service.") !!}</h2>
            <ul class="mt-6 text-lg text-slate-800">
                <li class="flex items-top space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-none">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>
                    <span>Sundays at 10:30 am</span>
                </li>
                <li class="mt-4 flex items-top space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-none">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <a href="https://goo.gl/maps/DiZtYw2SrgPY9PEp9" target="_blank" class="hover:text-ccc">Renaissance Charter School <br> 10501 Pines Blvd.<br> Pembroke Pines, FL 33024</a>
                </li>
            </ul>
        </div>
        <div class="col-span-2 md:col-span-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6176.942790962451!2d-80.28421415969133!3d26.01037164097286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a60534fbf9f5%3A0x517bd70613c6a54f!2sRenaissance%20Charter%20School%20at%20Pines!5e1!3m2!1sen!2sus!4v1671591691589!5m2!1sen!2sus"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                class="w-full aspect-video md:aspect-[10/8] object-cover object-center rounded-xl shadow"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<div class="py-12 md:py-24"></div>

{{-- End of page content --}}
@include('web.partials.cta')
@endsection
