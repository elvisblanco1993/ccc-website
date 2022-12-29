<div>
    @if ($children)
        @forelse ($children as $item)
            <div class="py-2 border-t flex items-center justify-between text-sm">
                <span>{{ $item->btn_label }}</span>
                <div class="flex items-center space-x-3">
                    @livewire('menu.edit', ['item' => $item->id], key('edit-' . $item->id))
                    @livewire('menu.delete', ['item' => $item->id], key('delete-' . $item->id))
                </div>
            </div>
        @empty
        @endforelse
    @endif
</div>
