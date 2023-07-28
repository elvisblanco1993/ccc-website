<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Menu Settings') }}
            </h2>

            @livewire('menu.reorder')
        </div>
    </x-slot>

    <div class="my-12 block max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-4 gap-8">

            @forelse ($items as $item)
                <div class="col-span-4 sm:col-span-2 lg:col-span-1" x-data="{open: false}">
                    <div class="border rounded-lg px-5 py-2 bg-white">

                        <button class="w-full py-2 flex items-center justify-between" @click="open = !open">
                            <span>{{ $item->btn_label }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path d="M10.75 6.75a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z" />
                            </svg>
                        </button>

                        <div class="mt-2" x-show="open" x-cloak>
                            @livewire('menu.children', ['parent' => $item->id], key('children-' . $item->id))
                            @if ($item->is_dropdown)
                                <div class="mt-2">
                                    @livewire('menu.create', ['parent' => $item->id], key('create-children-'.$item->id))
                                </div>
                            @endif
                            {{-- Parent Item Settings --}}
                                <div class="mt-2 py-2 px-4 bg-slate-100 rounded-lg border-t flex items-center justify-between">
                                    <span class="text-sm text-slate-600">{{ __("Parent item's settings:") }}</span>
                                    <div class="flex items-center space-x-3">
                                        @livewire('menu.edit', ['item' => $item->id], key('edit-' . $item->id))
                                        @livewire('menu.delete', ['item' => $item->id], key('delete-' . $item->id))
                                    </div>
                                </div>
                            {{-- End | Parent Item Settings --}}
                        </div>
                    </div>
                </div>
            @empty

            @endforelse

            {{-- Add Menu Item --}}
            @livewire('menu.create')
        </div>
    </div>
</div>
