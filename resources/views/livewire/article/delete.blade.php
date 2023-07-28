<div>
    @if (!$article->trashed())
        <button wire:click="$toggle('modal')" class="font-medium text-red-600 dark:text-red-500 hover:underline">{{ __("Delete") }}</button>
    @else
        <button wire:click="restore" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ __("Restore") }}</button>
        <button wire:click="$toggle('destroyModal')" class="ml-3 font-medium text-red-600 dark:text-red-500 hover:underline">{{ __("Destroy") }}</button>
    @endif

    <x-jet-confirmation-modal wire:model="modal">
        <x-slot name="title">
            {{ __("Are you sure you want to delete this article?") }}
        </x-slot>
        <x-slot name="content">
            {{ __("You will still be able to recover this article by clicking the Restore button next to it.") }}
        </x-slot>
        <x-slot name="footer">
            <button wire:click="$toggle('modal')">{{ __("Nevermind") }}</button>
            <button wire:click="delete" class="ml-4 px-4 py-2 border-none rounded-md text-white text-xs uppercase tracking-wider font-medium bg-red-600 hover:bg-red-500 transition-all">{{ __("Delete article") }}</button>
        </x-slot>
    </x-jet-confirmation-modal>

    <x-jet-confirmation-modal wire:model="destroyModal">
        <x-slot name="title">
            {{ __("Are you sure you want to destroy this article?") }}
        </x-slot>
        <x-slot name="content">
            {{ __("This action cannot be undone, and the data will be unrecoverable.") }}
        </x-slot>
        <x-slot name="footer">
            <button wire:click="$toggle('modal')">{{ __("Nevermind") }}</button>
            <button wire:click="destroy" class="ml-4 px-4 py-2 border-none rounded-md text-white text-xs uppercase tracking-wider font-medium bg-red-600 hover:bg-red-500 transition-all">{{ __("Destroy article") }}</button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
