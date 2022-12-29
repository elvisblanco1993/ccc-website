<div class="flex items-center">
    <button wire:click="$toggle('modal')" class="w-full py-4 px-4 text-center text-sm rounded-lg bg-indigo-500 text-white">{{ __("Add Menu Item") }}</button>

    <x-jet-dialog-modal wire:model="modal">
        <x-slot name="title">{{ __("New item") }}</x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="label" value="Item name *"/>
                <x-jet-input type="text" id="label" wire:model="label" class="mt-1 w-full"/>
                <x-jet-input-error for="label" />
            </div>

            @if ($topLevel)
                <div class="mt-4">
                    <label for="dropdown" class="block font-medium text-sm text-gray-700">
                        <span>Make Dropdown</span>
                        <input type="checkbox" wire:model="is_dropdown" id="dropdown" class="ml-3 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded shadow-sm">
                    </label>
                    <small class="mt-1 text-sm text-slate-600">Checking this box turns this top-level link into a dropdown, allowing you to add more links under it. It will also remove the option to add a URL.</small>
                </div>
            @endif

            @if (!$topLevel || ($topLevel && !$is_dropdown))
                <div class="mt-4">
                    <x-jet-label for="link" value="URL"/>
                    <x-jet-input type="text" id="link" wire:model="link" class="mt-1 w-full"/>
                    <x-jet-input-error for="link" />
                </div>
            @endif

        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modal')">{{ __("Cancel") }}</x-jet-secondary-button>
            <x-jet-button wire:click="save" class="ml-3">{{ __("Add item") }}</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
