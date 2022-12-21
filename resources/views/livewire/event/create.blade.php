<div>
    <x-jet-button wire:click="$toggle('modal')">New event</x-jet-button>

    <x-jet-dialog-modal class="w-full" wire:model="modal">
        <x-slot name="title">{{ __("New event") }}</x-slot>
        <x-slot name="content">
            <div class="">
                <x-jet-label for="name" value="Event name (*)"/>
                <x-jet-input type="text" wire:model="name" class="mt-1 w-full" required/>
                <x-jet-input-error for="name"/>
            </div>
            <div class="mt-6">
                <x-jet-label for="description" value="Description"/>
                <textarea
                    wire:model="description"
                    cols="30"
                    rows="6"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"
                ></textarea>
            </div>
            <div class="mt-6">
                <x-jet-label for="banner" value="Featured image"/>
                <input type="file" wire:model="banner" accept=".webp,.jpeg,.png" class="mt-1 block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-indigo-50 file:text-indigo-700
                hover:file:bg-indigo-100"/>
                <x-jet-input-error for="banner"/>
            </div>
            <div class="mt-6">
                <x-jet-label for="date" value="Event date (*)"/>
                <x-jet-input type="datetime-local" wire:model="date" class="mt-1 w-full" required/>
                <x-jet-input-error for="date"/>
            </div>
            <div class="mt-6">
                <x-jet-label for="address" value="Address (*)"/>
                <x-jet-input type="text" wire:model="address" class="mt-1 w-full" placeholder="123 Main Street, Pembroke Pines, Fl 33026" required/>
                <x-jet-input-error for="address"/>
            </div>

            <div class="mt-6" x-data="{open: false}">
                <x-jet-secondary-button @click="open = !open">{{ __("Display alert") }}</x-jet-secondary-button>
                <div x-show="open" class="mt-4 grid grid-cols-2 gap-4 items-center border rounded-md p-4">
                    <div class="col-span-1">{{ __("Display banner from") }}</div>
                    <div class="col-span-1">
                        <x-jet-input type="datetime-local" wire:model="display_alert_from" class="mt-1 w-full"/>
                    </div>
                    <div class="col-span-1">{{ __("Display banner until") }}</div>
                    <div class="col-span-1">
                        <x-jet-input type="datetime-local" wire:model="display_alert_to" class="mt-1 w-full"/>
                    </div>
                </div>
                <small class="block mt-1 text-slate-600">Use this option only if you want to display the event on the home page Alerts Banner.</small>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modal')">{{ __("Cancel") }}</x-jet-secondary-button>
            <x-jet-button class="ml-3" wire:click="save">{{ __("Save event") }}</x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
