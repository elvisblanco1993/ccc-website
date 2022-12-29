<nav class="z-50 h-20 md:h-24 w-full flex items-center bg-white">
    <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8 w-full mx-auto">
        {{-- Left side --}}
        <a href="{{ route('home') }}" class="flex items-center space-x-3">
            <img src="{{ asset('HRCCClogo.png') }}" alt="Christ Community Church" class="h-16 md:h-20">
            <div class="text-ccc">
                <h1 class="roboto-slab lg:text-2xl font-bold">Christ Community Church</h1>
                <p class="text-ccc/90 text-sm lg:text-base font-medium">{{ __("Loving God, Loving People") }}</p>
            </div>
        </a>

        {{-- Right side --}}
        <div class="hidden lg:flex items-center space-x-4 text-xs lg:text-sm font-medium text-slate-800 uppercase">
            {{-- Church 101 --}}
            <x-jet-dropdown>
                <x-slot name="trigger">
                    <button type="button" class="inline-block hover:text-indigo-600 transition-all uppercase">
                        {{ __("Church 101") }}
                    </button>
                </x-slot>
                <x-slot name="content" class="w-56">
                    <x-jet-dropdown-link href="">
                        {{ __('A healthy church') }}
                    </x-jet-dropdown-link>
                    <x-jet-dropdown-link href="">
                        {{ __('Church preparation') }}
                    </x-jet-dropdown-link>
                </x-slot>
            </x-jet-dropdown>
            {{-- End | Church 101 --}}
            {{-- Bible --}}
            <x-jet-dropdown>
                <x-slot name="trigger">
                    <button type="button" class="inline-block hover:text-indigo-600 transition-all uppercase">
                        {{ __("Bible") }}
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-jet-dropdown-link href="">
                        {{ __('CCC Bible Reading Plan') }}
                    </x-jet-dropdown-link>
                    <x-jet-dropdown-link href="">
                        {{ __('How to study the Bible') }}
                    </x-jet-dropdown-link>
                </x-slot>
            </x-jet-dropdown>
            {{-- End | Bible --}}
            {{-- Knowing God --}}
            <x-jet-dropdown>
                <x-slot name="trigger">
                    <button type="button" class="inline-block hover:text-indigo-600 transition-all uppercase">
                        {{ __("Knowing God") }}
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-jet-dropdown-link href="">
                        {{ __('Why believe the Bible?') }}
                    </x-jet-dropdown-link>
                    <x-jet-dropdown-link href="">
                        {{ __('Answers in Genesis') }}
                    </x-jet-dropdown-link>
                    <x-jet-dropdown-link href="">
                        {{ __('Four roads to God') }}
                    </x-jet-dropdown-link>
                </x-slot>
            </x-jet-dropdown>
            {{-- End | Knowing God --}}
            <a href="{{ route('groups') }}" class="inline-block hover:text-indigo-600 transition-all">{{ __("small groups") }}</a>
            <a href="" class="inline-block hover:text-indigo-600 transition-all">{{ __("pastor's blog") }}</a>
            <a href="" class="inline-block hover:text-indigo-600 transition-all">{{ __("sermon audio") }}</a>
            {{-- About Us --}}
            <x-jet-dropdown>
                <x-slot name="trigger">
                    <button type="button" class="inline-block hover:text-indigo-600 transition-all uppercase">
                        {{ __("About Us") }}
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-jet-dropdown-link href="">
                        {{ __('Who are we') }}
                    </x-jet-dropdown-link>
                    <x-jet-dropdown-link href="">
                        {{ __('Statement of Faith') }}
                    </x-jet-dropdown-link>
                    <x-jet-dropdown-link href="">
                        {{ __('Missions partners') }}
                    </x-jet-dropdown-link>
                </x-slot>
            </x-jet-dropdown>
            {{-- End | About Us --}}
            <a href="{{ route('contact') }}" class="inline-block hover:text-indigo-600 transition-all">{{ __("contact us") }}</a>
            <a href="" class="inline-block hover:text-indigo-600 transition-all">{{ __("give") }}</a>
        </div>
    </div>
</nav>
