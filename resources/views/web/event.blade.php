@extends('layouts.web')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-black text-gray-900">{{ $event->name }}</h1>
        <img src="{{ asset($event->banner) }}" alt="" class="mt-12 rounded-lg">

        <div class="block mt-12">
            <h3 class="text-2xl font-bold">When and where</h3>
            <div class="mt-6 grid grid-cols-3 gap-4">
                <div class="col-span-3 sm:col-span-1">
                    <div class="flex items-start space-x-3">
                        <div class="p-2 bg-indigo-100 rounded-md text-indigo-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-none w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-lg font-bold">Date and time</p>
                            <p class="text-sm">{{ Carbon\Carbon::parse($event->date)->format('l, M d, Y, H:i A T') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-span-3 sm:col-span-1">
                    <div class="flex items-start space-x-3">
                        <div class="p-2 bg-indigo-100 rounded-md text-indigo-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-none w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div class="">
                            <p class="text-lg font-bold">Location</p>
                            <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($event->address) }}" target="_blank" class="text-sm underline hover:text-indigo-600">{{ $event->address }}</a>
                        </div>
                    </div>
                </div>

                @if ($event->rsvp)
                    <div class="col-span-3 sm:col-span-1 flex items-center justify-end">
                        <a href="{{ $event->rsvp }}" target="_blank" class="px-5 py-3 bg-ccc hover:bg-ccc/90 transition text-white rounded-lg">Register for this event</a>
                    </div>
                @endif
            </div>
        </div>

        <div class="block mt-12">
            <h3 class="text-2xl font-bold">Event overview</h3>
            <p class="mt-4">{{ $event->description }}</p>
        </div>
    </div>
</div>
@endsection
