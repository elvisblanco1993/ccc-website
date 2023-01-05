<nav class="z-50 h-20 md:h-24 w-full flex items-center bg-white border-b border-b-slate-100">
    <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8 w-full mx-auto">
        {{-- Left side --}}
        <a href="{{ route('home') }}" class="flex items-center space-x-3">
            <img src="{{ asset('HRCCClogo.png') }}" alt="Christ Community Church" class="h-16 md:h-20">
            <div class="text-ccc">
                <h1 class="roboto-slab lg:text-2xl font-bold">{{ __("Christ Community Church") }}</h1>
                <p class="text-ccc/90 text-sm lg:text-base font-medium">{{ __("Loving God, Loving People") }}</p>
            </div>
        </a>

        {{-- Desktop side --}}
        <div class="hidden lg:flex items-center space-x-4 py-2 text-xs lg:text-sm font-medium text-slate-800 uppercase">
            @forelse ($topLevelMenuItems as $item)
                @if ($item->is_top_level && $item->is_dropdown)
                    <x-jet-dropdown>
                        <x-slot name="trigger">
                            <button type="button" class="flex-none hover:text-indigo-600 transition-all uppercase">
                                {{ $item->btn_label }}
                            </button>
                        </x-slot>
                        <x-slot name="content" class="w-56">
                            @if (\App\Models\Menu::where('parent_id', $item->id)->exists())
                                @forelse (\App\Models\Menu::where('parent_id', $item->id)->get() as $child)
                                    <x-jet-dropdown-link href="{{ $child->btn_link }}">
                                        {{ $child->btn_label }}
                                    </x-jet-dropdown-link>
                                @empty
                                @endforelse
                            @endif
                        </x-slot>
                    </x-jet-dropdown>
                @else
                    <a href="{{ $item->btn_link }}" class="flex-none hover:text-indigo-600 transition-all">{{ $item->btn_label }}</a>
                @endif
            @empty
            @endforelse
        </div>

        {{-- Mobile menu --}}
        <div class="relative lg:hidden" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
            <div @click="open = ! open">
                <span class="inline-flex rounded-md">
                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </span>
            </div>
            <div x-show="open"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute z-50 mt-2 rounded-md shadow-lg origin-top-right right-0"
                @click="open = false"
                style="display: none;"
            >
                <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                    <div class="w-64">
                        @forelse ($topLevelMenuItems as $item)
                            @if ($item->is_top_level && $item->is_dropdown)
                                <div class="block px-4 py-2">
                                    <p @class([
                                        'block text-xs text-ccc uppercase',
                                        'pt-2 border-t border-t-slate-100 -mx-4 px-4' => !$loop->first
                                    ])>{{ $item->btn_label }}</p>
                                    @if (\App\Models\Menu::where('parent_id', $item->id)->exists())
                                        @forelse (\App\Models\Menu::where('parent_id', $item->id)->get() as $child)
                                            <a href="{{ $child->btn_link }}" class="block -mx-4 px-4 py-2 leading-5 text-gray-700 text-sm uppercase hover:text-ccc hover:bg-indigo-100 focus:outline-none focus:bg-gray-100 transition">{{ $child->btn_label }}</a>
                                        @empty
                                        @endforelse
                                    @endif
                                </div>
                            @else
                                <a href="{{ $item->btn_link }}" class="border-t border-t-slate-100 block px-4 py-2 text-sm uppercase leading-5 text-gray-700 hover:text-ccc hover:bg-indigo-100 focus:outline-none focus:bg-gray-100 transition">{{ $item->btn_label }}</a>
                            @endif
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
