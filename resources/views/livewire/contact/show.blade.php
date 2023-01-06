<div>
    <button wire:click="$toggle('modal')" class="font-medium text-blue-600 hover:underline">Details</button>

    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">{{ $contact->name }}</x-slot>
        <x-slot name="content">
            <p class="mt-2">E-mail: {{ $contact->email }}</p>
            <p class="mt-2">Phone: {{ $contact->phone }}</p>
            <p class="mt-2">Message: {{ $contact->message }}</p>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modal')">{{ __("Close") }}</x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
