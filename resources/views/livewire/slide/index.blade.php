<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Slides') }}
            </h2>
            @livewire('slide.create')
        </div>
    </x-slot>

    <div class="my-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 px-6">{{ __("Title") }}</th>
                            <th scope="col" class="py-3 px-6">{{ __("Status") }}</th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($slides as $slide)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    <div class="flex items-center space-x-2">
                                        <img src="{{ asset($slide->bg_image) }}" class="w-8 aspect-square rounded">
                                        <p>{{ $slide->title }}</p>
                                    </div>
                                </th>
                                <td class="py-4 px-6">
                                    @if ($slide->is_enabled)
                                        <span class="text-xs border border-green-200 rounded uppercase px-3 py-1 bg-green-100 text-green-600">Active</span>
                                    @else
                                        <span class="text-xs border border-slate-200 rounded uppercase px-3 py-1 bg-slate-100 text-slate-600">Inactive</span>
                                    @endif
                                </td>
                                <td class="py-4 px-6 flex items-center justify-end space-x-3">
                                    @livewire('slide.edit', ['slide' => $slide], key('edit-'.$slide->id))
                                    @livewire('slide.delete', ['slide' => $slide], key('delete-'.$slide->id))
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
