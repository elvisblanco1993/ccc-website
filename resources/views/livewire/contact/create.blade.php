<div>
    <form wire:submit.prevent="save" class="border p-4 rounded-lg">
        @csrf
        <div class="">
            <x-jet-label for="name" value="Full name *"/>
            <x-jet-input id="name" type="text" wire:model="name" class="mt-1 w-full"/>
            <x-jet-input-error for="name"/>
        </div>
        <div class="mt-6">
            <x-jet-label for="email" value="E-mail address *"/>
            <x-jet-input id="email" type="email" wire:model="email" class="mt-1 w-full"/>
            <x-jet-input-error for="email"/>
        </div>
        <div class="mt-6">
            <x-jet-label for="phone" value="Phone number (optional)"/>
            <x-jet-input id="phone" type="tel" wire:model="phone" class="mt-1 w-full"/>
        </div>
        <div class="mt-6">
            <x-jet-label for="message" value="Message *"/>
            <textarea id="message" wire:model="message" rows="4"
                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 w-full"
            ></textarea>
            <x-jet-input-error for="message"/>
        </div>
        <div class="mt-6 flex items-center justify-end">
            <button type="submit" class="inline-flex items-center space-x-3 px-5 py-3 bg-ccc hover:bg-ccc/90 transition text-white rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                </svg>
                <span>Send inquiry</span>
            </button>
        </div>
        <div>
            @if (session()->has('message'))
                <div class="mt-6 flex items-center space-x-3 w-full bg-green-100 text-green-700 px-4 py-2 rounded-lg border border-green-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                    <span>{{ session('message') }}</span>
                </div>
            @endif
        </div>
    </form>
</div>
