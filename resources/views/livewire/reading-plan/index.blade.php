<div>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Reading plans') }}
            </h2>
            @livewire('reading-plan.create')
        </div>
    </x-slot>

    <div class="my-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 px-6">{{ __("Description") }}</th>
                            <th scope="col" class="py-3 px-6">{{ __("Start date") }}</th>
                            <th scope="col" class="py-3 px-6">{{ __("End date") }}</th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($plans as $plan)
                            <tr @class([
                                "bg-white border-b hover:bg-gray-50",
                                "bg-green-100" => Carbon\Carbon::parse($plan->ends_at)->format('Y') === date('Y')
                            ])>
                                <td class="py-4 px-6">{{ $plan->name }}</td>
                                <td class="py-4 px-6">{{ Carbon\Carbon::parse($plan->starts_at)->format('M d, Y h:i A') }}</td>
                                <td class="py-4 px-6">{{ Carbon\Carbon::parse($plan->ends_at)->format('M d, Y h:i A') }}</td>
                                <td class="py-4 px-6 flex items-center justify-end space-x-3">
                                    @livewire('reading-plan.delete', ['readingPlan' => $plan], key('del-'.$plan->id))
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
