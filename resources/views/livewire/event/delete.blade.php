<div>
    <button wire:click="$toggle('modal')" class="font-medium text-red-600 hover:underline">Delete</button>

    <x-jet-confirmation-modal wire:model="modal">
        <x-slot name="title">{{ __("Are you sure you want to delete this event?") }}</x-slot>
        <x-slot name="content">
            <p>{{ __("This action cannot be undone, and any information deleted cannot be recovered.") }}</p>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modal')">{{ __("Cancel") }}</x-jet-secondary-button>
            <x-jet-danger-button class="ml-3" wire:click="delete">{{ __("Delete event") }}</x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
