<div>
    <x-jet-button wire:click="$toggle('modal')">Upload plan</x-jet-button>

    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">Upload reading plan</x-slot>
        <x-slot name="content">
            <div>
                <x-jet-label for="file" value="Upload document"/>
                <input type="file" id="file" wire:model="file" accept=".pdf" class="mt-1"/>
                <x-jet-input-error for="file"/>
            </div>
            <div class="mt-6">
                <x-jet-label for="name" value="Document description"/>
                <x-jet-input type="text" id="name" wire:model="name" class="mt-1 w-full" placeholder="{{ date('Y') }} plan"/>
                <x-jet-input-error for="name"/>
            </div>
            <div class="mt-6 grid grid-cols-2 gap-4">
                <div class="col-span-2 sm:col-span-1">
                    <x-jet-label for="starts_at" value="Start showing on"/>
                    <x-jet-input type="date" id="starts_at" wire:model="starts_at" class="mt-1 w-full"/>
                    <x-jet-input-error for="starts_at"/>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <x-jet-label for="ends_at" value="Stop showing on"/>
                    <x-jet-input type="date" id="ends_at" wire:model="ends_at" class="mt-1 w-full"/>
                    <x-jet-input-error for="ends_at"/>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modal')">Nevermind</x-jet-secondary-button>
            <x-jet-button wire:click="save" class="ml-3">Upload plan</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
