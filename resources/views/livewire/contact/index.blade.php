<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Web inquiries') }}
            </h2>
        </div>
    </x-slot>

    <div class="my-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 px-6">{{ __("Full name") }}</th>
                            <th scope="col" class="py-3 px-6">{{ __("E-mail") }}</th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $contact)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="py-4 px-6">
                                    {{ $contact->name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $contact->email}}
                                </td>
                                <td class="py-4 px-6 flex items-center justify-end space-x-3">
                                    @livewire('contact.show', ['contact' => $contact], key('show-'.$contact->id))
                                    @livewire('contact.delete', ['contact' => $contact], key('del-'.$contact->id))
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
