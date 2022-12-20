<nav class="fixed top-0 z-50 h-20 md:h-24 w-full flex items-center bg-white/80 backdrop-blur-md">
    <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8 w-full xl:max-w-7xl mx-auto">
        {{-- Left side --}}
        <a href="{{ route('home') }}">
            <img src="{{ asset('HRCCClogo.png') }}" alt="Christ Community Church" class="h-16 md:h-20">
        </a>

        {{-- Right side --}}
        <div class="hidden md:flex items-center gap-1 text-sm font-medium text-slate-800 capitalize">
            <a href="" class="inline-block px-3 py-1.5 rounded-md hover:bg-white hover:text-indigo-600">{{ __("bible") }}</a>
            <a href="" class="inline-block px-3 py-1.5 rounded-md hover:bg-white hover:text-indigo-600">{{ __("knowing god") }}</a>
            <a href="" class="inline-block px-3 py-1.5 rounded-md hover:bg-white hover:text-indigo-600">{{ __("small groups") }}</a>
            <a href="" class="inline-block px-3 py-1.5 rounded-md hover:bg-white hover:text-indigo-600">{{ __("pastor's blog") }}</a>
            <a href="" class="inline-block px-3 py-1.5 rounded-md hover:bg-white hover:text-indigo-600">{{ __("sermon audio") }}</a>
            <a href="" class="inline-block px-3 py-1.5 rounded-md hover:bg-white hover:text-indigo-600">{{ __("about us") }}</a>
            <a href="" class="inline-block px-3 py-1.5 rounded-md hover:bg-white hover:text-indigo-600">{{ __("contact us") }}</a>
            <a href="" class="inline-block px-3 py-1.5 rounded-md hover:bg-white hover:text-indigo-600">{{ __("give") }}</a>
        </div>
    </div>
</nav>
