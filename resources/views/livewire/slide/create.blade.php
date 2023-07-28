<div>
    <x-jet-button wire:click="$toggle('modal')">{{ __("New Slide") }}</x-jet-button>

    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">{{ __("New Slide") }}</x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="title" value="Title *"/>
                <x-jet-input type="text" id="title" wire:model="title" class="mt-1 w-full"/>
                <small class="text-slate-600">{{ __("This will be shown on your slide as the bigger text.") }}</small>
                <x-jet-input-error for="title"/>
            </div>

            <div class="mt-6">
                <x-jet-label for="bg_image" value="Background image *"/>
                <input type="file" id="bg_image" wire:model="bg_image" accept=".jpeg,.jpg,.png,.webp" class="mt-1 w-full"/>
                <x-jet-input-error for="bg_image"/>
            </div>

            <div class="mt-6">
                <x-jet-label for="content" value="Content"/>
                <textarea type="text" id="content" wire:model="content" rows="4" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"></textarea>
                <small class="text-slate-600">{{ __("This will be shown on your slide as the smaller text in form of a paragraph.") }}</small>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-4">
                <div class="col-span-2 sm:col-span-1">
                    <x-jet-label for="btn_label" value="Action text"/>
                    <x-jet-input type="text" id="btn_label" wire:model="btn_label" class="mt-1 w-full"/>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <x-jet-label for="btn_link" value="Action link"/>
                    <x-jet-input type="url" id="btn_link" wire:model="btn_link" class="mt-1 w-full"/>
                </div>
            </div>
            <div class="mt-6 border-t"></div>
            <div class="mt-6 grid grid-cols-2 gap-4">
                <div class="col-span-2 sm:col-span-1">
                    <x-jet-label for="start_at" value="Start showing on (optional)"/>
                    <x-jet-input type="date" id="start_at" wire:model="start_at" class="mt-1 w-full"/>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <x-jet-label for="end_at" value="Stop showing on (optional)"/>
                    <x-jet-input type="date" id="end_at" wire:model="end_at" class="mt-1 w-full"/>
                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modal')">
                {{ __("Cancel") }}
            </x-jet-secondary-button>
            <x-jet-button wire:click="save" class="ml-3">
                {{ __("Create Slide") }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
