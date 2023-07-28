@extends('layouts.web')

@section('content')
    <header class="py-12 overflow-hidden">
        <div class="bg-gradient-to-tr from-slate-100 to-indigo-50 max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 md:rounded-xl">
            <h1 class="roboto-slab text-center font-bold text-3xl md:text-4xl capitalize">Contact Us</h1>
        </div>
    </header>
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-4">
            <div class="col-span-2 sm:col-span-1">
                <h2 class="roboto-slab text-2xl font-bold">Have a question for us?</h2>
                <p class="mt-6">Fill out our form and we will respond back within a couple of hours. Alternatively, you can email us directly or call us to the email and phone number below.</p>

                <div class="mt-6">
                    <a href="tel:+19542128520" class="flex items-center space-x-3 hover:text-ccc transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <span>+1 (954) 212-8520</span>
                    </a>
                    <a href="mailto:info@christcomchurch.org" class="mt-6 flex items-center space-x-3 hover:text-ccc transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <span>info@christcomchurch.org</span>
                    </a>
                    <div class="mt-6 flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                        <span>Sundays at 10:30 AM</span>
                    </div>
                    <a href="https://goo.gl/maps/DiZtYw2SrgPY9PEp9" class="mt-6 flex items-top space-x-3 hover:text-ccc transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <span>Renaissance Charter School<br>10501 Pines Blvd.<br>Pembroke Pines, FL 33024</span>
                    </a>
                </div>
            </div>
            <div class="col-span-2 sm:col-span-1">
                @livewire('contact.create')
            </div>

            <div class="mt-10 col-span-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6176.942790962451!2d-80.28421415969133!3d26.01037164097286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9a60534fbf9f5%3A0x517bd70613c6a54f!2sRenaissance%20Charter%20School%20at%20Pines!5e1!3m2!1sen!2sus!4v1671591691589!5m2!1sen!2sus"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                class="w-full aspect-video md:aspect-[10/3] object-cover object-center rounded-xl shadow"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>
    <div class="py-6"></div>
{{-- @include('web.partials.cta') --}}
@endsection
